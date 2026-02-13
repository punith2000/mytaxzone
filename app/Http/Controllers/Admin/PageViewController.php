<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageView;

class PageViewController extends Controller
{
    public function pageview()
    {
        $pageviews = PageView::orderBy('visited_at')->paginate(20);
        $totalViews = PageView::count();
        return view('admin.page_view', compact('pageviews', 'totalViews'));
    }
}