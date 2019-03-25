@extends('layouts.appEn')

@section('content')
<div class="container">
  <h1 class="jumbotron-heading">Наши новинки и акции:</h1>
  @foreach ($posts as $post)
  <div class="alert alert-secondary" role="alert">
   <h2><a class="text-muted" href="../../../en/post/{{$post->id}}">{{$post->title}}</a></h2>
   <hr>
    <p class="lead"><h2>{!!$post->description!!}</h2></p>
    <p style="overflow:clip float: right">{{$post->created_at}}</p>
  </div>
  
  @endforeach
</div>
@endsection
