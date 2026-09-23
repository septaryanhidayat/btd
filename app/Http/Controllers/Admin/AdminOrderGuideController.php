<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class AdminOrderGuideController extends Controller
{
    /**
     * Tampilkan halaman pratinjau Dokumen SOP & Panduan Pemesanan di dashboard Admin
     * beserta aksi cepat bagikan ke klien via link, WhatsApp, dan cetak PDF.
     */
    public function index(Request $request)
    {
        $settings = Setting::all()->keyBy('key')->map(fn($s) => $s->value);
        $publicUrl = route('order-guide.show');
        
        // Template pesan WhatsApp ramah untuk calon klien
        $companyName = $settings['company_name'] ?? 'CV. Beranda Teknologi Digital';
        $waMessage = "Halo Bapak/Ibu,\n\nTerima kasih atas ketertarikan Anda untuk bekerja sama dalam pembuatan website / aplikasi dengan {$companyName}.\n\nBerikut kami lampirkan dokumen resmi Panduan & SOP Alur Pemesanan kami (termasuk persyaratan legalitas domain, rekening resmi, dan tahapan pengerjaan):\n👉 {$publicUrl}\n\nJika ada pertanyaan lebih lanjut, silakan hubungi kami kembali. Terima kasih!";

        $encodedWaMessage = urlencode($waMessage);

        return view('admin.order_guide.index', compact('settings', 'publicUrl', 'waMessage', 'encodedWaMessage'));
    }
}
