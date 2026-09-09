<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use App\Models\Setting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contactEmail = Setting::getValue('contact_email', 'contact@berandadigital.net');
        $contactPhone = Setting::getValue('contact_phone', '+62 812-3456-7890');
        $contactAddress = Setting::getValue('contact_address', 'Jl. Teknologi Digital No. 88, Cyber Hub, Jakarta South');

        return view('public.contact', compact('contactEmail', 'contactPhone', 'contactAddress'));
    }

    public function store(Request $request)
    {
        // ══════════════════════════════════════════════════════
        // ANTI-BOT HONEYPOT CHECK
        // If hidden honeypot field is filled, silently discard bot submission
        // ══════════════════════════════════════════════════════
        if ($request->filled('_hp_company')) {
            \Log::info("Bot inquiry submission quietly dropped via honeypot from IP: " . $request->ip());
            return redirect()->back()->with('success', 'Pesan Anda telah berhasil dikirim! Tim Beranda Digital akan segera menghubungi Anda.');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:150',
            'email' => 'required|email:rfc,dns|max:191',
            'phone' => 'nullable|string|max:40',
            'subject' => 'nullable|string|max:200',
            'message' => 'required|string|max:5000',
        ]);

        // Input Sanitization against XSS and header injections
        $cleanData = [
            'name' => strip_tags(trim($validated['name'])),
            'email' => filter_var(trim($validated['email']), FILTER_SANITIZE_EMAIL),
            'phone' => isset($validated['phone']) ? preg_replace('/[^\d\+\-\s\(\)]/', '', trim($validated['phone'])) : null,
            'subject' => isset($validated['subject']) ? strip_tags(trim($validated['subject'])) : 'Permintaan Penawaran',
            'message' => htmlspecialchars(strip_tags(trim($validated['message'])), ENT_QUOTES, 'UTF-8'),
        ];

        Inquiry::create($cleanData);

        return redirect()->back()->with('success', 'Pesan Anda telah berhasil dikirim! Tim Beranda Digital akan segera menghubungi Anda.');
    }
}
