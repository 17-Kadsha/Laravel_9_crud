@extends('ebooks.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('ebook/' .$ebooks->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$ebooks->id}}" id="id" />
        <label>Product Name</label></br>
        <input type="text" name="book_title" id="book_title" value="{{$ebooks->book_title}}" class="form-control"></br>
        <label>ID</label></br>
        <input type="text" name="author" id="author" value="{{$ebooks->author}}" class="form-control"></br>
        <label>Price</label></br>
        <input type="text" name="description" id="description" value="{{$ebooks->description}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop