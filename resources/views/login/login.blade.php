@extends('templates.main')

@section('navbar')
 @include('templates.navbar')
@endsection

@section('container')

{{-- Error Alert --}}
@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{session('error')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
@endif

<main class="form-signin">
    <h1>Login</h1> <br><break>
    <form action="{{url('proses_login')}}" method="post"> 
    {{ csrf_field() }}
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" name ="username" class="border border-info border-4 form-control" id="username" minlength="5" placeholder="username" autofocus required >
        @if($errors->has('username'))
            <span class="error">{{ $errors->first('username') }}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="border border-info border-4 form-control" id="password" minlength="8" placeholder="8 karakter" required>
        @if($errors->has('password'))
            <span class="error">{{ $errors->first('password') }}</span>
        @endif
    </div>
    <button type="submit" class="btn btn-white btn-circled">Login</button>
    </form>
</main>
@endsection
