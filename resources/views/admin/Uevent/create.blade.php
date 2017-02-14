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
		        	<form class="form form-horizontal" action="{{ route('admin.uevent.post.create') }}" method="post">
					  	<div class=" {{ $errors->has('title') ? 'form-group has-error' : 'form-group'}} ">
					        <label class="col-md-2 control-label">Title</label>
					        <div class="col-md-10">
					          <input type="text" class="form-control" placeholder="" id="title" name="title" value="{{ Request::old('title') }}">
					        </div>
					    </div>
					    <div class=" {{ $errors->has('date') ? 'form-group has-error' : 'form-group'}} ">
					        <label class="col-md-2 control-label">Date</label>
					        <div class="col-md-10">
					          <input type="text" class="form-control" placeholder="" id="date" name="date" value="{{ Request::old('date') }}">
					        </div>
					    </div>
					    <div class=" {{ $errors->has('place') ? 'form-group has-error' : 'form-group'}} ">
					        <label class="col-md-2 control-label">Place</label>
					        <div class="col-md-10">
					          <input type="text" class="form-control" placeholder="" id="place" name="place" value="{{ Request::old('place') }}">
					        </div>
					    </div>
					    <div class=" {{ $errors->has('body') ? 'form-group has-error' : 'form-group'}} ">
					        <div class="col-md-2">
					          <label class="control-label">Description</label>
					          <p class="control-label-help">( short detail of event description , 150 max words )</p>
					        </div>
					        <div class="col-md-10">
					          <textarea class="form-control" id="body" name="body">{{ Request::old('body') }}</textarea>
					        </div>
					    </div>
					    
					    <div class="form-footer">
					    <div class="form-group">
					      	<div class="col-md-10 col-md-offset-2">
						        <button type="submit" class="btn btn-primary">Save</button>
						        <a href="{{ route('admin.uevent.index') }}">
						        	<button type="button" class="btn btn-default">Cancel</button>
						        </a>
						        <input type="hidden" value="{{ Session::token() }}" name="_token" />
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