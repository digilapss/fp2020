@extends('layouts.admin-master')

@section('content')
	
	<div class="col-md-12">
		@include('includes.info-box')
	</div>
	
	
	<div class="row">
		<div class="col-md-12">
		    <div class="card">
		        <div class="card-header">
					<h1>General Information</h1>
		       	</div>
		       	<div class="card-body">
		       		<a href="{{ route('admin.general.create') }}">
		        		<button class="btn btn-primary">Add General Information</button>
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
					            <th>Information</th>
					            <th>Action</th>
					        </tr>
					    </thead>
					    <tbody>
					    @if(count($generals) == 0)
					    	<tr>
					    		<td colspan="5"><center>No General Information</center></td>
					    	</tr>
						@else
							@foreach($generals as $general)
								<tr>
									<td>{{ $general->title }}</td>
									<td>{{ $general->body }}</td>
									<td>
										<a href="{{ route('admin.general.edit', ['category_id' => $general->id]) }}" class="btn btn-xs btn-info">
											Edit
										</a>
										<a href="{{ route('admin.general.delete', ['category_id' => $general->id]) }}" class="btn btn-xs btn-danger">
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