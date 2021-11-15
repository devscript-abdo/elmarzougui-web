<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Repositories\Post\PostInterface;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //

    public function index()
    {
        $posts = app(PostInterface::class)->getPosts();
        
        return view('theme.home.index', compact('posts'));
    }

    public function about()
    {
        return view('theme.about.index');
    }
}
