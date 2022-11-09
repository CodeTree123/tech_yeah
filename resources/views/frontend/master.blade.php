 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Tech Yeah</title>  
    <link rel="icon" href="{{asset('assets/media/logo/tech_yeah_logo.png')}}""> 
    <!-- google font cdn -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">

    <!-- font awsome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}"> 
    <link rel="stylesheet" href="{{asset('assets/css/slick-theme.css')}}"> 
    <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}"> 
    <link rel="stylesheet" href="{{asset('assets/css/bs-stepper.css')}}"> 
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">   
     
  </head>
  <body>
     
 

  <div class="container-fluid p-0">
    @include('frontend.include.header')
      @yield('content')
    {{--@include('frontend.include.footer')--}}

  </div>
    
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

<script src="{{asset('assets/js/slick.js')}}" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/aos.js')}}" crossorigin="anonymous"></script> 
<script src="{{asset('assets/js/bs-stepper.js')}}" crossorigin="anonymous"></script> 
<script src="{{asset('assets/js/stepper_init.js')}}" crossorigin="anonymous"></script> 

<script>
  AOS.init();
</script> 
      @stack('customJs')
  </body>
</html>
