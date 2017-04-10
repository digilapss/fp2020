@extends('layouts.frontend-sub')

@section('content')
  <link rel="stylesheet" href="{{ asset('global/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('global/css/bootstrap-extend.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/examples/css/pages/gallery.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/site.min.css') }}">
  <link rel="stylesheet" href="{{ asset('global/vendor/magnific-popup/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('global/fonts/web-icons/web-icons.min.css') }}">
<section class="section--center mdl-grid site-max-width">
  <div class="mdl-card mdl-cell mdl-cell--12-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone  mdl-shadow--4dp">
    <div class="mdl-card__title" style="color:rgb(255, 255, 255); background:#3e50b4;">
      <h2 class="mdl-card__title-text">FP2020 COUNTRY COMMITTEE</h2>
    </div>
    <div class="mdl-card__supporting-text">
      <center>  
        <a href="#" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" id="tab1">Ministries and Goverment Institutions</a>
        <a href="#" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" id="tab2">Professional Organizations</a>
        <a href="#" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" id="tab3">Private Sector</a>
        <a href="#" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" id="tab4">NGO/Civil Society Organizations</a>
        <a href="#" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" id="tab5">Academia</a>
        <a href="#" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" id="tab6">International Development Partners</a>
      </center>
    </div>
        <div class="row">
          <div class="panel">
            <div class="panel-body">
                <p>The Indonesia FP2020 Country Committee is comprised of a diverse membership of institutions that actively work in the field of family planning throughout the country. The Country Committee includes representation from government institutions, professional organizations, private sector, civil society organizations, academia, and international development partners.
                </p>
            </div>
          </div>
        </div>
        <div class="row" id="tabtab1">
          <div class="form-group col-md-12 col-md-12">
              <ul class="blocks blocks-100 blocks-xxl-3 blocks-lg-3 blocks-md-2" data-plugin="filterable"
              data-filters="#exampleFilter">
              @foreach($ones as $one)
                <li data-type="object">
                  <div class="card card-shadow">
                    <figure class="card-img-top overlay-hover overlay">
                      <img class="overlay-figure overlay-scale" src="{{ URL::to("partner/$one->logo") }}"
                      alt="...">
                      <figcaption class="overlay-panel overlay-background overlay-fade overlay-icon">
                        <a class="icon wb-search" href="{{ URL::to("partner/$one->logo") }}"></a>
                      </figcaption>
                    </figure>
                    <div class="card-block">
                      <h5 class="card-title">{{ $one->name }}</h5>
                    </div>
                    <div class="mdl-card__supporting-text">
                        {{ $one->narrative }}
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                      <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="{{ $one->website }}">
                         Website
                      </a>
                  </div>
                  </div>
                </li>
              @endforeach
              </ul>
          </div>
        </div>
        <div class="row" id="tabtab2">
          <div class="form-group col-md-12 col-md-12">
              <ul class="blocks blocks-100 blocks-xxl-3 blocks-lg-3 blocks-md-2" data-plugin="filterable"
              data-filters="#exampleFilter">
              @foreach($twos as $two)
                <li data-type="object">
                  <div class="card card-shadow">
                    <figure class="card-img-top overlay-hover overlay">
                      <img class="overlay-figure overlay-scale" src="{{ URL::to("partner/$two->logo") }}"
                      alt="...">
                      <figcaption class="overlay-panel overlay-background overlay-fade overlay-icon">
                        <a class="icon wb-search" href="{{ URL::to("partner/$two->logo") }}"></a>
                      </figcaption>
                    </figure>
                    <div class="card-block">
                      <h5 class="card-title">{{ $two->name }}</h5>
                    </div>
                    <div class="mdl-card__supporting-text">
                        {{ $two->narrative }}
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                      <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="{{ $two->website }}">
                         Website
                      </a>
                  </div>
                  </div>
                </li>
              @endforeach
              </ul>
          </div>
        </div>
        <div class="row" id="tabtab3">
          <div class="form-group col-md-12 col-md-12">
              <ul class="blocks blocks-100 blocks-xxl-3 blocks-lg-3 blocks-md-2" data-plugin="filterable"
              data-filters="#exampleFilter">
              @foreach($threes as $three)
                <li data-type="object">
                  <div class="card card-shadow">
                    <figure class="card-img-top overlay-hover overlay">
                      <img class="overlay-figure overlay-scale" src="{{ URL::to("partner/$three->logo") }}"
                      alt="...">
                      <figcaption class="overlay-panel overlay-background overlay-fade overlay-icon">
                        <a class="icon wb-search" href="{{ URL::to("partner/$three->logo") }}"></a>
                      </figcaption>
                    </figure>
                    <div class="card-block">
                      <h5 class="card-title">{{ $three->name }}</h5>
                    </div>
                    <div class="mdl-card__supporting-text">
                        {{ $three->narrative }}
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                      <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="{{ $three->website }}">
                         Website
                      </a>
                  </div>
                  </div>
                </li>
              @endforeach
              </ul>
          </div>
        </div>
        <div class="row" id="tabtab4">
          <div class="form-group col-md-12 col-md-12">
              <ul class="blocks blocks-100 blocks-xxl-3 blocks-lg-3 blocks-md-2" data-plugin="filterable"
              data-filters="#exampleFilter">
              @foreach($fours as $four)
                <li data-type="object">
                  <div class="card card-shadow">
                    @if($four->logo)
                    <figure class="card-img-top overlay-hover overlay">
                      <img class="overlay-figure overlay-scale" src="{{ URL::to("partner/$four->logo") }}"
                      alt="...">
                      <figcaption class="overlay-panel overlay-background overlay-fade overlay-icon">
                        <a class="icon wb-search" href="{{ URL::to("partner/$four->logo") }}"></a>
                      </figcaption>
                    </figure>
                    @endif
                    <div class="card-block">
                      <h5 class="card-title">{{ $four->name }}</h5>
                    </div>
                    <div class="mdl-card__supporting-text">
                        {{ $four->narrative }}
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                      <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="{{ $four->website }}">
                         Website
                      </a>
                  </div>
                  </div>
                </li>
              @endforeach
              </ul>
          </div>
        </div>
        <div class="row" id="tabtab5">
          <div class="form-group col-md-12 col-md-12">
              <ul class="blocks blocks-100 blocks-xxl-3 blocks-lg-3 blocks-md-2" data-plugin="filterable"
              data-filters="#exampleFilter">
              @foreach($fives as $five)
                <li data-type="object">
                  <div class="card card-shadow">
                    @if($five->logo)
                    <figure class="card-img-top overlay-hover overlay">
                      <img class="overlay-figure overlay-scale" src="{{ URL::to("partner/$five->logo") }}"
                      alt="...">
                      <figcaption class="overlay-panel overlay-background overlay-fade overlay-icon">
                        <a class="icon wb-search" href="{{ URL::to("partner/$five->logo") }}"></a>
                      </figcaption>
                    </figure>
                    @endif
                    <div class="card-block">
                      <h5 class="card-title">{{ $five->name }}</h5>
                    </div>
                    <div class="mdl-card__supporting-text">
                        {{ $five->narrative }}
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                      <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="{{ $five->website }}">
                         Website
                      </a>
                  </div>
                  </div>
                </li>
              @endforeach
              </ul>
          </div>
        </div>
        <div class="row" id="tabtab6">
          <div class="form-group col-md-12 col-md-12">
              <ul class="blocks blocks-100 blocks-xxl-3 blocks-lg-3 blocks-md-2" data-plugin="filterable"
              data-filters="#exampleFilter">
              @foreach($sixs as $six)
                <li data-type="object">
                  <div class="card card-shadow">
                    @if($six->logo)
                    <figure class="card-img-top overlay-hover overlay">
                      <img class="overlay-figure overlay-scale" src="{{ URL::to("partner/$six->logo") }}"
                      alt="...">
                      <figcaption class="overlay-panel overlay-background overlay-fade overlay-icon">
                        <a class="icon wb-search" href="{{ URL::to("partner/$six->logo") }}"></a>
                      </figcaption>
                    </figure>
                    @endif
                    <div class="card-block">
                      <h5 class="card-title">{{ $six->name }}</h5>
                    </div>
                    <div class="mdl-card__supporting-text">
                        {{ $six->narrative }}
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                      <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="{{ $six->website }}">
                         Website
                      </a>
                  </div>
                  </div>
                </li>
              @endforeach
              </ul>
          </div>
        </div>
  </div>
</section>
  
  <script>
    $(document).ready(function(){
        $("#tabtab2").hide();
    $("#tabtab3").hide();
    $("#tabtab4").hide();
    $("#tabtab5").hide();
    $("#tabtab6").hide();        
        
        $("#tab1").click(function(){
            $("#tabtab1").show();
            $("#tabtab2").hide();
            $("#tabtab3").hide();
            $("#tabtab4").hide();
            $("#tabtab5").hide();
            $("#tabtab6").hide();
        });

        $("#tab2").click(function(){
            $("#tabtab1").hide();
            $("#tabtab2").show();
            $("#tabtab3").hide();
            $("#tabtab4").hide();
            $("#tabtab5").hide();
            $("#tabtab6").hide();
        });

        $("#tab3").click(function(){
            $("#tabtab1").hide();
            $("#tabtab2").hide();
            $("#tabtab3").show();
            $("#tabtab4").hide();
            $("#tabtab5").hide();
            $("#tabtab6").hide();
        });

        $("#tab4").click(function(){
            $("#tabtab1").hide();
            $("#tabtab2").hide();
            $("#tabtab3").hide();
            $("#tabtab4").show();
            $("#tabtab5").hide();
            $("#tabtab6").hide();
        });

        $("#tab5").click(function(){
            $("#tabtab1").hide();
            $("#tabtab2").hide();
            $("#tabtab3").hide();
            $("#tabtab4").hide();
            $("#tabtab5").show();
            $("#tabtab6").hide();
        });

        $("#tab6").click(function(){
            $("#tabtab1").hide();
            $("#tabtab2").hide();
            $("#tabtab3").hide();
            $("#tabtab4").hide();
            $("#tabtab5").hide();
            $("#tabtab6").show();
        });

    });
  </script>

@endsection

@section('script')
<script src="{{ asset('global/vendor/bootstrap/bootstrap.js') }}"></script>
<script src="{{ asset('assets/examples/js/pages/gallery.js') }}"></script>
<script src="{{ asset('global/vendor/breakpoints/breakpoints.js') }}"></script>
<script src="{{ asset('global/vendor/babel-external-helpers/babel-external-helpers.js') }}"></script>
<script src="{{ asset('global/vendor/jquery/jquery.js') }}"></script>
<script src="{{ asset('global/vendor/tether/tether.js') }}"></script>
<script src="{{ asset('global/vendor/asscrollable/jquery-asScrollable.js') }}"></script>
<script src="{{ asset('global/vendor/ashoverscroll/jquery-asHoverScroll.js') }}"></script>
<script src="{{ asset('global/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
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
<script src="{{ asset('assets/js/Site.js') }}"></script>
<script src="{{ asset('global/js/Plugin/asscrollable.js') }}"></script>
<script src="{{ asset('global/js/Plugin/slidepanel.js') }}"></script>
<script src="{{ asset('global/js/Plugin/switchery.js') }}"></script>
<script src="{{ asset('global/js/Plugin/filterable.js') }}"></script>
  <script type="text/javascript">
    var token = "{{ Session::token() }}";
  </script>

@endsection