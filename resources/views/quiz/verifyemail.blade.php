@extends('layouts.app')

@section('externcss')
    @if (isset($newusertext))
        <link href="{{ URL::asset('assets/css/sweetalert.css') }}" rel="stylesheet" />
    @endif
@endsection

@section('myjs')
    @if (isset($newusertext)) 
        @if ($newusertext!="error")
        <script src="{{ URL::asset('assets/js/sweetalert.min.js') }}"></script>
        <script type="text/javascript">
            swal({ title:'Thanks for registering !!',text:'{{ $newusertext }}', type:'info'});
        </script>
        @else
        <script src="{{ URL::asset('assets/js/sweetalert.min.js') }}"></script>
        <script type="text/javascript">
            swal({ title:'Email Taken !!',text:'Sorry !! The email id already exists. Try with a different one', type:'error'}, function() { document.location.href = '/dashboard' });
        </script>
        @endif
    @endif
@endsection

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

@stop