<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DropzoneController extends Controller
{
    public function dropzone()
    {
        return view('pdf.dropzone');
    }

    public function dropzoneStore(Request $request)
    {
       $image=$request->file('file');
       $image_name=$image->getClientOriginalName();
//       $image_name=time().'.'.$image->extension();
       $image->move(public_path('images'),$image_name);
       return response()->json(['success'=>$image_name]);
    }
}
