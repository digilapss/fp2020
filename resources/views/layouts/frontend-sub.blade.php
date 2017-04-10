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
            <a class="mdl-navigation__link" href="{{ route('frontend.contact') }}">Contact Us</a>
          </nav>
        </div>
      </header>

      <div class="mdl-layout__drawer mdl-layout--small-screen-only">
        <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
            <a class="mdl-navigation__link" href="{{ route('frontend.index') }}">Home</a>
            <a class="mdl-navigation__link" href="{{ route('frontend.contact') }}">Contact Us</a>
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
                    </ul>
            </div>
        </footer>
      </main>
    <script src="https://code.getmdl.io/1.3.0/material.min.js" defer></script>
  </body>
</html>