<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Heza @yield('title')</title>
    <link rel="stylesheet" href="/css/app.css" type="text/css">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
    <link rel="stylesheet" href="/css/icofont/icofont.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <div class="loading-bar"></div>
    {{-- <nav>
    <ul class="nav justify-content-justify">
    <li class="nav-item">
        <a class="nav-link active" href="#">Technology</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Health</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Culture</a>
    </li>
    <li class="nav-item">
            <a class="nav-link" href="#">Design</a>
        </li>
    </ul>
    </nav> --}}
    <div class="logo">
     <a href="/">
        <img src="https://i.ibb.co/1MfL4sC/android-character-symbol.png" alt="logo">
        <h5>Heza</h5>
     </a>
    </div>
    <div class="header-infos">
      {{-- <div class="header-search">
        <label for="">
            <i class="icofont-search"></i>
            <input type="text" placeholder="search" class="form-control">
        </label>
      </div> --}}
     @guest
     <div class="header-user-profile">
        <div class="header-user-auth">
          <a href="/login">Sign in</a>
          <a href="/register">Join us</a>
        </div>
      </div>
      @else
      <div class="header-user-profile">
        <div class="header-user-avatar">
         <img src="https://i.ibb.co/c8ZKWhx/ninja-1.png" alt="" class="header-avatar-img">
         <div class="header-user-auth-links">
            <div class="header-users-auths">
              <img src="https://i.ibb.co/c8ZKWhx/ninja-1.png" alt="">
              <div class="header-user-auth-infos">
              <h5>{{Auth()->user()->name}}</h5>
              <h5>{{Auth()->user()->handle}}</h5>
              </div>
            </div>
            <li>
            <a class="nav-link" href="/"><i class="icofont-ui-home"></i> Home</a>
            </li>
            <li>
                <a class="nav-link" href="/story/create"><i class="icofont-brand-appstore"></i> New Stories</a>
            </li>
            <li>
                <a class="nav-link" href="/{!! Auth()->user()->handle !!}"><i class="icofont-user-suited"></i> Profile</a>
            </li>
            <li>
                <a class="nav-link" href="#"><i class="icofont-ui-settings"></i> Setting</a>
            </li>
            <li>
                <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();"><i class="icofont-sign-out"></i> Sign out</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
            </li>
        </div>
        </div>
      </div>
     @endguest
    </div>
</header>
<section class="showcase">
    @yield('content')
    <div class="success-message"></div>
    <div class="error-message"></div>
</section>
<footer>
  <div class="text-center mt-5 d-flex flex-column justify-content-center align-item-center w-100">
        <div class="logo">
        <a href="/">
            <img src="https://i.ibb.co/1MfL4sC/android-character-symbol.png" alt="logo">
            <h5>Heza</h5>
        </a>
        </div>
  <div class="mt-3 followMe">
    <div>
        <a href="https://github.com/itsgracian" target="_blank"><i class="icofont-github"></i></a>
    </div>
    <div>
        <a href="https://twitter.com/@Itsgracian" target="_blank"><i class="icofont-twitter"></i></a>
    </div>
    <div>
        <a href="https://www.instagram.com/itsgracian/" target="_blank"><i class="icofont-instagram"></i></a>
    </div>
    <div>
        <a href="https://www.facebook.com/itsgracian" target="_blank">
            <i class="icofont-facebook"></i>
        </a>
    </div>
  </div>
  </div>
</footer>
@yield('scripts')
<script src="/js/library.js" type="text/javascript"></script>
<script src="/js/auth.js" type="text/javascript"></script>
</body>
</html>
