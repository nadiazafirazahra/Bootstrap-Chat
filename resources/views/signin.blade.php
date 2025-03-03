@extends('layout.app')

@section('title', 'Sign In')

@section('content')

<div class="container-fluid home pt-5 pb-5">
    <div class="container text-center">
        <h2 class="display-8" id="signin">Sign In</h2>
    </div>

<div class="global-container">
    <div class="card login-form">
        <div class="card-body">
            <h1 class="card-title text-center">LOGIN</h1>
        </div>
        <div class="card-text">
            <form method="POST" action="">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
