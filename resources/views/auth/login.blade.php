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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

{{-- styles --}}
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/auth.css') }}" rel="stylesheet">


</head>
<body>
    <div id="load"></div>
         <section id="particles"></section>
           <div id="login pt-5">
            <div class="container pt-5">               
                <div class="col-md-6 login-kobo">
                    <div class=" p-3">
                        <div class="pb-4">
                            <img src="{{asset('img/logo.svg')}}" alt="logo" srcset="" class="img-fluid logo">
                        </div>

                            <h5 class="login-h2 pb-3 text-white">
                                Sign in to Kobo Accountant
                            </h5>
                            <form>
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="name" class="form-control" id="exampleInputname" aria-describedby="" placeholder="Email or Username" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="password" class="form-control" id="exampleInputEmail1"  aria-describedby="" placeholder="Password" required="">
                                    </div>
                                </div>

                                <div class="">
                                    <label>
                                        <input type="checkbox"  name="remember" class="text-white"> Remember me
                                    </label>
                                    <spa class="forgot"><a href="#" class="login-forgot pull-right">Forgot Password?</a></spa>
                                </div>
                                <a class="btn btn-loginn" href="/login" role="button"><span>Login</span></a>

                            </form>
                    </div>

                </div> 
            </div>
        </div>
    

<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/particles.js')}}"></script>
<script src="{{asset('js/appp.js')}}"></script>


</body>
</html>