@extends('layouts.admin-master')

@section('content')
	
	<div class="col-md-12">
		@include('includes.info-box')
	</div>
	
	
	<div class="row">
		<div class="col-md-12">
		    <div class="card">
		        <div class="card-header">
					<h1>Partners</h1>
		       	</div>
		       	<div class="card-body">
		       		<a href="{{ route('admin.partner.create') }}">
		        		<button class="btn btn-primary">Add Partners</button>
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
					        	<th>Name</th>
					        	<th>Category</th>
					            <th>Website</th>
					            <th>Logo</th>
					            <th>Narrative</th>
					            <th>Action</th>
					        </tr>
					    </thead>
					    <tbody>
					    @if(count($partners) == 0)
					    	<tr>
					    		<td colspan="5"><center>No Partner</center></td>
					    	</tr>
						@else
							@foreach($partners as $partner)
								<tr>
									<td>{{ $partner->name }}</td>
									<td>{{ $partner->catpart->title }}</td>
									<td>{{ $partner->website  }}</td>
									<td>{{ $partner->logo }}</td>
									<td>{!! $partner->narrative !!}</td>
									<td>
										<a href="{{ route('admin.partner.edit', ['patner_id' => $partner->id]) }}" class="btn btn-xs btn-info">
											Edit
										</a>
										<a href="{{ route('admin.partner.delete', ['patner_id' => $partner->id]) }}" class="btn btn-xs btn-danger">
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