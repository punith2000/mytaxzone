<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;

class CacheController extends Controller
{
    public function clear()
    {
        try {
            // Clear Laravel caches
            Artisan::call('cache:clear');
            Artisan::call('config:clear');
            Artisan::call('route:clear');
            Artisan::call('view:clear');

            // Optionally rebuild cache for faster reload
            Artisan::call('config:cache');
            Artisan::call('route:cache');
            Artisan::call('view:cache');

            // Clear custom cached data if needed
            Cache::flush();

            return redirect()->back()->with('success', 'Pure Cache cleared and refreshed successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error clearing cache: ' . $e->getMessage());
        }
    }
}