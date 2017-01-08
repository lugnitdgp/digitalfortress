@extends('layouts.app')


@section('content')

    <div class="col-md-6 col-sm-6  col-sm-offset-3">
        
        <div class="card card-login card-hidden">
            <div class="card-header text-center" data-background-color="blue">
                <h3 class="card-title">Login with</h3>
                <div class="social-line row">
                    <div class="col-md-2 col-sm-offset-3">
                    <a href="login/facebook" class="btn btn-just-icon btn-simple">
                        <i class="fa fa-facebook-square fa-2x"></i>
                    </a>
                    </div>
                    <div class="col-md-2">
                    <a href="login/github" class="btn btn-just-icon btn-simple">
                        <i class="fa fa-github fa-2x"></i>
                    </a>
                    </div>
                    <div class="col-md-2">
                    <a href="login/google" class="btn btn-just-icon btn-simple">
                        <i class="fa fa-google-plus fa-2x"></i>
                    </a>
                    </div>
                </div>
            </div>
            <br>
            <p class="category text-center">
                Or Be Simple
            </p>
            <div class="card-content">

                <div id="loginbox">
                    <form method="post" action="/login">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">email</i>
                            </span>
                            <div class="form-group label-floating">
                                <label class="control-label">Email address</label>
                                <input name="email" type="email" class="form-control">
                            </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock_outline</i>
                            </span>
                            <div class="form-group label-floating">
                                <label class="control-label">Password</label>
                                <input name="password" type="password" class="form-control">
                            </div>
                        </div>

                        <div class="footer text-center ">
                            <input type="submit" class="btn btn-info fsubmit" value="Login to the Chamber"></input>
                        </div>
                        <br>
                        <div class="text-center">
                        <p>New User !! <a id="registerform" href="javascript: showregisterform();">Register Here</a></p>
                        </div>
                    </form>
                </div>
                
                <div id="registerbox" style="display: none">
                    <form method="post" action="/register">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">face</i>
                            </span>
                            <div class="form-group label-floating">
                                <label class="control-label">Your Name</label>
                                <input name="username" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">email</i>
                            </span>
                            <div class="form-group label-floating">
                                <label class="control-label">Email address</label>
                                <input name="email" type="email" class="form-control">
                            </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock_outline</i>
                            </span>
                            <div class="form-group label-floating">
                                <label class="control-label">Password</label>
                                <input name="password" type="password" class="form-control">
                            </div>
                        </div>
                        <div class="footer text-center ">
                            <button type="submit" class="btn btn-success fsubmit">Register Me</button>
                        </div>
                        <br>
                        <div class="text-center">
                            <p>Already a Member ?? <a id="loginform" href="javascript: showloginform(); ">Login Here</a></p>
                        </div>
                    </form>
                </div>

            </div>
            <!-- card content ends here -->
        </div>
    </div>
@endsection

@section('myjs')

<script type="text/javascript">
   function showregisterform()
   {
            $('#loginbox').fadeOut('medium',function(){
                $('#registerbox').fadeIn('medium');
                $('.card-title').html('Register with');
                $('.card-header').attr('data-background-color','green');
            }); 
           
   };
   function showloginform()
   {
            $('#registerbox').fadeOut('medium',function(){
                $('#loginbox').fadeIn('medium');
                $('.card-title').html('Login with');
                $('.card-header').attr('data-background-color','blue');
            }); 
           
    };
</script>

@endsection