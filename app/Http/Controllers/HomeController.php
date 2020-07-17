<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application landing.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('home.index');
    }
    public function blog(){
        return view('home.blog');
    }
}
