@extends('ebooks.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Ebooks Page</div>
  <div class="card-body">
      
      <form action="{{ url('ebook') }}" method="post">
        {!! csrf_field() !!}
        <label>Product Name</label></br>
        <input type="text" name="book_title" id="book_title" class="form-control">
        @if($errors->has('book_title'))
        <span class="text-danger">{{$errors->first('book_title')}}</span>
        @endif

      </br>

        <label>ID</label></br>
        <input type="text" name="author" id="author" class="form-control">
        @if($errors->has('author'))
        <span class="text-danger">{{$errors->first('author')}}</span>
        @endif
      
      </br>

        <label>Price</label></br>
        <input type="text" name="description" id="description" class="form-control">
        @if($errors->has('description'))
        <span class="text-danger">{{$errors->first('description')}}</span>
        @endif
      
      </br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>


   

  </div>
</div>
 
@stop