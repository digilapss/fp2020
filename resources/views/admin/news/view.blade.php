@extends('layouts.admin-master')

@section('content')
	
	<div class="col-md-12">
		@include('includes.info-box')
	</div>
	
	
	<div class="row">
		<div class="col-md-12">
		    <div class="card">
		        <div class="card-header">
					<h1>{{ $news->title }}</h1>
		       	</div>
		       	<div class="card-body">
		       		<a href="{{ route('admin.news.edit', ['news_id' => $news->id]) }}">
		        		<button class="btn btn-primary">Update News</button>
		        	</a>
		        	<a href="{{ route('admin.news.index') }}">
		        		<button class="btn btn-default">Back</button>
		        	</a>

		        </div>
		    </div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
		    <div class="card">
		        <div class="card-header">
		       		Body
		       	</div>
		        <div class="card-body">
					<img src="{{ asset("documents/news/$news->foto") }}" alt="" height="250px">
		        	<br><br>
		        	{!! $news->body !!}
				</div>
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