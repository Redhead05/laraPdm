<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class IndexController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('index',[
            'routes' =>[
                'blog' => route('blog.index'),
                'blogDetails' => route('blog-details.index'),
            ],
        ]);
    }
}
