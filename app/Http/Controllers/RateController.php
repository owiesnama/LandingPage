<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RateController extends Controller
{
    public function index(){

        $posts = Post::all();

        return View('home',compact('posts'));
    }
}
