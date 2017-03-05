@extends('layouts.admin-master')

@section('content')
	<div class="row">
		<div class="col-md-12">
		    <div class="card">
		        <div class="card-header">
		          Add New Event
		        </div>
		        <div class="card-body">
		        	<div class="col-lg-10 col-md-offset-2">
						@include('includes.info-box')
					</div>
		        	<form class="form form-horizontal" action="{{ route('admin.docugroup.post.create') }}" method="post" enctype="multipart/form-data">
					  	<div class=" {{ $errors->has('name') ? 'form-group has-error' : 'form-group'}} ">
					        <label class="col-md-2 control-label">Name</label>
					        <div class="col-md-10">
					          <input type="text" class="form-control" placeholder="" id="name" name="name" value="{{ Request::old('name') }}">
					        </div>
					    </div>
					     <div class=" {{ $errors->has('date') ? 'form-group has-error' : 'form-group'}} ">
					        <label class="col-md-2 control-label">Date</label>
					        <div class="col-md-10">
					          <input type="text" class="form-control" placeholder="" id="dp1" name="date" value="{{ Request::old('date') }}">
					        </div>
					    </div>
					    <div class=" {{ $errors->has('category') ? 'form-group has-error' : 'form-group'}} ">
					        <label class="col-md-2 control-label">Category</label>
					        <div class="col-md-4">
					          <select class="select2" name="category">
					          		   	<option value="MoM">MoM</option>
					          		   	<option value="TOR">TOR</option>
					          		   	<option value="Presentation">Presentation</option>
					          		   	<option value="Other">Other</option>
								</select>
					        </div>
					    </div>
					    <div class=" {{ $errors->has('file') ? 'form-group has-error' : 'form-group'}} ">
					        <label class="col-md-2 control-label">File</label>
					        <div class="col-md-10">
					        	<input type="file" class="form-control" placeholder="" id="file" name="file" value="{{ Request::old('file') }}">
					        </div>
					    </div>
					   
					   <div class="form-footer">
					    <div class="form-group">
					      	<div class="col-md-10 col-md-offset-2">
						        <button type="submit" class="btn btn-primary">Save</button>
						        <a href="{{ route('admin.group.view',['group_id' => $group ]) }}">
						        	<button type="button" class="btn btn-default">Cancel</button>
						        </a>
						        <input type="hidden" value="{{ Session::token() }}" name="_token" />
						        <input type="hidden" value="{{ $group }}" name="group_id" />
					      	</div>
					    </div>
					  </div>
					</form>
		        </div>
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