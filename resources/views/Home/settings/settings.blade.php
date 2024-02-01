<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>
    <link rel="stylesheet" href="home/css/all.min.css">
    <link rel="stylesheet" href="home/css/framework.css">
    <link rel="stylesheet" href="home/css/dash.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
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
        <h1 class="p-relative">Settings</h1>
        <div class="settings-page m-20 mb-25 d-grid g-20">
          <!-- start setting box  -->
          @include('Home.settings.site_control')
          <!-- start info box  -->
          @include('Home.settings.general_info')
          <!-- start security info  -->
          @include('Home.settings.security_info')
          <!-- start social media  -->
          @include('Home.settings.social_info')
          <!-- start checkbox  -->
          @include('Home.settings.wedgets_control')
          <!-- start radio  -->
          @include('Home.settings.backup_manager')
        </div>
    </div>
  </body>
</html>