@extends('layouts.admin-master')

@section('content')
	<script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
	<div class="row">
		<div class="col-md-12">
		    <div class="card">
		        <div class="card-header">
		          Edit {{ $groups->name }}
		        </div>
		        <div class="card-body">
		        	<div class="col-lg-10 col-md-offset-2">
						@include('includes.info-box')
					</div>
		        	<form class="form form-horizontal" action="{{ route('admin.group.update') }}" method="post">
					  	<div class=" {{ $errors->has('name') ? 'form-group has-error' : 'form-group'}} ">
					        <label class="col-md-2 control-label">Name</label>
					        <div class="col-md-10">
					          <input type="text" class="form-control" placeholder="" id="name" name="name" value="{{ Request::old('name') ? Request::old('name') : isset($groups) ? $groups->name : '' }}">
					        </div>
					    </div>
					    <div class=" {{ $errors->has('role') ? 'form-group has-error' : 'form-group'}} ">
					        <div class="col-md-2">
					          <label class="control-label">Roles</label>
					        </div>
					        <div class="col-md-10">
					          <textarea class="form-control" id="body" name="role" rows="10">{{ Request::old('role') ? Request::old('role') : isset($groups) ? $groups->role : ''}}</textarea>
					        </div>
					    </div>
					    <div class=" {{ $errors->has('function') ? 'form-group has-error' : 'form-group'}} ">
					        <div class="col-md-2">
					          <label class="control-label">Function</label>
					        </div>
					        <div class="col-md-10">
					          <textarea class="form-control" id="body" name="function" rows="10">{{ Request::old('function') ? Request::old('function') : isset($groups) ? $groups->function : ''}}</textarea>
					        </div>
					    </div>
					    
					    <div class="form-footer">
					    <div class="form-group">
					      <div class="col-md-10 col-md-offset-2">
					        <button type="submit" class="btn btn-primary">Save</button>
					        <a href="{{ route('admin.group.view', ['group_id' => $groups->id]) }}">
					        	<button type="button" class="btn btn-default">Cancel</button>
					        </a>
					        <input type="hidden" value="{{ Session::token() }}" name="_token" />
					        <input type="hidden" value="{{ $groups->id }}" name="group_id">
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