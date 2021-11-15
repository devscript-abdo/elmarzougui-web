<?php

namespace App\Repositories\Post;

interface PostInterface
{

    public function getPosts(array $with = null);

    public function getPost($slug, array $with = null);
}
