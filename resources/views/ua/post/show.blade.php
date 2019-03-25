@extends('layouts.appUa')

@section('content')
<div class="container">
@if(Auth::check() && Auth::user()->id == $post->author)
<div class="admin-controlls">
    <a href="../../../ua/post/edit/{{$post->id}}">
        <button type="button" name="button" class="btn btn-primary">Edit</button>
    </a>
    <a href="../../../ua/post/remove/{{$post->id}}">
        <button type="button" name="button" class="btn btn-danger">Delete</button>
    </a>    
</div>
@endif
<div class="alert alert-secondary" role="alert">
 <div class="post">
     <h1>{{$post->title}}</h1>
  <div> 
    <p class="card-text text-muted" style="overflow:clip float: right"><h3>{!!$post->text!!}</h3></p>
  </div>
 </div>
</div>
</div>
@endsection