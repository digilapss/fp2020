<!DOCTYPE html>
<html>
<head>
  <title>Admin Area</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="shortcut icon" href="{{ asset('/images/fav.png') }}">

  <link rel="stylesheet" href="{{ URL::to('src/backend/assets/css/vendor.css') }}">
  <link rel="stylesheet" href="{{ URL::to('src/backend/assets/css/flat-admin.css')}}">

  <!-- Theme -->
  <link rel="stylesheet" href="{{ URL::to('src/backend/assets/css/theme/blue-sky.css') }}">
  <link rel="stylesheet" href="{{ URL::to('src/backend/assets/css/theme/blue.css') }}">
  <link rel="stylesheet" href="{{ URL::to('src/backend/assets/css/theme/red.css') }}">
  <link rel="stylesheet" href="{{ URL::to('src/backend/assets/css/theme/yellow.css') }}">

  <!-- Datepicker -->
  <link rel="stylesheet" href="{{ URL::to('src/datepicker/css/datepicker.css') }}">

</head>
<body>
  <div class="app app-default">

    @include('includes.side')
    <div class="app-container">
      @include('includes.nav')
      @yield('content')
      
      <script type="text/javascript">
        var baseUrl = "{{ URL::to('/') }}";
      </script>
  
      @include('includes.footer')
    </div>

  </div>
  
  <script type="text/javascript" src="{{ URL::to('src/backend/assets/js/vendor.js') }}"></script>
  <script type="text/javascript" src="{{ URL::to('src/backend/assets/js/app.js') }}"></script>
  <script type="text/javascript" src="{{ URL::to('src/datepicker/js/bootstrap-datepicker.js') }}"></script>

  <script>
    $('#dp1').datepicker({
        format: 'yyyy-mm-dd'
      });
  </script>

</body>
</html>