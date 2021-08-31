<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index(){
         $members=Post::all();

      return view('Posts/post',compact('members'));
    }
}
