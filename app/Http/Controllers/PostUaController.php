<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\PostUa;
use App\User;

class PostUaController extends Controller
{
    function create(Request $request){

      $post=new PostUa();
      $post->title=$request->title;
      $post->description=$request->description;
      $post->text=$request->text;
      $post->author = Auth::user()->id;

      $post->save();

      return redirect()->back();
    }

    function showpost(){
      return view('ua.post.list' , [
        'posts' => PostUa::orderBy('id','desc')->get()
      ]);
    }
    
    function showPostById($id){
        return view('ua.post.show',[
            'post'=>PostUa::find($id)
        ]);
    }
    
     function remove($id){
        PostUa::find($id)-> delete($id);
        return redirect('/');
    }
    
    function update(Request $request){
        $post=PostUa::find($request->id);
        $post->title=$request->title;
        $post->description=$request->description;
        $post->text=$request->text;
        $post->save();
        return redirect()->route('showPost',['id' =>$request->id]);
    }
    function edit($id){
        $post=PostUa::find($id);
        return view('ua.post.edit',[
            'post'=>$post
        ]);
    }  
    
    function showPostsByUserId($id){
        //$posts=Post::where('author', $id)->get();
        
        //ORM
        $posts=User::find($id)->posts()->get();
        
        return view('ua.post.list', [
            'posts'=>$posts
        ]);
            
    }

}
