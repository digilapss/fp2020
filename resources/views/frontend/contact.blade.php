@extends('layouts.frontend-sub')

@section('content')

<div class="site-content">
  <div class="mdl-grid site-max-width">
    <div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--4dp page-content">
      <div class="mdl-card__title">
        <h1 class="mdl-card__title-text">Contact</h1>
      </div>
      <div class="mdl-card__media">
        <img class="article-image" src="{{ URL::to('src/frontend/img/contact.jpg') }}" border="0" alt="Contact">
      </div>
      <div class="mdl-grid site-copy">
        <div class="mdl-cell mdl-cell--12-col">
          <div class="mdl-card__supporting-text">
            <p><h4>Secretariat of Indonesia FP2020 Country Committee</h4></p>
            
            <h5>
              <table>
                <tr>
                  <td>Email</td>
                  <td>:</td>
                  <td>fp2020indonesiacc@gmail.com</td>
                </tr>
                <tr>
                  <td>Twiiter</td>
                  <td>:</td>
                  <td>@fp2020indonesia</td>
                </tr>
              </table>
            </h5>
            <br><br><br><br><br><br><br><br><br><br><br><br>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection