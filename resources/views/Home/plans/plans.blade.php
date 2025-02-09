<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plans</title>
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
        <h1 class="p-relative">Plans</h1>
        <div class="plans-page d-grid m-20 g-20">
          <div class="plan green bg-white p-20 rad-6">
            <div class="top bg-green txt-c p-20">
              <h2 class="m-0 c-white">Free</h2>
              <div class="price c-white"><span>$</span>0.00</div>
            </div>
            <ul>
              <li>
                <i class="fa-solid fa-check fa-fw yes"></i>
                <span>Access All Text Lessons</span>
                <i class="fa-solid fa-circle-info help"></i>
              </li>

              <li>
                <i class="fa-solid fa-check fa-fw yes"></i>
                <span>Access All Videos Lessons</span>
                <i class="fa-solid fa-circle-info help"></i>
              </li>
              
              <li>
                <i class="fa-solid fa-check fa-fw yes"></i>
                <span>Appear on The Leaderboard</span>
                <i class="fa-solid fa-circle-info help"></i>
              </li>
              
              <li>
                <i class="fa-solid fa-xmark fa-fw"></i>
                <span>Browse Content Without Ads</span>
                <i class="fa-solid fa-circle-info help"></i>
              </li>
              
              <li>
                <i class="fa-solid fa-xmark fa-fw"></i>
                <span>Access All The Assignmesnts</span>
                <i class="fa-solid fa-circle-info help"></i>
              </li>
              

              <li>
                <i class="fa-solid fa-xmark fa-fw"></i>
                <span>Get Dialy Prizes</span>
                <i class="fa-solid fa-circle-info help"></i>
              </li>
              

              <li>
                <i class="fa-solid fa-xmark fa-fw"></i>
                <span>Earn Certificate</span>
                <i class="fa-solid fa-circle-info help"></i>
              </li>
              

              <li>
                <i class="fa-solid fa-xmark fa-fw"></i>
                <span>1 GB Space For Hosting Files</span>
                <i class="fa-solid fa-circle-info help"></i>
              </li>
              

              <li>
                <i class="fa-solid fa-xmark fa-fw"></i>
                <span>Access Badge System</span>
                <i class="fa-solid fa-circle-info help"></i>
              </li>
              
            </ul>
            <a class="btn-shape bg-green c-white d-block w-fit" href="#" id="">Join</a>
          </div>

          <div class="plan blue bg-white p-20 rad-6">
            <div class="top bg-blue txt-c p-20">
              <h2 class="m-0 c-white">Pro</h2>
              <div class="price c-white"><span>$</span>4.44</div>
            </div>
            <ul>
              <li>
                <i class="fa-solid fa-check fa-fw yes"></i>
                <span>Access All Text Lessons</span>
                <i class="fa-solid fa-circle-info help"></i>
              </li>

              <li>
                <i class="fa-solid fa-check fa-fw yes"></i>
                <span>Access All Videos Lessons</span>
                <i class="fa-solid fa-circle-info help"></i>
              </li>
              
              <li>
                <i class="fa-solid fa-check fa-fw yes"></i>
                <span>Appear on The Leaderboard</span>
                <i class="fa-solid fa-circle-info help"></i>
              </li>
              
              <li>
                <i class="fa-solid fa-check fa-fw yes"></i>
                <span>Browse Content Without Ads</span>
                <i class="fa-solid fa-circle-info help"></i>
              </li>
              
              <li>
                <i class="fa-solid fa-check fa-fw yes"></i>
                <span>Access All The Assignmesnts</span>
                <i class="fa-solid fa-circle-info help"></i>
              </li>
              

              <li>
                <i class="fa-solid fa-check fa-fw yes"></i>
                <span>Get Dialy Prizes</span>
                <i class="fa-solid fa-circle-info help"></i>
              </li>
              

              <li>
                <i class="fa-solid fa-xmark fa-fw"></i>
                <span>Earn Certificate</span>
                <i class="fa-solid fa-circle-info help"></i>
              </li>
              

              <li>
                <i class="fa-solid fa-xmark fa-fw"></i>
                <span>1 GB Space For Hosting Files</span>
                <i class="fa-solid fa-circle-info help"></i>
              </li>
              

              <li>
                <i class="fa-solid fa-xmark fa-fw"></i>
                <span>Access Badge System</span>
                <i class="fa-solid fa-circle-info help"></i>
              </li>
              
            </ul>
            <a class="btn-shape bg-green c-white d-block w-fit" href="#" id="">Join</a>
          </div>

          <div class="plan orange bg-white p-20 rad-6">
            <div class="top bg-orange txt-c p-20">
              <h2 class="m-0 c-white">Pro Max</h2>
              <div class="price c-white"><span>$</span>17.99</div>
            </div>
            <ul>
              <li>
                <i class="fa-solid fa-check fa-fw yes"></i>
                <span>Access All Text Lessons</span>
                <i class="fa-solid fa-circle-info help"></i>
              </li>

              <li>
                <i class="fa-solid fa-check fa-fw yes"></i>
                <span>Access All Videos Lessons</span>
                <i class="fa-solid fa-circle-info help"></i>
              </li>
              
              <li>
                <i class="fa-solid fa-check fa-fw yes"></i>
                <span>Appear on The Leaderboard</span>
                <i class="fa-solid fa-circle-info help"></i>
              </li>
              
              <li>
                <i class="fa-solid fa-check fa-fw yes"></i>
                <span>Browse Content Without Ads</span>
                <i class="fa-solid fa-circle-info help"></i>
              </li>
              
              <li>
                <i class="fa-solid fa-check fa-fw yes"></i>
                <span>Access All The Assignmesnts</span>
                <i class="fa-solid fa-circle-info help"></i>
              </li>
              

              <li>
                <i class="fa-solid fa-check fa-fw yes"></i>
                <span>Get Dialy Prizes</span>
                <i class="fa-solid fa-circle-info help"></i>
              </li>
              

              <li>
                <i class="fa-solid fa-check fa-fw yes"></i>
                <span>Earn Certificate</span>
                <i class="fa-solid fa-circle-info help"></i>
              </li>
              

              <li>
                <i class="fa-solid fa-check fa-fw yes"></i>
                <span>1 GB Space For Hosting Files</span>
                <i class="fa-solid fa-circle-info help"></i>
              </li>
              

              <li>
                <i class="fa-solid fa-check fa-fw yes"></i>
                <span>Access Badge System</span>
                <i class="fa-solid fa-circle-info help"></i>
              </li>
              
            </ul>
            <p class="m-0 c-gray txt-c">This Is Your Current Plan</p>
          </div>
        </div>
    </div>
  </body>
</html>