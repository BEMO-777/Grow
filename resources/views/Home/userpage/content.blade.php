<div class="content w-full hide-flow">
  <!--start head-->
  <div class="head bg-white p-15 between-flex">
    <div class="search p-relative">
      <input class="p-10 border-cc rad-10" type="search" placeholder="type a kyeword">
    </div>
    <div class="icons d-flex align-c">
    @guest
      <span class="">
        <!-- rings parent class => "notify p-relative" -->
        <!-- <i class="fa-regular fa-bell fa-lg"></i> -->
        <a href="{{url('loginpage')}}" style="background-color: var(--green); padding: 4px 10px ; border-radius: 6px ; color:aliceblue;" class="menuOP">Login</a>
        <a href="{{url('check')}}" style="background-color: var(--green); padding: 4px 10px ; border-radius: 6px ; color:aliceblue; margin-left: 15px;margin-right: 20px" class="menuOP">Register</a>
      </span>
    @else
      <div id="Smenu">
        <img class="minLogo" src="{{asset('imgs/boy_tiger.png')}}" alt="">
      </div>
      <div id="Soverlay">
        <div id="menu-content">
          <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="menu-option">Logout</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
          <a href="{{url('settings')}}" class="menu-option">Settings</a>
          <button class="close-btn" onclick="closeMenu()">Close</button>
        </div>
      </div>
          @endguest
    </div>
  </div>

