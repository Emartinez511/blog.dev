@extends('layouts.master')

@section('content')
    <div class="container homepage">
        <div class="row social_media">
            <div class="col-md-1 pull-right">
                <a href="https://www.linkedin.com/in/edricmartinez"><img class="img-responsive center-block" src="img/linkedin.png" id="linkedin_logo"/></a>
            </div>
            <div class="col-md-1 pull-right">
                <a href="https://github.com/Emartinez511"><img class="img-responsive center-block" src="img/github.png" id="github_logo" /></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 landing_segment">
                <img class="img-responsive center-block" src="img/landing_logo.png" />
            </div>
        </div>
        <div class="row nav_segment">
            <div class="col-md-2 col-md-offset-2 text-center">
                <p>
                    HOME
                </p>
            </div>
            <div class="col-md-2 text-center">
                <p>
                    PORTFOLIO
                </p>
            </div>
            <div class="col-md-2 text-center">
                <p>
                    RESUME
                </p>
            </div>
            <div class="col-md-2 text-center">
                <p>
                    CONTACT ME
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 about_quote text-center">
                <img class="img-responsive center-block" src="/img/quote.png" alt="quote" id="quote_img" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 about_segment">
                <h2 id="about_header">
                    About Me
                </h2>
                <p id="about_me">
                    I'm a Entry-level LAMP+J Developer that loves to problem solve and learn new things. Im 29 years old and currently live in San Antonio.
                    I graduated in 2011 with my BS in Biology from the University of Texas San Antonio. In 2016 I attended Codeup's Full Stack Development Immersion Program.
                    I am currently seeking a Jr Developer Position.
                </p>
            </div>
            <div class="col-md-5 text-center about_pic">
                <img class="img-responsive center-block" src="/img/Photo_me.png" />
            </div>
        </div>
        <div class="row portfolio_segment">
            <div class="col-md-12">
                <h3 class="text-center portfolio_header">
                    FEATURED PROJECT
                </h3>
                <h4 class="text-center">
                    Ebtracker.com
                </h4>
                <p class="text-center">
                    This a CRUD web application for inventory and shipment. The Distributors are able to created a invoice for desired products and send it to the Supplier.
                    Suppliers than can create new shipments and add unique information for the the supplies.
                    Once done they then receive a QR code for shipping and receiving. When received at destination Facility it inputs the products into their inventory.
                    Once a product it used it will remove it from inventory when scanned and also updates the distributor of the use of the product.
                    Utilizing PHP, Laravel, Html, Css, Javascript, and MySQL this project was created within 2 weeks.
                </p>
                <img class="img-responsive center-block" src="/img/portfolio_eb.png" alt="" />
                <button>View Ebtracker.com</button>
                <button>View Portfolio</button>
            </div>
        </div>
        <div class="row resume_segment">
            <div class="col-md-12">
                <h3 class="text-center resume_header">
                    RESUME
                </h3>

            </div>
            <div class="col-md-6 text-center resume_img">
                <img src="/img/resume.png" alt="resume_photo" />
            </div>
            <div class="col-md-6 text-center skills_list">
                <h4>Skillset</h4>
                <dl>
                    <h5>BACK-END DEVELOPMENT:</h5>
                    <dd>PHP</dd>
                    <dd>AJAX</dd>
                    <dd>MySQL</dd>
                    <dd>Laravel</dd>
                    <dd>APIs</dd>
                </dl>
                <dl>
                    <h5>FRONT-END DEVELOPMENT:</h5>
                </dl>

                    <dd>HTML5</dd>
                    <dd>Javascript</dd>
                    <dd>JQuery</dd>
                    <dd>Twitter Bootstrap</dd>
                    <dd>Adobe Photoshop</dd>
                    <dd>CSS</dd>
                    <dd>SaSS</dd>
                    <dd>Wireframing</dd>

                <dl>
                    <h5>SOURCE CONTROL:</h5>
                    <dd>GitHub</dd>
                    <dd>BitBucket</dd>
                </dl>
            </div>
        </div>
        <div class="row footer">
            <div class="col-md-6">
                <
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
