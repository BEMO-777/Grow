<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Log-in</title>
        <link rel="stylesheet" href="{{asset('home/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('home/css/framework.css')}}">
        <link rel="stylesheet" href="{{asset('home/css/login.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <script type="text/javascript" src="{{asset('home/JavaScript/main.js')}}"></script>
    </head>
    <body>
        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif
        <img class="wave" src="{{asset('imgs/wave.png')}}">
        <div class="container">
            <div class="img">
                <img src="{{asset('imgs/bg.svg')}}">
            </div>
            <div class="login-content">
                <form  method="POST" action="{{ route('login') }}">
                    @csrf
                    <img src="{{asset('imgs/avatar.svg')}}">
                    <h2 class="title">Log In</h2>
                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="fas fa-user div" >
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        </div>
                        
                    </div>
                    <div class="input-div pass">
                        <div class="i"> 
                        <i class="fas fa-lock"></i>
                        </div>
                        <div class="mt-4 div">
                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                        </div>
                        <br>
                        <div class="block mt-4 div">
                            <label for="remember_me" class="flex items-center">
                                <br>
                                <x-checkbox id="remember_me" name="remember" />
                                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>
                    </div>
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                                @endif
                
                                <x-button class="ms-4 btn">
                                    {{ __('Log in') }}
                                </x-button>
                            </div>
              </form>
          </div>
      </div>
  </body>
</html>