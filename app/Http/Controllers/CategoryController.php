<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Session;
use Validator;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $keywords = Input::get('q');

        if (isset($keywords)) {
            $categories = Category::where('name', 'like', "%$keywords%")->paginate(10);
        } else {
            $categories = Category::paginate(10);
        }
        return view('categories.index', ['categories' => $categories]);
    }

    public function create()
    {
        $categories = Category::all();

        return view('categories.create', ['categories' => $categories]);
    }

    public function createSave(Request $rq)
    {
        $rules = [
            'txt_name'=>'required',
            'txt_slug'=>'required',
            'txt_position'=>'required',
            'sl_active'=>'required|integer',
            'sl_parent_id'=>'required'
        ];
        
        $messages = [
            'txt_name.required'=>'Category\'s name is required',
            'txt_slug.required'=>'Category\'s slug is required',
            'txt_position.required'=>'Category\'s position is required',
            'sl_active.required'=>'Category\'s active state is not chosen',
            'sl_active.integer'=>'Category\'s active state is not chosen',
            'sl_parent_id.required'=>'Category\'s parent category is not chosen',
        ];

        $validator = Validator::make($rq->all(), $rules, $messages);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            $name = $rq->txt_name;
            $slug = $rq->txt_slug;
            $position = $rq->txt_position;
            $active = $rq->sl_active;
            $parentId = $rq->sl_parent_id;

            $category = new Category();
            $category->name = $name;
            $category->slug = $slug;
            $category->position = $position;
            $category->active = $active;
            $category->parent_id = $parentId;
            $check = $category->save();

            if ($check) {
                Session::flash('success', 'New category\'s been successfully added');
                return redirect('categories');
            } else {
                Session::flash('error', 'Failed to add new category');
                return redirect()->back();
            }
        }
    }

    public function edit($id)
    {
        $categories = Category::all();
        $currentCategory = Category::where('id', $id)->get();

        return view('categories.edit', [
            'categories' => $categories,
            'currentCategory' => $currentCategory->first(),
        ]);
    }

    public function editSave(Request $rq)
    {
        $id = $rq->txt_id;
        $editCategory = Category::find($id);

        $rules = [
            'txt_name'=>'required',
            'txt_slug'=>'required',
            'txt_position'=>'required',
            'sl_active'=>'required|integer',
            'sl_parent_id'=>'required'
        ];
        
        $messages = [
            'txt_name.required'=>'Category\'s name is required',
            'txt_slug.required'=>'Category\'s slug is required',
            'txt_position.required'=>'Category\'s position is required',
            'sl_active.required'=>'Category\'s active state is not chosen',
            'sl_active.integer'=>'Category\'s active state is not chosen',
            'sl_parent_id.required'=>'Category\'s parent category is not chosen',
        ];

        $validator = Validator::make($rq->all(), $rules, $messages);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            $name = $rq->txt_name;
            $slug = $rq->txt_slug;
            $position = $rq->txt_position;
            $active = $rq->sl_active;
            $parentId = $rq->sl_parent_id;
    
            $editCategory->name = $name;
            $editCategory->slug = $slug;
            $editCategory->position = $position;
            $editCategory->active = $active;
            $editCategory->parent_id = $parentId;
    
            $check = $editCategory->save();

            if($check) {
                Session::flash('success', 'Category\'s been successfully edited');
                return redirect('categories');
            } else {
                Session::flash('error', 'Failed to edit category');
                return redirect()->back();
            }
        }
    }

    public function destroy($id)
    {
        $deleteCategory = Category::find($id);
        $check = $deleteCategory->delete();
        if($check) {
            Session::flash('success', 'Category\'s been successfully deleted');
            return redirect('categories');
        } else {
            Session::flash('error', 'Failed to delete category');
            return redirect('categories');
        }

        return redirect('categories');
    }
}
