<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function insert(){
        $post= new Post();
        $user= new User();
        $post->body="bir narsa";
        $post->title="ikki narsa";
        $user->name="komron";
        $user->email="dsjsldjsl@dslsk.com";
        $user->password=bcrypt('parol');
        $user->save();
        $user->post()->save($post);
        return "malumotlar saqlandi";
    }

    public function  findPost($id)
    {

        $post=User::find($id)->post;
        return $post;
    }
}
