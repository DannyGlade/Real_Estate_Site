<?php

namespace App\Http\Controllers;

use App\Models\SiteSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $siteSetting = SiteSettings::pluck('value', 'key');
        // dd($siteSetting);
        $data = compact('status', 'user', 'title', 'menu', 'siteSetting');

        return view('AdminPanel.SiteSettings.formlist', $data);
    }
    public function save_settings(Request $request)
    {
        $request->validate([
            'logo_image' => 'mimes:png,jpg'
        ]);
        // dd($request);
        if ($request->hasFile('logo_image')) {
            $siteSetting = SiteSettings::where('key', 'logo_image')->first();
            if ($siteSetting) {
                if (!empty($siteSetting->value)) {
                    Storage::delete('public/siteSettings/' . $siteSetting->value);
                }
                $image = $request->file('logo_image');
                $iname = date('Ym') . '-' . rand() . '.' . $image->extension();
                $store = $image->storeAs('public/siteSettings', $iname);
                if ($store) {
                    $siteSetting->update(['value' => $iname]);
                }
            } else {
                $image = $request->file('logo_image');
                $iname = date('Ym') . '-' . rand() . '.' . $image->extension();
                $store = $image->storeAs('public/siteSettings', $iname);
                if ($store) {
                    $siteSetting = SiteSettings::create(['key' => 'logo_image', 'value' => $iname]);
                }
            }
        }
        foreach ($request->except(['_token', 'logo_image']) as $key => $value) {
            $siteSetting = SiteSettings::where('key', $key)->first();
            if ($siteSetting) {
                $siteSetting->update(compact('value'));
            } else {
                $siteSetting = SiteSettings::create(compact('key', 'value'));
            }
        }
        $request->session()->flash('msg', 'Updated...');
        $request->session()->flash('msgst', 'success');
        return redirect(route('list_settings'));
    }
    public function ajaxDelete(Request $request)
    {
        $valid = validator($request->all(), [
            'key' => 'exists:site_settings,key'
        ])->validate();
        // dd($request);
        $key = $request->key;

        if ($valid) {
            $siteSetting = SiteSettings::where('key', $key)->first();
            if ($siteSetting) {
                if (!empty($siteSetting->value)) {
                    Storage::delete('public/siteSettings/' . $siteSetting->value);
                    $res = $siteSetting->update(['value' => null]);
                }
            }
            if ($res) {
                return json_encode(array('message' => 'Image Deleted', 'status' => true));
            } else {
                return json_encode(array('message' => 'No Image', 'status' => false));
            }
        }
    }
    //Site Settings Ends
}
