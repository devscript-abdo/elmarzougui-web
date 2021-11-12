<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //

    public function index()
    {

        return view('theme.blog.index');
    }

    public function show()
    {
        return view('theme.blog.single.index');
    }
}
