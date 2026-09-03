<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Invoice #{{ $invoice->invoice_number }} - CV. Beranda Teknologi Digital</title>
    
    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: #e2e8f0;
            color: #1e293b;
            font-size: 13px;
            line-height: 1.5;
            -webkit-print-color-adjust: exact !important;
            print-color-adjust: exact !important;
        }

        /* Clear, modern, non-ambiguous tabular numeral font */
        .mono {
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif !important;
            font-variant-numeric: tabular-nums;
            font-feature-settings: "tnum" 1, "zero" 0;
            letter-spacing: 0.15px;
            font-weight: 700;
        }

        /* Screen Wrapper */
        .invoice-screen-bar {
            background: #071330;
            color: white;
            padding: 12px 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 50;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);
        }
        .btn-print {
            background: #10b981;
            color: white;
            font-weight: 700;
            padding: 8px 18px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            font-size: 13px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            text-decoration: none;
        }
        .btn-print:hover {
            background: #059669;
        }
        .btn-back {
            background: rgba(255,255,255,0.15);
            color: white;
            font-weight: 600;
            padding: 8px 14px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            font-size: 13px;
            text-decoration: none;
        }
        .btn-back:hover {
            background: rgba(255,255,255,0.25);
        }

        /* Invoice Container (A4 Proportions) */
        .invoice-page {
            max-width: 820px;
            margin: 30px auto;
            background: #ffffff;
            padding: 50px 60px 40px 60px;
            position: relative;
            box-shadow: 0 10px 25px -5px rgba(0,0,0,0.1), 0 8px 10px -6px rgba(0,0,0,0.1);
            min-height: 1100px;
            overflow: hidden;
        }

        /* Green / Red Ribbon in Top Right Corner */
        .ribbon-wrapper {
            width: 140px;
            height: 140px;
            overflow: hidden;
            position: absolute;
            top: 0;
            right: 0;
            pointer-events: none;
            z-index: 20;
        }
        .ribbon {
            font-size: 16px;
            font-weight: 900;
            letter-spacing: 2px;
            color: #fff;
            text-transform: uppercase;
            text-align: center;
            line-height: 36px;
            transform: rotate(45deg);
            position: relative;
            padding: 0 0;
            left: -5px;
            top: 28px;
            width: 200px;
            box-shadow: 0 3px 8px -2px rgba(0,0,0,0.25);
        }
        .ribbon-paid {
            background-color: #8cd635; /* Bright vivid green like sample */
        }
        .ribbon-unpaid {
            background-color: #ef4444;
        }
        .ribbon-partial {
            background-color: #f59e0b;
        }
        .ribbon-cancelled {
            background-color: #64748b;
        }

        /* Header Layout */
        .invoice-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 35px;
        }
        .company-logo-area {
            display: flex;
            align-items: center;
            gap: 14px;
        }
        .logo-img {
            height: 60px;
            width: auto;
            object-contain: fit;
        }
        .company-meta-area {
            text-align: right;
            padding-right: 90px; /* Safe clearance from top-right corner ribbon */
            color: #1e293b;
            font-size: 12px;
            line-height: 1.45;
            max-width: 360px;
        }
        .company-meta-area .company-name {
            font-size: 14.5px;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 3px;
            white-space: nowrap;
        }

        /* Invoice Number & Date */
        .invoice-title-block {
            margin-bottom: 35px;
        }
        .invoice-title-block h1 {
            font-size: 22px;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 4px;
            letter-spacing: -0.5px;
        }
        .invoice-title-block .invoice-date {
            font-size: 13px;
            color: #334155;
            font-weight: 500;
        }

        /* Invoiced To Block */
        .invoiced-to-block {
            margin-bottom: 35px;
            font-size: 13px;
            line-height: 1.5;
        }
        .invoiced-to-block .title-label {
            font-size: 14px;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 4px;
        }
        .invoiced-to-block .client-type {
            color: #1e293b;
        }
        .invoiced-to-block .client-attn {
            color: #1e293b;
        }
        .invoiced-to-block .client-city {
            color: #1e293b;
        }

        /* Tables (Clean Border & Gray Header like sample) */
        .table-custom {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 35px;
            font-size: 12px;
        }
        .table-custom th {
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            padding: 10px 14px;
            font-weight: 700;
            color: #0f172a;
            text-align: left;
        }
        .table-custom th.text-right {
            text-align: right;
        }
        .table-custom th.text-center {
            text-align: center;
        }
        .table-custom td {
            border: 1px solid #e2e8f0;
            padding: 10px 14px;
            color: #1e293b;
            vertical-align: top;
        }
        .table-custom td.text-right {
            text-align: right;
        }
        .table-custom td.text-center {
            text-align: center;
        }
        .table-custom .row-summary td {
            font-weight: 700;
            vertical-align: middle;
        }

        /* Item Description Styling for Structured Bullets */
        .item-desc-intro {
            font-weight: 600;
            color: #0f172a;
            margin-bottom: 6px;
            line-height: 1.5;
        }
        .item-desc-bullets {
            margin: 0;
            padding-left: 18px;
            list-style-type: disc;
            line-height: 1.6;
            color: #334155;
        }
        .item-desc-bullets li {
            margin-bottom: 4px;
            padding-left: 2px;
        }
        .item-desc-bullets li:last-child {
            margin-bottom: 0;
        }

        /* Section Heading */
        .section-heading {
            font-size: 15px;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 12px;
        }

        /* Footer */
        .invoice-footer {
            margin-top: 50px;
            padding-top: 20px;
            color: #334155;
            font-size: 11.5px;
            line-height: 1.5;
        }
        .invoice-footer .company-name-bottom {
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 14px;
            font-size: 12px;
        }
        .invoice-footer .address-line {
            color: #334155;
            font-weight: 600;
        }
        .invoice-footer .website-line {
            color: #475569;
            margin-bottom: 25px;
        }
        .dotted-divider {
            border-top: 1.5px dotted #cbd5e1;
            margin: 20px 0;
            width: 100%;
        }
        .country-bottom {
            text-align: right;
            color: #94a3b8;
            font-size: 11px;
            margin-top: 150px;
        }

        /* Print Media Styles */
        @media print {
            body {
                background: #ffffff !important;
                color: #000000 !important;
            }
            .invoice-screen-bar {
                display: none !important;
            }
            .invoice-page {
                margin: 0 !important;
                padding: 35px 45px !important;
                box-shadow: none !important;
                max-width: 100% !important;
                min-height: auto !important;
            }
            .company-meta-area {
                padding-right: 95px !important;
            }
            @page {
                margin: 8mm 10mm;
                size: A4 portrait;
            }
        }
    </style>
</head>
<body>

    <!-- Screen Control Bar -->
    <div class="invoice-screen-bar">
        <div style="display: flex; align-items: center; gap: 10px;">
            <a href="{{ route('admin.invoices.index') }}" class="btn-back">
                &larr; Kembali ke Daftar Invoice
            </a>
            <span style="font-size: 13px; font-weight: 700; color: #cbd5e1;">
                Invoice #{{ $invoice->invoice_number }} &bull; {{ $invoice->client_name }}
            </span>
        </div>

        <div style="display: flex; align-items: center; gap: 10px;">
            <a href="{{ route('admin.invoices.edit', $invoice->id) }}" class="btn-back">
                ✏️ Edit Invoice
            </a>
            <button onclick="window.print()" class="btn-print">
                🖨️ Cetak / Simpan PDF
            </button>
        </div>
    </div>

    <!-- Main Printable Invoice Sheet -->
    <div class="invoice-page">

        <!-- Top Right Diagonal Ribbon Banner -->
        <div class="ribbon-wrapper">
            @if($invoice->status === 'paid')
                <div class="ribbon ribbon-paid">PAID</div>
            @elseif($invoice->status === 'partial')
                <div class="ribbon ribbon-partial">PARTIAL</div>
            @elseif($invoice->status === 'cancelled')
                <div class="ribbon ribbon-cancelled">VOID</div>
            @else
                <div class="ribbon ribbon-unpaid">UNPAID</div>
            @endif
        </div>

        <!-- Header: Logo & Company Address -->
        <div class="invoice-header">
            <div class="company-logo-area">
                <img src="{{ asset($settings['site_logo'] ?? 'images/Logo-BTD.png') }}" alt="{{ $settings['company_name'] ?? 'CV. Beranda Teknologi Digital' }}" class="logo-img" />
            </div>

            <div class="company-meta-area">
                <div class="company-name">{{ $settings['company_name'] ?? 'CV. Beranda Teknologi Digital' }}</div>
                <div>{{ $settings['company_address_line1'] ?? 'Jl. Sarjana, Timbangan, Ogan Ilir' }}</div>
                <div>{{ $settings['company_address_line2'] ?? 'Sumatera Selatan, Indonesia' }}</div>
                <div>{{ $settings['company_postal_code'] ?? '30862' }}</div>
            </div>
        </div>

        <!-- Invoice Title & Date -->
        <div class="invoice-title-block">
            <h1>Invoice #{{ $invoice->invoice_number }}</h1>
            <div class="invoice-date">
                Invoice Date: {{ optional($invoice->invoice_date)->format('d/m/Y') }}
            </div>
        </div>

        <!-- Invoiced To -->
        <div class="invoiced-to-block">
            <div class="title-label">Invoiced To</div>
            <div class="client-type">{{ $invoice->client_type }}</div>
            @if($invoice->client_attn)
                <div class="client-attn">{{ str_starts_with(strtoupper(trim($invoice->client_attn)), 'ATTN') ? $invoice->client_attn : 'ATTN: ' . $invoice->client_attn }}</div>
            @else
                <div class="client-attn">ATTN: {{ $invoice->client_name }}</div>
            @endif
            @if($invoice->client_address)
                <div class="client-city">{{ $invoice->client_address }}</div>
            @endif
        </div>

@php
    if (!function_exists('formatInvoiceDescription')) {
        function formatInvoiceDescription($text) {
            if (empty($text)) return '-';
            
            $text = trim($text);
            
            // 1. Text contains explicit bullet '•'
            if (str_contains($text, '•')) {
                $parts = explode('•', $text);
                $intro = trim(array_shift($parts));
                $bullets = array_values(array_filter(array_map('trim', $parts)));
                
                $html = '';
                if (!empty($intro)) {
                    $html .= '<div class="item-desc-intro">' . nl2br(e($intro)) . '</div>';
                }
                if (count($bullets) > 0) {
                    $html .= '<ul class="item-desc-bullets">';
                    foreach ($bullets as $b) {
                        $html .= '<li>' . e($b) . '</li>';
                    }
                    $html .= '</ul>';
                }
                return $html;
            }
            
            // 2. Text contains newlines
            if (str_contains($text, "\n")) {
                $lines = explode("\n", str_replace("\r", "", $text));
                $intro = '';
                $bullets = [];
                $hasBullets = false;
                
                foreach ($lines as $line) {
                    $trimmed = trim($line);
                    if (empty($trimmed)) continue;
                    
                    if (preg_match('/^[-*•]\s*(.*)$/u', $trimmed, $m)) {
                        $hasBullets = true;
                        $bullets[] = $m[1];
                    } elseif (preg_match('/^(\d+[\.\)])\s*(.*)$/u', $trimmed, $m)) {
                        $hasBullets = true;
                        $bullets[] = $trimmed;
                    } else {
                        if (!$hasBullets && empty($bullets)) {
                            $intro .= ($intro ? "<br>" : "") . e($trimmed);
                        } else {
                            $bullets[] = $trimmed;
                        }
                    }
                }
                
                if ($hasBullets || count($bullets) > 0) {
                    $html = '';
                    if (!empty($intro)) {
                        $html .= '<div class="item-desc-intro">' . $intro . '</div>';
                    }
                    if (count($bullets) > 0) {
                        $html .= '<ul class="item-desc-bullets">';
                        foreach ($bullets as $b) {
                            $html .= '<li>' . e($b) . '</li>';
                        }
                        $html .= '</ul>';
                    }
                    return $html;
                }
                
                return '<div style="white-space: pre-line; line-height: 1.5;">' . e($text) . '</div>';
            }
            
            return '<div style="line-height: 1.5;">' . e($text) . '</div>';
        }
    }
@endphp

        <!-- Items Table -->
        <table class="table-custom">
            <thead>
                <tr>
                    <th style="width: 72%;">Description</th>
                    <th class="text-right" style="width: 28%;">Total</th>
                </tr>
            </thead>
            <tbody>
                @if(is_array($invoice->items) && count($invoice->items) > 0)
                    @foreach($invoice->items as $item)
                        <tr>
                            <td>{!! formatInvoiceDescription($item['description'] ?? '-') !!}</td>
                            <td class="text-right mono">Rp {{ number_format($item['amount'] ?? 0, 2, ',', '.') }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td>{!! formatInvoiceDescription('Pelunasan Pembuatan Aplikasi') !!}</td>
                        <td class="text-right mono">Rp {{ number_format($invoice->total_amount, 2, ',', '.') }}</td>
                    </tr>
                @endif

                <!-- Paid Row -->
                <tr class="row-summary">
                    <td class="text-right">Paid</td>
                    <td class="text-right mono">Rp {{ number_format($invoice->paid_amount, 2, ',', '.') }}</td>
                </tr>

                <!-- Remaining Payment Row -->
                <tr class="row-summary">
                    <td class="text-right">Remaining Payment</td>
                    <td class="text-right mono">Rp {{ number_format($invoice->remaining_amount, 2, ',', '.') }}</td>
                </tr>

                <!-- Total Row -->
                <tr class="row-summary">
                    <td class="text-right">Total</td>
                    <td class="text-right mono">Rp {{ number_format($invoice->total_amount, 2, ',', '.') }}</td>
                </tr>
            </tbody>
        </table>

        <!-- Transactions Section -->
        <div class="section-heading">Transactions</div>
        <table class="table-custom">
            <thead>
                <tr>
                    <th style="width: 22%;">Transaction Date</th>
                    <th style="width: 22%;">Payment</th>
                    <th style="width: 32%;">Transaction ID</th>
                    <th class="text-right" style="width: 24%;">Amount</th>
                </tr>
            </thead>
            <tbody>
                @if(is_array($invoice->transactions) && count($invoice->transactions) > 0)
                    @php $sumTrans = 0; @endphp
                    @foreach($invoice->transactions as $t)
                        @php $sumTrans += ($t['amount'] ?? 0); @endphp
                        <tr>
                            <td class="text-center">{{ $t['date'] ?? '-' }}</td>
                            <td>{{ $t['payment_method'] ?? 'Transfer Bank' }}</td>
                            <td class="mono" style="font-size: 11px;">{{ $t['transaction_id'] ?? '-' }}</td>
                            <td class="text-right mono">Rp {{ number_format($t['amount'] ?? 0, 2, ',', '.') }}</td>
                        </tr>
                    @endforeach
                    <tr class="row-summary">
                        <td colspan="3" class="text-right">Balance</td>
                        <td class="text-right mono">Rp {{ number_format($sumTrans, 2, ',', '.') }}</td>
                    </tr>
                @else
                    <tr>
                        <td class="text-center">{{ optional($invoice->invoice_date)->format('d/m/Y') }}</td>
                        <td>Transfer Bank / QRIS</td>
                        <td class="mono">-</td>
                        <td class="text-right mono">Rp {{ number_format($invoice->paid_amount, 2, ',', '.') }}</td>
                    </tr>
                    <tr class="row-summary">
                        <td colspan="3" class="text-right">Balance</td>
                        <td class="text-right mono">Rp {{ number_format($invoice->paid_amount, 2, ',', '.') }}</td>
                    </tr>
                @endif
            </tbody>
        </table>

        <!-- Footer Notice -->
        <div class="invoice-footer">
            <div class="company-name-bottom">{{ $settings['company_name'] ?? 'CV. Beranda Teknologi Digital' }}</div>
            <div class="address-line">{{ $settings['company_address'] ?? 'Jalan Sarjana Blok A No. 25 Timbangan, Ogan Ilir, 30862' }}</div>
            <div class="website-line">{{ $settings['site_website'] ?? 'www.berandadigital.net' }}</div>
            
            <div class="dotted-divider"></div>
            
            <div class="country-bottom">{{ $settings['company_country'] ?? 'Indonesia' }}</div>
        </div>

    </div>

</body>
</html>
