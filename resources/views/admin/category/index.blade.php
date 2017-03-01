@extends('layouts.admin-master')

@section('content')
	
	<div class="col-md-12">
		@include('includes.info-box')
	</div>
	
	
	<div class="row">
		<div class="col-md-12">
		    <div class="card">
		        <div class="card-header">
					<h1>Document Category</h1>
		       	</div>
		       	<div class="card-body">
		       		<a href="{{ route('admin.category.create') }}">
		        		<button class="btn btn-primary">Add Category</button>
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
					            <th>Action</th>
					        </tr>
					    </thead>
					    <tbody>
					    @if(count($categories) == 0)
					    	<tr>
					    		<td colspan="5"><center>No Category</center></td>
					    	</tr>
						@else
							@foreach($categories as $category)
								<tr>
									<td>{{ $category->name }}</td>
									<td>
										<a href="{{ route('admin.category.edit', ['category_id' => $category->id]) }}" class="btn btn-xs btn-info">
											Edit
										</a>
										
										@if($category->id != 1 && $category->id != 2 && $category->id != 3 && $category->id != 4 && $category->id != 5)

											<a href="{{ route('admin.category.delete', ['category_id' => $category->id]) }}" class="btn btn-xs btn-danger">
												Delete
											</a>

										@endif
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