@extends('components.sidebar')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>
</head>
<body>
    <head>
        @include('components.header')
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <h1>List Produk</h1>
    <div class="container">
        <main>
        @yield('content')
        </main>
    </div>
    <footer>
        @include('components.footer')
    </footer>
</body>
</html>
@endsection