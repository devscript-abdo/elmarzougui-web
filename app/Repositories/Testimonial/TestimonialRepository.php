<?php

namespace App\Repositories\Testimonial;

use App\Models\Testimonial;

class TestimonialRepository implements TestimonialInterface
{

    private $testimonial;

    public function __construct(Testimonial $testimonial)
    {

        $this->testimonial = $testimonial;
    }

    public function getTestimonials(array $with = null)
    {
        if (isset($with) && is_array($with)) {

            return $this->testimonial->with($with)->get();
        }

        return $this->testimonial->all();
    }

    public function getTestimonial($slug, array $with = null)
    {
        if (isset($with) && is_array($with)) {
            return $this->testimonial->whereSlug($slug)->with($with)->firstOrFail();
        }
        return $this->testimonial->whereSlug($slug)->firstOrFail();
    }
}
