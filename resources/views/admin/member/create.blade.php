@extends('layouts.admin-master')

@section('content')
	<div class="row">
		<div class="col-md-12">
		    <div class="card">
		        <div class="card-header">
		          Add Member
		        </div>
		        <div class="card-body">
		        	<div class="col-lg-10 col-md-offset-2">
						@include('includes.info-box')
					</div>
		        	<form class="form form-horizontal" action="{{ route('admin.member.post.create') }}" method="post">
					  	<div class=" {{ $errors->has('name') ? 'form-group has-error' : 'form-group'}} ">
					        <label class="col-md-2 control-label">Name</label>
					        <div class="col-md-10">
					          <input type="text" class="form-control" placeholder="" id="name" name="name" value="{{ Request::old('name') }}">
					        </div>
					    </div>
					    <div class=" {{ $errors->has('position') ? 'form-group has-error' : 'form-group'}} ">
					        <label class="col-md-2 control-label">Position</label>
					        <div class="col-md-10">
					          <input type="text" class="form-control" placeholder="" id="position" name="position" value="{{ Request::old('position') }}">
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