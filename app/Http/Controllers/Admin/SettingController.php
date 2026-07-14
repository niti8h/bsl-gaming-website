<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::pluck('value', 'key')->toArray();
        return view('admin.settings.index', compact('settings'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => 'nullable|string',
            'email2' => 'nullable|string',
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
            'trust_number_1' => 'nullable|string',
            'trust_label_1' => 'nullable|string',
            'trust_number_2' => 'nullable|string',
            'trust_label_2' => 'nullable|string',
            'trust_number_3' => 'nullable|string',
            'trust_label_3' => 'nullable|string',
            'trust_number_4' => 'nullable|string',
            'trust_label_4' => 'nullable|string',
        ]);

        foreach ($data as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        return redirect()->route('admin.settings.index')->with('success', 'Contact settings updated successfully.');
    }
}
