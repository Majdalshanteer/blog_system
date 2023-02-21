<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::where('parent_id',0)->get();


        return view('pages.index', compact('categories'));

    }


    
    public function show(Request $request,$id)
   {
        if($request->filled('search')){


            $mainCategories=Category::where('parent_id',0)->get();
            $categories = Category::find($id);
            $blogs = Category::search($request->search)->get()->where('parent_id', '=', $categories->id);
        }else{
            $mainCategories=Category::where('parent_id',0)->get();
            $categories = Category::find($id);
    
            $blogs = Category::where('parent_id', '=', $categories->id)->paginate(2);
        }


          
        return view('pages/blogs', [
            'categories' => $categories,
            'blogs' => $blogs,
            'mainCategories'=>$mainCategories,
           
        ]);
        dd($categories);
        //  dd($blogs);
    }




}
