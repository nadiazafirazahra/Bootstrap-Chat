@extends('layout.app')

@section('title', 'Welcome to ChatBot')

@section('content')
<div class="container-fluid home pt-5 pb-5">
    <div class="container text-center">
        <h2 class="display-8" id="home">Home</h2>
        <div class="card text-center">
            <div class="card-body2">
                <h2 class="display-7">Welcome to ChatBot</h2>
                <h3 class="display-7">PT Aisin Indonesia Automotive</h3>
                <h4 class="card-title">Can I help you?</h4>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Select Department</option>
                    <option value="1">Department Production</option>
                    <option value="2">Department Engineering</option>
                    <option value="3">Department Quality Assurance</option>
                    <option value="4">Department Production Planning and Inventory Control</option>
                    <option value="5">Department Production System & Development</option>
                    <option value="6">Department Information Technology Development</option>
                    <option value="7">Department Training & Management System</option>
                </select>
            </div>
        </div>
    </div>
</div>
@endsection
