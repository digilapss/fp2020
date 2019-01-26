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
              Edit Intro
            </div>
            <div class="card-body">
              <div class="col-lg-10 col-md-offset-2">
            @include('includes.info-box')
          </div>
              <form class="form form-horizontal" action="{{ route('admin.intro.update') }}" method="post">
              <div class=" {{ $errors->has('narrative') ? 'form-group has-error' : 'form-group'}} ">
                  <label class="col-md-2 control-label">Narrative</label>
                  <div class="col-md-10">
                    <textarea class="form-control" id="summernote" data-plugin="summernote" name="narrative">{{ Request::old('narrative') ? Request::old('narrative') : isset($intro) ? $intro->narrative : ''}}</textarea>
                  </div>
              </div>
              
              <div class="form-footer">
              <div class="form-group">
                <div class="col-md-10 col-md-offset-2">
                  <button type="submit" class="btn btn-primary">Save</button>
                  <a href="{{ route('admin.intro.view', ['intro_id' => $intro->intro_id ]) }}">
                    <button type="button" class="btn btn-default">Cancel</button>
                  </a>
                  <input type="hidden" value="{{ Session::token() }}" name="_token" />
                  <input type="hidden" value="{{ $intro->id }}" name="intro_id">
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