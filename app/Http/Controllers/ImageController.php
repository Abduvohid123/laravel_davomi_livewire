<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
    public function image(Request $request)
    {
        if ($request->post()) {
            $image=$request->file;
            $file_name=$image->getClientOriginalName();
            $image_resize=Image::make($image->getRealPath());
            $image_resize->resize(300,300);
            $image_resize->save(public_path('images/'.$file_name));
            return "rasm qirqildi";
        }

        return view('pdf.image');
    }
}
