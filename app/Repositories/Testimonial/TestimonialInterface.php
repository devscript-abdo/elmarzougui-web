<?php

namespace App\Repositories\Testimonial;

interface  TestimonialInterface
{

    public function getTestimonials(array $with = null);

    public function getTestimonial($slug, array $with = null);
}
