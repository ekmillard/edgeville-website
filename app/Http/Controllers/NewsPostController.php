<?php

namespace App\Http\Controllers;

use App\Models\NewsPost;
use Illuminate\Http\Request;

class NewsPostController extends Controller
{
    public function show(NewsPost $newsPost)
    {
        return view('news.show', compact('newsPost'));
    }
}
