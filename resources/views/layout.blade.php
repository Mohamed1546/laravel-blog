<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Styles -->
      <link rel="stylesheet" href="{{url('css/s.css')}}">
      <!-- Title -->
      <title>@yield('title')</title>
      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.bunny.net">
      <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> 
      <!-- Google Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@500&family=Cairo&family=Lato:ital,wght@1,300&family=Lora:ital@1&family=Reem+Kufi:wght@600&family=Roboto:wght@100&family=Sofia&display=swap" 
      rel="stylesheet">
      <!-- Font awesome -->
      <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
      <!-- icon link -->
      <link rel="icon" href="https://th.bing.com/th/id/R.6af6fd9c37f0de4abb34ea0fd20acce3?rik=55mqMmrTutVR0Q&pid=ImgRaw&r=0">
    </head>
    <body>
      <div class="div">
        <div class="div1"></div>
      </div>
        <!-- Links -->
        <div class="container">
          <header>
            <ul class="nav">
              <li><a href="{{route('computers.index')}}"> لوحة التحكم </a></li>
              <li><a href="{{route('computers.create')}}"> اضافة منشور </a></li>
              <li><a href="{{route('home.about')}}">  من نحن  </a></li>
              <li><a href="{{route('home.contact')}}"> اتصل بنا </a></li>
              <li><a href="{{route('login')}}">تسجيل دخول </a></li>
              <li><a href="{{route('register')}}"> التسجيل الجديد </a></li>
            </ul>
          </header>
        </div>
        <!-- Content -->
          @yield('content')
        <!-- Footer -->
        <center style="font-weight:bold;color:black;postion:fixed;bottom:0px;">
          
            <span style="color:chocolate;font-weight:bold;">**Designed by M.R</span> &copy; All rights saved 2023**

        </center>
    </body>
</html>
