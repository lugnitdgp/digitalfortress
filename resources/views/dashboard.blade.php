@extends('layouts.app')

@if (!isset($newusertext))
	@section('content')
	<div class="col-md-5">
		<div class="row">
			<div class="card">
				<div class="card-header card-chart text-center" data-background-color="red" style="font-size:40px; line-height: 160px;">Round {{ $stats[$key]['round_id'] }}
				</div>
				<div class="card-content text-center">
					<h4 class="title"><i class="fa fa-long-arrow-up"></i>  My Current Progress</h4>
				</div>
				<div class="card-footer">
					<div class="stats text-center">
						<i class="material-icons">games</i><a href="/round_overview">  Go to the Round {{ $stats[$key]['round_id'] }}</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="card card-stats">
					<div class="card-header" data-background-color="red" style="font-size: 50px;">
						<div style="padding: 10px;">{{ $people }}</div>
					</div>
					<div class="card-content">
						<p class="category">People have registered</p>
					</div>
					
				</div>
			</div>
			<div class="col-md-6">
				<div class="card card-stats">
					<div class="card-header" data-background-color="red" style="font-size: 50px;">
						<div style="padding: 10px">{{ $cc }}</div>
					</div>
					<div class="card-content">
						<p class="category">People solved this round</p>
					</div>

				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="ct-chart"></div>
			</div>
				
		</div>
	</div>

	<div class="col-md-6 col-md-offset-1">
		<div class="card">
	        <div class="card-header" data-background-color="red">
	            <h4 class="title text-center">Live Leaderboard Position</h4>
	        </div>
	        <div class="card-content table-responsive">
	            <table class="table table-hover">
	                <thead class="text-warning">
	                    <th>Rank</th>
	                	<th>Name</th>
	                	<th>Email</th>
	                	<th>Round</th>
	                </thead>
	                <tbody>
	                	@foreach ($stats as $key=>$value)
	                		@if ($value['username']==$name)
	                			<tr class="active cent">
	                		@else
	                			<tr class="cent">
	                		@endif
	                			<td>{{ $key+1 }}</td>
	                			<td>{{ $value['username'] }}</td>
	                			<td>{{ $value['email'] }}</td>
	                			<td>{{ $value['round_id'] }}</td>
	                		</tr>
	                	@endforeach
	                    
	                </tbody>
	            </table>
	        </div>
	    </div>
	</div>
	@endsection
@endif

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
			swal({ title:'Thanks for registering !!',text:'{{ $newusertext }}', type:'info'}, function() { document.location.href = '/dashboard' });
		</script>
		@else
		<script src="{{ URL::asset('assets/js/sweetalert.min.js') }}"></script>
		<script type="text/javascript">
			swal({ title:'Email Taken !!',text:'Sorry !! The email id already exists. Try with a different one', type:'error'}, function() { document.location.href = '/dashboard' });
		</script>
		@endif
	@endif
@endsection

