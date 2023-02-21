
@extends('pages.layout.master')


@section('content')




<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="registerstyle/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="registerstyle/css/style.css">
	</head>

	<body>

		<div class="wrapper" style="background-color:#fdf0e8">
			<div class="inner">
				<div class="image-holder">
					<img src="registerstyle/images/2.jpg" alt="">
				</div>
				<form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
					<h3>Registration Form</h3>

					<div class="form-wrapper">
						<input id="name"  type="text" name="name" :value="old('name')" placeholder="Username" class="form-control">
						<i class="zmdi zmdi-account"></i>
                        <x-input-error :messages="$errors->get('name')" class="mt-2"  style="color:red" />
					</div>
					<div class="form-wrapper">
						<input  placeholder="Email Address" class="form-control" id="email"  type="email" name="email" :value="old('email')" >
						  <x-input-error :messages="$errors->get('email')" class="mt-2 " style="color:red" />
                            <i class="zmdi zmdi-email"></i>

					</div>
					<div class="form-wrapper">
						<input  placeholder="Mobile number " class="form-control" id="phone"  type="phone" name="phone" :value="old('phone')" >
						  <x-input-error :messages="$errors->get('phone')" class="mt-2 " style="color:red" />
                            <i class="zmdi zmdi-phone"></i>

					</div>
					<div class="form-wrapper">

                      
					</div>
				
					<div class="form-wrapper">
						<input type="password" placeholder="Password" class="form-control"
                       id="password"

                        name="password"
                        autocomplete="new-password" >
						<i class="zmdi zmdi-lock"></i>
                        <x-input-error :messages="$errors->get('password')" class="mt-1"  style="color:red" />
					</div>
					<div class="form-wrapper">
						<input placeholder="Confirm Password" class="form-control"    id="password_confirmation"
                        type="password"
                        name="password_confirmation"  >
						<i class="zmdi zmdi-lock"></i>
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1"   style="color:red"/>
					</div>


                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <button>

                            {{ __('Register') }}
                            <i class="zmdi zmdi-arrow-right"></i>
                        </button>




					
				</form>
			</div>
		</div>




@endsection
