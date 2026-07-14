<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AppearanceController extends Controller
{
    public function index()
    {
        $settings = Setting::pluck('value', 'key')->toArray();
        return view('admin.appearance.index', compact('settings'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'hero_title' => 'nullable|string',
            'hero_subtitle' => 'nullable|string',
            'logo_image' => 'nullable|image|max:2048',
            'footer_logo' => 'nullable|image|max:2048',
            'favicon' => 'nullable|image|max:1024',
            'hero_image' => 'nullable|image|max:2048',
        ]);

        // Text fields
        if ($request->has('hero_title')) {
            Setting::updateOrCreate(['key' => 'hero_title'], ['value' => $data['hero_title']]);
        }
        if ($request->has('hero_subtitle')) {
            Setting::updateOrCreate(['key' => 'hero_subtitle'], ['value' => $data['hero_subtitle']]);
        }

        // Image files
        $imageKeys = ['logo_image', 'footer_logo', 'favicon', 'hero_image'];
        foreach ($imageKeys as $key) {
            if ($request->hasFile($key)) {
                $oldSetting = Setting::where('key', $key)->first();
                if ($oldSetting && $oldSetting->value) {
                    Storage::disk('public')->delete($oldSetting->value);
                }
                $path = $request->file($key)->store('appearance', 'public');
                Setting::updateOrCreate(['key' => $key], ['value' => $path]);
            }
        }

        return redirect()->route('admin.appearance.index')->with('success', 'Appearance settings updated successfully.');
    }
}
