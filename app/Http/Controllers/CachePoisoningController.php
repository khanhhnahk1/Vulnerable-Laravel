<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;

class CachePoisoningController extends Controller
{
    public function index(Request $request)
    {
        $cacheKey = $request->getQueryString();
        $header = $request->header('X-Forwarded-Host');
        
        if (Cache::has($cacheKey)) {
            return Cache::get($cacheKey);
        } else {
            $response = View::make('cachepoisoning')->with('header', $header)->render();
            $expirationTime = now()->addSeconds(10);
            Cache::put($cacheKey, $response, $expirationTime);
            return $response;
        }
    }
}
