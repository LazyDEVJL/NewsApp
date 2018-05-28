<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Category;
use App\Post;
use Illuminate\Support\Facades\DB;

class FrontEndController extends Controller
{
    public function index()
    {
        $createdDate = Carbon::now('Asia/Ho_Chi_Minh')->format('F d, Y');

        $categories = Category::all();
        $featurePosts = DB::table('tbl_posts')->orderBy('created_at')->limit(4)->get();

        return view('frontend.index', [
            'createdDate' => $createdDate,
            'categories' => $categories,
            'featurePosts' => $featurePosts
        ]);
    }
}
