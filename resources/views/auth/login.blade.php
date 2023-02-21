

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
        {{-- "background-image: url('registerstyle/images/bg-registration-form-1.jpg');"> --}}
            
			<div class="inner">
				<div class="image-holder">
					<img src="registerstyle/images/2.jpg" alt="">
				</div>
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

					<h3>Login Form</h3>
					
					<div class="form-wrapper">
						<input  placeholder="Email Address" class="form-control" id="email"  type="email" name="email" :value="old('email')" >
						    <x-input-error :messages="$errors->get('email')" class="mt-2" style="color:red" />
                            <i class="zmdi zmdi-email"></i>
                      
					</div>
					{{-- <div class="form-wrapper">
						<select name="" id="" class="form-control">
							<option value="" disabled selected>Gender</option>
							<option value="male">Male</option>
							<option value="femal">Female</option>
							<option value="other">Other</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div> --}}
					<div class="form-wrapper">
						<input type="password" placeholder="Password" class="form-control"   
                       id="password" 
                      
                        name="password"
                        autocomplete="new-password" >
						<i class="zmdi zmdi-lock"></i>
                        <x-input-error :messages="$errors->get('password')" class="mt-1"  style="color:red" />
					</div>
				

{{--                   
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
        
                        <button>

                            {{ __('Register') }}
                            <i class="zmdi zmdi-arrow-right"></i>
                        </button> --}}




                           <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <button  >
                    {{ __('Log in') }}
                    <i class="zmdi zmdi-arrow-right"></i>
                </button>
            </div>
                   

				</form>
			</div>
		</div>
		
	</body>
</html>

@endsection