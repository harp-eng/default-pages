<?php

namespace Harpreet\DefaultPages\Http\Controllers;

use Illuminate\Routing\Controller;

class PageController extends Controller
{
    public function show(string $page)
    {
        return view("default-pages::pages.$page", [
            'title' => config("default-pages.pages.$page.title")
        ]);
    }
}
