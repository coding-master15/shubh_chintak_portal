<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Banner;

class BannerController extends Controller
{
    public function addBanner(Request $request) {

        $file = $request->file('image');
        $url = $request->input('url');

        if($file == null) {
            return redirect()->back()->withErrors('select image');
        }

        $file_name = $file->getClientOriginalName();
        $file_size = round($file->getSize() / 1024);
        $file_ex = $file->getClientOriginalExtension();
        $file_mime = $file->getMimeType();

        if (!in_array($file_ex, array('jpg', 'gif', 'png'))) return redirect()->back()->withErrors('Invalid image extension we just allow JPG, GIF, PNG');

        $random = Str::random(20);
        $newname = $random.$file_name;
        $file->move(base_path().'/public/uploads/', $newname);

        Banner::insert([
            'image' => url('/').'/uploads/'.$newname,
            'link' => $url,
        ]);

        return redirect()->route('tables.banners', []);
    }

    public function deleteBanner(Request $request) {
        $data = Banner::find($request->input('id'));
        $data->delete();
        return redirect()->back()->withSuccess('Updated');
    }
}
