<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class CategoryCrudController extends Controller
{
    public function index()
    {
        $mainCategories = Category::where('parent_id',0)->get();
        $categories = Category::where('user_id','=',Auth::user()->id)->get();

        return view('manageBlogs', compact('categories' , 'mainCategories'));

    }



    public function create()
    {
        $mainCategories = Category::where('parent_id',0)->get();
        return view('create',compact('mainCategories'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required',



        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'categoryImages/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Category::create($input);

        return redirect()->route('manage_blogs.index')
            ->with('success', 'blog created successfully.');
    }




    public function edit( $id)
    {
        $category = Category::where('id',$id)->first();
        return view('edit', compact('category'));
    }


    public function update(Request $request,$id)
    {
        $category = Category::where('id',$id)->first();
        $request->validate([
            'category_name' => 'required',


        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'categoryImages/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }
 

        $category->update($input);

        return redirect()->route('manage_blogs.index')
            ->with('success', 'blog updated successfully');
    }




    public function destroy($id)
    {
        $category = Category::where('id',$id)->first();
        $category->delete();
        return redirect()->route('manage_blogs.index')
            ->with('success', 'blog deleted successfully');
    }



}
