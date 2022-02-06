<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/w3-CSS.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

<style>
    body {
        background-image: url('{{asset('img/Home/sailboat.jpg')}}');
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<body>
    
            @if (Route::has('login'))
                <div class="w3-bar w3-black w3-large w3-padding-small w3-top w3-container">  
                    
                    @auth
                        <a href="{{ route('home') }}" class="w3-bar-item w3-button w3-mobile w3-hide-small">Home <i class="fa fa-home"></i></a> <!--HOME -->
                        <a href="{{ route('allPosts') }}" class="w3-bar-item w3-button w3-mobile w3-hide-small">Posts <i class="fa fa-search"></i></a> <!-- ALL POSTS -->
                        <a href="{{ url('/panel') }}" class="w3-bar-item w3-button w3-mobile w3-hide-small">Panel <i class="fa fa-globe"></i></a> <!-- Dashboard -->
{{--                         <a href="{{ route('aboutMe') }}" class="w3-bar-item w3-button w3-mobile w3-hide-small">About Me <i class="fa fa-envelope"></i></a> <!-- ABOUT ME -->
 --}}                        <a href="{{ route('contactMe') }}" class="w3-bar-item w3-button w3-mobile w3-hide-small">Contact <i class="fa fa-globe"></i></a> <!-- Contact Me -->
                        <div class="w3-right w3-hide-small" >
                          
                            <form method="POST" action="{{ route('logout') }}" class="w3-show-inline-block">
                                @csrf
                                <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                this.closest('form').submit();" style="text-decoration: none; position: relative;top: 0.6rem; right: 0.4rem;">
                                    Log Out
                                </a>
                            </form>
                        </div>
                        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>
                        <p class="w3-bar-item w3-button w3-center w3-hide-large w3-hide-medium" href="#"  style="margin: 0;">ROY'S BLOG AREA</p>
                        



                        <div id="demo" class="w3-bar-block w3-dark w3-hide w3-hide-large w3-hide-medium">
                            <button class="w3-bar-item w3-black w3-center">{{ Auth::user()->name }}</button>
                            <a href="{{ route('home') }}" class="w3-bar-item w3-button">Home <i class="fa fa-home"></i></a> <!--HOME -->
                            <a href="{{ route('allPosts') }}" class="w3-bar-item w3-button">Posts <i class="fa fa-search"></i></a> <!-- ALL POSTS -->
                            <a href="{{ url('/panel') }}" class="w3-bar-item w3-button">Panel <i class="fa fa-globe"></i></a> <!-- Dashboard -->
                            {{-- <a href="{{ route('aboutMe') }}" class="w3-bar-item w3-button">About Me <i class="fa fa-envelope"></i></a> <!-- ABOUT ME --> --}}
                            <a href="{{ route('contactMe') }}" class="w3-bar-item w3-button">Contact <i class="fa fa-globe"></i></a> <!-- Contact Me -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                this.closest('form').submit();" style="text-decoration: none;">
                                    Log Out
                                </a>
                            </form>

                        </div>
                    @else

                        <a href="{{ route('home') }}" class="w3-bar-item w3-button w3-mobile w3-hide-small">Home<i class="fa fa-home"></i></a> <!--HOME -->
                        <a href="{{ route('allPosts') }}" class="w3-bar-item w3-button w3-mobile w3-hide-small">Posts <i class="fa fa-search"></i></a> <!-- ALL POSTS -->
                        {{-- <a href="{{ route('aboutMe') }}" class="w3-bar-item w3-button w3-mobile w3-hide-small">About Me <i class="fa fa-envelope"></i></a> <!-- ABOUT ME --> --}}
                        <a href="{{ route('contactMe') }}" class="w3-bar-item w3-button w3-mobile w3-hide-small">Contact <i class="fa fa-globe"></i></a> <!-- Contact Me -->

                        <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-mobile w3-hide-small w3-right">Login<i class="fa fa-sign-in"></i></a> <!-- Login -->
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="w3-bar-item w3-button w3-mobile w3-right w3-hide-small">Register<i class="fa fa-retweet"></i></a> <!-- Register -->
                        @endif
                        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>
                        <p class="w3-bar-item w3-button w3-center w3-hide-large w3-hide-medium" href="#"  style="margin: 0;">ROY'S BLOG AREA</p>
                        

                        <div id="demo" class="w3-bar-block w3-dark w3-hide w3-hide-large w3-hide-medium">
                            <a href="{{ route('home') }}" class="w3-bar-item w3-button">Home<i class="fa fa-home"></i></a> <!--HOME -->
                            <a href="{{ route('allPosts') }}" class="w3-bar-item w3-button">Posts <i class="fa fa-search"></i></a> <!-- ALL POSTS -->
{{--                             <a href="{{ route('aboutMe') }}" class="w3-bar-item w3-button">About Me <i class="fa fa-envelope"></i></a> <!-- ABOUT ME -->
 --}}                            <a href="{{ route('contactMe') }}" class="w3-bar-item w3-button">Contact <i class="fa fa-globe"></i></a> <!-- Contact Me -->
                            <a href="{{ route('login') }}" class="w3-bar-item w3-button">Login<i class="fa fa-sign-in"></i></a> <!-- Login -->
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="w3-bar-item w3-button">Register<i class="fa fa-retweet"></i></a> <!-- Register -->
                            @endif
                        </div>

                    @endauth
                </div>
            @endif

            
            <a  href="{{ route('logout') }}"
            onclick="event.preventDefault();
                   this.closest('form').submit();" class="w3-bar-item w3-button">Logout</a>

    

    <script>
        
        function myFunction() {
          var x = document.getElementById("demo");
          if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
          } else { 
            x.className = x.className.replace(" w3-show", "");
          }
        }
    </script>



    @yield('navbar')
</body>
</html>




