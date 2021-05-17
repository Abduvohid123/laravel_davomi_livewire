<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct()
    {
        $Product=[
            ['name'=>'komron1'],
            ['name'=>'komron2'],
            ['name'=>'komron3'],
            ['name'=>'komron4'],
        ];
        if (product::insert($Product)) {
            return "ok";
        }
        return 'iwkal';
    }

    public function search()
    {
        return view('pdf.search');
    }

    public function autocomplete(Request $request){
        $data= product::select('name')->where("name",'like',"%{$request->terms}%")->get();
        return response()->json($data);
    }
}
