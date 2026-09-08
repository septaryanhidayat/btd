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
            background-color: #f1f5f9;
            color: #22282a;
            font-size: 12.5px;
            line-height: 1.5;
            overflow-x: hidden;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
            -webkit-print-color-adjust: exact !important;
            print-color-adjust: exact !important;
        }

        /* Clear, modern tabular numeral font */
        .mono {
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif !important;
            font-variant-numeric: tabular-nums;
            font-feature-settings: "tnum" 1, "zero" 0;
            letter-spacing: 0.15px;
            font-weight: 700;
        }

        /* Screen Wrapper */
        .invoice-screen-bar {
            background: #22282a;
            color: white;
            padding: 12px 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 50;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.15);
        }
        .btn-print {
            background: linear-gradient(135deg, #269DB9 0%, #1f859d 100%);
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
            box-shadow: 0 2px 4px rgba(38, 157, 185, 0.3);
            transition: all 0.2s;
        }
        .btn-print:hover {
            background: linear-gradient(135deg, #1f859d 0%, #17687b 100%);
        }
        .btn-back {
            background: rgba(255,255,255,0.12);
            color: white;
            font-weight: 600;
            padding: 8px 14px;
            border-radius: 8px;
            border: 1px solid rgba(255,255,255,0.15);
            cursor: pointer;
            font-size: 13px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: all 0.2s;
        }
        .btn-back:hover {
            background: rgba(255,255,255,0.22);
        }

        /* Invoice Container (A4 Proportions) */
        .invoice-page {
            max-width: 820px;
            margin: 28px auto 40px auto;
            background: #ffffff;
            padding: 45px 55px 35px 55px;
            position: relative;
            border-radius: 8px;
            box-shadow: 0 10px 25px -5px rgba(0,0,0,0.08), 0 8px 10px -6px rgba(0,0,0,0.05);
            overflow: hidden;
        }

        /* Diagonal Ribbon in Top Right Corner */
        .ribbon-wrapper {
            width: 125px;
            height: 125px;
            overflow: hidden;
            position: absolute;
            top: 0;
            right: 0;
            pointer-events: none;
            z-index: 20;
        }
        .ribbon {
            font-size: 13px;
            font-weight: 900;
            letter-spacing: 2px;
            color: #fff;
            text-transform: uppercase;
            text-align: center;
            line-height: 30px;
            transform: rotate(45deg);
            position: relative;
            padding: 0;
            left: -6px;
            top: 24px;
            width: 175px;
            box-shadow: 0 3px 8px -2px rgba(0,0,0,0.25);
        }
        .ribbon-paid {
            background-color: #10b981;
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

        /* Header Layout: Logo on Left, CV Details Flush Right & Symmetrical */
        .invoice-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 28px;
            margin-top: 4px;
        }
        .company-logo-area {
            display: flex;
            align-items: center;
            gap: 14px;
        }
        .logo-img {
            height: 58px;
            width: auto;
            object-fit: contain;
        }
        
        /* Kop Nama CV di Kanan Atas: Rapi, Proporsional, Simetris & Rata Kanan */
        .company-meta-area {
            text-align: right;
            margin-left: auto;
            color: #555b5e;
            font-size: 12px;
            line-height: 1.5;
            max-width: 380px;
        }
        .company-meta-area .company-name {
            font-size: 15.5px;
            font-weight: 800;
            color: #22282a;
            margin-bottom: 3px;
            letter-spacing: -0.2px;
            white-space: nowrap;
        }
        .company-meta-area .company-addr {
            color: #555b5e;
            font-size: 12px;
        }
        .company-meta-area .company-email {
            color: #269DB9;
            font-size: 12px;
            font-weight: 700;
            margin-top: 3px;
        }
        .company-meta-area .company-phone {
            color: #424444;
            font-size: 12px;
            font-weight: 600;
            margin-top: 1px;
        }

        /* Invoice Number & Date Block */
        .invoice-title-block {
            margin-bottom: 28px;
        }
        .invoice-title-block h1 {
            font-size: 22px;
            font-weight: 800;
            color: #22282a;
            margin-bottom: 4px;
            letter-spacing: -0.5px;
        }
        .invoice-title-block h1 .invoice-num {
            color: #269DB9;
        }
        .invoice-title-block .invoice-date,
        .invoice-title-block .invoice-due-date {
            font-size: 12.5px;
            color: #555b5e;
            font-weight: 500;
        }
        .invoice-title-block .invoice-date span,
        .invoice-title-block .invoice-due-date span {
            color: #22282a;
            font-weight: 700;
        }

        /* Invoiced To Block */
        .invoiced-to-block {
            margin-bottom: 28px;
            font-size: 12.5px;
            line-height: 1.5;
        }
        .invoiced-to-block .title-label {
            font-size: 13.5px;
            font-weight: 800;
            color: #22282a;
            margin-bottom: 4px;
        }
        .invoiced-to-block .client-type-tag {
            display: inline-block;
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #269DB9;
            background: #f0f9fb;
            border: 1px solid #bee3eb;
            padding: 1px 7px;
            border-radius: 4px;
            margin-bottom: 4px;
        }
        .invoiced-to-block .client-name {
            color: #22282a;
            font-weight: 700;
            font-size: 13px;
        }
        .invoiced-to-block .client-city {
            color: #555b5e;
        }

        /* Tables (Warna Seirama dengan Logo BTD: Teal #269DB9 & Charcoal #424444) */
        .table-custom {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 25px;
            font-size: 12px;
        }
        .table-custom th {
            background-color: #f0f9fb;
            border-top: 1px solid #bee3eb;
            border-bottom: 2px solid #269DB9;
            border-left: 1px solid #e2e8f0;
            border-right: 1px solid #e2e8f0;
            padding: 10px 14px;
            font-weight: 700;
            color: #22282a;
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
            color: #22282a;
            vertical-align: top;
            background-color: #ffffff;
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
            background-color: #ffffff;
        }
        .table-custom .row-summary-total td {
            background-color: #f0f9fb !important;
            border-top: 2px solid #269DB9;
            font-weight: 800;
            color: #22282a;
            font-size: 13px;
        }
        .table-custom .row-summary-total td.mono {
            color: #269DB9;
            font-size: 13.5px;
        }
        .table-custom .row-remaining-unpaid td {
            color: #dc2626;
            font-weight: 700;
        }

        /* Item Description Styling for Structured Bullets */
        .item-desc-intro {
            font-weight: 600;
            color: #22282a;
            margin-bottom: 6px;
            line-height: 1.5;
        }
        .item-desc-bullets {
            margin: 0;
            padding-left: 18px;
            list-style-type: disc;
            line-height: 1.6;
            color: #424444;
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
            font-size: 14px;
            font-weight: 800;
            color: #22282a;
            margin-bottom: 10px;
        }

        /* Payment Instruction & QR Validation Section */
        .payment-validation-section {
            display: grid;
            grid-template-columns: 1.35fr 1fr;
            gap: 16px;
            background: #fbfdfe;
            border: 1px solid #e2e8f0;
            border-left: 3.5px solid #269DB9;
            border-radius: 8px;
            padding: 12px 16px;
            margin-bottom: 24px;
            align-items: center;
        }
        .payment-box-title {
            font-size: 11px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #22282a;
            margin-bottom: 6px;
        }
        .payment-box-desc {
            font-size: 11.5px;
            color: #555b5e;
            line-height: 1.5;
        }

        /* QR Validation Card */
        .qr-validation-card {
            display: flex;
            align-items: center;
            gap: 12px;
            background: #ffffff;
            border: 1px solid #dcebf0;
            border-radius: 8px;
            padding: 8px 12px;
            box-shadow: 0 1px 3px rgba(38, 157, 185, 0.05);
        }
        .qr-img {
            width: 70px;
            height: 70px;
            object-fit: contain;
            display: block;
            border-radius: 4px;
        }
        .qr-info {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }
        .qr-status-tag {
            display: inline-block;
            font-size: 9px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            padding: 2px 6px;
            border-radius: 4px;
            width: fit-content;
        }
        .qr-status-tag.paid {
            background: #ecfdf5;
            color: #047857;
            border: 1px solid #a7f3d0;
        }
        .qr-status-tag.unpaid {
            background: #fef2f2;
            color: #b91c1c;
            border: 1px solid #fecaca;
        }
        .qr-title {
            font-size: 11px;
            font-weight: 800;
            color: #22282a;
        }
        .qr-desc {
            font-size: 10px;
            color: #64748b;
            line-height: 1.35;
        }

        /* Footer */
        .invoice-footer {
            margin-top: 15px;
            padding-top: 15px;
            color: #555b5e;
            font-size: 11.5px;
            line-height: 1.5;
        }
        .invoice-footer .company-name-bottom {
            font-weight: 800;
            color: #22282a;
            margin-bottom: 4px;
            font-size: 12px;
        }
        .invoice-footer .address-line {
            color: #555b5e;
            font-weight: 500;
        }
        .invoice-footer .website-line a {
            color: #269DB9;
            text-decoration: none;
            font-weight: 600;
        }
        .dotted-divider {
            border-top: 1.5px dotted #cbd5e1;
            margin: 12px 0 8px 0;
            width: 100%;
        }
        .country-bottom {
            text-align: right;
            color: #94a3b8;
            font-size: 11px;
            margin-top: 0;
        }

        /* Mobile & Small Screen Responsive Preview */
        @media screen and (max-width: 768px) {
            .invoice-screen-bar {
                flex-direction: column;
                align-items: stretch;
                gap: 12px;
                padding: 12px 16px;
            }
            .invoice-screen-bar > div {
                flex-wrap: wrap;
                justify-content: center;
            }
            .invoice-page {
                margin: 12px 8px 30px 8px !important;
                padding: 24px 16px !important;
                border-radius: 8px;
                box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            }
            .invoice-header {
                flex-direction: column;
                gap: 14px;
                align-items: flex-start;
            }
            .company-meta-area {
                text-align: left !important;
                margin-left: 0 !important;
                max-width: 100%;
            }
            .ribbon-wrapper {
                display: none;
            }
            .payment-validation-section {
                grid-template-columns: 1fr;
                gap: 16px;
            }
            .table-custom {
                font-size: 11.5px;
            }
            .table-custom th, .table-custom td {
                padding: 7px 8px;
            }
        }

        /* Print Media Styles: Single Page Safe */
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
                padding: 30px 42px !important;
                box-shadow: none !important;
                border: none !important;
                border-radius: 0 !important;
                max-width: 100% !important;
                min-height: auto !important;
                page-break-inside: avoid !important;
            }
            .company-meta-area {
                padding-right: 0 !important;
                margin-left: auto !important;
            }
            @page {
                margin: 8mm 10mm;
                size: A4 portrait;
            }
        }
    </style>
</head>
<body>

@php
    // Clean and format phone number without hyphens
    $rawPhone = $settings['contact_phone'] ?? '0896 9524 9089';
    $cleanPhone = str_replace('-', ' ', $rawPhone);
    $formattedPhone = trim(preg_replace('/\s+/', ' ', $cleanPhone));

    // Guaranteed Logo Embedding via Base64 or Asset
    $logoSrc = asset('images/Logo-BTD.png');
    $logoFile = public_path('images/Logo-BTD.png');
    if (file_exists($logoFile)) {
        $content = @file_get_contents($logoFile);
        if ($content !== false) {
            $logoSrc = 'data:image/png;base64,' . base64_encode($content);
        }
    }

    // Safe Date Formatter Closure
    $formatDate = function($date) {
        if (empty($date)) return '-';
        if ($date instanceof \DateTimeInterface) return $date->format('d/m/Y');
        try {
            return \Carbon\Carbon::parse($date)->format('d/m/Y');
        } catch (\Throwable $e) {
            return (string) $date;
        }
    };

    // Safe Description Formatter Closure
    $formatInvoiceDescription = function($text) {
        if (empty($text)) return '-';
        $text = trim($text);
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
    };

    // Safe Verification URL Generator
    $verifyUrl = \Illuminate\Support\Facades\Route::has('invoices.verify')
        ? route('invoices.verify', ['invoice_number' => $invoice->invoice_number])
        : url('/invoices/' . urlencode($invoice->invoice_number) . '/verify');
@endphp

    <!-- Screen Control Bar -->
    <div class="invoice-screen-bar">
        <div style="display: flex; align-items: center; gap: 12px;">
            <a href="{{ route('admin.invoices.index') }}" class="btn-back">
                &larr; Kembali ke Daftar Invoice
            </a>
            <span style="font-size: 13px; font-weight: 700; color: #cbd5e1;">
                Invoice #{{ $invoice->invoice_number }} &bull; {{ $invoice->client_name }}
            </span>
        </div>

        <div style="display: flex; align-items: center; gap: 10px;">
            @if(!empty($invoice->client_email))
                <form action="{{ route('admin.invoices.send-email', $invoice->id) }}" method="POST" class="inline" onsubmit="return confirm('Kirimkan invoice ini ke email klien {{ $invoice->client_email }}?');">
                    @csrf
                    <button type="submit" class="btn-back" style="background: rgba(38, 157, 185, 0.25); border-color: #269DB9; color: #269DB9; font-weight: 700;">
                        ✉️ Kirim ke Email Klien
                    </button>
                </form>
            @endif
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

        <!-- Header: Logo & Company Address (Symmetrical, Email on Top, Flush Right) -->
        <div class="invoice-header">
            <div class="company-logo-area">
                <img src="{{ $logoSrc }}" alt="{{ $settings['company_name'] ?? 'CV. Beranda Teknologi Digital' }}" class="logo-img" />
            </div>

            <!-- Kop Nama CV di Kanan Atas: Rapi, Alamat Jl. Sarjana Timbangan Ogan Ilir Sekali Saja -->
            <div class="company-meta-area">
                <div class="company-name">{{ $settings['company_legal_name'] ?? ($settings['company_name'] ?? 'CV. Beranda Teknologi Digital') }}</div>
                <div class="company-addr">Jl. Sarjana, Timbangan, Ogan Ilir</div>
                <div class="company-email">{{ $settings['contact_email'] ?? 'info@berandadigital.net' }}</div>
                <div class="company-phone">{{ $formattedPhone }}</div>
            </div>
        </div>

        <!-- Invoice Title & Date Block -->
        <div class="invoice-title-block">
            <h1>Invoice <span class="invoice-num">#{{ $invoice->invoice_number }}</span></h1>
            <div class="invoice-date">
                <span>Invoice Date:</span> {{ $formatDate($invoice->invoice_date) }}
            </div>
            @if($invoice->due_date)
                <div class="invoice-due-date">
                    <span>Due Date:</span> {{ $formatDate($invoice->due_date) }}
                </div>
            @endif
        </div>

        <!-- Invoiced To Block -->
        <div class="invoiced-to-block">
            <div class="title-label">Invoiced To</div>
            <div class="client-type-tag">{{ $invoice->client_type ?? 'Personal' }}</div>
            <div class="client-name">
                @if($invoice->client_attn)
                    {{ str_starts_with(strtoupper(trim($invoice->client_attn)), 'ATTN') ? $invoice->client_attn : 'ATTN: ' . $invoice->client_attn }}
                @else
                    ATTN: {{ $invoice->client_name }}
                @endif
            </div>
            @if($invoice->client_address)
                <div class="client-city">{{ $invoice->client_address }}</div>
            @endif
        </div>

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
                            <td>{!! $formatInvoiceDescription($item['description'] ?? '-') !!}</td>
                            <td class="text-right mono">Rp {{ number_format($item['amount'] ?? 0, 2, ',', '.') }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td>{!! $formatInvoiceDescription('Pelunasan Pembuatan Aplikasi') !!}</td>
                        <td class="text-right mono">Rp {{ number_format($invoice->total_amount, 2, ',', '.') }}</td>
                    </tr>
                @endif

                <!-- Paid Row -->
                <tr class="row-summary">
                    <td class="text-right">Paid</td>
                    <td class="text-right mono" style="color: #10b981;">Rp {{ number_format($invoice->paid_amount, 2, ',', '.') }}</td>
                </tr>

                <!-- Remaining Payment Row -->
                <tr class="row-summary {{ $invoice->remaining_amount > 0 ? 'row-remaining-unpaid' : '' }}">
                    <td class="text-right">Remaining Payment</td>
                    <td class="text-right mono">Rp {{ number_format($invoice->remaining_amount, 2, ',', '.') }}</td>
                </tr>

                <!-- Total Row -->
                <tr class="row-summary row-summary-total">
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
                    <th style="width: 22%;" class="text-center">Transaction Date</th>
                    <th style="width: 24%;">Payment</th>
                    <th style="width: 30%;">Transaction ID</th>
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
                        <td colspan="3" class="text-right" style="background-color: #f8fafc;">Balance</td>
                        <td class="text-right mono" style="background-color: #f8fafc; color: #10b981;">Rp {{ number_format($sumTrans, 2, ',', '.') }}</td>
                    </tr>
                @else
                    <tr>
                        <td class="text-center">{{ $formatDate($invoice->invoice_date) }}</td>
                        <td>Transfer Bank / QRIS</td>
                        <td class="mono" style="color: #94a3b8;">-</td>
                        <td class="text-right mono">Rp {{ number_format($invoice->paid_amount, 2, ',', '.') }}</td>
                    </tr>
                    <tr class="row-summary">
                        <td colspan="3" class="text-right" style="background-color: #f8fafc;">Balance</td>
                        <td class="text-right mono" style="background-color: #f8fafc; color: #10b981;">Rp {{ number_format($invoice->paid_amount, 2, ',', '.') }}</td>
                    </tr>
                @endif
            </tbody>
        </table>

        <!-- Payment Instruction & Official Digital QR Verification -->
        <div class="payment-validation-section">
            <div class="payment-box-left">
                <div class="payment-box-title">Petunjuk Pembayaran / Bank Transfer</div>
                <div class="payment-box-desc">
                    @if(!empty($invoice->notes))
                        <div>{{ $invoice->notes }}</div>
                    @else
                        <div>Pembayaran tagihan dapat ditransfer ke rekening resmi <strong>CV. Beranda Teknologi Digital</strong>.<br>
                        Konfirmasi pembayaran melalui WhatsApp ke <strong>{{ $formattedPhone }}</strong>.</div>
                    @endif
                </div>
            </div>

            <!-- QR Code Validasi Resmi (Hitam Solid Normal agar mudah terbaca kamera HP) -->
            <div class="qr-validation-card">
                <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&margin=2&color=000000&data={{ urlencode($verifyUrl) }}" 
                     alt="QR Code Validasi Invoice #{{ $invoice->invoice_number }}" 
                     class="qr-img" />
                <div class="qr-info">
                    <span class="qr-status-tag {{ $invoice->status === 'paid' ? 'paid' : 'unpaid' }}">
                        {{ $invoice->status === 'paid' ? '✓ DOKUMEN VALID' : '● MENUNGGU BAYAR' }}
                    </span>
                    <div class="qr-title">Validasi Dokumen Digital</div>
                    <div class="qr-desc">Scan QR Code untuk verifikasi keabsahan dokumen invoice ini di sistem.</div>
                </div>
            </div>
        </div>

        <!-- Footer Notice (Alamat tidak diulang di sini, hanya tampil sekali di kop atas) -->
        <div class="invoice-footer">
            <div class="company-name-bottom">{{ $settings['company_legal_name'] ?? ($settings['company_name'] ?? 'CV. Beranda Teknologi Digital') }}</div>
            <div class="website-line">
                <a href="https://{{ $settings['site_website'] ?? 'www.berandadigital.net' }}" target="_blank">{{ $settings['site_website'] ?? 'www.berandadigital.net' }}</a>
            </div>
            
            <div class="dotted-divider"></div>
            
            <div class="country-bottom">{{ $settings['company_country'] ?? 'Indonesia' }}</div>
        </div>

    </div>

</body>
</html>
