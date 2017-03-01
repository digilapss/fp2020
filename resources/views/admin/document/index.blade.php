@extends('layouts.admin-master')

@section('content')
	
	<div class="col-md-12">
		@include('includes.info-box')
	</div>
	
	
	<div class="row">
		<div class="col-md-12">
		    <div class="card">
		        <div class="card-header">
					<h1>Document</h1>
		       	</div>
		       	<div class="card-body">
		       		<a href="{{ route('admin.document.create') }}">
		        		<button class="btn btn-primary">Add New Document</button>
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
					            <th>Date</th>
					            <th>Category</th>
					            <th>Description</th>
					            <th>File</th>
					            <th>Action</th>
					        </tr>
					    </thead>
					    <tbody>
					    @if(count($documents) == 0)
					    	<tr>
					    		<td colspan="5"><center>No Document</center></td>
					    	</tr>
						@else
							@foreach($documents as $document)
								<tr>
									<td>{{ $document->name }}</td>
									<td>{{ $document->date}}</td>
									<td>{{ $document->category->name }}</td>
									<td>{{ $document->description }}</td>
									<td>{{ $document->body }}
										<a href="{{ asset("documents/$document->file") }}" class="btn btn-xs btn-success">
											Download
										</a>
									</td>
									<td>
										<a href="{{ route('admin.document.edit', ['document_id' => $document->id]) }}" class="btn btn-xs btn-info">
											Edit
										</a>
										<a href="{{ route('admin.document.delete', ['document_id' => $document->id]) }}" class="btn btn-xs btn-danger">
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