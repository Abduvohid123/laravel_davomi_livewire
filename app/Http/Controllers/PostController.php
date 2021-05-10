<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getComments($id)
    {
        $post=new Post();
        $comments=$post->find($id)->comments;
        return $comments;
    }
}
