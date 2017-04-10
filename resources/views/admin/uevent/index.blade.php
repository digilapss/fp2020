@extends('layouts.admin-master')

@section('content')
	
	<div class="col-md-12">
		@include('includes.info-box')
	</div>
	
	
	<div class="row">
		<div class="col-md-12">
		    <div class="card">
		        <div class="card-header">
					<h1>Upcoming Event</h1>
		       	</div>
		       	<div class="card-body">
		       		<a href="{{ route('admin.uevent.create') }}">
		        		<button class="btn btn-primary">Add New Event</button>
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
					            <th>Place</th>
					            <th>Description</th>
					            <th>Action</th>
					        </tr>
					    </thead>
					    <tbody>
					    @if(count($uevents) == 0)
					    	<tr>
					    		<td colspan="5"><center>No Event</center></td>
					    	</tr>
						@else
							@foreach($uevents as $uevent)
								<tr>
									<td>{{ $uevent->title }}</td>
									<td>{{ $uevent->date }}</td>
									<td>{{ $uevent->place }}</td>
									<td>{{ $uevent->body }}</td>
									<td>
										<a href="{{ route('admin.uevent.view', ['uevent_id' => $uevent->id]) }}" class="btn btn-xs btn-primary">
											View
										</a>
										<a href="{{ route('admin.uevent.edit', ['uevent_id' => $uevent->id]) }}" class="btn btn-xs btn-info">
											Edit
										</a>
										<a href="{{ route('admin.uevent.delete', ['uevent_id' => $uevent->id]) }}" class="btn btn-xs btn-danger">
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