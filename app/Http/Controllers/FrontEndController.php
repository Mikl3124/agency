<?php

namespace App\Http\Controllers;

use Session;
use App\Tag;
use App\User;
use App\Post;
use App\Contact;
use App\Category;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function home(){
        $posts = Post::with('category', 'user')->orderBy('created_at', 'DESC')->take(3)->get();

        return view('website.home', compact('posts'));
    }

    public function blog(){

      $posts = Post::orderBy('created_at', 'DESC')->paginate(3);
      $random_3_posts = Post::all()->random(3);
      $categories = Category::all();

      return view('website.blog', compact('posts','categories','random_3_posts'));
  }

    public function about(){
        $user = User::first();

        return view('website.about', compact('user'));
    }

    public function category($slug){

        $category = Category::where('slug', $slug)->first();
        if($category){
            $posts = Post::where('category_id', $category->id)->paginate(9);

            return view('website.category', compact(['category', 'posts']));
        }else {
            return redirect()->route('home');
        }
    }

    public function contact(){
            return view('website.contact');
    }

    public function post($category, $slug){

      $post = Post::where('slug', $slug)->first();
      $random_3_posts = Post::all()->random(3);
      $random_2_posts = Post::all()->random(2);
      $categories = Category::all();

      return view('website.post', compact('random_3_posts', 'random_2_posts', 'categories', 'post'));
    }

    public function send_message(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:200',
            'email' => 'required|email|max:200',
            'subject' => 'required|max:255',
            'message' => 'required|min:100',
        ]);

        $contact = Contact::create($request->all());

        Session::flash('message-send', 'Contact message send successfully');
        return redirect()->back();
    }

    public function developpement(){
      return view('website.developpement');
    }

    public function vitrine(){
      return view('website.vitrine');
    }

    public function commerce(){
      return view('website.commerce');
    }
}
