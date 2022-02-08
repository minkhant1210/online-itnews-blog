<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" href="{{ asset('images/logos/fav.png') }}">
    <title>@yield('title',"Title")</title>
</head>
<body class="bg-body">

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 bg-white shadow-sm " id="sidebarCol">
            @include('layouts.sidebar')
        </div>
        <div class="col-12 col-lg-10">
            <div class="content">
                <div class="header bg-primary mb-2 p-2 rounded mt-2">
                    @include('layouts.header')
                </div>
                <div class="container-fluid px-0">
                    @yield('content')
                </div>
                <div class="my-5"></div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
