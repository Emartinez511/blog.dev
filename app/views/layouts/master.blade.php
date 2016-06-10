<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Blog</title>
    @yield("material_script")
    @section('bootstrap')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main.css">
    @show

</head>
<body>
    @section('Navbar')
        <div class="row nav_top">
          <div class="col-sm-8 nav_pad">
            <ul class="nav nav-tabs">
              <li class="active"><a href="{{{ action('HomeController@showWelcome')}}}">Home</a></li>
              <li class="btn_top"><a href="{{{ action('HomeController@showWelcome')}}}#portfolio">Portfolio</a></li>
              <li class="btn_top"><a href="{{{ action('HomeController@showWelcome')}}}#resume">Resume</a></li>
              <li class="btn_top"><a href="{{{ action('HomeController@showWelcome')}}}#contact">Contact Me</a></li>
              <li class="btn_top"><a href="/posts">Blog</a></li>
            </ul>
          </div>
          @if(Auth::Check())
              <div id="login_btn" class="col-md-2 text-right"><a href="{{{ action('PostsController@create')}}}" role="button" class="btn btn-default">Create</a></div>
              <div id="login_btn" class="col-md-2"><a href="/logout" role="button" class="btn btn-default">Logout</a></div>
          @else
            <div id="login_btn" class="col-md-4 text-right"><a href="{{{ action('HomeController@showLogin')}}}" role="button" class="btn btn-default">Login</a></div>
          @endif
        </div>
    @show
    @if (Session::has('successMessage'))
        <div class="row">
            <h6 class="alert">{{{ Session::get('successMessage') }}}</h6>
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
