<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Kobo accountant</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="Description" content="Accounting site, Accounting App ">
  <meta content="koboaccountant, accounting, kobo" name="keywords">
  <meta name="csrf-token" content="{{ csrf_token() }}"> 
  <!-- Favicons -->
  <link href="https://res.cloudinary.com/syfon/image/upload/v1536857508/favicon.png" rel="icon">
{{-- font-awesome --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

{{-- styles --}}
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/landing-page.css') }}" rel="stylesheet">
<link href="{{ asset('css/header.css') }}" rel="stylesheet">
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">


{{-- jquery --}}
<script src="js/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>


</head>
<body>

    <div id="load"></div>

     <!-- Header -->
     @include('layouts.header')
        
     <!-- include main content --->
     <main>
             @yield('content')
      </main>

     <!-- Footer -->
    @include('layouts.footer')
   

{{-- javascript --}}
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>



 {{-- chart js --}}

 <script src="{{asset('js/bundle.js')}}"></script>
 <script src="{{asset('js/jquery.circliful.js')}}"></script>
 <script src="{{asset('js/chart.js')}}"></script>
 

 
</body>
</html>
