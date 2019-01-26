@extends('layouts.admin-master')

@section('head')
  <link rel="stylesheet" href="{{ asset('global/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('global/css/bootstrap-extend.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/site.min.css') }}">
  <link rel="stylesheet" href="{{ asset('global/vendor/summernote/summernote.css') }}">
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
		    <div class="card">
		        <div class="card-header">
		          Edit News
		        </div>
		        <div class="card-body">
		        	<div class="col-lg-10 col-md-offset-2">
						@include('includes.info-box')
					</div>
		        	<form class="form form-horizontal" action="{{ route('admin.news.update') }}" method="post" enctype="multipart/form-data">
					  	<div class=" {{ $errors->has('title') ? 'form-group has-error' : 'form-group'}} ">
					        <label class="col-md-2 control-label">Title</label>
					        <div class="col-md-10">
					          <input type="text" class="form-control" placeholder="" id="title" name="title" value="{{ Request::old('title') ? Request::old('title') : isset($news) ? $news->title : '' }}">
					        </div>
					    </div>
					    <div class=" {{ $errors->has('file') ? 'form-group has-error' : 'form-group'}} ">
					        <label class="col-md-2 control-label">Photo</label>
					        <div class="col-md-10">
					        	<input type="file" class="form-control" placeholder="" id="file" name="file" value="{{ Request::old('file') }}">
					        </div>
					    </div>
					    <div class=" {{ $errors->has('body') ? 'form-group has-error' : 'form-group'}} ">
					        <div class="col-md-2">
					          <label class="control-label">Body</label>
					        </div>
					        <div class="col-md-10">
					          <textarea class="form-control" id="summernote" data-plugin="summernote" name="body">{{ Request::old('body') ? Request::old('body') : isset($news) ? $news->body : ''}}</textarea>
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
					        <input type="hidden" value="{{ $news->id }}" name="news_id">
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

@section('footer')
  <script src="{{ asset('global/vendor/breakpoints/breakpoints.js') }}"></script>
  <script src="{{ asset('global/vendor/babel-external-helpers/babel-external-helpers.js') }}"></script>
  <script src="{{ asset('global/vendor/jquery/jquery.js') }}"></script>
  <script src="{{ asset('global/vendor/tether/tether.js') }}"></script>
  <script src="{{ asset('global/vendor/bootstrap/bootstrap.js') }}"></script>
  
 
  <script src="{{ asset('global/vendor/asscrollable/jquery-asScrollable.js') }}"></script>
  <script src="{{ asset('global/vendor/ashoverscroll/jquery-asHoverScroll.js') }}"></script>
  <!-- Plugins -->
  <script src="{{ asset('global/vendor/switchery/switchery.min.js') }}"></script>
  <script src="{{ asset('global/vendor/intro-js/intro.js') }}"></script>
  <script src="{{ asset('global/vendor/screenfull/screenfull.js') }}"></script>
  <script src="{{ asset('global/vendor/slidepanel/jquery-slidePanel.js') }}"></script>
  <script src="{{ asset('global/vendor/summernote/summernote.min.js') }}"></script>
  <!-- Scripts -->
  <script src="{{ asset('global/js/State.js') }}"></script>
  <script src="{{ asset('global/js/Component.js') }}"></script>
  <script src="{{ asset('global/js/Plugin.js') }}"></script>
  <script src="{{ asset('global/js/Base.js') }}"></script>
  <script src="{{ asset('global/js/Config.js') }}"></script>
  <script src="{{ asset('assets/js/Section/Menubar.js') }}"></script>
  <script src="{{ asset('assets/js/Section/GridMenu.js') }}"></script>
  <script src="{{ asset('assets/js/Section/Sidebar.js') }}"></script>
  <script src="{{ asset('assets/js/Section/PageAside.js') }}"></script>
  <script src="{{ asset('assets/js/Plugin/menu.js') }}"></script>
  <script src="{{ asset('global/js/config/colors.js') }}"></script>
  <script src="{{ asset('assets/js/config/tour.js') }}"></script>
 
  <!-- Page -->
  <script src="{{ asset('assets/js/Site.js') }}"></script>
  <script src="{{ asset('global/js/Plugin/asscrollable.js') }}"></script>
  <script src="{{ asset('global/js/Plugin/slidepanel.js') }}"></script>
  <script src="{{ asset('global/js/Plugin/switchery.js') }}"></script>
  <script src="{{ asset('global/js/Plugin/summernote.js') }}"></script>
  <script src="{{ asset('assets/examples/js/forms/editor-summernote.js') }}"></script>
@endsection

@section('script')
	<script type="text/javascript">
		var token = "{{ Session::token() }}";
	</script>

@endsection