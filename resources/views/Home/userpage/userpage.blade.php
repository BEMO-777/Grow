<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="home/css/all.min.css">
    <link rel="stylesheet" href="home/css/framework.css">
    <link rel="stylesheet" href="home/css/dash.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="page d-flex">
      @include('Home.userpage.sidebar')
      <!--start content-->
      @include('Home.userpage.content')
      <!--start Dashboard-->
      @include('Home.userpage.welcome')
      @include('Home.userpage.quick_draft')
      @include('Home.userpage.targets')
      @include('Home.userpage.tickets_statistics')
      @include('Home.userpage.latest_news')
      @include('Home.userpage.latest_tasks')
      @include('Home.userpage.top_search')
      @include('Home.userpage.latest_uploads')
      @include('Home.userpage.project_progress')
      @include('Home.userpage.reminders')
      @include('Home.userpage.latest_post')
      @include('Home.userpage.social_media_status')
      <!-- start projects  -->
      @include('Home.userpage.projects')
      </div>
    </div>
  </body>
</html>
