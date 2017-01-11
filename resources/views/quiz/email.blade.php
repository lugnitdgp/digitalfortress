@extends('layouts.app')

@section('content')
    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('assets/css/bootstrap.min.css') }} " rel="stylesheet" />

    
    <!-- Material Dashboard CSS -->
    <link href="{{ URL::asset('assets/css/material-dashboard.css') }}" rel="stylesheet" />

    
    <!-- Fonts And Icons -->
    <link href="{{ URL::asset('assets/css/font-awesome.min.css') }} " rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/matico.css') }} " rel='stylesheet' type='text/css'>
    <div class="col-md-8 col-md-offset-2">
        <div class="card text-center">
            <div class="card-header" data-background-color="red">
                <h3 class="title text-success">Welcome to Digital Fortress!</h3>
            </div>
            <div class="card-content text-center">
                <h5 >Verify your email to play!<br/>Kindly click on the button below to verify!</h5>
                <h6>Click <a href="http://localhost:8000/verify/{{$token}}">here</a> to verify!</h6>
            </div>
            <div class="card-footer">
                <div class="stats text-center">
                    <i class="material-icons">games</i>Hope you loved this game
                </div>
            </div>
        </div>
    </div>
<!-- Core JS Files -->
    <script src="{{ URL::asset('assets/js/jquery-3.1.0.min.js') }} " type="text/javascript"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/js/material.min.js') }}" type="text/javascript"></script>


   
    <!-- Material Dashboard javascript methods -->
    <script src="{{ URL::asset('assets/js/material-dashboard.js') }}"></script>
@stop