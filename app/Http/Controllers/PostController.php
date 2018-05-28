<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Illuminate\Support\Facades\Input;
use Session;
use Validator;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $keywords = Input::get('q');

        if(isset($keywords))
        {
            $posts = Post::where('title', 'like', "%$keywords%")->paginate(10);
        } else {
            $posts = Post::paginate(10);
        }

        return view('admin.posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        $posts = Post::all();
        $categories = Category::all();

        return view('admin.posts.create', [
            'posts' => $posts,
            'categories' => $categories,
            ]);
    }

    public function createSave(Request $rq)
    {
        $rules = [
            'txt_title'=>'required',
            'txt_slug'=>'required',
            'thumbnail' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'sl_category_id'=>'required|integer',
            'txt_description'=>'required',
            'txt_content'=>'required'
        ];
        
        $messages = [
            'txt_title.required'=>'Post\'s title is required',
            'txt_slug.required'=>'Post\'s slug is required',
            'thumbnail.required'=>'Post\'s thumbnail is required',
            'thumbnail.image'=>'Post\'s thumbnail must be an image',
            'thumbnail.max'=>'Post\'s thumbnail must be smaller than 2MB',
            'sl_category_id.required'=>'Post\'s category is not chosen',
            'sl_category_id.integer'=>'Post\'s category is not chosen',
            'txt_description.required'=>'Post\'s description is required',
            'txt_content.required'=>'Post\'s content is required'
        ];

        $validator = Validator::make($rq->all(), $rules, $messages);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            $title = $rq->txt_title;
            $slug = $rq->txt_slug;
            $categoryId = $rq->sl_category_id;
            $description = $rq->txt_description;
            $content = $rq->txt_content;
    
            // dd($title, $slug, $position, $categoryId, $description, $content);
        
            $thumbnail = insertImage($rq);
    
            $post = new Post();
            $post->title = $title;
            $post->slug = $slug;
            $post->thumbnail = $thumbnail;
            $post->category_id = $categoryId;
            $post->description = $description;
            $post->content = $content;
            $check = $post->save();

            if($check) {
                Session::flash('success', 'New post\'s been successfully added');
                return redirect('admin/posts');
            } else {
                Session::flash('error', 'Failed to add new post');
                return redirect()->back();
            }
        }
    }

    public function edit($id)
    {
        $posts = Post::all();
        $categories = Category::all();
        $currentPost = Post::where('id', $id)->get();

        return view('admin.posts.edit', [
            'posts' => $posts,
            'categories' => $categories,
            'currentPost' => $currentPost->first()
            ]);
    }

    public function editSave(Request $rq)
    {
        $rules = [
            'txt_title'=>'required',
            'txt_slug'=>'required',
            'thumbnail' => 'image|mimes:jpg,jpeg,png|max:2048',
            'sl_category_id'=>'required|integer',
            'txt_description'=>'required',
            'txt_content'=>'required'
        ];
        
        $messages = [
            'txt_title.required'=>'Post\'s title is required',
            'txt_slug.required'=>'Post\'s slug is required',
            'thumbnail.image'=>'Post\'s thumbnail must be an image',
            'thumbnail.max'=>'Post\'s thumbnail must be smaller than 2MB',
            'sl_category_id.required'=>'Post\'s category is not chosen',
            'sl_category_id.integer'=>'Post\'s category is not chosen',
            'txt_description.required'=>'Post\'s description is required',
            'txt_content.required'=>'Post\'s content is required'
        ];

        $validator = Validator::make($rq->all(), $rules, $messages);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            $id = $rq->txt_id;
            $editPost = Post::find($id);
    
            $title = $rq->txt_title;
            $slug = $rq->txt_slug;
            $categoryId = $rq->sl_category_id;
            $description = $rq->txt_description;
            $content = $rq->txt_content;
    
            $file = $rq->thumbnail;
    
            if(!isset($file))
            {
                $thumbnail = $editPost->thumbnail;
            } else {
                $editFilePath = $editPost->thumbnail;
                $thumbnail = editImage($editFilePath, $rq);
            }
            
            $editPost->title = $title;
            $editPost->slug = $slug;
            $editPost->thumbnail = $thumbnail;
            $editPost->category_id = $categoryId;
            $editPost->description = $description;
            $editPost->content = $content;
    
            $check = $editPost->save();

            if($check) {
                Session::flash('success', 'Post\'s been successfully edited');
                return redirect('admin/posts');
            } else {
                Session::flash('error', 'Failed to edit post');
                return redirect()->back();
            }
        }
    }

    public function destroy($id)
    {
        $deletePost = Post::find($id);
        $check = $deletePost->delete();
        deleteImage($deletePost->thumbnail);

        if($check) {
            Session::flash('success', 'Post\'s been successfully deleted');
            return redirect('admin/posts');
        } else {
            Session::flash('error', 'Failed to delete post');
            return redirect()->back();
        }
    }
}
