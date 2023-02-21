<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blogs </title>
	<link rel="icon" href="{{asset('img/Fevicon.png')}}" type="image/png">

  <link rel="stylesheet" href="{{asset('vendors/bootstrap/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/themify-icons/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/linericon/style.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.carousel.min.css')}}">

  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid box_1620">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="/"><img src="{{asset('img/logo.png')}}" style="height:80px; width:200px" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-center">
              <li class="nav-item "><a class="nav-link" href="/">Home</a></li> 
              {{-- <li class="nav-item"><a class="nav-link" href="archive.html">Archive</a></li> --}}
              <li class="nav-item"><a class="nav-link" href="/categories">Categories</a> 
              <li class="nav-item "><a class="nav-link" href="#">About</a></li> 
              {{-- <li class="nav-item"><a class="nav-link" href="archive.html">Archive</a></li> --}}
              <li class="nav-item"><a class="nav-link" href="#">Contact</a> 
              {{-- <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Pages</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="blog-details.html">Blog Details</a></li>
                </ul>
              </li> --}}
              {{-- <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li> --}}

          
              
              
                          </ul>
              </div>



        


            </ul>
            <ul class="nav navbar-nav navbar-right navbar-social">

              @if (Auth::check())
              <li>
                            <div class="dropdown">
                              <button class="mt-4 btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Hello &nbsp;{{ Auth::user()->name }}
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="/profile"><i class="bi bi-person"></i> Profile</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                              <a class="dropdown-item" href="#"> <a class="nav-link"
                                          href="{{ route('logout') }}"
                                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                          <i class="bi bi-power"></i><b>
                                              {{ __('Logout') }}</b>
              
                                      </a></a>
                               
                              </div>
              
                               
                            </div>
              
              </li>
              
                        @else
                        <li class="nav-item "><a class="nav-link " href="/login">Login</a></li> 
                        <li class="nav-item "><a class="nav-link " href="/register">Register</a></li> 
                           
                        @endif

              {{-- <li><a href="#"><i class="ti-facebook"></i></a></li>
              <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
              <li><a href="#"><i class="ti-instagram"></i></a></li>
              <li><a href="#"><i class="ti-skype"></i></a></li> --}}
            </ul>
          </div> 
        </div>
      </nav>
    </div> 
  
  </header>
 
  <!--================Header Menu Area =================-->