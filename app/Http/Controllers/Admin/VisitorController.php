<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visitor;

class VisitorController extends Controller
{
    public function visitor()
    {
        $visitors = Visitor::orderBy('visited_at')->paginate(20);
        $totalVisitors = Visitor::count();
        return view('admin.visitors', compact('visitors', 'totalVisitors'));
    }
}