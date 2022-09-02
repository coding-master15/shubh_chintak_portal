<?php

namespace App\Http\Controllers;
use App\Models\Testimonial;

use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function addTestimonial(Request $request) {
        $name = $request->input('name');
        $testimonial = $request->input('testimonial');
        Testimonial::insert([
            'name' => $name,
            'review' => $testimonial,
        ]);

        return redirect()->route('tables.testimonials', []);
    }

    public function deleteTestimonial(Request $request) {
        $data = Testimonial::find($request->input('id'));
        $data->delete();
        return redirect()->back()->withSuccess('Updated');
    }
}
