@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-md-4">

    @if(session()->has('loginError'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif

<main class="form-signin w-100 m-auto">
    <form action="/register" method="post">
      @csrf
      <h1 class="h3 mb-3 mt-4 fw-normal">Register now!</h1>
  
      <div class="form-floating">
        <label for="name">name</label>
        <input type="name" name="name" class="form-control" id="name" placeholder="name..." autofocus required>
      </div>
      <div class="form-floating">
        <label for="email">email</label>
        <input type="email" email="email" class="form-control" id="email" placeholder="email..." autofocus required>
      </div>

      <div class="mt-2"></div>
      <div class="form-floating">
        <label for="floatingPassword">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password..." required>
      </div>
  
      <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
    </form>
    <small class="d-block mt-1">Already Registered? <a href="/login">Login Now!</a> </small>
  </main>
</div>
</div>
@endsection