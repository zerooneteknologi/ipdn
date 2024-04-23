<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        return view('admin.setting.index', [
            'settings' => Setting::all()
        ]);
    }

    public function update(Request $request, Setting $setting)
    {
        $setting->update([
            'setting_embed' => $request->setting_embed,
        ]);

        return redirect()->route('setting.index')->with('success', 'Berhasil mengubah Pengaturan!');
    }
}
