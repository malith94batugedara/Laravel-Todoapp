<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Dotenv\Validator;
use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request){
        $imageName=time() . "." . $request->thumbnail->extension();
        $request->thumbnail->move(public_path('thumbnails'),$imageName);
        Post::create([
          'user_id' =>auth()->user()->id,
          'title' => $request->title,
          'description' => $request->description,
          'thumbnail' => $imageName
        ]);
        return redirect(route('posts.all'))->with('status','Post Created Successfully');
    }

    public function show($postId){

         $post=Post::findorFail($postId);
         return view('posts.show',compact('post'));


    }

    public function edit($postId){
         $post=Post::findOrFail($postId);
         return view('posts.edit',compact('post'));
    }

    public function update($postId,Request $request){
         Post::findorFail($postId)->update($request->all());
         return redirect(route('posts.all'))->with('status','Post Updated Successfully');
    }

    public function delete($postId){
      Post::findOrFail($postId)->delete();
      return redirect(route('posts.all'))->with('status','Post Deleted Successfully');
    }
}
