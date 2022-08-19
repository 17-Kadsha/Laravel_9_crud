@extends('main')

@section('content')

@if($message = Session::get('success'))
<div class="alert alert-info">
    {{$message}}
</div>
@endif
<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">Login</div>
                <div class="card-body">
                    <form action="{{route('sample.validate_login')}}"method="post">
                    @csrf
    
                    <div class="form-group mb-3">
                    <input type="text" name="email" placeholder="Email Address" class="form-control"/>
                    @if($errors->has('email'))
                    <span class="text-danger">{{$errors->first('email')}}</span>
                    @endif
                    </div>
                    
                    <div class="form-group mb-3">
                    <input type="password" name="password"  placeholder="Password"  class="form-control"/>
                    @if($errors->has('password'))
                    <span class="text-danger">{{$errors->first('password')}}</span>
                    @endif
                    </div>

                    <div class="d-grid mx-auto">
                    <button type="submit" class="btn btn-dark btn-block">Login</button>
                    </div>

                </form>   
                 </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')