<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Illuminate\Http\Request;

class AdminInvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::latest()->paginate(15);
        return view('admin.invoices.index', compact('invoices'));
    }

    public function create()
    {
        // Suggest next invoice number
        $nextNumber = rand(1600000, 1999999);
        while (Invoice::where('invoice_number', $nextNumber)->exists()) {
            $nextNumber = rand(1600000, 1999999);
        }

        return view('admin.invoices.create', compact('nextNumber'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'invoice_number' => 'required|string|max:50|unique:invoices,invoice_number',
            'invoice_date' => 'required|date',
            'due_date' => 'nullable|date',
            'status' => 'required|in:paid,unpaid,partial,cancelled',
            'client_type' => 'required|string|max:100',
            'client_name' => 'required|string|max:255',
            'client_attn' => 'nullable|string|max:255',
            'client_address' => 'nullable|string',
            'items_raw' => 'required|string',
            'transactions_raw' => 'nullable|string',
            'paid_amount' => 'required|numeric|min:0',
            'notes' => 'nullable|string',
        ]);

        // Parse Items: Description | Amount
        $items = [];
        $totalAmount = 0;
        $lines = array_filter(array_map('trim', explode("\n", str_replace("\r", "", $request->items_raw))));
        foreach ($lines as $line) {
            $parts = array_map('trim', explode('|', $line));
            $desc = $parts[0] ?? '';
            $amt = isset($parts[1]) ? (float) str_replace(['.', ',', ' '], '', $parts[1]) : 0;
            if (!empty($desc)) {
                $items[] = [
                    'description' => $desc,
                    'amount' => $amt,
                ];
                $totalAmount += $amt;
            }
        }

        // Parse Transactions: Date | PaymentMethod | TransactionID | Amount
        $transactions = [];
        if ($request->filled('transactions_raw')) {
            $tLines = array_filter(array_map('trim', explode("\n", str_replace("\r", "", $request->transactions_raw))));
            foreach ($tLines as $tLine) {
                $tParts = array_map('trim', explode('|', $tLine));
                $tDate = $tParts[0] ?? date('d/m/Y');
                $tMethod = $tParts[1] ?? 'Transfer Bank';
                $tId = $tParts[2] ?? '-';
                $tAmt = isset($tParts[3]) ? (float) str_replace(['.', ',', ' '], '', $tParts[3]) : 0;

                $transactions[] = [
                    'date' => $tDate,
                    'payment_method' => $tMethod,
                    'transaction_id' => $tId,
                    'amount' => $tAmt,
                ];
            }
        }

        $paidAmount = (float) $validated['paid_amount'];
        $remainingAmount = max(0, $totalAmount - $paidAmount);

        $invoice = Invoice::create([
            'invoice_number' => $validated['invoice_number'],
            'invoice_date' => $validated['invoice_date'],
            'due_date' => $validated['due_date'] ?? $validated['invoice_date'],
            'status' => $validated['status'],
            'client_type' => $validated['client_type'],
            'client_name' => $validated['client_name'],
            'client_attn' => $validated['client_attn'],
            'client_address' => $validated['client_address'],
            'items' => $items,
            'total_amount' => $totalAmount,
            'paid_amount' => $paidAmount,
            'remaining_amount' => $remainingAmount,
            'transactions' => $transactions,
            'notes' => $validated['notes'],
        ]);

        return redirect()->route('admin.invoices.index')->with('success', "Invoice #{$invoice->invoice_number} berhasil dibuat.");
    }

    public function edit(Invoice $invoice)
    {
        return view('admin.invoices.edit', compact('invoice'));
    }

    public function update(Request $request, Invoice $invoice)
    {
        $validated = $request->validate([
            'invoice_number' => 'required|string|max:50|unique:invoices,invoice_number,' . $invoice->id,
            'invoice_date' => 'required|date',
            'due_date' => 'nullable|date',
            'status' => 'required|in:paid,unpaid,partial,cancelled',
            'client_type' => 'required|string|max:100',
            'client_name' => 'required|string|max:255',
            'client_attn' => 'nullable|string|max:255',
            'client_address' => 'nullable|string',
            'items_raw' => 'required|string',
            'transactions_raw' => 'nullable|string',
            'paid_amount' => 'required|numeric|min:0',
            'notes' => 'nullable|string',
        ]);

        // Parse Items: Description | Amount
        $items = [];
        $totalAmount = 0;
        $lines = array_filter(array_map('trim', explode("\n", str_replace("\r", "", $request->items_raw))));
        foreach ($lines as $line) {
            $parts = array_map('trim', explode('|', $line));
            $desc = $parts[0] ?? '';
            $amt = isset($parts[1]) ? (float) str_replace(['.', ',', ' '], '', $parts[1]) : 0;
            if (!empty($desc)) {
                $items[] = [
                    'description' => $desc,
                    'amount' => $amt,
                ];
                $totalAmount += $amt;
            }
        }

        // Parse Transactions: Date | PaymentMethod | TransactionID | Amount
        $transactions = [];
        if ($request->filled('transactions_raw')) {
            $tLines = array_filter(array_map('trim', explode("\n", str_replace("\r", "", $request->transactions_raw))));
            foreach ($tLines as $tLine) {
                $tParts = array_map('trim', explode('|', $tLine));
                $tDate = $tParts[0] ?? date('d/m/Y');
                $tMethod = $tParts[1] ?? 'Transfer Bank';
                $tId = $tParts[2] ?? '-';
                $tAmt = isset($tParts[3]) ? (float) str_replace(['.', ',', ' '], '', $tParts[3]) : 0;

                $transactions[] = [
                    'date' => $tDate,
                    'payment_method' => $tMethod,
                    'transaction_id' => $tId,
                    'amount' => $tAmt,
                ];
            }
        }

        $paidAmount = (float) $validated['paid_amount'];
        $remainingAmount = max(0, $totalAmount - $paidAmount);

        $invoice->update([
            'invoice_number' => $validated['invoice_number'],
            'invoice_date' => $validated['invoice_date'],
            'due_date' => $validated['due_date'] ?? $validated['invoice_date'],
            'status' => $validated['status'],
            'client_type' => $validated['client_type'],
            'client_name' => $validated['client_name'],
            'client_attn' => $validated['client_attn'],
            'client_address' => $validated['client_address'],
            'items' => $items,
            'total_amount' => $totalAmount,
            'paid_amount' => $paidAmount,
            'remaining_amount' => $remainingAmount,
            'transactions' => $transactions,
            'notes' => $validated['notes'],
        ]);

        return redirect()->route('admin.invoices.index')->with('success', "Invoice #{$invoice->invoice_number} berhasil diperbarui.");
    }

    public function destroy(Invoice $invoice)
    {
        $invoice->delete();
        return redirect()->route('admin.invoices.index')->with('success', 'Invoice berhasil dihapus.');
    }

    public function print(Invoice $invoice)
    {
        return view('admin.invoices.print', compact('invoice'));
    }
}
