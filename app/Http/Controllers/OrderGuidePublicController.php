<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class OrderGuidePublicController extends Controller
{
    /**
     * Tampilkan dokumen panduan & alur pemesanan website/aplikasi untuk publik / klien.
     */
    public function show(Request $request)
    {
        $settings = Setting::all()->keyBy('key')->map(fn($s) => $s->value);
        $publicUrl = route('order-guide.show');

        return view('public.order_guide', compact('settings', 'publicUrl'));
    }
}
