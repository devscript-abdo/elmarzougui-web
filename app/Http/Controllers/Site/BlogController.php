<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Repositories\Post\PostInterface;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //

    public function index()
    {
        $posts = app(PostInterface::class)->getPosts(['tags', 'category'])->groupByPosition();

        return view('theme.blog.index', compact('posts'));
    }

    public function show($post)
    {

        $post = app(PostInterface::class)->getPost($post, ['tags']);

        return view('theme.blog.single.index', compact('post'));
    }
}
