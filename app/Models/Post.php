<?php

namespace App\Models;

use App\Collections\Post\PostCollections;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use Carbon\Carbon;

class Post extends Model
{
    use HasFactory;


    public function tags(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\Tag', 'post_tage', 'post_id', 'tag_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function getPhotoAttribute()
    {
        return Voyager::image($this->image);
    }

    public function getUrlAttribute()
    {
        return route('blog.single', $this->slug);
    }

    public function getFullDateSingleAttribute()
    {
        $date = Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at);

        return "{$date->format('d')} {$date->format('F')} {$date->format('Y')}";
    }

  
    public function newCollection(array $models = [])
    {
        return new PostCollections($models);
    }


    /***** */

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
