<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Blog</title>
    @yield("material_script")
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    @section('navbar')
        <ul id="dropdown1" class="dropdown-content">
          <li><a href="{{{ action('PostsController@create')}}}">Create</a></li>
          <li class="divider"></li>
          <li><a href="/logout">Logout</a></li>
        </ul>
        <nav>
          <div class="nav-wrapper z-depth-2 #0C9FE8 blue lighten-2  ">
            <a href="#" class="brand-logo"><img id="nav_logo" src="/img/biglogo.png"></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="{{{ action('PostsController@index')}}}">HOME</a></li>
                <li><a href="{{{ action('HomeController@portfolio')}}}">Portfolio</a></li>
                <li><a href="{{{ action('HomeController@resume')}}}">Resume</a></li>
                @if(Auth::Check())
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{{Auth::user()->username}}}<i class="material-icons right">arrow_drop_down</i></a></li>
                @else
                    <li><a href="/login">Login</a></li>
                @endif

            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="{{{ action('PostsController@index')}}}">HOME</a></li>
                <li><a href="{{{ action('HomeController@portfolio')}}}">Portfolio</a></li>
                <li><a href="{{{ action('HomeController@resume')}}}">Resume</a></li>
            </ul>
          </div>
        </nav>
    @show


</head>
<body class="#eceff1 blue-grey lighten-5">
    @if (Session::has('successMessage'))
        <div class="row">
            <div class="m6 s6 col">
                <div class="card-panel #e8f5e9 green lighten-5">
                    <div class="row">
                        <div class="col l8 white-text">
                            <h6>{{{ Session::get('successMessage') }}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if (Session::has('errorMessage'))
        <div class="row">
            <div class="m6 s6 col">
                <div class="card-panel red">
                    <div class="row">
                        <div class="col l8 white-text">
                            <h6>{{{ Session::get('errorMessage') }}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @yield('title')
    @yield('content')
</body>
</html>
