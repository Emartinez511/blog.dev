<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Blog</title>
    @yield("material_script")
    @section('navbar')
        <nav>
            <div class="nav-wrapper z-depth-2">
              <a href="#" class="brand-logo"><img id="nav_logo" src="/img/biglogo.png"></a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="{{{ action('PostsController@index')}}}">HOME</a></li>
                <li><a href="{{{ action('HomeController@portfolio')}}}">Portfolio</a></li>
                <li><a href="{{{ action('HomeController@resume')}}}">Resume</a></li>
              </ul>
            </div>
        </nav>
    @show


</head>
<body>
    @yield('title')
    @yield('content')
</body>
</html>
