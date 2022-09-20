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
        $posts = DB::table('posts');
        if( $request->input('search')){
            $posts = $posts->where('title', 'LIKE', "%" . $request->search . "%");
        }
        $posts = $posts->paginate(3);

        $random_posts = Post::all()->random(3);
        $categories = Category::all();

        return view('website.blog', compact('posts','categories','random_posts'));
    }

}
