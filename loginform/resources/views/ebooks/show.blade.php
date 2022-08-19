@extends('ebooks.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Ebooks page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Product Name : {{ $ebooks->book_title }}</h5>
        <p class="card-text">ID : {{ $ebooks->author }}</p>
        <p class="card-text">Price : {{ $ebooks->description }}</p>
  </div>
       
    </hr>
  
  </div>
</div>