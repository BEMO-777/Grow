<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
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
        <!-- start settings  -->
        <h1 class="p-relative">Projects</h1>
        <div class="projects-page d-grid m-20 g-20">
          <div class="project bg-white p-20 rad-6 p-relative">
            <span class="date fs-13 c-gray">11-7-2023</span>
            <h4 class="m-0">Mohamed Dashboard</h4>
            <p class="c-gray mt-10 mb-10 fs-14 capital">Mohamed dashboard project design and programming and hosting</p>
            <div class="team">
              <a href=""><img src="{{asset('imgs/team-01.png')}}" alt=""></a>
              <a href=""><img src="{{asset('imgs/team-02.png')}}" alt=""></a>
              <a href=""><img src="{{asset('imgs/team-03.png')}}" alt=""></a>
              <a href=""><img src="{{asset('imgs/team-04.png')}}" alt=""></a>
              <a href=""><img src="{{asset('imgs/team-05.png')}}" alt=""></a>
            </div>
            <div class="games d-flex">
              <span class="fs-13 rad-6 bg-eee">Programming</span>
              <span class="fs-13 rad-6 bg-eee">Design</span>
              <span class="fs-13 rad-6 bg-eee">Hosting</span>
              <span class="fs-13 rad-6 bg-eee">Marketing</span>
            </div>
            <div class="info between-flex">
              <div class="prog bg-eee">
                <span class="bg-blue" style="width: 50%;"></span>
              </div>
              <div class="fs-14 c-gray">
                <i class="fa-solid fa-dollar-sign"></i>
                2500
              </div>
            </div>
          </div>
          
          <div class="project bg-white p-20 rad-6 p-relative">
            <span class="date fs-13 c-gray">11-12-2023</span>
            <h4 class="m-0">Tiger Dashboard</h4>
            <p class="c-gray mt-10 mb-10 fs-14 capital">Tiger dashboard project design and programming and hosting</p>
            <div class="team">
              <a href=""><img src="{{asset('imgs/team-01.png')}}" alt=""></a>
              <a href=""><img src="{{asset('imgs/team-03.png')}}" alt=""></a>
            </div>
            <div class="games d-flex">
              <span class="fs-13 rad-6 bg-eee">Programming</span>
              <span class="fs-13 rad-6 bg-eee">Art Design</span>
            </div>
            <div class="info between-flex">
              <div class="prog bg-eee">
                <span class="bg-green" style="width: 80%;"></span>
              </div>
              <div class="fs-14 c-gray">
                <i class="fa-solid fa-dollar-sign"></i>
                2500
              </div>
            </div>
          </div>

          <div class="project bg-white p-20 rad-6 p-relative">
            <span class="date fs-13 c-gray">27-7-2023</span>
            <h4 class="m-0">Fahmy Productions</h4>
            <p class="c-gray mt-10 mb-10 fs-14 capital">Ahmed & Mohammed Fahmy Productions team</p>
            <div class="team">
              <a href=""><img src="imgs/team-01.png" alt=""></a>
              <a href=""><img src="imgs/team-01.png" alt=""></a>
            </div>
            <div class="games d-flex">
              <span class="fs-13 rad-6 bg-eee">Design</span>
              <span class="fs-13 rad-6 bg-eee">Photochop</span>
              <span class="fs-13 rad-6 bg-eee">Voice Over</span>
            </div>
            <div class="info between-flex">
              <div class="prog bg-eee">
                <span class="bg-green" style="width: 90%;"></span>
              </div>
              <div class="fs-14 c-gray">
                <i class="fa-solid fa-dollar-sign"></i>
                30000
              </div>
            </div>
          </div>

          <div class="project bg-white p-20 rad-6 p-relative">
            <span class="date fs-13 c-gray">12-9-2023</span>
            <h4 class="m-0">Arwa Project</h4>
            <p class="c-gray mt-10 mb-10 fs-14 capital">Arwa Studio</p>
            <div class="team">
              <a href=""><img src="{{asset('imgs/team-02.png')}}" alt=""></a>
              <a href=""><img src="{{asset('imgs/team-04.png')}}" alt=""></a>
              <a href=""><img src="{{asset('imgs/team-05.png')}}" alt=""></a>
            </div>
            <div class="games d-flex">
              <span class="fs-13 rad-6 bg-eee">Photochop</span>
              <span class="fs-13 rad-6 bg-eee">Design</span>
            </div>
            <div class="info between-flex">
              <div class="prog bg-eee">
                <span class="bg-red" style="width: 30%;"></span>
              </div>
              <div class="fs-14 c-gray">
                <i class="fa-solid fa-dollar-sign"></i>
                1400
              </div>
            </div>
          </div>

          <div class="project bg-white p-20 rad-6 p-relative">
            <span class="date fs-13 c-gray">28-10-2023</span>
            <h4 class="m-0">Mohamed Bashandy</h4>
            <p class="c-gray mt-10 mb-10 fs-14 capital">Mohamed Bashandy project design and programming and hosting</p>
            <div class="team">
              <a href=""><img src="{{asset('imgs/team-01.png')}}" alt=""></a>
              <a href=""><img src="{{asset('imgs/team-02.png')}}" alt=""></a>
              <a href=""><img src="{{asset('imgs/team-01.png')}}" alt=""></a>
              <a href=""><img src="{{asset('imgs/team-02.png')}}" alt=""></a>
            </div>
            <div class="games d-flex">
              <span class="fs-13 rad-6 bg-eee">Hosting</span>
              <span class="fs-13 rad-6 bg-eee">Marketing</span>
            </div>
            <div class="info between-flex">
              <div class="prog bg-eee">
                <span class="bg-green" style="width: 70%;"></span>
              </div>
              <div class="fs-14 c-gray">
                <i class="fa-solid fa-dollar-sign"></i>
                2000
              </div>
            </div>
          </div>

          <div class="project bg-white p-20 rad-6 p-relative">
            <span class="date fs-13 c-gray">22-10-2024</span>
            <h4 class="m-0">Ghost Freak</h4>
            <p class="c-gray mt-10 mb-10 fs-14 capital">g g gg g gg gg g g g</p>
            <div class="team">
              <a href=""><img src="imgs/team-05.png" alt=""></a>
            </div>
            <div class="games d-flex">
              <span class="fs-13 rad-6 bg-eee">Programming</span>
            </div>
            <div class="info between-flex">
              <div class="prog bg-eee">
                <span class="bg-red" style="width: 10%;"></span>
              </div>
              <div class="fs-14 c-gray">
                <i class="fa-solid fa-dollar-sign"></i>
                140
              </div>
            </div>
          </div>

          <div class="project bg-white p-20 rad-6 p-relative">
            <span class="date fs-13 c-gray">22-10-2023</span>
            <h4 class="m-0">Younuu</h4>
            <p class="c-gray mt-10 mb-10 fs-14 capital">Younis dashboard project design and programming and hosting</p>
            <div class="team">
              <a href=""><img src="{{asset('imgs/team-03.png')}}" alt=""></a>
              <a href=""><img src="{{asset('imgs/team-03.png')}}" alt=""></a>
              <a href=""><img src="{{asset('imgs/team-03.png')}}" alt=""></a>
              <a href=""><img src="{{asset('imgs/team-02.png')}}" alt=""></a>
              <a href=""><img src="{{asset('imgs/team-02.png')}}" alt=""></a>
            </div>
            <div class="games d-flex">
              <span class="fs-13 rad-6 bg-eee">Programming</span>
              <span class="fs-13 rad-6 bg-eee">Design</span>
              <span class="fs-13 rad-6 bg-eee">Hosting</span>
              <span class="fs-13 rad-6 bg-eee">Marketing</span>
            </div>
            <div class="info between-flex">
              <div class="prog bg-eee">
                <span class="bg-green" style="width: 98%;"></span>
              </div>
              <div class="fs-14 c-gray">
                <i class="fa-solid fa-dollar-sign"></i>
                3000
              </div>
            </div>
          </div>

          <div class="project bg-white p-20 rad-6 p-relative">
            <span class="date fs-13 c-gray">1-11-2023</span>
            <h4 class="m-0">Man Dashboard</h4>
            <p class="c-gray mt-10 mb-10 fs-14 capital">Man dashboard project design and programming and hosting</p>
            <div class="team">
              <a href=""><img src="imgs/team-01.png" alt=""></a>
            </div>
            <div class="games d-flex">
              <span class="fs-13 rad-6 bg-eee">Programming</span>
              <span class="fs-13 rad-6 bg-eee">Design</span>
              <span class="fs-13 rad-6 bg-eee">Hosting</span>
              <span class="fs-13 rad-6 bg-eee">Marketing</span>
            </div>
            <div class="info between-flex">
              <div class="prog bg-eee">
                <span class="bg-blue" style="width: 65%;"></span>
              </div>
              <div class="fs-14 c-gray">
                <i class="fa-solid fa-dollar-sign"></i>
                500
              </div>
            </div>
          </div>

          <div class="project bg-white p-20 rad-6 p-relative">
            <span class="date fs-13 c-gray">4-11-2023</span>
            <h4 class="m-0">Lol Dashboard</h4>
            <p class="c-gray mt-10 mb-10 fs-14 capital">LOL dashboard project design and programming and hosting</p>
            <div class="team">
              <a href=""><img src="{{asset('imgs/team-04.png')}}" alt=""></a>
              <a href=""><img src="{{asset('imgs/team-03.png')}}" alt=""></a>
              <a href=""><img src="{{asset('imgs/team-05.png')}}" alt=""></a>
            </div>
            <div class="games d-flex">
              <span class="fs-13 rad-6 bg-eee">Programming</span>
              <span class="fs-13 rad-6 bg-eee">Marketing</span>
            </div>
            <div class="info between-flex">
              <div class="prog bg-eee">
                <span class="bg-red" style="width: 40%;"></span>
              </div>
              <div class="fs-14 c-gray">
                <i class="fa-solid fa-dollar-sign"></i>
                2500
              </div>
            </div>
          </div>
        </div>
    </div>
   </body>
</html>