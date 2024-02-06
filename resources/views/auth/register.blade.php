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
    <img class="wave" src="{{asset('imgs/avatar.jpg')}}">
    <div class="container">
      <div class="img">
        <img src="">
      </div>
      <div class="login-content">
        <form method="POST" action="{{ route('register') }}">
            @csrf
          <img src="{{asset('imgs/avatar.jpg')}}">
          <h2 class="title">HA HA HA</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <x-input id="name" placeholder="User Name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="mt-4 div">
                        <x-input id="email" placeholder="Email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i"> 
                      <i class="fas fa-lock"></i>
                    </div>
                    <div class="mt-4 div">
                        <x-input id="password" placeholder="Password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i"> 
                      <i class="fas fa-lock"></i>
                    </div>
                    <div class="mt-4 div">
                        <x-input id="password_confirmation" placeholder="RE-Password" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>
                </div>
                <a href="#">VIP ACCOUNT!</a>
                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />
                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
                @endif
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4 btn">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
          </div>
      </div>
  </body>
</html>