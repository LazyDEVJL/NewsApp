<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Category;
use App\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class FrontEndController extends Controller
{
    public function index(Request $rq)
    {
        $categoryParam = $rq->path();

        $currentTime = Carbon::now('Asia/Ho_Chi_Minh')->format('l, F d, Y | g:i a');

        $categories = Category::all();

        $getPosts = DB::table('tbl_posts')
            ->join('tbl_categories', 'category_id', '=', 'tbl_categories.id')
            ->select('tbl_posts.*')
            ->orderBy('tbl_posts.created_at', 'desc');

        $posts = $getPosts->paginate(10);

        $featurePosts = $getPosts->limit(4)->get();

        $featurePostAlls = DB::table('tbl_posts')
            ->orderBy('created_at','desc')
            ->limit(6)
            ->get();

        /*
         * Today All
         */
        $allFirst4 = Post::orderBy('created_at','desc')->limit(4)->get();

        /*
         * Today Mobile
         */
        $mobileFirst4 = Post::where('tbl_posts.category_id', '=', '18')
            ->orderBy('created_at','desc')
            ->limit(4)
            ->get();

        /*
         * Today CNTT
         */
        $cnttFirst4 = Post::where('tbl_posts.category_id', '=', '19')
            ->orderBy('created_at','desc')
            ->limit(4)
            ->get();

        /*
         * Today Internet
         */
        $internetFirst4 = Post::where('tbl_posts.category_id', '=', '20')
            ->orderBy('created_at','desc')
            ->limit(4)
            ->get();

        /*
         * Today Kham pha
         */
        $khamPhaFirst4 = Post::where('tbl_posts.category_id', '=', '21')
            ->orderBy('created_at','desc')
            ->limit(4)
            ->get();

        return view('frontend.index', [
            'categoryParam' => $categoryParam,
            'currentTime' => $currentTime,
            'categories' => $categories,
            'posts' => $posts,
            'featurePosts' => $featurePosts,
            'featurePostAlls' => $featurePostAlls,
            'allFirst4' => $allFirst4,
            'mobileFirst4' => $mobileFirst4,
            'cnttFirst4' => $cnttFirst4,
            'internetFirst4' => $internetFirst4,
            'khamPhaFirst4' => $khamPhaFirst4,
        ]);
    }

    public function category(Request $rq)
    {
        $categoryParam = $rq->path();

        $currentTime = Carbon::now('Asia/Ho_Chi_Minh')->format('l, F d, Y | g:i a');

        $categories = Category::all();

        $getPosts = DB::table('tbl_posts')
            ->join('tbl_categories', 'category_id', '=', 'tbl_categories.id')
            ->where('tbl_categories.slug', '=', $categoryParam)
            ->select('tbl_posts.*')
            ->orderBy('tbl_posts.created_at', 'desc');

        $posts = $getPosts->paginate(10);

        $featurePosts = $getPosts->limit(4)->get();

        $featurePostAlls = DB::table('tbl_posts')
            ->orderBy('created_at','desc')
            ->limit(4)
            ->get();

        return view('frontend.category', [
            'categoryParam' => $categoryParam,
            'currentTime' => $currentTime,
            'categories' => $categories,
            'posts' => $posts,
            'featurePosts' => $featurePosts,
            'featurePostAlls' => $featurePostAlls,
        ]);
    }

    public function postDetail($category, $slug)
    {
        $categoryParam = $category;

        $currentTime = Carbon::now('Asia/Ho_Chi_Minh')->format('l, F d, Y | g:i a');

        $categories = Category::all();

        $getPosts1 = DB::table('tbl_posts')
            ->join('tbl_categories', 'category_id', '=', 'tbl_categories.id')
            ->select('tbl_posts.*')
            ->orderBy('tbl_posts.created_at', 'desc');

        $postDetail = $getPosts1
            ->where('tbl_posts.slug', '=', $slug)
            ->get();

        $getPosts2 = DB::table('tbl_posts')
            ->join('tbl_categories', 'category_id', '=', 'tbl_categories.id')
            ->select('tbl_posts.*')
            ->orderBy('tbl_posts.created_at', 'desc');

        $relatedPosts = $getPosts2
            ->where('tbl_posts.slug', '!=', $slug)
            ->orderBy('tbl_posts.created_at', 'desc')
            ->limit(4)
            ->get();

        $featurePostAlls = DB::table('tbl_posts')
            ->orderBy('created_at','desc')
            ->limit(4)
            ->get();

        return view('frontend.post', [
            'categoryParam' => $categoryParam,
            'currentTime' => $currentTime,
            'categories' => $categories,
            'postDetail' => $postDetail,
            'featurePostAlls' => $featurePostAlls,
            'relatedPosts' => $relatedPosts
        ]);
    }

    public function search(Request $rq)
    {
        $categoryParam = $rq->path();

        $categories = Category::all();

        $keywords = Input::get('search');

        $posts = Post::where('title', 'like', "%$keywords%")
            ->orderBy('created_at','desc')
            ->paginate(10);

        $numberOfResult = count($posts);

        $featurePostAlls = DB::table('tbl_posts')
            ->orderBy('created_at','desc')
            ->limit(4)
            ->get();

        return view('frontend.search', [
            'posts' => $posts,
            'categoryParam' => $categoryParam,
            'categories' => $categories,
            'featurePostAlls' => $featurePostAlls,
            'numberOfResult' => $numberOfResult,
            'keywords' => $keywords
            ]);
    }
}
