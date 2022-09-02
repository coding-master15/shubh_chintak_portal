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

        SuccessStory::insert([
            'name' => $name,
            'url' => $url,
            'image' => base_path().'/public/uploads/'.$newname,
        ]);

        return redirect()->route('tables.stories', []);
    }

    public function deleteStory(Request $request) {
        $data = SuccessStory::find($request->input('id'));
        $data->delete();
        return redirect()->back()->withSuccess('Updated');
    }
}
