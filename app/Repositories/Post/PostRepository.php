<?php

namespace App\Repositories\Post;

use App\Models\Post;

class PostRepository implements PostInterface
{

    private $post;

    public function __construct(Post $post)
    {

        $this->post = $post;
    }

    public function getPosts(array $with = null)
    {
        if (isset($with) && is_array($with)) {
            return $this->post->with($with)->get();
        }
        return $this->post->all();
    }

    public function getPost($slug, array $with = null)
    {
        if (isset($with) && is_array($with)) {
            return $this->post->whereSlug($slug)->with($with)->firstOrFail();
        }
        return $this->post->whereSlug($slug)->firstOrFail();
    }
}
