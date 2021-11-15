<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Models\Category as ModelsCategory;

class Category extends Model
{
    use HasFactory;

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    public function getPhotoAttribute()
    {

        return isset($this->image)
            ?
            Voyager::image($this->image)
            :
            "https://dummyimage.com/40x40/ced4da/6c757d";
    }

    public function getUrlAttribute()
    {
        return route('category.single', $this->slug);
    }
}
