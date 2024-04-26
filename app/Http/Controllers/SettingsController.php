<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;

class SettingsController extends Controller
{
    public function saveSettings(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'copyright' => 'required',
        ]);

        $setting = new Settings();
        $setting->title = $request->title;
        $setting->copyright = $request->copyright;
        $setting->save();

        return redirect()->back()->with('success', 'Settings saved successfully.');
    }

    public function getLatestSetting()
    {
        $latestSetting = Settings::latest()->first();

        return $latestSetting;
    }

    public function showDashboard()
    {
        $latestSetting = $this->getLatestSetting();

        return view('dashboard', compact('latestSetting'));
    }
}
