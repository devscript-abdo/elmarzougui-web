<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //

    public function index()
    {
        return view('theme.home.index');
    }

    public function about()
    {
        return view('theme.about.index');
    }
}
