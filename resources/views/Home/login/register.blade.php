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
  </head>
  <body>
    <img class="wave" src="{{asset('imgs/avatar.jpg')}}">
    <div class="container">
      <div class="img">
        <img src="">
      </div>
      <div class="login-content">
        <form action="{{url('check')}}" method="POST">
          @csrf
          <img src="{{asset('imgs/avatar.jpg')}}">
          <h2 class="title">HA HA HA</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <input type="text" class="input" placeholder="Username" name="user">
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <input type="Email" class="input" placeholder="Email" name="email">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i"> 
                      <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                      <input type="password" class="input" placeholder="Password" name="pass">
                  </div>
                </div>
                <div class="input-div pass">
                    <div class="i"> 
                      <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                      <input type="password" class="input" placeholder="RE-Password" name="repass">
                  </div>
                </div>
                <a href="#">VIP ACCOUNT!</a>
                <input type="submit" class="btn" value="Register">
              </form>
          </div>
      </div>
      <script type="text/javascript" src="{{asset('JavaScript/main.js')}}"></script>
  </body>
</html>