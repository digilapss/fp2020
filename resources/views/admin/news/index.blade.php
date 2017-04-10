@extends('layouts.admin-master')

@section('content')
	
	<div class="col-md-12">
		@include('includes.info-box')
	</div>
	
	
	<div class="row">
		<div class="col-md-12">
		    <div class="card">
		        <div class="card-header">
					<h1>News and Updates</h1>
		       	</div>
		       	<div class="card-body">
		       		<a href="{{ route('admin.news.create') }}">
		        		<button class="btn btn-primary">Add News</button>
		        	</a>

		        </div>
		    </div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
		    <div class="card">
		        <div class="card-header">
		       		List
		       	</div>
		        <div class="card-body">
		        	<table class="datatable table table-striped primary" cellspacing="0" width="100%">
					    <thead>
					        <tr>
					            <th>Title</th>
					            <th>Date</th>
					            <th>Action</th>
					        </tr>
					    </thead>
					    <tbody>
					    @if(count($news) == 0)
					    	<tr>
					    		<td colspan="5"><center>No News</center></td>
					    	</tr>
						@else
							@foreach($news as $new)
								<tr>
									<td>{{ $new->title }}</td>
									<td>{{ $new->date }}</td>
									<td>
										<a href="{{ route('admin.news.view', ['news_id' => $new->id]) }}" class="btn btn-xs btn-primary">
											View
										</a>
										<a href="{{ route('admin.news.edit', ['news_id' => $new->id]) }}" class="btn btn-xs btn-info">
											Edit
										</a>
										<a href="{{ route('admin.news.delete', ['news_id' => $new->id]) }}" class="btn btn-xs btn-danger">
											Delete
										</a>
									</td>
								</tr>
							@endforeach
						@endif
					    </tbody>
					</table>
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