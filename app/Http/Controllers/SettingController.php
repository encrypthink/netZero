<?php

namespace App\Http\Controllers;

use App\Models\Identity;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $identity = Identity::first();
        return view('module.setting.index', ['identity' => $identity]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'website_title' => 'required|min:5',
            'website_url' => 'required|min:5',
            'administrator_email' => 'required|email',
            'description' => 'required|min:15'
        ]);

        $setting = Identity::firstOrNew([
            'name' => $request->website_title,
            'site_url' => $request->website_url,
            'administrator_email' => $request->administrator_email,
            'description' => $request->description
        ]);

        $setting->name = $request->website_title;
        $setting->site_url = $request->website_url;
        $setting->administrator_email = $request->administrator_email;
        $setting->description = $request->description;
        $setting->save();
        
        return redirect()->route('setting.index')->with('success', 'Success to update website identity');
    }
}
