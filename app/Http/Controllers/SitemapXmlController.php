<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class SitemapXmlController extends Controller
{
  public function index() {

    return response()->view('index')->header('Content-Type', 'text/xml');
  }

}
