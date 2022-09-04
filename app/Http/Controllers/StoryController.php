<?php

namespace App\Http\Controllers;
use App\Models\SuccessStory;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function addStory(Request $request) {
        $name = $request->input('name');
        $url = $request->input('url');

        $file = $request->file('image');
        $video = $request->file('video');

        if($file == null) {
            return redirect()->back()->withErrors('select image');
        }

        if($video == null) {
            return redirect()->back()->withErrors('select video');
        }

        $file_name = $file->getClientOriginalName();
        $file_size = round($file->getSize() / 1024);
        $file_ex = $file->getClientOriginalExtension();
        $file_mime = $file->getMimeType();

        if (!in_array($file_ex, array('jpg', 'gif', 'png'))) return redirect()->back()->withErrors('Invalid image extension we just allow JPG, GIF, PNG');

        $video_name = $video->getClientOriginalName();
        $video_size = round($video->getSize() / 1024);
        $video_ex = $video->getClientOriginalExtension();
        $video_mime = $video->getMimeType();

        if (!in_array($video_ex, array('mp4', 'mov', 'wmv', 'avi', 'mkv'))) return redirect()->back()->withErrors('Invalid video extension we just allow MP4, MOV, WMV, AVI and MKV');

        $random = Str::random(20);
        $newname = $random.$file_name;
        $file->move(base_path().'/public/uploads/', $newname);

        $randoma = Str::random(20);
        $newnamea = $randoma.$video_name;
        $video->move(base_path().'/public/uploads/', $newnamea);

        SuccessStory::insert([
            'name' => $name,
            'url' => url('/').'/uploads/'.$newnamea,
            'image' => url('/').'/uploads/'.$newname,
        ]);

        return redirect()->route('tables.stories', []);
    }

    public function deleteStory(Request $request) {
        $data = SuccessStory::find($request->input('id'));
        $data->delete();
        return redirect()->back()->withSuccess('Updated');
    }
}
