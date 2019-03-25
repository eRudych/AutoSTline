<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\PostEn;
use App\User;

class PostEnController extends Controller
{
    function create(Request $request){

      $post=new PostEn();
      $post->title=$request->title;
      $post->description=$request->description;
      $post->text=$request->text;
      $post->author = Auth::user()->id;

      $post->save();

      return redirect()->back();
    }

    function showpost(){
      return view('en.post.list' , [
        'posts' => PostEn::orderBy('id','desc')->get()
      ]);
    }
    
    function showPostById($id){
        return view('en.post.show',[
            'post'=>PostEn::find($id)
        ]);
    }
    
     function remove($id){
        PostEn::find($id)-> delete($id);
        return redirect('/');
    }
    
    function update(Request $request){
        $post=PostEn::find($request->id);
        $post->title=$request->title;
        $post->description=$request->description;
        $post->text=$request->text;
        $post->save();
        return redirect()->route('showPost',['id' =>$request->id]);
    }
    function edit($id){
        $post=PostEn::find($id);
        return view('en.post.edit',[
            'post'=>$post
        ]);
    }  
    
    function showPostsByUserId($id){
        //$posts=Post::where('author', $id)->get();
        
        //ORM
        $posts=User::find($id)->posts()->get();
        
        return view('en.post.list', [
            'posts'=>$posts
        ]);
            
    }

}
