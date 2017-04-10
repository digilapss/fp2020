@extends('layouts.admin-master')

@section('content')
	
	<div class="col-md-12">
		@include('includes.info-box')
	</div>
	
	
	<div class="row">
		<div class="col-md-12">
		    <div class="card">
		        <div class="card-header">
					<h1>{{ $profile->title }}</h1>
		       	</div>
		       	<div class="card-body">
		       		<a href="{{ route('admin.profile.edit', ['profile_id' => $profile->id]) }}">
		        		<button class="btn btn-primary">Update Profile</button>
		        	</a>

		        </div>
		    </div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
		    <div class="card">
		        <div class="card-header">
		       		Profile
		       	</div>
		        <div class="card-body">
		        	<img src="{{ asset("profile/$profile->image") }}" alt="" height="250px">
		        	<br><br>
		        	{!! $profile->body !!}
				</div>
		    </div>
		</div>

	</div>
@endsection

@section('script')
	<script type="text/javascript">
		var token = "{{ Session::token() }}";
	</script>

@endsection