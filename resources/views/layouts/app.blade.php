<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf_token" content="{{csrf_token()}}">
    <title>Digital Fortress</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('assets/css/bootstrap.min.css') }} " rel="stylesheet" />

    
    <!-- Material Dashboard CSS -->
    <link href="{{ URL::asset('assets/css/material-dashboard.css') }}" rel="stylesheet" />

    
    <!-- Fonts And Icons -->
    <link href="{{ URL::asset('assets/css/font-awesome.min.css') }} " rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/matico.css') }} " rel='stylesheet' type='text/css'>

    @yield('externcss')

</head>
<body style="overflow: hidden;">

    <div class="wrapper">
        <div class="sidebar" data-color="red" data-image="{{ URL::asset('assets/img/sidebar.jpg') }}" style="z-index: 100;">

            <div class="logo">
                <h4 class="simple-text">
                    <strong style="color: #e84c3d; font-size: 1.7vw; text-shadow: -0.5px 0 gray, 0 0.5px black, 0.5px 0 black, 0 -0.5px black;">Digital Fortress</strong>
                </h4>
            </div>

            <div class="sidebar-wrapper">
                <ul class="nav">
                    @if (session()->has('email'))
                        <li class="{{ (isset($tab)&&$tab==1)?'active':''}}">
                            <a href="dashboard">
                                <i class="material-icons">dashboard</i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="{{ (isset($tab)&&$tab==2)?'active':''}}">
                            <a href="round_overview">
                                <i class="material-icons">lock</i>
                                <p>Round Overview</p>
                            </a>
                        </li>
                    @else
                        <li class="{{ (isset($tab)&&$tab==1)?'active':''}}">
                            <a href="dashboard">
                                <i class="material-icons">play_arrow</i>
                                <p>Login</p>
                            </a>
                        </li>
                    @endif
                    
                    <li class="{{ (isset($tab)&&$tab==3)?'active':''}}">
                        <a href="/rules">
                            <i class="material-icons">next_week</i>
                            <p>Rules and Regulation</p>
                        </a>
                    </li>

                    <li class="{{ (isset($tab)&&$tab==4)?'active':''}}">
                        <a href="/leaderboard">
                            <i class="material-icons">list</i>
                            <p>Leaderboard</p>
                        </a>
                    </li>

                </ul>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar  navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#" style="color: #f5f5f5; font-weight: bold;">{{ $dashname or '' }}</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            @if (session()->has('name'))
                                <li class="dropdown" id="avoidbackdrop">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class=" text-warning material-icons"  style="font-size: 28px;">person</i>
                                        <p class="hidden-lg hidden-md">My Profile</p>
                                   </a>
                                
                                    <ul class="dropdown-menu">
                                        <li style="z-index: 1000;" class="{{ (isset($tab)&&$tab==5)?'active':''}}"><a href="/myprofile">My Profile</a></li>
                                        <li style="z-index: 1000;" ><a href="/logout">Logout</a></li>
                                     </ul>
                                </li>
                            @endif
                        </ul>
                    </div>

                </div>
            </nav>

            <div class="content" style="background-image: url('{{ URL::asset('assets/img/back.jpg')}}'); background-repeat: repeat-x;">
                <div class="container-fluid" style="z-index:-100;">
                    <div class="row">
                        @yield('content')
                    </div>
                </div>
            </div>
            <footer class="footer" style="padding: 0;color: smokewhite;">
                <div class="container-fluid">
                    <p class="copyright pull-right">
                        &copy; <script>document.write(new Date().getFullYear())</script> <a href="#">GNU Linux User's Group</a>
                    </p>
                </div>
            </footer>
        </div>
    </div>
   
</body>

@yield('modal')
   
<!-- Core JS Files -->
    <script src="{{ URL::asset('assets/js/jquery-3.1.0.min.js') }} " type="text/javascript"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/js/material.min.js') }}" type="text/javascript"></script>


   
    <!-- Material Dashboard javascript methods -->
    <script src="{{ URL::asset('assets/js/material-dashboard.js') }}"></script>
    
    @yield('myjs')

</html>
