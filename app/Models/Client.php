<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;

class Client extends Model
{
    use HasFactory;

    public function getPhotoAttribute()
    {
        return Voyager::image($this->logo);
    }
}
