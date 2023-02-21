<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $comments = Comment::all();
        return view('pages/blogDetails', compact('comments'));
     
    }


   

    public function create()
    {

        return view('pages/blogDetails');
    }



    public function store(Request $request)
    {
        $request->validate([
            'blog_id' => 'required',
            // 'user_id' => 'required',
            'message'=>'required',
        ]);
    if ($request->input('parent_id')) {
            $parent = Comment::find($request->input('parent_id'));
            $comment->parent()->associate($parent);
        }
        $input = $request->all();

    

        Comment::create($input);

        return redirect()->back()
        ->with(['success' => 'Thank you']);
        
    }


//nested comment
    // public function store(Request $request)
    // {
    //     $comment = new Comment();
    //     $comment->message = $request->input('message');

    //     if ($request->input('parent_id')) {
    //         $parent = Comment::find($request->input('parent_id'));
    //         $comment->parent()->associate($parent);
    //     }

    //     $comment->save();

    //     return redirect()->back();
    // }


    public function show($id){
        $comments = Comment::where('blog_id',$id)->get();
        $mainCategories=Category::where('parent_id',0)->get();
        $commentsCount=count( $comments);
        $blog =Category::find($id);
        return view('pages/blogDetails',compact("blog", "comments","commentsCount","mainCategories"));
    }

}
