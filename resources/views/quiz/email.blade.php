@extends('layouts.app')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="card text-center">
            <div class="card-header" data-background-color="red">
                <h3 class="title text-success">Welcome to Digital Fortress!</h3>
            </div>
            <div class="card-content text-center">
                <h5 >Verify your email to play!<br/>Kindly click on the button below to verify!</h5>
                <h6>Click <a href="https:://localhost:8000/verify/{{$token}}">here</a> to verify!</h6>
            </div>
            <div class="card-footer">
                <div class="stats text-center">
                    <i class="material-icons">games</i>Hope you loved this game
                </div>
            </div>
        </div>
    </div>

@stop