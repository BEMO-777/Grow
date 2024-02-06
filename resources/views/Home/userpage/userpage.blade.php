<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{asset('Home/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('Home/css/framework.css')}}">
    <link rel="stylesheet" href="{{asset('Home/css/dash.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="page d-flex">
      <!-- start sidebar-->
      @include('Home.userpage.sidebar')
      <!--start content-->
      @include('Home.userpage.content')
      <!--start Dashboard-->
      <h1 class="p-relative">Dashboard</h1>
      <div class="wrapper d-grid gap-20">
        <!--start welcome-->
        @include('Home.userpage.welcome')
        <!--start draft-->
        @include('Home.userpage.quick_draft')
        <!-- start targets  -->
        @include('Home.userpage.targets')
        <!--start tickets-->
        @include('Home.userpage.tickets_statistics')
        <!-- start news  -->
        @include('Home.userpage.latest_news')
        <!-- start tasks  -->
        @include('Home.userpage.latest_tasks')
        <!-- start search  -->
        @include('Home.userpage.top_search')
        <!-- start uploads  -->
        @include('Home.userpage.latest_uploads')
        <!-- start Projects  -->
        @include('Home.userpage.project_progress')
        <!-- start Remind -->
        @include('Home.userpage.reminders')
        <!-- start post  -->
        @include('Home.userpage.latest_tasks')
        <!-- start social  -->
        @include('Home.userpage.social_media_status')
      </div>
      <!-- start projects  -->
      @include('Home.userpage.projects')
    </div>
  </div>
  <script src="{{asset('home/JavaScript/yoyo.js')}}"></script>
  </body>
  </html>
  