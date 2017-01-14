@extends('layouts.app')


@if (isset($newusertext)) 

    @section('externcss')
        <link href="{{ URL::asset('assets/css/sweetalert.css') }}" rel="stylesheet" />
    @endsection

    @section('myjs')
        <script src="{{ URL::asset('assets/js/sweetalert.min.js') }}"></script>
        <script type="text/javascript">
         swal({ title:'{{ $newusertitle }}',text:'{{ $newusermessage }}', type:'{{ $newusertext }}'},function(){ document.location.href='/verify/reload'; });
        </script>
    @endsection

@endif


@if (!isset($newusertext))
    @section('content')
        <div class="col-md-8 col-md-offset-2">
            <div class="card text-center">
                <div class="card-header" data-background-color="red">
                    <h3 class="title text-success">Email not verified!</h3>
                </div>
                <div class="card-content text-center">
                    <h5 >You have not yet verified your email with us! <br> Kindly do so to play Digital Fortress!</h5>
                    <h6>Click to resend verification mail <a href="/resend">here</a></h6>
                </div>
                <div class="card-footer">
                    <div class="stats text-center">
                        <i class="material-icons">games</i>Hope you loved this game
                    </div>
                </div>
            </div>
        </div>
    @endsection
@endif