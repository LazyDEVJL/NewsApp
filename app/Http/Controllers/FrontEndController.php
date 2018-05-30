<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Category;
use App\Post;
use Illuminate\Support\Facades\DB;

class FrontEndController extends Controller
{
    public function index(Request $rq)
    {
        $slug = $rq->path();

        $currentTime = Carbon::now('Asia/Ho_Chi_Minh')->format('l, F d, Y | g:i a');

        $categories = Category::all();
        $featurePosts = DB::table('tbl_posts')
                            ->orderBy('created_at','desc')
                            ->limit(4)
                            ->get();

        return view('frontend.index', [
            'slug' => $slug,
            'currentTime' => $currentTime,
            'categories' => $categories,
            'featurePosts' => $featurePosts
        ]);
    }

    public function mobile(Request $rq)
    {
        $slug = $rq->path();

        $currentTime = Carbon::now('Asia/Ho_Chi_Minh')->format('l, F d, Y | g:i a');

        $categories = Category::all();
        $posts = Post::where('category_id', '=', '18')->orderBy('created_at', 'desc')->paginate(10);

        $featurePosts = DB::table('tbl_posts')
                            ->where('category_id', '=', '18')
                            ->orderBy('created_at','desc')
                            ->limit(4)
                            ->get();

        $featurePostAlls = DB::table('tbl_posts')
                            ->orderBy('created_at','desc')
                            ->limit(4)
                            ->get();

        return view('frontend.mobile', [
            'slug' => $slug,
            'currentTime' => $currentTime,
            'categories' => $categories,
            'posts' => $posts,
            'featurePosts' => $featurePosts,
            'featurePostAlls' => $featurePostAlls,
        ]);
    }
}
