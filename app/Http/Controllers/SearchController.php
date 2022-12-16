<?php
namespace App\Http\Controllers;
use App\Post;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{

    public function simple(Request $request)
    {

        if( $request->input('search')){
            $posts = Post::where('title', 'LIKE', "%" . $request->search . "%")->paginate(3);
        }

        $title = "Le blog de l'agence Lyneo | Agence Web et SEO";
        $meta_description = "Découvrez de nombreux articles thème du web et du SEO. L'agence de communication Lyneo vous dévoile tout";

        $random_3_posts = Post::all()->random(3);
        $random_2_posts = Post::all()->random(2);
        $categories = Category::all();

        return view('website.blog', compact('posts','categories','random_3_posts','random_2_posts','title','meta_description'));
    }

}
