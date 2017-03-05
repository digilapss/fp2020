@extends('layouts.admin-master')

@section('content')
	
	<div class="col-md-12">
		@include('includes.info-box')
	</div>
	
	
	<div class="row">
		<div class="col-md-12">
		    <div class="card">
		        <div class="card-header">
					<h1>{{ $abouts->name }}</h1>
		       	</div>
		       	<div class="card-body">
		       		<a href="{{ route('admin.about.edit', ['about_id' => $abouts->id]) }}">
		        		<button class="btn btn-primary">Update</button>
		        	</a>

		        </div>
		    </div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
		    <div class="card">
		        <div class="card-header">
		       		
		       	</div>
		        <div class="card-body">
		        	{!! $abouts->description !!}
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