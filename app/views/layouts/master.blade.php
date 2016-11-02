<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edric Martinez</title>
    @section('bootstrap')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    @show

</head>
<body>

    {{-- @section('Navbar')
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header .nav_pad">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">EdricM</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse in">
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{{ action('HomeController@showWelcome')}}}">Home</a></li>
            <li><a href="{{{ action('HomeController@showWelcome')}}}#portfolio">Portfolio</a></li>
            <li><a href="{{{ action('HomeController@showWelcome')}}}#resume">Resume</a></li>
            <li><a href="{{{ action('HomeController@showWelcome')}}}#contact">Contact</a></li>
            <li><a href="/posts">Blog</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            @if(Auth::Check())
                <li><a href="/logout">Logout</a></li>
                <li><a href="{{{ action('PostsController@create')}}}">Create</a></li>
            @endif
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    @show
    @section('error')
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
@show --}}
    @yield('content')
    {{-- @section('footer')
        <div class="row footer">
          <div class="col-sm-12 text-center"><a href="">|  Home |</a><a href="">| Portfolio |</a><a href="">| Resume |</a><a href="">| Contact Me |</a>
            <p>check out my </p><img id="octocat" src="/img/Octocat.png">
          </div>
        </div>
    @show --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- jQuery UI -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/ui-lightness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
