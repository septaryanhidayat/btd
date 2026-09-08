<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Invoice #{{ $invoice->invoice_number }}</title>
</head>
<body style="font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #f1f5f9; margin: 0; padding: 30px 15px; color: #22282a; line-height: 1.6;">

    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px; background-color: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.06); border: 1px solid #e2e8f0;">
        <!-- Header -->
        <tr>
            <td style="background-color: #22282a; padding: 25px 30px; text-align: center;">
                <h2 style="color: #ffffff; margin: 0; font-size: 20px; font-weight: 800; letter-spacing: 0.5px;">
                    {{ $settings['company_legal_name'] ?? 'CV. Beranda Teknologi Digital' }}
                </h2>
                <div style="color: #269DB9; font-size: 12px; margin-top: 5px; font-weight: 600;">
                    Software House &bull; Mobile Apps &bull; AI Solutions
                </div>
            </td>
        </tr>

        <!-- Body Content -->
        <tr>
            <td style="padding: 30px;">
                <p style="font-size: 15px; margin-top: 0; color: #22282a;">
                    Yth. <strong>{{ $invoice->client_name }}</strong>,
                </p>
                @if($invoice->client_attn && $invoice->client_attn !== $invoice->client_name)
                    <p style="font-size: 13px; color: #64748b; margin-top: -8px;">
                        {{ $invoice->client_attn }}
                    </p>
                @endif
                <p style="font-size: 13.5px; color: #475569; margin-bottom: 24px;">
                    Berikut kami sampaikan dokumen invoice resmi <strong>#{{ $invoice->invoice_number }}</strong> terkait layanan pengembangan teknologi yang telah diterbitkan oleh CV. Beranda Teknologi Digital.
                </p>

                <!-- Invoice Summary Card -->
                <table width="100%" cellpadding="12" cellspacing="0" style="background-color: #f0f9fb; border: 1px solid #bee3eb; border-radius: 8px; margin-bottom: 24px;">
                    <tr>
                        <td style="font-size: 13px; color: #64748b; border-bottom: 1px solid #dcebf0;">Nomor Invoice:</td>
                        <td align="right" style="font-size: 14px; font-weight: 800; color: #269DB9; border-bottom: 1px solid #dcebf0;">
                            #{{ $invoice->invoice_number }}
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 13px; color: #64748b; border-bottom: 1px solid #dcebf0;">Tanggal Terbit:</td>
                        <td align="right" style="font-size: 13px; font-weight: 700; color: #22282a; border-bottom: 1px solid #dcebf0;">
                            {{ optional($invoice->invoice_date)->format('d/m/Y') }}
                        </td>
                    </tr>
                    @if($invoice->due_date)
                        <tr>
                            <td style="font-size: 13px; color: #64748b; border-bottom: 1px solid #dcebf0;">Jatuh Tempo:</td>
                            <td align="right" style="font-size: 13px; font-weight: 700; color: #22282a; border-bottom: 1px solid #dcebf0;">
                                {{ optional($invoice->due_date)->format('d/m/Y') }}
                            </td>
                        </tr>
                    @endif
                    <tr>
                        <td style="font-size: 13px; color: #64748b; border-bottom: 1px solid #dcebf0;">Status Pembayaran:</td>
                        <td align="right" style="font-size: 12px; font-weight: 800; border-bottom: 1px solid #dcebf0;">
                            @if($invoice->status === 'paid')
                                <span style="background-color: #ecfdf5; color: #047857; padding: 3px 10px; border-radius: 20px;">LUNAS (PAID)</span>
                            @elseif($invoice->status === 'partial')
                                <span style="background-color: #fffbeb; color: #b45309; padding: 3px 10px; border-radius: 20px;">SEBAGIAN (PARTIAL)</span>
                            @else
                                <span style="background-color: #fef2f2; color: #b91c1c; padding: 3px 10px; border-radius: 20px;">BELUM LUNAS (UNPAID)</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 14px; font-weight: 800; color: #22282a;">Total Tagihan:</td>
                        <td align="right" style="font-size: 16px; font-weight: 900; color: #269DB9;">
                            Rp {{ number_format($invoice->total_amount, 2, ',', '.') }}
                        </td>
                    </tr>
                </table>

                <!-- Items Breakdown -->
                <div style="font-size: 13px; font-weight: 800; color: #22282a; margin-bottom: 8px; text-transform: uppercase; letter-spacing: 0.5px;">
                    Rincian Layanan:
                </div>
                <table width="100%" cellpadding="8" cellspacing="0" style="border-collapse: collapse; margin-bottom: 24px; font-size: 12.5px;">
                    @if(is_array($invoice->items) && count($invoice->items) > 0)
                        @foreach($invoice->items as $item)
                            <tr style="border-bottom: 1px solid #e2e8f0;">
                                <td style="color: #334155; padding: 8px 0;">{{ $item['description'] ?? '-' }}</td>
                                <td align="right" style="font-weight: 700; color: #22282a; padding: 8px 0; white-space: nowrap;">
                                    Rp {{ number_format($item['amount'] ?? 0, 2, ',', '.') }}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr style="border-bottom: 1px solid #e2e8f0;">
                            <td style="color: #334155; padding: 8px 0;">Pelunasan Pembuatan Aplikasi</td>
                            <td align="right" style="font-weight: 700; color: #22282a; padding: 8px 0;">
                                Rp {{ number_format($invoice->total_amount, 2, ',', '.') }}
                            </td>
                        </tr>
                    @endif
                </table>

                <!-- Payment Note & Transfer Channels -->
                <div style="background-color: #f8fafc; border-left: 3.5px solid #269DB9; padding: 14px 18px; border-radius: 6px; margin-bottom: 25px; font-size: 12px; color: #334155; line-height: 1.6;">
                    <div style="font-weight: 800; color: #0f172a; margin-bottom: 6px; font-size: 13px;">
                        💳 Channel Pembayaran / Transfer:
                    </div>
                    @if(!empty($invoice->notes))
                        <div style="margin-bottom: 8px; font-weight: 600; color: #1e293b;">{{ $invoice->notes }}</div>
                    @endif
                    <div style="margin-bottom: 8px;">
                        Pembayaran dapat ditransfer ke salah satu rekening atau e-wallet berikut:
                    </div>
                    <table style="width: 100%; font-size: 12px; margin-bottom: 8px; border-collapse: collapse;">
                        <tr>
                            <td style="padding: 3px 0; width: 45%;"><strong>BSI:</strong> <code style="font-family: monospace; font-size: 13px; font-weight: bold; color: #0f172a;">8926301510</code></td>
                            <td style="padding: 3px 0; width: 55%;"><strong>BRI:</strong> <code style="font-family: monospace; font-size: 13px; font-weight: bold; color: #0f172a;">563701043113533</code></td>
                        </tr>
                        <tr>
                            <td style="padding: 3px 0;"><strong>Bank Jago:</strong> <code style="font-family: monospace; font-size: 13px; font-weight: bold; color: #0f172a;">504724018833</code></td>
                            <td style="padding: 3px 0;"><strong>SeaBank:</strong> <code style="font-family: monospace; font-size: 13px; font-weight: bold; color: #0f172a;">901020639279</code></td>
                        </tr>
                    </table>
                    <div style="margin-bottom: 6px;">
                        <strong>E-wallet (ShopeePay / DANA / OVO / GoPay):</strong> <code style="font-family: monospace; font-size: 13px; font-weight: bold; color: #0f172a;">085267774878</code>
                    </div>
                    <div style="font-size: 11px; color: #64748b; border-top: 1px dashed #cbd5e1; padding-top: 6px; margin-top: 6px;">
                        Semua a.n. <strong style="color: #0f172a;">Septa Ryan Hidayat</strong> &bull; Konfirmasi WA ke <strong>{{ $settings['contact_phone'] ?? '0896 9524 9089' }}</strong>
                    </div>
                </div>

                <!-- Action Button -->
                <div style="text-align: center; margin: 30px 0 10px 0;">
                    <a href="{{ route('invoices.verify', $invoice->invoice_number) }}" target="_blank" style="display: inline-block; background-color: #269DB9; color: #ffffff; text-decoration: none; font-weight: 800; font-size: 14px; padding: 14px 28px; border-radius: 8px; box-shadow: 0 4px 10px rgba(38,157,185,0.3);">
                        📄 Buka / Cetak Invoice Resmi Online &rarr;
                    </a>
                </div>
            </td>
        </tr>

        <!-- Footer -->
        <tr>
            <td style="background-color: #f8fafc; padding: 20px 30px; text-align: center; font-size: 11px; color: #94a3b8; border-top: 1px solid #e2e8f0;">
                <div style="font-weight: 700; color: #475569; margin-bottom: 4px;">
                    {{ $settings['company_legal_name'] ?? 'CV. Beranda Teknologi Digital' }}
                </div>
                <div>
                    {{ $settings['company_address'] ?? 'Jalan Sarjana Blok A No. 25 Timbangan, Ogan Ilir, 30862' }}
                </div>
                <div style="margin-top: 4px;">
                    Website: <a href="https://www.berandadigital.net" style="color: #269DB9; text-decoration: none;">www.berandadigital.net</a> &bull; Email: info@berandadigital.net
                </div>
            </td>
        </tr>
    </table>

</body>
</html>
