@extends('layout.app')

@section('title', 'Settings')

@section('content')
<div class="container-fluid settings pt-5 pb-5">
    <div class="container text-center">
        <h2 class="display-8" id="settings">Settings</h2>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-8 mx-auto">
                <div class="my-4">
                    <h5 class="mb-0 mt-5">General</h5>
                    <hr class="my-4" />
                    <div class="list-group shadow">
                        <div class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col">
                                    <strong class="mb-0">Language</strong>
                                    <p class="text-muted mb-0">Set your preferred language for the ChatBot AIIA interface</p>
                                </div>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>English</option>
                                    <option value="1">Indonesia</option>
                                    <option value="2">Japan</option>
                                </select>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col">
                                    <strong>Archive all chats</strong>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-info">Archive</button>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col">
                                    <strong>Delete all chats</strong>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
