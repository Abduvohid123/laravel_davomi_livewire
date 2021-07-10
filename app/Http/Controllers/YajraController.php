<?php

namespace App\Http\Controllers;

use App\Models\Yajra;
use Illuminate\Http\Request;

class YajraController extends Controller
{
    public function index(Request $request)
    {
        $yajra = Yajra::get();
        if ($request->has('view_deleted')) {
            $yajra = Yajra::onlyTrashed()->get();
        }
        return view('soft_delete.yajra', compact('yajra'));
    }

    public function delete($id)
    {
        Yajra::find($id)->delete();
        return back()->with('success', "Malumot muvaffaqiyatli o'chirildi");
    }

    public function restore($id)
    {
        Yajra::withTrashed()->find($id)->restore();
        return back()->with('success', "Malumot qayta tiklandi");
    }

    public function restore_all()
    {
        Yajra::onlyTrashed()->restore();
        return back()->with('success', "Barcha malumotlar qayta tiklandi");
    }
}
