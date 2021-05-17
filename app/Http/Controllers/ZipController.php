<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ZipArchive;
use ZipStream\File;


class ZipController extends Controller
{
    public function zip_file(){
        $zip=new ZipArchive();
        if ($zip->open(public_path('my_files.zip'),ZipArchive::CREATE)==TRUE) {
            $files=\Illuminate\Support\Facades\File::files(public_path('my_files'));
            foreach($files as $key =>$value){
                $zip->addFile($value,basename($value));
            }
            $zip->close();
        }
        return response()->download(public_path('my_files.zip'));
    }
}
