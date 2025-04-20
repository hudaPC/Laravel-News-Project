<?php 

//die("This is PHP Logic");
$project_name = 'Simple <br> Project';

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body>
   {{-- <h1>welcome to <b>{{!!$project_name}}</b></h1> --}}
   <h1>welcome to <b>{!!$project_name!!}</b></h1>
   <p> Welcome to Home Page</p>
   <hr>
   <p><b>NAME :</b>{{$name}}</p>
   <p><b>SEX :</b>{{$sex}}</p>
   <p><b>DOB :</b>{{$dob}}</p>
   <?php  print_r($colors); ?>
   @foreach ($colors as $color)
   <p>{{ $color }}</p>
    @endforeach
   @if(2 < 1)
   <p>One is less than two</p>
  @else
  <p>One is not gretter than two</p>      
  @endif

  @for ($i = 1; $i <= 5; $i++)
  <p>{{ $i }}</p>      
  @endfor
 
   
</body>
</html>