<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class SitemapXmlController extends Controller
{
  public function index() {
    $posts = Post::all();
    return response()->view('index', [
        'posts' => $posts
    ])->header('Content-Type', 'text/xml');
  }

}
