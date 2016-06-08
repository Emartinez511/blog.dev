@extends('layouts.master')
@section('material_script')
    <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
        <link rel="stylesheet" href="/css/main.css">

@stop
@section('content')

<div class="parallax-container">
    <div class="parallax"><img src="img/skulls.png"></div>
  </div>
  <div class="section white z-depth-3 valign-wrapper">
    <div class="row container">
      <h2 class="header">Portfolio</h2>
      <p class="grey-text text-darken-3 lighten-3">Here are some projects I have completed using different programming languages.</p>
      <div class="row isotope">
          <div class="col s12 m12 l3">
              <div class="card small z-depth-2">
                  <div class="card-image waves-effect waves-block waves-light">
                      <a href="">
                          <img width="305" height="100" src="/img/mole_img.png" class="responsive-img wp-post-image" alt="" title="" />
                      </a>
                  </div>
              <div class="card-content">
                  <p class="area"><a href="https://adbeus.com/coffee/montreal/cote-des-neiges/">Whack-a-Mole</a></p>
                  <a href="" ><span class="card-title activator brown-text text-darken-4">Simon</span></a>
              </div>
          </div>
      </div>
      <div class="col s12 m12 l3">
              <div class="card small z-depth-2">
                  <div class="card-image waves-effect waves-block waves-light">
                      <a href="">
                          <img src="/img/simon_image.png" class="responsive-img wp-post-image" alt="" title="" />
                      </a>
                  </div>
              <div class="card-content">
                  <p class="area"><a href="https://adbeus.com/coffee/montreal/cote-des-neiges/">Simple Simon</a></p>
                  <a href="" ><span class="card-title activator brown-text text-darken-4">Simon</span></a>
              </div>
          </div>
      </div>
      <div class="col s12 m12 l3">
              <div class="card small z-depth-2">
                  <div class="card-image waves-effect waves-block waves-light">
                      <a href="">
                          <img src="/img/calculator_img.png" class="responsive-img wp-post-image" alt="" title="" />
                      </a>
                  </div>
              <div class="card-content">
                  <p class="area"><a href="">JavaScript Calculator</a></p>
                  <a href="" ><span class="card-title activator brown-text text-darken-4">Simon</span></a>
              </div>
          </div>
      </div>
      </div>
    </div>
  </div>
  <div class="parallax-container z-depth-3">
    <div class="parallax"><img src="img/skulls.png"></div>


</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
        $('.parallax').parallax();
    });
</script>

@stop
