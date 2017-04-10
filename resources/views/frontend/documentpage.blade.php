@extends('layouts.frontend-sub')

@section('content')



<section class="section--center mdl-grid site-max-width">
  <div class="mdl-card mdl-cell mdl-cell--12-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone  mdl-shadow--4dp">
    <div class="mdl-card__title">
      <h2 class="mdl-card__title-text">Documents</h2>
    </div>
    <div class="mdl-card__supporting-text">
      <center>  
        <a href="#" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" id="tab1">Strategy</a>
        <a href="#" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" id="tab2">Reports</a>
        <a href="#" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" id="tab3">Power Points</a>
        <a href="#" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" id="tab4">TORs & MoM</a>
      </center>
    </div>

    <div id="tabtab1">
      <div class="mdl-card__actions  mdl-card--border">
        <center><h6>Strategy</h6></center>
      </div>
      @if(count($strategies) == 0)
        <div class="mdl-card__actions  mdl-card--border">
          <center><h6>No Document</h6></center>
        </div>
      @else
        @foreach($strategies as $strategy)
          <div class="mdl-card__actions  mdl-card--border">
            <table>
              <tr>
                <td width="90%">[{{ $strategy->date }}] {{ $strategy->name }}</td>
                <td width="10%"><a class="mdl-button mdl-button--raised mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="{{ asset("documents/$strategy->file") }}" download="{{ $strategy->name }}">Download</a></td>
              </tr>
            </table>
          </div>
        @endforeach
      @endif
    </div>

    <div id="tabtab2">
      <div class="mdl-card__actions  mdl-card--border">
        <center><h6>Reports</h6></center>
      </div>
      @if(count($reports) == 0)
        <div class="mdl-card__actions  mdl-card--border">
          <center><h6>No Document</h6></center>
        </div>
      @else
        @foreach($reports as $report)
          <div class="mdl-card__actions  mdl-card--border">
            <table>
              <tr>
                <td width="90%">[{{ $report->date }}] {{ $report->name }}</td>
                <td width="10%"><a class="mdl-button mdl-button--raised mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="{{ asset("documents/$report->file") }}" download="{{ $report->name }}">Download</a></td>
              </tr>
            </table>
          </div>
        @endforeach
      @endif
    </div>

    <div id="tabtab3">
      <div class="mdl-card__actions  mdl-card--border">
        <center><h6>Powerpoints</h6></center>
      </div>
      @if(count($ppts) == 0)
        <div class="mdl-card__actions  mdl-card--border">
          <center><h6>No Document</h6></center>
        </div>
      @else
        @foreach($ppts as $ppt)
          <div class="mdl-card__actions  mdl-card--border">
            <table>
              <tr>
                <td width="90%">[{{ $ppt->date }}] {{ $ppt->name }}</td>
                <td width="10%"><a class="mdl-button mdl-button--raised mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="{{ asset("documents/$ppt->file") }}" download="{{ $ppt->name }}">Download</a></td>
              </tr>
            </table>
          </div>
        @endforeach
      @endif
    </div>

    <div id="tabtab4">
      <div class="mdl-card__actions  mdl-card--border">
        <center><h6>TORs and MoM</h6></center>
      </div>
      @if(count($tors) == 0)
        <div class="mdl-card__actions  mdl-card--border">
          <center><h6>No Document</h6></center>
        </div>
      @else
        @foreach($tors as $tor)
          <div class="mdl-card__actions  mdl-card--border">
            <table>
              <tr>
                <td width="90%">[{{ $tor->date }}] {{ $tor->name }}</td>
                <td width="10%"><a class="mdl-button mdl-button--raised mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="{{ asset("documents/$tor->file") }}" download="{{ $tor->name }}">Download</a></td>
              </tr>
            </table>
          </div>
        @endforeach
      @endif
  </div>
</section>



  <script>
    $(document).ready(function(){
      $("#tabtab2").hide();
      $("#tabtab3").hide();
      $("#tabtab4").hide();
          
        
        $("#tab1").click(function(){
            $("#tabtab1").show();
            $("#tabtab2").hide();
            $("#tabtab3").hide();
            $("#tabtab4").hide();
        });

        $("#tab2").click(function(){
            $("#tabtab1").hide();
            $("#tabtab2").show();
            $("#tabtab3").hide();
            $("#tabtab4").hide();
        });

        $("#tab3").click(function(){
            $("#tabtab1").hide();
            $("#tabtab2").hide();
            $("#tabtab3").show();
            $("#tabtab4").hide();
        });

        $("#tab4").click(function(){
            $("#tabtab1").hide();
            $("#tabtab2").hide();
            $("#tabtab3").hide();
            $("#tabtab4").show();
        });

    });
  </script>

  

@endsection

@section('script')
  <script type="text/javascript">
    var token = "{{ Session::token() }}";
  </script>

@endsection