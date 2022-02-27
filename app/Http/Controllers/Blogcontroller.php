<?php

namespace App\Http\Controllers;
use App\Models\Blog;

use Illuminate\Http\Request;

class Blogcontroller extends Controller
{
    protected $blog;

   public function  index(){
       return view('add-blog');
   }

   public function create(Request $request){

       $this->blog = new Blog();
       $this->blog->blog_title = $request->blog_title;
       $this->blog->author_name = $request->author_name;
       $this->blog->blog_description = $request->blog_description;

       $this->blog->save();

       return redirect()->back()->with('message', 'Blog added Successfully');
   }
}
