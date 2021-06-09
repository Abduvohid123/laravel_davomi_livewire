<?php

namespace App\Http\Controllers;

use App\Models\ScrollPagination;
use Illuminate\Http\Request;

class ScrollPaginationController extends Controller
{
    public function index(Request $request)
    {
        $scrollPagination=ScrollPagination::paginate(5);

        if ($request->ajax()){
            $view=view('ajax.data',compact('scrollPagination'))->render();
            return response()->json(['html'=>$view]);
        }

        return view('ajax.scroll',['scrollPagination'=>$scrollPagination]);
    }
}
