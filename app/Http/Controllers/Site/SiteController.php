<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Repositories\Client\ClientInterface;
use App\Repositories\Post\PostInterface;
use App\Repositories\Testimonial\TestimonialInterface;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //

    public function index()
    {
        $posts = app(PostInterface::class)->getPosts();

        $testimonials = app(TestimonialInterface::class)->getTestimonials();

        return view('theme.home.index', compact('posts', 'testimonials'));
    }

    public function about()
    {
        $clients = app(ClientInterface::class)->getClients();

        return view('theme.about.index', compact('clients'));
    }
}
