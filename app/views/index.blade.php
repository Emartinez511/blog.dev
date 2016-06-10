@extends('layouts.master')

@section('bootstrap')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
@stop


@section('content')
    <div class="container-fluid">
      <div class="row row-eq-height">
        <div class="col-sm-9 left_side">
          <h2 class="main_name">Edric Martinez</h2>
          <h1>Full Stack Web Developer</h2>
          <blockquote>
            <p class="lead">I'm a Entry-level LAMP+J Developer that loves to problem solve and learn new things. Im currently proficient in HTML, CSS, JavaScript,  jQuery, AJAX, PHP, MySQL, Laravel, GitHub, Twitter Bootstrap, Pug(formally Jade).</p>
          </blockquote>
        </div>
        <div class="col-sm-3 middle_side">
          <h5 class="text-center">Video of the Week</h5>
            <iframe src="https://www.youtube.com/embed/wzAWI9h3q18" frameborder="0" allowfullscreen></iframe>
            <p class="lead">
                <small class="quote_youtube">"I'm building the homepage to my site using Jade and testing it out. Jade is a fun templating engine that cuts down on reduntant HTML and in my view provides cleaner looking code. After learning Jade I want to move to SASS."</small>
            </p>
        </div>
      </div>
      <div class="row third_row">
        <h2 name"Portfolio" id"portfolio">Portfolio Projects</h2>
        <div class="col-sm-2"><img src="/img/simon_image.png" alt="" class="img-thumbnail games_img">
          <h5>Simple Simon</h5>
          <p>This the a simple simon game.</p>
        </div>
        <div class="col-sm-2"><img src="/img/calculator_img.png" alt="" class="img-thumbnail games_img">
          <h5>JavaScript Calculator</h5>
          <p>This is a JavaScript calculator.</p>
        </div>
        <div class="col-sm-2"><img src="/img/mole_img.png" alt="" class="img-thumbnail games_img">
          <h5>Whack-a-Gopher</h5>
          <p>This is a classic whack-a-mole game.</p>
        </div>
      </div>
      <div class="row fourth_row row-eq-height">
        <div class="col-sm-6">
          <h3 class="text-center Resume" name="resume" id="resume">Resume</h3>
          <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Skills</a>
                </h4>
              </div>
            </div>
            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
                <ul>
                  <li>HTML, CSS, JavaScript,  jQuery, AJAX, PHP, MySQL, Laravel, GitHub, Twitter Bootstrap, Pug(formally Jade).</li>
                  <li>Ability to quickly and efficiently learn new languages and software as needed.</li>
                </ul>
              </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Projects</a>
                </h4>
              </div>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body">
                <h5 class="text-left">Capstone</h5>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                <h5 class="text-left">Adlister</h5>
                <p>A Full-stack PHP Craiglist clone built using no framework. Classes were built to allow users authentication and post/manage ads created.</p>
                <h5 class="text-left">Whack-a-Gopher</h5>
                <p>A classic Whack-a-Mole game that uses front-end DOM manipulation by utilizing jQuery and Javascript. </p>
              </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Education</a>
                </h4>
              </div>
            </div>
            <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
              <div class="panel-body">
                <h5 class="text-left">Univeristy of Texas at San Antonio - Bacholers of Science in Biology</h5>
                <p>I graduated in 2011. In 2013 I also took additional education courses in Engineering Physics I & II, Calculus II, and Linear Algebra.</p>
                <H5>Codeup — FULL-STACK WEB DEVELOPMENT</H5>
                <p>Completed 16-week immersive program in full stack technologies, spent 480+ hours learning curriculum and building real work projects. </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 text-center" name="contact" id="contact"><img src="/img/contact.png" class="img-fluid contact"></div>
      </div>
      <div class="row footer">
        <div class="col-sm-12 text-center"><a href="">|  Home |</a><a href="">| Portfolio |</a><a href="">| Resume |</a><a href="">| Contact Me |</a>
          <p>check out my </p><img id="octocat" src="/img/Octocat.png">
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function() {
          $('.collapse').collapse()
      });
    </script>
@stop
