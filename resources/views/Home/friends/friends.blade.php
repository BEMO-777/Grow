<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friends</title>
    <link rel="stylesheet" href="{{asset('home/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/framework.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/dash.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <script src="{{asset('Home/JavaScript/yoyo.js')}}"></script>
  </head>
  <body>
    <div class="page d-flex">
      <!-- start sidebar  -->
      @include('Home.userpage.sidebar')
      <!-- start content  -->
      <div class="content w-full hide-flow">
        <!-- start head  -->
        @include('Home.userpage.content')
        <!-- start courses  -->
        <h1 class="p-relative">Friends</h1>
        <div class="friends-page d-grid m-20 g-20">
          <div class="friend bg-white rad-6 p-20 p-relative">
            <div class="contact">
              <i class="fa-solid fa-phone"></i>
              <i class="fa-regular fa-envelope"></i>
            </div>
            <div class="txt-c">
              <img class="w-100 h-100 rad-half mt-10 mb-10" src="{{asset('imgs/friend-01.jpg')}}" alt="">
              <h4 class="m-0">Mr Lee</h4>
              <p class="fs-13 c-gray mt-5 mb-0">JS Dev / Taxi Driver</p>
            </div>
            <div class="icons fs-14 p-relative">
              <div class="mb-10">
                <i class="fa-regular fa-face-smile fa-fw"></i>
                <span>99 Friends</span>
              </div>
              <div class="mb-10">
                <i class="fa-solid fa-code-commit fa-fw"></i>
                <span>15 Projects</span>
              </div>
              <div>
                <i class="fa-regular fa-newspaper fa-fw"></i>
                <span>25 Articles</span>
              </div>
              <span class="vip fw-b c-orange">VIP</span>
            </div>
            <info class="between-flex fs-13">
              <span class="c-gray">Joined 2/10/2021</span>
              <div>
                <a class="bg-blue c-white btn-shape" href="profile.html">Profile</a>
                <a class="bg-red c-white btn-shape" href="#">Remove</a>
              </div>
            </info>
          </div>
          <div class="friend bg-white rad-6 p-20 p-relative">
            <div class="contact">
              <i class="fa-solid fa-phone"></i>
              <i class="fa-regular fa-envelope"></i>
            </div>
            <div class="txt-c">
              <{{asset(' class="w-100 h-10')}}0 rad-half mt-10 mb-10" src="{{asset('imgs/friend-02.jpg')}}" alt="">
              <h4 class="m-0">Mr Mr</h4>
              <p class="fs-13 c-gray mt-5 mb-0">JS Dev / Taxi Driver</p>
            </div>
            <div class="icons fs-14 p-relative">
              <div class="mb-10">
                <i class="fa-regular fa-face-smile fa-fw"></i>
                <span>99 Friends</span>
              </div>
              <div class="mb-10">
                <i class="fa-solid fa-code-commit fa-fw"></i>
                <span>15 Projects</span>
              </div>
              <div>
                <i class="fa-regular fa-newspaper fa-fw"></i>
                <span>25 Articles</span>
              </div>
            </div>
            <info class="between-flex fs-13">
              <span class="c-gray">Joined 10/10/2022</span>
              <div>
                <a class="bg-blue c-white btn-shape" href="profile.html">Profile</a>
                <a class="bg-red c-white btn-shape" href="#">Remove</a>
              </div>
            </info>
          </div>
          <div class="friend bg-white rad-6 p-20 p-relative">
            <div class="contact">
              <i class="fa-solid fa-phone"></i>
              <i class="fa-regular fa-envelope"></i>
            </div>
            <div class="txt-c">
              <img class="w-100 h-100 rad-half mt-10 mb-10" src="{{asset('imgs/friend-03.jpg')}}" alt="">
              <h4 class="m-0">Lee</h4>
              <p class="fs-13 c-gray mt-5 mb-0">JS Dev / Taxi Driver</p>
            </div>
            <div class="icons fs-14 p-relative">
              <div class="mb-10">
                <i class="fa-regular fa-face-smile fa-fw"></i>
                <span>99 Friends</span>
              </div>
              <div class="mb-10">
                <i class="fa-solid fa-code-commit fa-fw"></i>
                <span>15 Projects</span>
              </div>
              <div>
                <i class="fa-regular fa-newspaper fa-fw"></i>
                <span>25 Articles</span>
              </div>
              <span class="vip fw-b c-orange">VIP</span>
            </div>
            <info class="between-flex fs-13">
              <span class="c-gray">Joined 22/12/2022</span>
              <div>
                <a class="bg-blue c-white btn-shape" href="profile.html">Profile</a>
                <a class="bg-red c-white btn-shape" href="#">Remove</a>
              </div>
            </info>
          </div>
          <div class="friend bg-white rad-6 p-20 p-relative">
            <div class="contact">
              <i class="fa-solid fa-phone"></i>
              <i class="fa-regular fa-envelope"></i>
            </div>
            <div class="txt-c">
              <img class="w-100 h-100 rad-half mt-10 mb-10" src="{{asset('imgs/friend-04.jpg')}}" alt="">
              <h4 class="m-0">Law</h4>
              <p class="fs-13 c-gray mt-5 mb-0">JS Dev / Taxi Driver</p>
            </div>
            <div class="icons fs-14 p-relative">
              <div class="mb-10">
                <i class="fa-regular fa-face-smile fa-fw"></i>
                <span>99 Friends</span>
              </div>
              <div class="mb-10">
                <i class="fa-solid fa-code-commit fa-fw"></i>
                <span>15 Projects</span>
              </div>
              <div>
                <i class="fa-regular fa-newspaper fa-fw"></i>
                <span>25 Articles</span>
              </div>
            </div>
            <info class="between-flex fs-13">
              <span class="c-gray">Joined 7/7/2023</span>
              <div>
                <a class="bg-blue c-white btn-shape" href="profile.html">Profile</a>
                <a class="bg-red c-white btn-shape" href="#">Remove</a>
              </div>
            </info>
          </div>
          <div class="friend bg-white rad-6 p-20 p-relative">
            <div class="contact">
              <i class="fa-solid fa-phone"></i>
              <i class="fa-regular fa-envelope"></i>
            </div>
            <div class="txt-c">
              <img class="w-100 h-100 rad-half mt-10 mb-10" src="{{asset('imgs/friend-05.jpg')}}" alt="">
              <h4 class="m-0">Leo</h4>
              <p class="fs-13 c-gray mt-5 mb-0">JS Dev / Taxi Driver</p>
            </div>
            <div class="icons fs-14 p-relative">
              <div class="mb-10">
                <i class="fa-regular fa-face-smile fa-fw"></i>
                <span>99 Friends</span>
              </div>
              <div class="mb-10">
                <i class="fa-solid fa-code-commit fa-fw"></i>
                <span>15 Projects</span>
              </div>
              <div>
                <i class="fa-regular fa-newspaper fa-fw"></i>
                <span>25 Articles</span>
              </div>
              <span class="vip fw-b c-orange">VIP</span>
            </div>
            <info class="between-flex fs-13">
              <span class="c-gray">Joined 1/8/2019</span>
              <div>
                <a class="bg-blue c-white btn-shape" href="profile.html">Profile</a>
                <a class="bg-red c-white btn-shape" href="#">Remove</a>
              </div>
            </info>
          </div>
          <div class="friend bg-white rad-6 p-20 p-relative">
            <div class="contact">
              <i class="fa-solid fa-phone"></i>
              <i class="fa-regular fa-envelope"></i>
            </div>
            <div class="txt-c">
              <img class="w-100 h-100 rad-half mt-10 mb-10" src="{{asset('imgs/friend-01.jpg')}}" alt="">
              <h4 class="m-0">Lol</h4>
              <p class="fs-13 c-gray mt-5 mb-0">JS Dev / Taxi Driver</p>
            </div>
            <div class="icons fs-14 p-relative">
              <div class="mb-10">
                <i class="fa-regular fa-face-smile fa-fw"></i>
                <span>99 Friends</span>
              </div>
              <div class="mb-10">
                <i class="fa-solid fa-code-commit fa-fw"></i>
                <span>15 Projects</span>
              </div>
              <div>
                <i class="fa-regular fa-newspaper fa-fw"></i>
                <span>25 Articles</span>
              </div>
            </div>
            <info class="between-flex fs-13">
              <span class="c-gray">Joined 11/12/2021</span>
              <div>
                <a class="bg-blue c-white btn-shape" href="profile.html">Profile</a>
                <a class="bg-red c-white btn-shape" href="#">Remove</a>
              </div>
            </info>
          </div>
          <div class="friend bg-white rad-6 p-20 p-relative">
            <div class="contact">
              <i class="fa-solid fa-phone"></i>
              <i class="fa-regular fa-envelope"></i>
            </div>
            <div class="txt-c">
              <img class="w-100 h-100 rad-half mt-10 mb-10" src="{{asset('imgs/friend-04.jpg')}}" alt="">
              <h4 class="m-0">Mr Lol</h4>
              <p class="fs-13 c-gray mt-5 mb-0">JS Dev / Taxi Driver</p>
            </div>
            <div class="icons fs-14 p-relative">
              <div class="mb-10">
                <i class="fa-regular fa-face-smile fa-fw"></i>
                <span>99 Friends</span>
              </div>
              <div class="mb-10">
                <i class="fa-solid fa-code-commit fa-fw"></i>
                <span>15 Projects</span>
              </div>
              <div>
                <i class="fa-regular fa-newspaper fa-fw"></i>
                <span>25 Articles</span>
              </div>
              <span class="vip fw-b c-orange">VIP</span>
            </div>
            <info class="between-flex fs-13">
              <span class="c-gray">Joined 22/8/2018</span>
              <div>
                <a class="bg-blue c-white btn-shape" href="profile.html">Profile</a>
                <a class="bg-red c-white btn-shape" href="#">Remove</a>
              </div>
            </info>
          </div>
          <div class="friend bg-white rad-6 p-20 p-relative">
            <div class="contact">
              <i class="fa-solid fa-phone"></i>
              <i class="fa-regular fa-envelope"></i>
            </div>
            <div class="txt-c">
              <img class="w-100 h-100 rad-half mt-10 mb-10" src="{{asset('imgs/friend-05.jpg')}}" alt="">
              <h4 class="m-0">Mr pop</h4>
              <p class="fs-13 c-gray mt-5 mb-0">JS Dev / Taxi Driver</p>
            </div>
            <div class="icons fs-14 p-relative">
              <div class="mb-10">
                <i class="fa-regular fa-face-smile fa-fw"></i>
                <span>99 Friends</span>
              </div>
              <div class="mb-10">
                <i class="fa-solid fa-code-commit fa-fw"></i>
                <span>15 Projects</span>
              </div>
              <div>
                <i class="fa-regular fa-newspaper fa-fw"></i>
                <span>25 Articles</span>
              </div>
              <span class="vip fw-b c-orange">VIP</span>
            </div>
            <info class="between-flex fs-13">
              <span class="c-gray">Joined 4/4/2020</span>
              <div>
                <a class="bg-blue c-white btn-shape" href="profile.html">Profile</a>
                <a class="bg-red c-white btn-shape" href="#">Remove</a>
              </div>
            </info>
          </div>
          <div class="friend bg-white rad-6 p-20 p-relative">
            <div class="contact">
              <i class="fa-solid fa-phone"></i>
              <i class="fa-regular fa-envelope"></i>
            </div>
            <div class="txt-c">
              <img class="w-100 h-100 rad-half mt-10 mb-10" src="{{asset('imgs/friend-02.jpg')}}" alt="">
              <h4 class="m-0">Mr Pip</h4>
              <p class="fs-13 c-gray mt-5 mb-0">JS Dev / Taxi Driver</p>
            </div>
            <div class="icons fs-14 p-relative">
              <div class="mb-10">
                <i class="fa-regular fa-face-smile fa-fw"></i>
                <span>99 Friends</span>
              </div>
              <div class="mb-10">
                <i class="fa-solid fa-code-commit fa-fw"></i>
                <span>15 Projects</span>
              </div>
              <div>
                <i class="fa-regular fa-newspaper fa-fw"></i>
                <span>25 Articles</span>
              </div>
            </div>
            <info class="between-flex fs-13">
              <span class="c-gray">Joined 21/9/2022</span>
              <div>
                <a class="bg-blue c-white btn-shape" href="profile.html">Profile</a>
                <a class="bg-red c-white btn-shape" href="#">Remove</a>
              </div>
            </info>
          </div>
          <div class="friend bg-white rad-6 p-20 p-relative">
            <div class="contact">
              <i class="fa-solid fa-phone"></i>
              <i class="fa-regular fa-envelope"></i>
            </div>
            <div class="txt-c">
              <img class="w-100 h-100 rad-half mt-10 mb-10" src="{{asset('imgs/friend-04.jpg')}}" alt="">
              <h4 class="m-0">Mr Pipe</h4>
              <p class="fs-13 c-gray mt-5 mb-0">JS Dev / Taxi Driver</p>
            </div>
            <div class="icons fs-14 p-relative">
              <div class="mb-10">
                <i class="fa-regular fa-face-smile fa-fw"></i>
                <span>99 Friends</span>
              </div>
              <div class="mb-10">
                <i class="fa-solid fa-code-commit fa-fw"></i>
                <span>15 Projects</span>
              </div>
              <div>
                <i class="fa-regular fa-newspaper fa-fw"></i>
                <span>25 Articles</span>
              </div>
            </div>
            <info class="between-flex fs-13">
              <span class="c-gray">Joined 5/2/2022</span>
              <div>
                <a class="bg-blue c-white btn-shape" href="profile.html">Profile</a>
                <a class="bg-red c-white btn-shape" href="#">Remove</a>
              </div>
            </info>
          </div>
        </div>
    </div>
  </body>
</html>