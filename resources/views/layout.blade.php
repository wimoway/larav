<!DOCTYPE html>
<head>
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>"@yield('title-block')"</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
@include('header')
@if(Request::is('/'))
    @include('hero')
@endif
<div class="container mt-5">
    <div class="row">
        <div class="col-8">
            @yield('content')
        </div>
        <div class="col-4">
            @if(Request::is('/'))
                @include('aside')
            @endif
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col">
            @yield('content1')
        </div>
    </div>
</div>
@include('footer')
</body>
</html>
