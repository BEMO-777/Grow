<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function userpage()
    {
        return view('Home.userpage.userpage');
    }
    public function userpage_side()
    {
        return view('Home.userpage.userpage');
    }
    public function courses()
    {
        return view('Home.courses.courses');
    }
    public function files()
    {
        return view('Home.files.files');
    }
    public function friends()
    {
        return view('Home.friends.friends');
    }
    public function plans()
    {
        return view('Home.plans.plans');
    }
    public function profile()
    {
        return view('Home.profile.profile');
    }
    public function projects()
    {
        return view('Home.projects.projects');
    }
    public function settings()
    {
        return view('Home.settings.settings');
    }
    // login
    public function loginpage()
    {
        return view('auth.login');
    }
    public function check()
    {
        return view('auth.register');
    }

}
