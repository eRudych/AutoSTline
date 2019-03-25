@extends('layouts.appUa')

@section('content')
<div class="container">
  <h1 class="jumbotron-heading">Наші новинки та акції:</h1>
  @foreach ($posts as $post)
  <div class="alert alert-secondary" role="alert">
   <h2><a class="text-muted" href="../../../ua/post/{{$post->id}}">{{$post->title}}</a></h2>
   <hr>
    <p class="lead"><h2>{!!$post->description!!}</h2></p>
    <p style="overflow:clip float: right">{{$post->created_at}}</p>
  </div>
  
  @endforeach
</div>
@endsection
