<?php

namespace App\Http\Controllers;

use App\Models\SiteSettings;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //Site Settings Starts
    public function list_settings(Request $request)
    {
        $title = "Site Settings";
        $menu = "site_settings";
        $user = $request->session()->get('AdminUser');
        if ($user) {
            $status = true;
        }
        $siteSetting = SiteSettings::pluck('key', 'value');
        $data = compact('status', 'user', 'title', 'menu', 'siteSetting');

        return view('AdminPanel.SiteSettings.formlist', $data);
    }
    //Site Settings Ends
}
