<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{


    public function settings(Request $request)
    {

        if ($request->hasFile('logo')) {
            $file  = $request->file('logo');
            $logo = $file->getClientOriginalName();
            $file->move('images/logo', $logo);

            setting(["logo" => $logo])->save();
        }


        if ($request->hasFile('eth_barcode')) {
            $file  = $request->file('eth_barcode');
            $eth_barcode = $file->getClientOriginalName();
            $file->move('images/logo', $eth_barcode);

            setting(["eth_barcode" => $eth_barcode])->save();

        }


        setting(["site_name" => request('site_name')])->save();

        setting(["site_description" => request('site_description')])->save();

        setting(["site_contact" => request('site_contact')])->save();

        setting(["site_address" => request('site_address')])->save();

        setting(["eth_address" => request('eth_address')])->save();


        return redirect()->back();

        /*         "site_contact" => "0808009080"
        "site_description" => "This site is an investment site"
        "type" => "dfsdfsf432sdadfa"
        "eth_barcode_remove" => null
        "status" => null
        "logo" => Illuminate\Http\UploadedFile {#328 ▶}
        "eth_barcode" => Illuminate\Http\UploadedFile {#327 ▶}

        setting($request->all())->save(); */
    }
}
