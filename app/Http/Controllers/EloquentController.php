<?php

namespace App\Http\Controllers;

use App\Models\User;
class EloquentController extends Controller
{
    public function first()
    {
        $user=User::where('id',1)->get();//massiv qaytardi
        return $user;
    }

    public function find()
    {
        $user=User::where('id',1)->first();
        return $user;
    }
}
