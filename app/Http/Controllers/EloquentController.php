<?php

namespace App\Http\Controllers;

use App\Models\MultipleConnection;
use App\Models\User;

class EloquentController extends Controller


{

    public function multiple_connection()
    {
        return MultipleConnection::all();

    }

    public function helper()
    {
        return split_name('salom qalesan ');
    }

    public function first()
    {
        $user = User::where('id', 1)->get();//massiv qaytardi
        return $user;
    }

    public function find()
    {
        $user = User::where('id', 1)->first();
        return $user;
    }
}
