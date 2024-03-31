<?php

namespace App\Http\Controllers;

use App\Models\Page;

class PageController extends Controller
{
    public function show($route)
    {
        $page = Page::where('route', $route)->first();

        if (!$page) {
            abort(404);
        }

        return view('page')->with('page', $page);
    }
}
