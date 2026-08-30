<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\UploadHelper;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::all()->keyBy('key');
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $data = $request->except(['_token', '_method', 'trainer_avatar_file']);

        if ($request->hasFile('trainer_avatar_file')) {
            $path = UploadHelper::upload($request->file('trainer_avatar_file'), 'settings');
            if ($path) {
                $data['trainer_avatar'] = $path;
            }
        }

        foreach ($data as $key => $val) {
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $val]
            );
        }

        return redirect()->route('admin.settings.index')->with('success', 'Pengaturan website dan skema warna berhasil disimpan.');
    }
}
