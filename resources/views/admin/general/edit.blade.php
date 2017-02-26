@extends('layouts.admin-master')

@section('content')
	<script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
	<script>
		tinymce.init({
		  selector: 'textarea',
		  height: 500,
		  menubar: false,
		  plugins: [
		    'advlist autolink lists link image charmap print preview anchor',
		    'searchreplace visualblocks code fullscreen',
		    'insertdatetime media table contextmenu paste code'
		  ],
		  toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
		  content_css: '//www.tinymce.com/css/codepen.min.css'
		});
	</script>

	<div class="row">
		<div class="col-md-12">
		    <div class="card">
		        <div class="card-header">
		          Edit General Information
		        </div>
		        <div class="card-body">
		        	<div class="col-lg-10 col-md-offset-2">
						@include('includes.info-box')
					</div>
		        	<form class="form form-horizontal" action="{{ route('admin.general.update') }}" method="post">
					  	<div class=" {{ $errors->has('title') ? 'form-group has-error' : 'form-group'}} ">
					        <label class="col-md-2 control-label">Title</label>
					        <div class="col-md-10">
					          <input type="text" class="form-control" placeholder="" id="title" name="title" value="{{ Request::old('title') ? Request::old('title') : isset($generals) ? $generals->title : '' }}">
					        </div>
					    </div>
					    <div class=" {{ $errors->has('body') ? 'form-group has-error' : 'form-group'}} ">
					        <div class="col-md-2">
					          <label class="control-label">Description</label>
					        </div>
					        <div class="col-md-10">
					          <textarea class="form-control" id="body" name="body">{{ Request::old('body') ? Request::old('body') : isset($generals) ? $generals->body : ''}}</textarea>
					        </div>
					    </div>
					    
					    <div class="form-footer">
					    <div class="form-group">
					      <div class="col-md-10 col-md-offset-2">
					        <button type="submit" class="btn btn-primary">Save</button>
					        <a href="{{ route('admin.general.view', ['general_id' => $generals->id]) }}">
					        	<button type="button" class="btn btn-default">Cancel</button>
					        </a>
					        <input type="hidden" value="{{ Session::token() }}" name="_token" />
					        <input type="hidden" value="{{ $generals->id }}" name="general_id">
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