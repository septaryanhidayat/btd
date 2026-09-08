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
            color: #1e293b;
            font-size: 12.5px;
            line-height: 1.5;
            -webkit-print-color-adjust: exact !important;
            print-color-adjust: exact !important;
        }

        /* Tabular Numeral for Accurate Financial Alignment */
        .mono {
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif !important;
            font-variant-numeric: tabular-nums;
            font-feature-settings: "tnum" 1, "zero" 0;
            letter-spacing: 0.15px;
            font-weight: 700;
        }

        /* Top Screen Navigation Bar */
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
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.15);
        }
        .btn-print {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
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
            box-shadow: 0 2px 4px rgba(16, 185, 129, 0.25);
            transition: all 0.2s;
        }
        .btn-print:hover {
            background: linear-gradient(135deg, #059669 0%, #047857 100%);
            transform: translateY(-1px);
        }
        .btn-back {
            background: rgba(255, 255, 255, 0.12);
            color: white;
            font-weight: 600;
            padding: 8px 14px;
            border-radius: 8px;
            border: 1px solid rgba(255, 255, 255, 0.15);
            cursor: pointer;
            font-size: 13px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: all 0.2s;
        }
        .btn-back:hover {
            background: rgba(255, 255, 255, 0.22);
        }

        /* Printable Invoice Container */
        .invoice-page {
            max-width: 820px;
            margin: 28px auto 40px auto;
            background: #ffffff;
            padding: 42px 48px 36px 48px;
            position: relative;
            border-radius: 12px;
            box-shadow: 0 12px 35px -5px rgba(15, 23, 42, 0.12), 0 4px 12px -2px rgba(15, 23, 42, 0.06);
            overflow: hidden;
        }

        /* Header Layout: Logo on Left, CV Details Flush Right */
        .invoice-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 24px;
            margin-bottom: 20px;
        }
        .company-logo-area {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 6px;
        }
        .logo-img {
            height: 54px;
            width: auto;
            object-fit: contain;
            display: block;
        }
        .company-tagline {
            font-size: 11px;
            font-weight: 600;
            color: #64748b;
            letter-spacing: 0.2px;
        }
        
        /* Kop Nama CV di Kanan Atas (Rata Kanan Penuh / Flush Right) */
        .company-meta-area {
            text-align: right;
            margin-left: auto;
            color: #334155;
            font-size: 12px;
            line-height: 1.45;
            max-width: 380px;
        }
        .company-meta-area .company-name {
            font-size: 16px;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 4px;
            letter-spacing: -0.2px;
        }
        .company-meta-area .company-addr {
            color: #475569;
            font-weight: 500;
        }
        .company-meta-area .company-contact {
            color: #2563eb;
            font-weight: 600;
            margin-top: 3px;
            font-size: 11.5px;
        }

        /* Decorative Brand Accent Divider */
        .brand-divider {
            height: 3px;
            background: linear-gradient(90deg, #2563eb 0%, #06b6d4 45%, #e2e8f0 100%);
            border-radius: 9999px;
            margin-bottom: 24px;
        }

        /* Hero Meta Section: 2 Modern Dimensioned Cards */
        .invoice-meta-grid {
            display: grid;
            grid-template-columns: 1.15fr 1fr;
            gap: 16px;
            margin-bottom: 24px;
        }
        .meta-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 16px 20px;
            position: relative;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.03);
        }
        .meta-card-label {
            font-size: 10.5px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #64748b;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .invoice-main-title {
            font-size: 22px;
            font-weight: 800;
            color: #0f172a;
            letter-spacing: -0.5px;
            line-height: 1.2;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .meta-dates-row {
            display: flex;
            flex-direction: column;
            gap: 4px;
            font-size: 12px;
            color: #475569;
        }
        .meta-dates-row .date-item {
            display: flex;
            align-items: center;
            gap: 6px;
        }
        .meta-dates-row strong {
            color: #0f172a;
            font-weight: 600;
        }

        /* Invoiced To Section */
        .client-name-title {
            font-size: 15px;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 4px;
        }
        .client-type-badge {
            display: inline-block;
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            padding: 2px 8px;
            border-radius: 4px;
            background: #e2e8f0;
            color: #334155;
            margin-bottom: 6px;
        }
        .client-meta-details {
            font-size: 12px;
            color: #475569;
            line-height: 1.45;
        }

        /* Modern Status Badge (Pill with Dot Indicator) */
        .status-pill {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 5px 12px;
            border-radius: 9999px;
            font-size: 11px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            line-height: 1;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
        }
        .status-pill .dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
        }
        .status-pill.unpaid {
            background-color: #fef2f2;
            color: #b91c1c;
            border: 1px solid #fecaca;
        }
        .status-pill.unpaid .dot {
            background-color: #ef4444;
        }
        .status-pill.paid {
            background-color: #ecfdf5;
            color: #047857;
            border: 1px solid #a7f3d0;
        }
        .status-pill.paid .dot {
            background-color: #10b981;
        }
        .status-pill.partial {
            background-color: #fffbeb;
            color: #b45309;
            border: 1px solid #fde68a;
        }
        .status-pill.partial .dot {
            background-color: #f59e0b;
        }
        .status-pill.cancelled {
            background-color: #f1f5f9;
            color: #475569;
            border: 1px solid #cbd5e1;
        }
        .status-pill.cancelled .dot {
            background-color: #64748b;
        }

        /* Subtle Watermark Stamp for Official Authenticity */
        .watermark-stamp {
            position: absolute;
            right: 48px;
            top: 215px;
            border: 3px dashed #ef4444;
            color: #ef4444;
            font-size: 26px;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 4px;
            padding: 6px 20px;
            border-radius: 8px;
            opacity: 0.12;
            transform: rotate(-12deg);
            pointer-events: none;
            user-select: none;
        }
        .watermark-stamp.paid {
            border-color: #10b981;
            color: #10b981;
        }

        /* Table Styling (Modern, Non-Flat, Elevated) */
        .table-custom {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            margin-bottom: 20px;
            border-radius: 8px;
            overflow: hidden;
            border: 1px solid #e2e8f0;
        }
        .table-custom thead th {
            background-color: #0f172a;
            color: #ffffff;
            font-weight: 700;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            padding: 11px 16px;
            border: none;
            text-align: left;
        }
        .table-custom thead th.text-right {
            text-align: right;
        }
        .table-custom thead th.text-center {
            text-align: center;
        }
        .table-custom tbody td {
            padding: 12px 16px;
            color: #1e293b;
            font-size: 12.5px;
            border-top: 1px solid #f1f5f9;
            vertical-align: top;
            background-color: #ffffff;
        }
        .table-custom tbody tr:nth-child(even) td {
            background-color: #fafbfc;
        }
        .table-custom td.text-right {
            text-align: right;
        }
        .table-custom td.text-center {
            text-align: center;
        }

        /* Item Description Formatting */
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

        /* Financial Summary Panel (Non-Flat, Structured Block) */
        .summary-container {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 24px;
        }
        .summary-box {
            width: 330px;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 14px 18px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.04);
        }
        .summary-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 6px 0;
            font-size: 12px;
            color: #475569;
        }
        .summary-row.bold {
            font-weight: 700;
            color: #0f172a;
        }
        .summary-row.highlight-remaining {
            color: #b91c1c;
            font-weight: 700;
            background: #fef2f2;
            padding: 6px 8px;
            border-radius: 6px;
            margin: 3px -8px;
        }
        .summary-divider {
            height: 1px;
            background: #e2e8f0;
            margin: 8px 0;
        }
        .summary-total-card {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            color: #ffffff;
            padding: 10px 14px;
            border-radius: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 8px;
            box-shadow: 0 3px 6px -1px rgba(15, 23, 42, 0.2);
        }
        .summary-total-card .label {
            font-size: 11px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            color: #94a3b8;
        }
        .summary-total-card .amount {
            font-size: 15px;
            font-weight: 800;
            color: #38bdf8;
            letter-spacing: 0.2px;
        }

        /* Section Headings */
        .section-title {
            font-size: 13px;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        /* Bottom Info Grid: Bank/Payment & Official Credential Bar */
        .bottom-info-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 14px 18px;
            margin-bottom: 22px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }
        .info-col-title {
            font-size: 11px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            color: #0f172a;
            margin-bottom: 6px;
        }
        .info-col-content {
            font-size: 11.5px;
            color: #475569;
            line-height: 1.5;
        }

        /* Modern Official Footer */
        .invoice-footer {
            border-top: 1px solid #e2e8f0;
            padding-top: 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #64748b;
            font-size: 11px;
            line-height: 1.4;
        }
        .invoice-footer .company-signature {
            font-weight: 700;
            color: #0f172a;
        }
        .invoice-footer .footer-right {
            text-align: right;
        }
        .footer-website {
            color: #2563eb;
            font-weight: 600;
        }

        /* Print Media Optimizations: Pure 1-Page Layout Guarantee */
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
                padding: 24px 34px !important;
                box-shadow: none !important;
                border: none !important;
                border-radius: 0 !important;
                max-width: 100% !important;
                min-height: auto !important;
                overflow: visible !important;
                page-break-inside: avoid !important;
            }
            .company-meta-area {
                padding-right: 0 !important;
                margin-left: auto !important;
            }
            .watermark-stamp {
                opacity: 0.08 !important;
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
        <div style="display: flex; align-items: center; gap: 12px;">
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

        <!-- Watermark Stamp for Official Authenticity -->
        @if($invoice->status === 'paid')
            <div class="watermark-stamp paid">LUNAS</div>
        @elseif($invoice->status === 'partial')
            <div class="watermark-stamp" style="border-color: #f59e0b; color: #f59e0b;">SEBAGIAN</div>
        @elseif($invoice->status === 'cancelled')
            <div class="watermark-stamp" style="border-color: #64748b; color: #64748b;">BATAL</div>
        @else
            <div class="watermark-stamp">BELUM LUNAS</div>
        @endif

        <!-- Header: Logo on Left, CV Details Flush Right -->
        <div class="invoice-header">
            <div class="company-logo-area">
                <img src="{{ asset($settings['site_logo'] ?? 'images/Logo-BTD.png') }}" alt="{{ $settings['company_name'] ?? 'CV. Beranda Teknologi Digital' }}" class="logo-img" />
                <div class="company-tagline">Software House &bull; Mobile Apps &bull; AI Solutions</div>
            </div>

            <!-- Kop Nama CV di Kanan Atas: Rata Kanan Presisi (Flush Right) -->
            <div class="company-meta-area">
                <div class="company-name">{{ $settings['company_legal_name'] ?? ($settings['company_name'] ?? 'CV. Beranda Teknologi Digital') }}</div>
                <div class="company-addr">{{ $settings['company_address_line1'] ?? 'Jl. Sarjana, Timbangan, Ogan Ilir' }}</div>
                <div class="company-addr">{{ $settings['company_address_line2'] ?? 'Sumatera Selatan, Indonesia' }} {{ $settings['company_postal_code'] ?? '30862' }}</div>
                <div class="company-contact">{{ $settings['contact_email'] ?? 'info@berandadigital.net' }} &bull; {{ $settings['contact_phone'] ?? '0896 9524 9089' }}</div>
            </div>
        </div>

        <!-- Decorative Brand Divider -->
        <div class="brand-divider"></div>

        <!-- Hero Meta Grid: Invoice Details & Invoiced To -->
        <div class="invoice-meta-grid">
            
            <!-- Left Card: Invoice Meta & Status -->
            <div class="meta-card">
                <div class="meta-card-label">
                    <span>Informasi Tagihan</span>
                    <!-- Modern Status Pill Badge -->
                    @if($invoice->status === 'paid')
                        <span class="status-pill paid"><span class="dot"></span> LUNAS</span>
                    @elseif($invoice->status === 'partial')
                        <span class="status-pill partial"><span class="dot"></span> SEBAGIAN</span>
                    @elseif($invoice->status === 'cancelled')
                        <span class="status-pill cancelled"><span class="dot"></span> BATAL</span>
                    @else
                        <span class="status-pill unpaid"><span class="dot"></span> BELUM LUNAS</span>
                    @endif
                </div>

                <div class="invoice-main-title">
                    Invoice #{{ $invoice->invoice_number }}
                </div>

                <div class="meta-dates-row">
                    <div class="date-item">
                        <span>Tanggal Terbit:</span>
                        <strong>{{ optional($invoice->invoice_date)->format('d/m/Y') }}</strong>
                    </div>
                    @if($invoice->due_date)
                        <div class="date-item">
                            <span>Jatuh Tempo:</span>
                            <strong>{{ optional($invoice->due_date)->format('d/m/Y') }}</strong>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Right Card: Ditujukan Kepada (Invoiced To) -->
            <div class="meta-card">
                <div class="meta-card-label">
                    <span>Ditujukan Kepada</span>
                    <span class="client-type-badge">{{ $invoice->client_type ?? 'Personal' }}</span>
                </div>

                <div class="client-name-title">
                    {{ $invoice->client_name }}
                </div>

                <div class="client-meta-details">
                    @if($invoice->client_attn && $invoice->client_attn !== $invoice->client_name)
                        <div>{{ str_starts_with(strtoupper(trim($invoice->client_attn)), 'ATTN') ? $invoice->client_attn : 'ATTN: ' . $invoice->client_attn }}</div>
                    @endif
                    @if($invoice->client_address)
                        <div>{{ $invoice->client_address }}</div>
                    @endif
                </div>
            </div>

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

        <!-- Items Table (Modern Dark Header, Clean Borders) -->
        <table class="table-custom">
            <thead>
                <tr>
                    <th style="width: 72%;">Deskripsi Item / Layanan</th>
                    <th class="text-right" style="width: 28%;">Total (IDR)</th>
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
            </tbody>
        </table>

        <!-- Summary Panel (Non-Flat Structured Highlight) -->
        <div class="summary-container">
            <div class="summary-box">
                <div class="summary-row">
                    <span>Subtotal / Biaya:</span>
                    <span class="mono">Rp {{ number_format($invoice->total_amount, 2, ',', '.') }}</span>
                </div>
                <div class="summary-row">
                    <span>Sudah Dibayar (Paid):</span>
                    <span class="mono" style="color: #059669;">Rp {{ number_format($invoice->paid_amount, 2, ',', '.') }}</span>
                </div>
                @if($invoice->remaining_amount > 0)
                    <div class="summary-row highlight-remaining">
                        <span>Sisa Tagihan (Remaining):</span>
                        <span class="mono">Rp {{ number_format($invoice->remaining_amount, 2, ',', '.') }}</span>
                    </div>
                @else
                    <div class="summary-row">
                        <span>Sisa Tagihan (Remaining):</span>
                        <span class="mono">Rp {{ number_format($invoice->remaining_amount, 2, ',', '.') }}</span>
                    </div>
                @endif

                <div class="summary-divider"></div>

                <div class="summary-total-card">
                    <span class="label">Total Akhir</span>
                    <span class="amount mono">Rp {{ number_format($invoice->total_amount, 2, ',', '.') }}</span>
                </div>
            </div>
        </div>

        <!-- Transactions Section -->
        <div class="section-title">
            <span>Riwayat Transaksi</span>
        </div>
        <table class="table-custom" style="margin-bottom: 22px;">
            <thead>
                <tr>
                    <th style="width: 22%;" class="text-center">Tanggal</th>
                    <th style="width: 26%;">Metode Pembayaran</th>
                    <th style="width: 28%;">ID Transaksi</th>
                    <th class="text-right" style="width: 24%;">Jumlah (IDR)</th>
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
                    <tr>
                        <td colspan="3" class="text-right" style="font-weight: 700; color: #475569; background-color: #f8fafc;">Total Terbayar (Balance)</td>
                        <td class="text-right mono" style="font-weight: 800; color: #059669; background-color: #f8fafc;">Rp {{ number_format($sumTrans, 2, ',', '.') }}</td>
                    </tr>
                @else
                    <tr>
                        <td class="text-center">{{ optional($invoice->invoice_date)->format('d/m/Y') }}</td>
                        <td>Transfer Bank / QRIS</td>
                        <td class="mono" style="color: #94a3b8;">-</td>
                        <td class="text-right mono">Rp {{ number_format($invoice->paid_amount, 2, ',', '.') }}</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right" style="font-weight: 700; color: #475569; background-color: #f8fafc;">Total Terbayar (Balance)</td>
                        <td class="text-right mono" style="font-weight: 800; color: #059669; background-color: #f8fafc;">Rp {{ number_format($invoice->paid_amount, 2, ',', '.') }}</td>
                    </tr>
                @endif
            </tbody>
        </table>

        <!-- Official Payment & Legal Information Box -->
        <div class="bottom-info-card">
            <div>
                <div class="info-col-title">Informasi Pembayaran</div>
                <div class="info-col-content">
                    @if(!empty($invoice->notes))
                        <div>{{ $invoice->notes }}</div>
                    @else
                        <div>Pembayaran tagihan dapat dilakukan melalui transfer rekening resmi perusahaan <strong>CV. Beranda Teknologi Digital</strong>.</div>
                    @endif
                </div>
            </div>

            <div>
                <div class="info-col-title">Legalitas & Konfirmasi</div>
                <div class="info-col-content">
                    <div><strong>NIB:</strong> {{ $settings['company_nib'] ?? '1203000102148 / KBLI 62019' }}</div>
                    <div><strong>NPWP:</strong> {{ $settings['company_npwp'] ?? '63.100.018.9-312.000' }}</div>
                    <div><strong>Konfirmasi:</strong> {{ $settings['contact_phone'] ?? '0896 9524 9089' }}</div>
                </div>
            </div>
        </div>

        <!-- Modern Footer (Single Page Safe, No Spillover) -->
        <div class="invoice-footer">
            <div>
                <div class="company-signature">{{ $settings['company_legal_name'] ?? ($settings['company_name'] ?? 'CV. Beranda Teknologi Digital') }}</div>
                <div>{{ $settings['company_address'] ?? 'Jalan Sarjana Blok A No. 25 Timbangan, Ogan Ilir, 30862' }}</div>
            </div>
            
            <div class="footer-right">
                <div class="footer-website">{{ $settings['site_website'] ?? 'www.berandadigital.net' }}</div>
                <div>{{ $settings['company_country'] ?? 'Indonesia' }}</div>
            </div>
        </div>

    </div>

</body>
</html>
