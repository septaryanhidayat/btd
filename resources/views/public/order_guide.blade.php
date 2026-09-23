<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panduan & SOP Pemesanan Website / Aplikasi - CV. Beranda Teknologi Digital</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/Logo-BTD-tight.png') }}">

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
            line-height: 1.55;
            overflow-x: hidden;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
            -webkit-print-color-adjust: exact !important;
            print-color-adjust: exact !important;
        }

        .mono {
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif !important;
            font-variant-numeric: tabular-nums;
            font-feature-settings: "tnum" 1, "zero" 0;
            letter-spacing: 0.2px;
            font-weight: 700;
        }

        /* Screen Control Bar */
        .doc-screen-bar {
            background: #1e2638;
            color: white;
            padding: 12px 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 50;
            box-shadow: 0 4px 12px rgba(0,0,0,0.18);
        }
        .screen-bar-left {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .screen-bar-brand {
            font-size: 13.5px;
            font-weight: 800;
            color: #ffffff;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .screen-bar-tag {
            background: rgba(38, 157, 185, 0.2);
            border: 1px solid rgba(38, 157, 185, 0.5);
            color: #4cd7f5;
            font-size: 10px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            padding: 2px 8px;
            border-radius: 9999px;
        }
        .screen-bar-right {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .btn-action {
            color: white;
            font-weight: 700;
            padding: 8px 16px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            font-size: 12.5px;
            display: inline-flex;
            align-items: center;
            gap: 7px;
            text-decoration: none;
            transition: all 0.2s;
        }
        .btn-print {
            background: linear-gradient(135deg, #269DB9 0%, #1f859d 100%);
            box-shadow: 0 2px 6px rgba(38, 157, 185, 0.35);
        }
        .btn-print:hover {
            background: linear-gradient(135deg, #1f859d 0%, #17687b 100%);
            transform: translateY(-1px);
        }
        .btn-wa {
            background: #10b981;
            color: white;
            box-shadow: 0 2px 6px rgba(16, 185, 129, 0.35);
        }
        .btn-wa:hover {
            background: #059669;
            transform: translateY(-1px);
        }
        .btn-copy {
            background: rgba(255,255,255,0.12);
            color: #e2e8f0;
            border: 1px solid rgba(255,255,255,0.2);
        }
        .btn-copy:hover {
            background: rgba(255,255,255,0.22);
            color: #ffffff;
        }
        .btn-admin {
            background: rgba(38, 157, 185, 0.25);
            color: #38bdf8;
            border: 1px solid rgba(56, 189, 248, 0.4);
        }
        .btn-admin:hover {
            background: rgba(38, 157, 185, 0.45);
        }

        /* Printable Document Sheet (A4 Proportions) */
        .doc-page {
            max-width: 840px;
            margin: 28px auto 45px auto;
            background: #ffffff;
            padding: 45px 55px 40px 55px;
            position: relative;
            border-radius: 8px;
            box-shadow: 0 10px 25px -5px rgba(0,0,0,0.08), 0 8px 10px -6px rgba(0,0,0,0.05);
            overflow: hidden;
        }

        /* Elegant Background Watermark */
        .watermark-overlay {
            position: absolute;
            inset: 0;
            pointer-events: none;
            z-index: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
        .watermark-content {
            opacity: 0.038;
            transform: rotate(-25deg);
            text-align: center;
            user-select: none;
        }
        .watermark-logo {
            width: 320px;
            height: auto;
            margin-bottom: 12px;
            filter: grayscale(100%);
        }
        .watermark-text {
            font-size: 28px;
            font-weight: 900;
            letter-spacing: 5px;
            text-transform: uppercase;
            color: #0f172a;
            white-space: nowrap;
        }
        .watermark-subtext {
            font-size: 14px;
            font-weight: 800;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: #269DB9;
            margin-top: 4px;
        }

        /* Top Right Diagonal Ribbon Banner */
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
            font-size: 11px;
            font-weight: 900;
            letter-spacing: 2px;
            color: #ffffff;
            text-transform: uppercase;
            text-align: center;
            line-height: 28px;
            transform: rotate(45deg);
            position: relative;
            padding: 0;
            left: -4px;
            top: 26px;
            width: 185px;
            box-shadow: 0 3px 8px -2px rgba(0,0,0,0.25);
            background: linear-gradient(135deg, #269DB9 0%, #0d9488 100%);
        }

        /* Header Layout: Symmetrical Kop */
        .doc-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 24px;
            position: relative;
            z-index: 10;
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
        
        /* Kop Surat Rata Kanan: Identik dengan Invoice */
        .company-meta-area {
            text-align: right;
            margin-left: auto;
            color: #555b5e;
            font-size: 12px;
            line-height: 1.5;
            max-width: 380px;
            padding-right: 15px;
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

        /* Document Meta & Target Row (Balanced Left & Right) */
        .doc-info-row {
            display: grid;
            grid-template-columns: 1.25fr 1fr;
            gap: 24px;
            align-items: flex-start;
            margin-bottom: 20px;
            padding-bottom: 16px;
            border-bottom: 2px solid #e2e8f0;
            position: relative;
            z-index: 10;
        }
        .doc-title-col h1 {
            font-size: 20px;
            font-weight: 900;
            color: #22282a;
            margin-bottom: 5px;
            letter-spacing: -0.4px;
            line-height: 1.25;
            text-transform: uppercase;
        }
        .doc-title-col h1 .highlight {
            color: #269DB9;
        }
        .doc-title-col .doc-meta-item {
            font-size: 12px;
            color: #555b5e;
            font-weight: 500;
            line-height: 1.45;
        }
        .doc-title-col .doc-meta-item span {
            color: #22282a;
            font-weight: 700;
        }
        .doc-target-col {
            font-size: 12px;
            line-height: 1.45;
            padding-left: 14px;
            border-left: 2px solid #269DB9;
        }
        .doc-target-col .title-label {
            font-size: 10px;
            font-weight: 800;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            margin-bottom: 2px;
        }
        .doc-target-col .target-badge {
            display: inline-block;
            font-size: 9.5px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #269DB9;
            background: #f0f9fb;
            border: 1px solid #bee3eb;
            padding: 1px 7px;
            border-radius: 4px;
            margin-bottom: 3px;
        }
        .doc-target-col .target-name {
            color: #0f172a;
            font-weight: 800;
            font-size: 13px;
        }
        .doc-target-col .target-desc {
            color: #475569;
            font-size: 11.5px;
        }

        /* Intro Banner */
        .doc-intro-box {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-left: 3.5px solid #269DB9;
            border-radius: 8px;
            padding: 12px 16px;
            margin-bottom: 22px;
            font-size: 12px;
            color: #334155;
            line-height: 1.6;
            position: relative;
            z-index: 10;
        }
        .doc-intro-box strong {
            color: #0f172a;
        }

        /* 6 Main Steps Section */
        .steps-container {
            display: flex;
            flex-direction: column;
            gap: 14px;
            margin-bottom: 24px;
            position: relative;
            z-index: 10;
        }
        .step-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 14px 18px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.02);
            transition: border-color 0.2s;
        }
        .step-header {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 8px;
        }
        .step-num {
            width: 24px;
            height: 24px;
            border-radius: 6px;
            background: #f0f9fb;
            border: 1.5px solid #269DB9;
            color: #269DB9;
            font-weight: 900;
            font-size: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        .step-title {
            font-size: 13.5px;
            font-weight: 800;
            color: #1e293b;
            letter-spacing: -0.2px;
        }
        .step-body {
            color: #475569;
            font-size: 12px;
            line-height: 1.6;
            padding-left: 34px;
        }
        .step-body p {
            margin-bottom: 6px;
        }
        .step-body p:last-child {
            margin-bottom: 0;
        }
        .step-bullets {
            margin: 6px 0;
            padding-left: 18px;
            list-style-type: disc;
        }
        .step-bullets li {
            margin-bottom: 4px;
            color: #334155;
        }
        .step-bullets li strong {
            color: #0f172a;
        }
        .step-badge-mini {
            display: inline-block;
            font-size: 10.5px;
            font-weight: 700;
            color: #0284c7;
            background: #e0f2fe;
            padding: 1px 7px;
            border-radius: 4px;
            margin-right: 4px;
        }

        /* Payment Instruction Box (Identik dengan Invoice) */
        .payment-box-full {
            width: 100%;
            background: #fbfdfe;
            border: 1px solid #e2e8f0;
            border-left: 3.5px solid #269DB9;
            border-radius: 8px;
            padding: 13px 18px;
            margin-bottom: 20px;
            position: relative;
            z-index: 10;
        }
        .payment-box-header {
            margin-bottom: 10px;
        }
        .payment-box-title {
            font-size: 11.5px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #22282a;
            margin-bottom: 4px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .payment-box-subtext {
            font-size: 11.5px;
            color: #64748b;
            line-height: 1.5;
        }
        .bank-accounts-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 8px 16px;
            margin: 10px 0 8px 0;
        }
        .bank-card {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 8px 14px;
            box-shadow: 0 1px 2px rgba(0,0,0,0.02);
        }
        .bank-card-left {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .bank-logo-wrap {
            width: 52px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        .bank-logo-img {
            max-width: 52px;
            max-height: 22px;
            object-fit: contain;
            display: block;
        }
        .bank-acc-info {
            display: flex;
            flex-direction: column;
            line-height: 1.2;
        }
        .bank-acc-label {
            font-size: 9.5px;
            font-weight: 800;
            color: #269DB9;
            text-transform: uppercase;
            letter-spacing: 0.4px;
        }
        .bank-acc-num {
            font-size: 13px;
            font-weight: 800;
            color: #0f172a;
            letter-spacing: 0.4px;
            white-space: nowrap;
        }
        .ewallet-card {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 8px 14px;
            margin-top: 6px;
            box-shadow: 0 1px 2px rgba(0,0,0,0.02);
        }
        .ewallet-left {
            display: flex;
            align-items: center;
            gap: 14px;
        }
        .ewallet-logos-row {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-shrink: 0;
        }
        .ewallet-logo-img {
            height: 15px;
            max-width: 48px;
            object-fit: contain;
            display: block;
        }
        .ewallet-acc-label {
            font-size: 10px;
            font-weight: 700;
            color: #64748b;
        }
        .ewallet-acc-num {
            font-size: 13px;
            font-weight: 800;
            color: #0f172a;
            letter-spacing: 0.4px;
        }
        .account-holder-line {
            font-size: 11px;
            color: #64748b;
            border-top: 1px dashed #cbd5e1;
            padding-top: 7px;
            margin-top: 9px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 6px;
        }

        /* Contact & Confirmation Grid */
        .contact-box-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 12px 14px;
            margin-bottom: 22px;
            position: relative;
            z-index: 10;
        }
        .contact-card-item {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }
        .contact-card-label {
            font-size: 9.5px;
            font-weight: 800;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 0.4px;
        }
        .contact-card-value {
            font-size: 11.5px;
            font-weight: 700;
            color: #0f172a;
            word-break: break-word;
        }
        .contact-card-value a {
            color: #269DB9;
            text-decoration: none;
        }
        .contact-card-value a:hover {
            text-decoration: underline;
        }

        /* Footer Container with QR Code (Identik dengan Invoice) */
        .doc-footer-container {
            margin-top: 15px;
            padding-top: 10px;
            position: relative;
            z-index: 10;
        }
        .doc-footer-row {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 24px;
        }
        .footer-left {
            flex: 1;
            color: #555b5e;
            font-size: 11.5px;
            line-height: 1.5;
        }
        .footer-left .company-name-bottom {
            font-weight: 800;
            color: #22282a;
            margin-bottom: 2px;
            font-size: 13px;
        }
        .footer-left .website-line a {
            color: #269DB9;
            text-decoration: none;
            font-weight: 700;
            font-size: 12px;
        }
        .footer-left .doc-legal-note {
            font-size: 10px;
            color: #94a3b8;
            margin-top: 6px;
            line-height: 1.4;
        }
        .footer-right-qr {
            flex-shrink: 0;
        }
        .qr-validation-card {
            display: flex;
            align-items: center;
            gap: 12px;
            background: #ffffff;
            border: 1px solid #dcebf0;
            border-radius: 8px;
            padding: 8px 12px;
            box-shadow: 0 1px 3px rgba(38, 157, 185, 0.08);
            width: 320px;
        }
        .qr-img {
            width: 66px;
            height: 66px;
            object-fit: contain;
            display: block;
            border-radius: 4px;
            flex-shrink: 0;
        }
        .qr-info {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }
        .qr-status-tag {
            display: inline-block;
            font-size: 8.5px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            padding: 2px 6px;
            border-radius: 4px;
            width: fit-content;
            background: #ecfdf5;
            color: #047857;
            border: 1px solid #a7f3d0;
        }
        .qr-title {
            font-size: 11px;
            font-weight: 800;
            color: #22282a;
        }
        .qr-desc {
            font-size: 9.5px;
            color: #64748b;
            line-height: 1.35;
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

        /* Toast Notification */
        .toast-notif {
            position: fixed;
            bottom: 24px;
            right: 24px;
            background: #1e293b;
            color: #ffffff;
            padding: 10px 18px;
            border-radius: 8px;
            font-size: 12.5px;
            font-weight: 700;
            box-shadow: 0 10px 25px -5px rgba(0,0,0,0.3);
            display: none;
            align-items: center;
            gap: 8px;
            z-index: 100;
        }

        /* Responsive Mobile Styles */
        @media screen and (max-width: 768px) {
            .doc-screen-bar {
                flex-direction: column;
                align-items: stretch;
                gap: 12px;
                padding: 12px 16px;
            }
            .screen-bar-right {
                flex-wrap: wrap;
                justify-content: stretch;
            }
            .screen-bar-right .btn-action {
                flex: 1 1 auto;
                justify-content: center;
            }
            .doc-page {
                margin: 12px 8px 30px 8px !important;
                padding: 24px 16px !important;
                border-radius: 8px;
            }
            .doc-header {
                flex-direction: column;
                gap: 14px;
                align-items: flex-start;
            }
            .company-meta-area {
                text-align: left !important;
                margin-left: 0 !important;
                max-width: 100%;
                padding-right: 0 !important;
            }
            .doc-info-row {
                grid-template-columns: 1fr;
                gap: 14px;
            }
            .doc-target-col {
                padding-left: 10px;
            }
            .ribbon-wrapper {
                display: none;
            }
            .bank-accounts-grid {
                grid-template-columns: 1fr;
            }
            .contact-box-grid {
                grid-template-columns: 1fr 1fr;
                gap: 12px;
            }
            .doc-footer-row {
                flex-direction: column;
                align-items: stretch;
                gap: 16px;
            }
            .qr-validation-card {
                width: 100%;
            }
        }

        /* Print Media Styles: Clean, Crisp, Professional */
        @media print {
            body {
                background: #ffffff !important;
                color: #000000 !important;
            }
            .doc-screen-bar {
                display: none !important;
            }
            .toast-notif {
                display: none !important;
            }
            .doc-page {
                margin: 0 !important;
                padding: 20px 30px !important;
                box-shadow: none !important;
                border: none !important;
                border-radius: 0 !important;
                max-width: 100% !important;
                min-height: auto !important;
            }
            .step-card {
                box-shadow: none !important;
                border: 1px solid #cbd5e1 !important;
                page-break-inside: avoid !important;
            }
            .payment-box-full, .contact-box-grid, .doc-footer-container {
                page-break-inside: avoid !important;
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
    // Clean and format phone number
    $rawPhone = $settings['contact_phone'] ?? '0896 9524 9089';
    $cleanPhone = str_replace('-', ' ', $rawPhone);
    $formattedPhone = trim(preg_replace('/\s+/', ' ', $cleanPhone));
    $rawWaPhone = preg_replace('/[^0-9]/', '', $rawPhone);
    if (str_starts_with($rawWaPhone, '0')) {
        $rawWaPhone = '62' . substr($rawWaPhone, 1);
    }

    // Guaranteed Logo Embedding via Base64 or Asset
    $logoSrc = asset('images/Logo-BTD.png');
    $logoFile = public_path('images/Logo-BTD.png');
    if (file_exists($logoFile)) {
        $content = @file_get_contents($logoFile);
        if ($content !== false) {
            $logoSrc = 'data:image/png;base64,' . base64_encode($content);
        }
    }

    // Helper closure for embedding official bank & e-wallet vector SVGs
    $getBankLogo = function($name) {
        $path = public_path("images/banks/{$name}.svg");
        if (file_exists($path)) {
            $svgContent = @file_get_contents($path);
            if ($svgContent !== false) {
                return 'data:image/svg+xml;base64,' . base64_encode($svgContent);
            }
        }
        return asset("images/banks/{$name}.svg");
    };

    // Public URL & WhatsApp Share Generator
    $docUrl = $publicUrl ?? url('/panduan-pemesanan');
    $shareWaText = urlencode("Halo Tim CV. Beranda Teknologi Digital, saya ingin memesan website / aplikasi berdasarkan panduan resmi ini: {$docUrl}");
@endphp

    <!-- Screen Control Bar (Navigasi & Aksi Cepat) -->
    <div class="doc-screen-bar">
        <div class="screen-bar-left">
            @if(auth()->check())
                <a href="{{ route('admin.order-guide.index') }}" class="btn-action btn-admin">
                    &larr; Kembali ke Dashboard Admin
                </a>
            @else
                <a href="{{ url('/') }}" class="btn-action btn-copy">
                    &larr; Beranda Utama
                </a>
            @endif
            <div class="screen-bar-brand">
                <span>Panduan Pemesanan Resmi</span>
                <span class="screen-bar-tag">Verified SOP</span>
            </div>
        </div>

        <div class="screen-bar-right">
            <button onclick="copyShareLink('{{ $docUrl }}')" class="btn-action btn-copy" title="Salin tautan dokumen untuk dibagikan ke klien">
                📋 Salin Link
            </button>
            <a href="https://wa.me/{{ $rawWaPhone }}?text={{ $shareWaText }}" target="_blank" class="btn-action btn-wa" title="Konsultasi langsung via WhatsApp">
                💬 Konsultasi via WhatsApp
            </a>
            <button onclick="window.print()" class="btn-action btn-print" title="Cetak atau unduh dokumen format PDF">
                🖨️ Cetak / Simpan PDF
            </button>
        </div>
    </div>

    <!-- Main Printable Document Sheet (A4 Senada Invoice) -->
    <div class="doc-page">

        <!-- Background Watermark Samar Elegan -->
        <div class="watermark-overlay" aria-hidden="true">
            <div class="watermark-content">
                <img src="{{ $logoSrc }}" alt="" class="watermark-logo">
                <div class="watermark-text">{{ $settings['company_legal_name'] ?? 'CV. BERANDA TEKNOLOGI DIGITAL' }}</div>
                <div class="watermark-subtext">OFFICIAL SOP & ORDER GUIDE</div>
            </div>
        </div>

        <!-- Top Right Diagonal Ribbon Banner -->
        <div class="ribbon-wrapper">
            <div class="ribbon">OFFICIAL SOP</div>
        </div>

        <!-- Header: Logo & Company Address (Symmetrical, Flush Right) -->
        <div class="doc-header">
            <div class="company-logo-area">
                <img src="{{ $logoSrc }}" alt="{{ $settings['company_name'] ?? 'CV. Beranda Teknologi Digital' }}" class="logo-img" />
            </div>

            <!-- Kop Nama CV di Kanan Atas: Rapi & Senada Invoice BTD -->
            <div class="company-meta-area">
                <div class="company-name">{{ $settings['company_legal_name'] ?? ($settings['company_name'] ?? 'CV. Beranda Teknologi Digital') }}</div>
                <div class="company-addr">Jl. Sarjana, Timbangan, Ogan Ilir</div>
                <div class="company-addr">Sumatera Selatan, Indonesia</div>
                <div class="company-email">{{ $settings['contact_email'] ?? 'info@berandadigital.net' }}</div>
                <div class="company-phone">{{ $formattedPhone }}</div>
            </div>
        </div>

        <!-- Document Meta & Target Target Row -->
        <div class="doc-info-row">
            <div class="doc-title-col">
                <h1>PANDUAN & ALUR PEMESANAN <span class="highlight">WEBSITE / APLIKASI</span></h1>
                <div class="doc-meta-item">
                    <span>Nomor Dokumen:</span> SOP-BTD/WEB-APP/{{ date('Y') }}
                </div>
                <div class="doc-meta-item">
                    <span>Status Regulasi:</span> Standar Operasional Prosedur Resmi (Berlaku Aktif)
                </div>
                <div class="doc-meta-item">
                    <span>Penyedia Layanan:</span> {{ $settings['company_legal_name'] ?? 'CV. Beranda Teknologi Digital' }}
                </div>
            </div>

            <div class="doc-target-col">
                <div class="title-label">Ditujukan Kepada</div>
                <div class="target-badge">Calon Klien & Mitra</div>
                <div class="target-name">Institusi, Sekolah, Yayasan & Pelaku Bisnis</div>
                <div class="target-desc">Panduan resmi alur kerja, legalitas domain, pembayaran DP, hingga serah terima & garansi pengerjaan.</div>
            </div>
        </div>

        <!-- Kata Pengantar / Intro Box -->
        <div class="doc-intro-box">
            Terima kasih telah mempercayakan pembuatan website & aplikasi instansi/bisnis Anda kepada <strong>{{ $settings['company_legal_name'] ?? 'CV. Beranda Teknologi Digital' }}</strong>. Agar proses pengerjaan berjalan dengan cepat, terstruktur, aman, dan lancar, berikut adalah tahapan dan standar operasional pemesanannya:
        </div>

        <!-- 6 Tahapan Pemesanan Lengkap -->
        <div class="steps-container">

            <!-- Tahap 1 -->
            <div class="step-card">
                <div class="step-header">
                    <div class="step-num">1</div>
                    <div class="step-title">Persyaratan Awal & Dokumen Legalitas Domain</div>
                </div>
                <div class="step-body">
                    <p>
                        Domain resmi Indonesia memerlukan berkas legalitas sesuai ketentuan PANDI (Pengelola Nama Domain Internet Indonesia). Mohon siapkan softcopy (scan atau foto jelas dokumen asli):
                    </p>
                    <ul class="step-bullets">
                        <li>
                            <span class="step-badge-mini">Sekolah (.sch.id)</span>
                            <strong>KTP Kepala Sekolah / Pejabat yang ditunjuk</strong> dan <strong>SK Pendirian Sekolah / Izin Operasional Sekolah</strong>.
                        </li>
                        <li>
                            <span class="step-badge-mini">Kampus (.ac.id)</span>
                            <strong>KTP Pimpinan / Pejabat Kampus</strong> dan <strong>SK Pendirian PT dari Kemenristekdikti / SK Izin Operasional</strong>.
                        </li>
                        <li>
                            <span class="step-badge-mini">Yayasan (.or.id)</span>
                            <strong>KTP Pimpinan Yayasan</strong> dan <strong>Akta Notaris / SK Kemenkumham Pendirian Yayasan</strong>.
                        </li>
                        <li>
                            <span class="step-badge-mini">Perusahaan (.co.id)</span>
                            <strong>KTP Penanggung Jawab</strong>, <strong>NIB / SIUP</strong>, dan <strong>Akta Pendirian Perusahaan</strong>.
                        </li>
                        <li>
                            <span class="step-badge-mini">Komersial / Umum (.com / .id / .my.id)</span>
                            <strong>KTP Penanggung Jawab</strong> (pendaftaran instan tanpa persyaratan berkas tambahan).
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Tahap 2 -->
            <div class="step-card">
                <div class="step-header">
                    <div class="step-num">2</div>
                    <div class="step-title">Penentuan & Verifikasi Nama Domain</div>
                </div>
                <div class="step-body">
                    <p>
                        Silakan tentukan nama domain website/aplikasi yang diinginkan (contoh: <em>yayasanrabbani.sch.id</em>, <em>smpitishumpbm.sch.id</em>, atau <em>namabisnis.com</em>), serta siapkan 1-2 nama alternatif jika domain utama sudah terpakai.
                    </p>
                    <p>
                        Tim kami akan melakukan pengecekan ketersediaan domain (WHOIS check). Jika nama tersebut tersedia, domain akan langsung didaftarkan resmi menggunakan dokumen legalitas instansi Anda dan dikonfigurasi ke Cloud Server / Hosting berkecepatan tinggi dengan sertifikat keamanan SSL 256-bit.
                    </p>
                </div>
            </div>

            <!-- Tahap 3 -->
            <div class="step-card">
                <div class="step-header">
                    <div class="step-num">3</div>
                    <div class="step-title">Mekanisme Pembayaran Uang Muka (Down Payment 50%)</div>
                </div>
                <div class="step-body">
                    <p>
                        Untuk memulai proses pengerjaan (termasuk sewa domain resmi, sewa cloud hosting/server, instalasi SSL, konfigurasi database, lisensi komponen, dan alokasi tim developer), klien membayarkan Down Payment (DP) sebesar <strong>50%</strong> dari total nilai tagihan / kesepakatan penawaran.
                    </p>
                    <p>
                        Klien akan menerima <strong>Invoice Resmi CV. Beranda Teknologi Digital</strong> berstatus "PARTIAL" yang dilengkapi QR Code validasi digital. Bukti transfer mohon dikonfirmasikan melalui WhatsApp ke <strong>{{ $formattedPhone }}</strong>.
                    </p>
                </div>
            </div>

            <!-- Tahap 4 -->
            <div class="step-card">
                <div class="step-header">
                    <div class="step-num">4</div>
                    <div class="step-title">Pengiriman Materi, Aset Visual, Foto, dan Dokumentasi</div>
                </div>
                <div class="step-body">
                    <p>
                        Setelah pembayaran DP diselesaikan, klien dapat mengirimkan bahan atau materi untuk diinput ke dalam website / aplikasi (dapat dikirim via WhatsApp, Email, atau tautan Google Drive), meliputi:
                    </p>
                    <ul class="step-bullets">
                        <li><strong>Logo Resmi Institusi / Perusahaan:</strong> Kualitas resolusi tinggi (format PNG transparan, SVG, atau Vector).</li>
                        <li><strong>Profil Lengkap:</strong> Visi, Misi, Sejarah Singkat, Struktur Organisasi, serta Sambutan Pimpinan / Kepala Instansi.</li>
                        <li><strong>Foto & Dokumentasi Kegiatan:</strong> Foto gedung kantor/kampus/sekolah, sarana prasarana, fasilitas penunjang, kegiatan operasional/belajar mengajar, serta prestasi.</li>
                        <li><strong>Data Kontak Resmi:</strong> Alamat lengkap, nomor telepon, nomor WhatsApp resmi, email institusi, tautan media sosial, serta titik lokasi Google Maps.</li>
                        <li><strong>(Opsional) Referensi & Preferensi Khusus:</strong> Tautan referensi website yang disukai dari segi tata letak, warna, atau fitur khusus yang diinginkan.</li>
                    </ul>
                </div>
            </div>

            <!-- Tahap 5 -->
            <div class="step-card">
                <div class="step-header">
                    <div class="step-num">5</div>
                    <div class="step-title">Proses Pengerjaan, Lisensi Theme/Widget Premium & Review (Revisi)</div>
                </div>
                <div class="step-body">
                    <p>
                        Tim kami akan mendesain UI/UX modern, merancang arsitektur sistem responsif (ramah smartphone & desktop), serta menginstal Lisensi Theme & Widget/Plugin Premium berbayar.
                    </p>
                    <p>
                        <strong>Estimasi Waktu Pengerjaan:</strong> 7 - 14 hari kerja setelah bahan-bahan yang dibutuhkan dikirimkan lengkap oleh klien.
                    </p>
                    <p>
                        <strong>Sesi Review & Garansi Revisi:</strong> Klien diberikan tautan live staging untuk memeriksa dan mencoba website secara langsung. Klien berhak mengajukan penyesuaian konten dan tampilan hingga disetujui (sesuai ruang lingkup kesepakatan awal) sebelum situs diluncurkan secara publik.
                    </p>
                </div>
            </div>

            <!-- Tahap 6 -->
            <div class="step-card">
                <div class="step-header">
                    <div class="step-num">6</div>
                    <div class="step-title">Pelunasan 50%, Serah Terima (Handover) & Garansi Maintenance 1 Tahun</div>
                </div>
                <div class="step-body">
                    <p>
                        Setelah website selesai dikerjakan, direview, dan dinyatakan tuntas/disetujui oleh klien, klien melakukan pembayaran pelunasan sisa tagihan sebesar <strong>50%</strong>. Invoice resmi akan diperbarui statusnya menjadi <strong>LUNAS (PAID)</strong>.
                    </p>
                    <p>
                        <strong>Serah Terima Hak Akses Penuh:</strong> Klien akan menerima seluruh kredensial akses (Akun Administrator CMS, akses email resmi domain, panduan operasional berupa video atau buku manual).
                    </p>
                    <p>
                        <strong>Layanan Maintenance & Garansi Resmi 1 Tahun Dimulai:</strong> Mencakup dukungan teknis jika terjadi kendala server/domain, pembaruan keamanan sistem, backup berkala, serta konsultasi teknis gratis selama 1 tahun penuh.
                    </p>
                </div>
            </div>

        </div>

        <!-- Informasi Rekening & Saluran Transfer Resmi (Identik Format Invoice) -->
        <div class="payment-box-full">
            <div class="payment-box-header">
                <div class="payment-box-title">
                    <span>INFORMASI TUJUAN TRANSFER / SALURAN PEMBAYARAN RESMI</span>
                    <span style="font-size: 10px; color: #10b981; font-weight: 800;">✓ REKENING TERVERIFIKASI</span>
                </div>
                <div class="payment-box-subtext">
                    Pembayaran uang muka (DP) maupun pelunasan dapat ditransfer ke salah satu rekening bank atau e-wallet resmi berikut:
                </div>
            </div>

            <!-- Grid 4 Bank Resmi (2x2 Simetris Penuh Berlogo Resmi) -->
            <div class="bank-accounts-grid">
                <div class="bank-card">
                    <div class="bank-card-left">
                        <div class="bank-logo-wrap">
                            <img src="{{ $getBankLogo('bsi') }}" alt="BSI" class="bank-logo-img" />
                        </div>
                        <div class="bank-acc-info">
                            <span class="bank-acc-label">BSI (Bank Syariah Indonesia)</span>
                        </div>
                    </div>
                    <span class="mono bank-acc-num">8926301510</span>
                </div>
                <div class="bank-card">
                    <div class="bank-card-left">
                        <div class="bank-logo-wrap">
                            <img src="{{ $getBankLogo('bri') }}" alt="BRI" class="bank-logo-img" />
                        </div>
                        <div class="bank-acc-info">
                            <span class="bank-acc-label">BRI (Bank Rakyat Indonesia)</span>
                        </div>
                    </div>
                    <span class="mono bank-acc-num">563701043113533</span>
                </div>
                <div class="bank-card">
                    <div class="bank-card-left">
                        <div class="bank-logo-wrap">
                            <img src="{{ $getBankLogo('jago') }}" alt="Bank Jago Syariah" class="bank-logo-img" />
                        </div>
                        <div class="bank-acc-info">
                            <span class="bank-acc-label">Bank Jago Syariah</span>
                        </div>
                    </div>
                    <span class="mono bank-acc-num">504724018833</span>
                </div>
                <div class="bank-card">
                    <div class="bank-card-left">
                        <div class="bank-logo-wrap">
                            <img src="{{ $getBankLogo('seabank') }}" alt="SeaBank" class="bank-logo-img" />
                        </div>
                        <div class="bank-acc-info">
                            <span class="bank-acc-label">SeaBank</span>
                        </div>
                    </div>
                    <span class="mono bank-acc-num">901020639279</span>
                </div>
            </div>

            <!-- E-Wallet Resmi (ShopeePay, DANA, OVO, GoPay) Simetris Penuh -->
            <div class="ewallet-card">
                <div class="ewallet-left">
                    <div class="ewallet-logos-row">
                        <img src="{{ $getBankLogo('shopeepay') }}" alt="ShopeePay" class="ewallet-logo-img" />
                        <img src="{{ $getBankLogo('dana') }}" alt="DANA" class="ewallet-logo-img" />
                        <img src="{{ $getBankLogo('ovo') }}" alt="OVO" class="ewallet-logo-img" />
                        <img src="{{ $getBankLogo('gopay') }}" alt="GoPay" class="ewallet-logo-img" />
                    </div>
                    <div class="ewallet-acc-label">E-Wallet (ShopeePay / DANA / OVO / GoPay)</div>
                </div>
                <div class="mono ewallet-acc-num">085267774878</div>
            </div>

            <div class="account-holder-line">
                <span>Semua rekening & e-wallet resmi atas nama: <strong>Septa Ryan Hidayat</strong></span>
                <span>Konfirmasi Pembayaran WA: <strong>{{ $formattedPhone }}</strong></span>
            </div>
        </div>

        <!-- Kontak & Konfirmasi Card Grid -->
        <div class="contact-box-grid">
            <div class="contact-card-item">
                <div class="contact-card-label">WhatsApp Admin</div>
                <div class="contact-card-value">
                    <a href="https://wa.me/{{ $rawWaPhone }}" target="_blank">+{{ $rawWaPhone }}</a>
                </div>
            </div>
            <div class="contact-card-item">
                <div class="contact-card-label">Email Korespondensi</div>
                <div class="contact-card-value">
                    <a href="mailto:{{ $settings['contact_email'] ?? 'info@berandadigital.net' }}">{{ $settings['contact_email'] ?? 'info@berandadigital.net' }}</a>
                </div>
            </div>
            <div class="contact-card-item">
                <div class="contact-card-label">Website Resmi</div>
                <div class="contact-card-value">
                    <a href="https://{{ $settings['site_website'] ?? 'www.berandadigital.net' }}" target="_blank">{{ $settings['site_website'] ?? 'www.berandadigital.net' }}</a>
                </div>
            </div>
            <div class="contact-card-item">
                <div class="contact-card-label">Alamat Kantor</div>
                <div class="contact-card-value">
                    Jl. Sarjana, Timbangan, Ogan Ilir, Sumatera Selatan
                </div>
            </div>
        </div>

        <!-- Footer Notice with Digital QR Verification (Identik Invoice BTD) -->
        <div class="doc-footer-container">
            <div class="doc-footer-row">
                <div class="footer-left">
                    <div class="company-name-bottom">{{ $settings['company_legal_name'] ?? ($settings['company_name'] ?? 'CV. Beranda Teknologi Digital') }}</div>
                    <div class="website-line">
                        <a href="https://{{ $settings['site_website'] ?? 'www.berandadigital.net' }}" target="_blank">{{ $settings['site_website'] ?? 'www.berandadigital.net' }}</a>
                    </div>
                    <div class="doc-legal-note">
                        Dokumen ini diterbitkan resmi melalui sistem komputerisasi CV. Beranda Teknologi Digital dan sah tanpa tanda tangan basah.
                    </div>
                </div>

                <div class="footer-right-qr">
                    <div class="qr-validation-card">
                        <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&margin=2&color=000000&data={{ urlencode($docUrl) }}" 
                             alt="QR Code Validasi Dokumen Panduan Pemesanan BTD" 
                             class="qr-img" />
                        <div class="qr-info">
                            <span class="qr-status-tag">
                                ✓ DOKUMEN RESMI STANDAR
                            </span>
                            <div class="qr-title">Validasi Dokumen Digital</div>
                            <div class="qr-desc">Scan QR Code untuk verifikasi keaslian panduan pemesanan ini secara langsung di server resmi CV. Beranda Teknologi Digital.</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dotted-divider"></div>

            <div class="country-bottom">{{ $settings['company_country'] ?? 'Indonesia' }}</div>
        </div>

    </div>

    <!-- Toast Notification -->
    <div id="toastNotif" class="toast-notif">
        <span>✓</span> <span id="toastMsg">Tautan berhasil disalin ke clipboard!</span>
    </div>

    <script>
        function copyShareLink(url) {
            if (navigator.clipboard && window.isSecureContext) {
                navigator.clipboard.writeText(url).then(function() {
                    showToast('Tautan dokumen berhasil disalin ke clipboard!');
                }).catch(function() {
                    fallbackCopy(url);
                });
            } else {
                fallbackCopy(url);
            }
        }

        function fallbackCopy(text) {
            var textArea = document.createElement("textarea");
            textArea.value = text;
            textArea.style.position = "fixed";
            textArea.style.left = "-999999px";
            textArea.style.top = "-999999px";
            document.body.appendChild(textArea);
            textArea.focus();
            textArea.select();
            try {
                document.execCommand('copy');
                showToast('Tautan dokumen berhasil disalin ke clipboard!');
            } catch (err) {
                prompt("Salin tautan ini:", text);
            }
            document.body.removeChild(textArea);
        }

        function showToast(msg) {
            var toast = document.getElementById('toastNotif');
            var msgEl = document.getElementById('toastMsg');
            if (toast && msgEl) {
                msgEl.innerText = msg;
                toast.style.display = 'inline-flex';
                setTimeout(function() {
                    toast.style.display = 'none';
                }, 3500);
            }
        }
    </script>
</body>
</html>
