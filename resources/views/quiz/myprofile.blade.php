@extends('layouts.app')

@section('content')
<div class="col-md-6">
    <div class="card">
        <div class="card-header" data-background-color="purple">
            <h4 class="title">My Profile</h4>
			<p class="category">Complete your profile</p>
        </div>
        <div class="card-content">
            <div class="row">
                <div class="col-md-12">
					<div class="form-group label-floating">
						<label class="control-label">Email</label>
						<input type="email" class="form-control" value="{{ $email }}" disabled>
					</div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
					<div class="form-group label-floating">
						<label class="control-label">Name</label>
						<input type="text" class="form-control" value="{{ $name }}" disabled>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="card">
        <div class="card-header" data-background-color="purple">
            <h4 class="title">Update Password</h4>
			<p class="category">Change your old password</p>
        </div>
        <div class="card-content">
            <div class="row">
                <div class="col-md-12">
					<div class="form-group label-floating ac">
						<label class="control-label">Current Password</label>
						<input type="password" id="curpassword" class="form-control">
					</div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
					<div class="form-group label-floating ac">
						<label class="control-label">New Password</label>
						<input type="password" id="newpassword" class="form-control">
					</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
					<button id="updatepassword" class="btn btn-default btn-primary">Update Password</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('externcss')
    <link href="{{ URL::asset('assets/css/sweetalert.css') }}" rel="stylesheet" />
@endsection


@section('myjs')

<script src="{{ URL::asset('assets/js/sweetalert.min.js') }}"></script>

<script type="text/javascript">
	$(document).ready(function(){

		$.ajaxSetup({
    	    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content') }
	    });


		$("#updatepassword").click(function(){

			var cp = $("#curpassword").val();
			var np = $("#newpassword").val();

			if(cp==''||np==''){
				swal({ title:'Empty Password',text:'Please Enter a valid password', type:'error'});
			}
			else{
				$.ajax({
	                type:'POST',
	                url:'/updatepassword',
	                data:{
	                    'cp':cp,
	                    'np': np
	                },
	                success:function(data){
	                    if(data==1){
	                        swal({ title:'Password Changed',text:'You can use your new password to login from the next time', type:'success'});
	                    }
	                    else if(data==2){
	                        swal({ title:'Invalid Password',text:'Length of Password must be atleast greater than 3', type:'error'});
	                    }
	                    else{
	                    	swal({ title:'Wrong Password',text:'Please enter your current password correctly', type:'error'});
	                    }
	                    $("#curpassword").val('');
                        $("#newpassword").val('');
                        $(".ac").removeClass('is-focused').addClass('is-empty');
                        	
	                }
	            });
			}
		});
	});

</script>
@endsection