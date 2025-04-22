<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <p> {{ url('about-us') }}</p> --}}
    {{-- <p> {{ Route('about') }}</p>
    <p> {{ Route('contact') }}</p> --}}
    <h1>@yield('title')</h1>
    <P><a href="{{ route('home') }}">HOME</a></P>
    <P><a href="{{ route('about') }}">ABOUT US</a></P>
    <P><a href="{{ route('contact') }}">CONTACT US</a></P>
    <head><u> MODEL</u></head>
    <P><a href="{{ route('model-saving') }}">SAVING</a></P>
    <P><a href="{{ Route('model-querying') }}">QUERYING</a></P>
   
    <hr>
    @yield('content')

    
</body>
</html>