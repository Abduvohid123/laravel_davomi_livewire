<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EloquentController extends Controller
{
    public function first()
    {
        $user=User::where('id',1)->get();
        return $user;
    }

    public function find()
    {
        $user=User::where('id',1)->first();
        return $user;
    }
}
