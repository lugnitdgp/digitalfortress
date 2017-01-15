
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Digital Fortress</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        <!-- Bootstrap Core CSS -->
        <link href="{{ URL::asset('assets/css/bootstrap.min.css') }} " rel="stylesheet" />
        <link href="{{ URL::asset('assets/css/landing-page.css') }}" rel="stylesheet"/>

        <!--     Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300' rel='stylesheet' type='text/css'>

        <link href="{{ URL::asset('assets/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />
        <link href="{{ URL::asset('assets/css/material-dashboard.css') }}" rel="stylesheet" />
    </head>
    <body class="landing-page landing-page1">
        <div class="wrapper">
            <div class="parallax filter-gradient" data-color="blue">
                <div class="parallax-background">
                    <img class="parallax-background-image" src="{{ URL::asset('assets/img/Hogwartscastle.jpg') }}">
                </div>
            </div>
            <div class="section section-gray section-clients">
                <div class="container text-center">
                    <h4 class="mainfont2sm">Welcome to the Digital Fortress</h4>
                    <p>The fortress has several floors each one having different rooms.</p>
                    <p>There are clues for you which lead you to the staircase for the next floor.</p>
                    <p>Explore the Sherlock in you and analyse the breathtaking world through maps to find your clues.</p>
                </div>
            </div>
            <div class="section section-presentation">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="description" >
                                <h4 class="mainfont2" style="color:chocolate;">Cool Prizes to be Won</h4>
                            </div>
                        </div>
                        <div class="col-md-5 hidden-xs">
                            <img src="{{ URL::asset('assets/img/treasure.png') }}" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="parallax filter-gradient gray" data-color="blue">
                <div class="parallax-background">
                    <img class="parallax-background-image" src="{{ URL::asset('assets/img/mountainfortress.jpg') }}">
                </div>
                <div class= "container">
                    <div class="row">
                        <div class="col-md-7 col-md-offset-3">
                            <div class="parallax description">
                                <h1 class="mainfont2md">Ready to start the game ??</h1>
                                <p align="center">
                                    <a href="dashboard" id="startgame" class="btn btn-info btn-lg" style="width: 60%;">START</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <footer class="footer">
                <div class="container">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="http://mkti.in">
                                Home
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="social-area pull-right">
                        <a class="btn btn-social btn-facebook btn-simple" href="https://www.facebook.com/nitdgplug">
                        <i class="fa fa-facebook-square"></i>
                        </a>
                        <a class="btn btn-social btn-twitter btn-simple" href="https://twitter.com/mukti_nitd">
                        <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-social btn-pinterest btn-simple" href="https://www.youtube.com/channel/UCYZPnN5vP5B1sINLLkI1aDA">
                        <i class="fa fa-youtube"></i>
                        </a>
                    </div>
                    <div class="copyright">
                        &copy; 2017 <a href="http://nitdgplug.org">GNU Linux Users' Group</a>
                    </div>
                </div>
            </footer>
        </div>

    </body>
    <script src="{{ URL::asset('assets/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/js/jquery-ui-1.10.4.custom.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/js/awesome-landing-page.js') }}" type="text/javascript"></script>
</html>
