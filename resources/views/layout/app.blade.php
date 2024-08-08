<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        html, body{
    height: 100%;
    background-color: #ffffff !important;
}

.global-container {
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #4c90ff;
}

.login-form {
    width: 370px;
    height:400px;
    padding: 20px;
    background-color: #222d32 !important;
    border-radius: 10px !important;
}

input[type="email"],
input[type="password"]{
    background: #1a2226;
    color: #fff;
    border: 2px solid #4c90ff;
    border-radius: 5px;
    margin-bottom: 10px;
}


input[type="email"]:focus,
input[type="password"]:focus {
    outline: none;
    border: none;
    background: #1a2226;
    color: #fff;
    margin: 7;
}

.card-body2 {
    height: 100%;
    align-items: center;
    justify-content: center;
    background-color: #4c90ff;
}

.card-title{
    font-weight: 600px;
    padding-top: 10px;
}

.btn{
    background: #4c90ff  !important;
    color: black !important;
    transform: translateY(-1px);
    font-size: 14px;
    border-radius: 10px !important;
}

.banner{
    background: url("https://static.vecteezy.com/system/resources/thumbnails/002/142/946/small_2x/futuristic-digital-technology-blue-background-free-vector.jpg")
    no-repeat center center;
    background-size: cover;
    padding-top: 20%;
    padding-bottom: 20%;
    color: #ffffff;
}

.lingkaran {
    display: inline-block;
    border-radius: 50%;
    width: 100px;
    margin: auto;
    height: 100px;
    color: #fff;
    background-color:#4c90ff;
}

.lingkaran i {
    position: relative;
    top: 30px;
}

#chat3 .form-control {
    border-color: info;
}

#chat3 .form-control:focus {
    width: 340px;
    height: 300px;
    padding: 20px;
    border-color: transparent;
    box-shadow: inset 0px 0px 0px 0px transparent;
}

.badge-dot {
    border-radius: 50%;
    height: 20px;
    width: 10px;
    margin-left: 2.9rem;
    margin-top: -.75rem;
}

.btn1{
    background: #4c90ff  !important;
    color: black !important;
    transform: translateY(10px);
    font-size: 14px;
    border-radius: 10px !important;
}

.btn2{
    background: #ff0000  !important;
    color: black !important;
    transform: translateY(10px);
    font-size: 14px;
    border-radius: 10px !important;
}

    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">ChatBot AIIA</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse text-right" id="navbarText">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('signin') }}">Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('history') }}">History</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('settings') }}">Settings</a>
                </li>
            </ul>
          </div>
        </div>
      </nav>

    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
</body>
</html>
