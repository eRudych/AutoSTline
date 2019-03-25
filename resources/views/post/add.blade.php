@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Add new post</h1>
  <form class="" action="../../post/add" method="post">
    <div class="form-group">
      <label>Title</label>
      <textarea  name="title" rows="1" cols="1" placeholder="Title" class="form-control"  required="required"></textarea>
    </div>
    <div class="form-group">
      <label>Description</label>
      <textarea name="description" rows="8" cols="80" placeholder="Description" class="form-control" required="required"></textarea>
    </div>
    <div class="form-group">
      <label>Full text</label>
      <textarea name="text"  rows="8" cols="80" placeholder="Full text" class="form-control" required="required"></textarea>
    </div>
    {{csrf_field()}}
    <div class="form-group">
      <button type="submit" name="submit" class="btn btn-info" class="form-control">Add post</button>
    </div>
  </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
<script>
    $(document).ready(function(){
        CKEDITOR.replace( 'description');
        CKEDITOR.replace( 'text');
    })
</script>
@endsection

