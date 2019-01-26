@extends('layouts.frontend-sub')
@section('content')
  <link rel="stylesheet" href="{{ asset('global/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('global/css/bootstrap-extend.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/examples/css/pages/gallery.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/site.min.css') }}">
  <link rel="stylesheet" href="{{ asset('global/vendor/magnific-popup/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('global/fonts/web-icons/web-icons.min.css') }}">
<section class="section--center mdl-grid site-max-width">
    <div class="mdl-card mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone  mdl-shadow--4dp">
        <div class="mdl-card__title" style="color:rgb(255, 255, 255); background:#3e50b4;">
            <h2 class="mdl-card__title-text">FOCAL POINTS</h2>
        </div>
        <div class="row">
          <div class="panel">
            <div class="panel-body">
                <p></p>
                <p>Since 2013, the National Population and Family Planning Board (BKKBN) has chaired the FP2020 Country Committee together with the United Nations Population Fund (UNFPA) and the United States Agency for International Development. In April 2017, USAID formally stepped down as FP2020 Country Committee Co-Chair in Indonesia and its role as Donor Focal Point has been replaced by Global Affairs Canada. 
                </p>
                <p>Also in 2017, the FP2020 Focal Point structure was formally expanded to include a Civil Society Organization (CSO) Focal Point in recognition of their key role in advancing family planning at the country level. In Indonesia, the Indonesian Planned Parenthood Association has been selected as the CSO Focal Point. Collectively, these institutions serve as the Country Focal Points for FP2020 and lead the initiative at the country-level.</p>
                <br>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-12 col-md-12">
              <ul class="blocks blocks-100 blocks-xxl-2 blocks-lg-2 blocks-md-2" data-plugin="filterable"
              data-filters="#exampleFilter">
                @foreach($sixs as $six)
                <li data-type="object">
                  <div class="card card-shadow">
                    <figure class="card-img-top overlay-hover overlay">
                      <img class="overlay-figure overlay-scale" src="{{ URL::to("partner/$six->logo") }}"
                      alt="...">
                      <figcaption class="overlay-panel overlay-background overlay-fade overlay-icon">
                        <a class="icon wb-search" href="{{ URL::to("partner/$six->logo") }}"></a>
                      </figcaption>
                    </figure>
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