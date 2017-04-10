@extends('layouts.admin-master')

@section('content')
	
	<div class="col-md-12">
		@include('includes.info-box')
	</div>
	
	
	<div class="row">
		<div class="col-md-12">
		    <div class="card">
		        <div class="card-header">
					<h1>Introduction FP2020</h1>
		       	</div>
		       	<div class="card-body">
		       		<a href="{{ route('admin.intro.edit', ['intro_id' => $intro->id]) }}">
		        		<button class="btn btn-primary">Update Narrative</button>
		        	</a>

		        </div>
		    </div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
		    <div class="card">
		        <div class="card-header">
		       		Narrative
		       	</div>
		        <div class="card-body">
		        	{!! $intro->narrative !!}
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