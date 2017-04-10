@extends('layouts.admin-master')

@section('content')
	<div class="row">
		<div class="col-md-12">
		    <div class="card">
		        <div class="card-header">
		          Add News
		        </div>
		        <div class="card-body">
		        	<div class="col-lg-10 col-md-offset-2">
						@include('includes.info-box')
					</div>
		        	<form class="form form-horizontal" action="{{ route('admin.news.post.create') }}" method="post" enctype="multipart/form-data">
					  	<div class=" {{ $errors->has('title') ? 'form-group has-error' : 'form-group'}} ">
					        <label class="col-md-2 control-label">Title</label>
					        <div class="col-md-10">
					          <input type="text" class="form-control" placeholder="" id="title" name="title" value="{{ Request::old('title') }}">
					        </div>
					    </div>
					    <div class=" {{ $errors->has('file') ? 'form-group has-error' : 'form-group'}} ">
					        <label class="col-md-2 control-label">Photo</label>
					        <div class="col-md-10">
					        	<input type="file" class="form-control" placeholder="" id="file" name="file" value="{{ Request::old('file') }}">
					        </div>
					    </div>
					    <div class=" {{ $errors->has('body') ? 'form-group has-error' : 'form-group'}} ">
					        <label class="col-md-2 control-label">Body</label>
					        <div class="col-md-10">
					          <textarea class="form-control" id="body" name="body" rows="10">{{ Request::old('body') }}</textarea>
					        </div>
					    </div>
					   
					   <div class="form-footer">
					    <div class="form-group">
					      	<div class="col-md-10 col-md-offset-2">
						        <button type="submit" class="btn btn-primary">Save</button>
						        <a href="{{ route('admin.news.index') }}">
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