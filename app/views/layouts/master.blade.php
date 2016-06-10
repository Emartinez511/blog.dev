<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Blog</title>
    @yield("material_script")
    @yield("bootstrap")
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
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
