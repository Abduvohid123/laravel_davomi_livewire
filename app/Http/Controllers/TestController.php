<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    private $attributes;

    public function index()
    {
        return $this->attributes['email'];
    }
}
