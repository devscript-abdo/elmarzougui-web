<?php

namespace App\Http\Controllers\Developer;

use App\Http\Controllers\Controller;
use Spatie\ResponseCache\Facades\ResponseCache;

class DevloperController extends Controller
{
    //

    public function clearCache()
    {

        ResponseCache::clear();
        
        return back();
    }
}
