<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Indonesia Family Planning 2020</title>
    <meta name="description" content="Demo of Material design portfolio template by TemplateFlip.com."/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;amp;lang=en" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" rel="stylesheet">
    <link href="{{ URL::to('src/frontend/styles/main.css') }}" rel="stylesheet">
        
	<script src="{{ URL::to('src/frontend/scripts/main.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('global/vendor/webui-popover/webui-popover.css') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/jquery-labelauty/jquery-labelauty.css') }}">
    <link rel="stylesheet" href="{{ asset('global/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('global/css/bootstrap-extend.min.css') }}">
  </head>
  <body id="top">

    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <a href="{{ route('frontend.index') }}" id="contact-button" class="mdl-button mdl-button--fab mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast mdl-shadow--4dp">
      <i class="material-icons">home</i>
    </a>

      <header class="mdl-layout__header mdl-layout__header--waterfall site-header">
        <div class="mdl-layout__header-row site-logo-row">
          <span class="mdl-layout__title">
            <div class="site-logo"></div>
            <span class="site-description">Indonesia Family Planning 2020</span>
          </span>
        </div>

        <div class="mdl-layout__header-row site-navigation-row mdl-layout--large-screen-only">
          <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
            <a class="mdl-navigation__link" href="{{ route('frontend.index') }}">Home</a>
            <a class="mdl-navigation__link" href="#about">About Us</a>
            <a class="mdl-navigation__link" href="#data">Data</a>
            <a class="mdl-navigation__link" href="#key">Key Documents</a>
            <a class="mdl-navigation__link" href="#news">News & Updates</a>
            <a class="mdl-navigation__link" href="{{ route('frontend.contact') }}">Contact Us</a>
            <?php if(\Session::get('idUser')) {
              ?>
              <a class="mdl-navigation__link menu_link" href="{{ route('admin.logout') }}" >Logout</a>
              <?php
              }else{
                ?>
                <a class="mdl-navigation__link menu_link" data-plugin="labelauty" href="#" data-target="#stores-modal" data-toggle="modal">Login</a> 
                <?php
                } ?>
          </nav>
        </div>
      </header>

      <div class="mdl-layout__drawer mdl-layout--small-screen-only">
        <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
            <a class="mdl-navigation__link" href="{{ route('frontend.index') }}">Home</a>
            <a class="mdl-navigation__link" href="#about">About Us</a>
            <a class="mdl-navigation__link" href="#data">Data</a>
            <a class="mdl-navigation__link" href="#key">Key Documents</a>
            <a class="mdl-navigation__link" href="#news">News & Updates</a>
            <a class="mdl-navigation__link" href="{{ route('frontend.contact') }}">Contact Us</a>
            <?php if(\Session::get('idUser')) {
              ?>
              <a class="mdl-navigation__link menu_link" href="{{ route('admin.logout') }}" >Logout</a>
              <?php
              }else{
                ?>
                <a class="mdl-navigation__link menu_link" data-plugin="labelauty" href="#" data-target="#stores-modal" data-toggle="modal">Login</a> 
                <?php
                } ?>
        </nav>
      </div>

      <main class="mdl-layout__content">
        <div class="site-content">
          <div class="container">
			@yield('content')
          <script type="text/javascript">
	        var baseUrl = "{{ URL::to('/') }}";
	      </script>

          </div>
        </div>
            
        <footer class="mdl-mini-footer">
            <div class="footer-container">
                <div class="mdl-logo">&copy; Indonesia FP2020. Design: <a href="https://templateflip.com/" target="_blank">TemplateFlip</a></div>
                    <ul class="mdl-mini-footer__link-list">
                        <li><a href="#">Privacy & Terms</a></li>
                        <li><a href="#"><img src="{{ asset("partner/bkkbn45.jpg") }}" title="BKKbN"></a></li>
                        <li><a href="#"><img src="{{ asset("partner/unfpa40.jpg") }}" title="UNFPA"></a></li>
                        <li><a href="#"><img src="{{ asset("partner/canada40.jpg") }}" title="CANADA"></a></li>
                        <li><a href="#"><img src="{{ asset("partner/pkbi40.jpg") }}" title="PKBI"></a></li>
                    </ul>
            </div>
        </footer>
      </main>
        <div class="modal fade" id="stores-modal" aria-hidden="true" role="dialog" tabindex="1">
            <div class="modal-dialog modal-sidebar modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <span class="mdl-layout__title">
                          <div class="site-logo"></div>
                          <span class="site-description">Indonesia Family Planning 2020</span>
                        </span>
                        <form method="post" action="{{ route('admin.login.post') }}">
                        {{ csrf_field() }}
                          <div class="form-group">
                            <label class="sr-only" for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
                          </div>
                          <div class="form-group">
                            <label class="sr-only" for="inputPassword">Password</label>
                            <input type="password" class="form-control" id="inputPassword" name="password"
                            placeholder="Password">
                          </div>
                          <div class="form-group clearfix">
                            <div class="checkbox-custom checkbox-inline checkbox-primary float-left">
                              <input type="checkbox" id="rememberMe" name="rememberMe">
                              <label for="rememberMe">Remember me</label>
                            </div>
                          </div>
                          <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
          <script src="{{ asset('global/vendor/bootstrap/bootstrap.js') }}"></script>
          <script src="https://code.getmdl.io/1.3.0/material.min.js" defer></script>
          <script src="{{ asset('global/vendor/babel-external-helpers/babel-external-helpers.js') }}"></script>
          <script src="{{ asset('global/vendor/jquery/jquery.js') }}"></script>
          <script src="{{ asset('global/vendor/breakpoints/breakpoints.js') }}"></script>
          <script src="{{ asset('global/vendor/asscrollable/jquery-asScrollable.js') }}"></script>
          <script src="{{ asset('global/vendor/ashoverscroll/jquery-asHoverScroll.js') }}"></script>
          <script src="{{ asset('global/vendor/webui-popover/jquery.webui-popover.min.js') }}"></script>
          <script src="{{ asset('global/js/Component.js') }}"></script>
          <script src="{{ asset('global/js/Plugin.js') }}"></script>
          <script src="{{ asset('global/js/Base.js') }}"></script>
          <script src="{{ asset('global/js/Config.js') }}"></script>
          <script src="{{ asset('assets/js/Section/Menubar.js') }}"></script>
          <script src="{{ asset('assets/js/Section/GridMenu.js') }}"></script>
          <script src="{{ asset('assets/js/Section/Sidebar.js') }}"></script>
          <script src="{{ asset('assets/js/Site.js') }}"></script>
          <script src="{{ asset('global/js/Plugin/webui-popover.js') }}"></script>
          <script src="{{ asset('assets/examples/js/uikit/tooltip-popover.js') }}"></script>
          <script src="{{ asset('global/vendor/jquery-labelauty/jquery-labelauty.js') }}"></script>
  </body>
</html>