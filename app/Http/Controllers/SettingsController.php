<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;

class SettingsController extends Controller
{
    private function saveSettingsToDatabase($request)
    {
        $request->validate([
            'title' => 'required',
            'copyright' => 'required',
        ]);
    
        $setting = new Settings();
        $setting->title = $request->title;
        $setting->copyright = $request->copyright;
        $setting->save();
    
        return $setting;
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
    public function showConfiguration()
    {
        $latestSetting = $this->getLatestSetting();

        return view('configure', compact('latestSetting'));
    }


  public function saveSettings(Request $request)
{
    $setting = $this->saveSettingsToDatabase($request);

    return redirect()->back()->with('success', 'Settings saved successfully.');
}

public function saveConfiguration(Request $request)
{
    $setting = $this->saveSettingsToDatabase($request);

    return redirect()->back()->with('success', 'Settings saved successfully.');
}

}
