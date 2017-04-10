@extends('layouts.frontend-master')

@section('content')

			<div class="mdl-grid site-max-width">
              <div class="mdl-cell mdl-cell--12-col mdl-card welcome-card mdl-shadow--4dp portfolio-card">
                <div class="mdl-card__title">
                
                </div>
                <div class="mdl-card__actions mdl-card--border">
                  <div class="mdl-card__supporting-text">
                    <h4><center><b>{{ $intro->narrative }}</b></center></h4>
                  </div>
                </div>
              </div>
            </div>
            
            <div id="about">
            <section class="section--center mdl-grid site-max-width">
            <div class="mdl-card mdl-cell mdl-cell--12-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone  mdl-shadow--4dp">
              <div class="mdl-card__title" style="color:rgb(255, 255, 255); background:#3e50b4;">
                <h2 class="mdl-card__title-text">ABOUT US</h2>
              </div>
              <div class="mdl-card__supporting-text">
                <center>  
                  <a href="#" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" id="whoweare">Who We Are</a>
                  <a href="#" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" id="workinggroup">Working Groups</a>
                  <a href="#" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" id="ourpartner">Our Partners</a>
                </center>
              </div>
              <div class="mdl-card__actions  mdl-card--border">
                <div id="who">
                  
                  <section class="section--center mdl-grid site-max-width">
                  
                    <div class="mdl-cell mdl-cell--6-col mdl-card mdl-shadow--4dp portfolio-card">
                        <div class="mdl-card__media">
                            <img class="article-image" src="{{ asset("profile/$global->image") }}" border="0" alt="">
                        </div>
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">Global FP2020</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            {{ $globalshort }} 
                        </div>
                        <div class="mdl-card__actions  mdl-card--border">
                          <center>  
                            <a class="mdl-button mdl-button--raised mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="{{ route('frontend.profile', ['profile_id' => 1]) }}">Read More</a>
                          </center>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--6-col mdl-card mdl-shadow--4dp portfolio-card">
                        <div class="mdl-card__media">
                            <img class="article-image" src="{{ asset("profile/$indonesia->image") }}" border="0" alt="">
                        </div>
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">Indonesia FP2020</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            {{ $indonesiashort }} 
                        </div>
                        <div class="mdl-card__actions  mdl-card--border">
                          <center>  
                            <a class="mdl-button mdl-button--raised mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="{{ route('frontend.profile', ['profile_id' => 2]) }}">Read More</a>
                          </center>
                        </div>
                    </div>
                </section>
                  
                </div>
                <div id="working">
                  <section class="section--center mdl-grid site-max-width">
                    <div class="mdl-cell mdl-card mdl-shadow--4dp portfolio-card">
                        <div class="mdl-card__media">
                            <img class="article-image" src="{{ URL::to('src/frontend/img/strategy.png') }}" border="0" alt="">
                        </div>
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">Family Planning Strategy &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            {{ $strategyshort }}
                        </div>
                        <div class="mdl-card__actions  mdl-card--border">
                          <center>  
                            <a class="mdl-button mdl-button--raised mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="{{ route('frontend.group', ['group_id' => 4]) }}">Read More</a>
                          </center>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-card mdl-shadow--4dp portfolio-card">
                        <div class="mdl-card__media">
                            <img class="article-image" src="{{ URL::to('src/frontend/img/right.png') }}" border="0" alt="">
                        </div>
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">Right and Empowerment</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            {{ $rightshort }}
                        </div>
                        <div class="mdl-card__actions  mdl-card--border">
                          <center>  
                            <a class="mdl-button mdl-button--raised mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="{{ route('frontend.group', ['group_id' => 5]) }}">Read More</a>
                          </center>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-card mdl-shadow--4dp portfolio-card">
                        <div class="mdl-card__media">
                            <img class="article-image" src="{{ URL::to('src/frontend/img/data.png') }}" border="0" alt="">
                        </div>
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">Data, Monitoring and Evaluation</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            {{ $datashort }}
                        </div>
                        <div class="mdl-card__actions  mdl-card--border">
                          <center>  
                            <a class="mdl-button mdl-button--raised mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="{{ route('frontend.group', ['group_id' => 6]) }}">Read More</a>
                          </center>
                        </div>
                    </div>
                  </section>
                </div>
                <div id="our">
                  <section class="section--center mdl-grid site-max-width">
                    <div class="mdl-cell mdl-cell--6-col mdl-card mdl-shadow--4dp portfolio-card">
                        <div class="mdl-card__media">
                            <img class="article-image" src="{{ URL::to('src/frontend/img/portfolio3.jpg') }}" border="0" alt="">
                        </div>
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">Focal Points</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            In Indonesia, the National Population and Family Planning Board (BKKBN) chairs the FP2020 Country Committee together with its co-chairs, the United Nations Population Fund (UNFPA) and the United States Agency for International Development (USAID. Collectively, these three institutions serve as the Country Focal Points for FP2020 and lead the initiative at the country-level. 
                        </div>
                        <div class="mdl-card__actions  mdl-card--border">
                          <center>  
                            <a class="mdl-button mdl-button--raised mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="{{ route('frontend.focal') }}">Read More</a>
                          </center>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--6-col mdl-card mdl-shadow--4dp portfolio-card">
                        <div class="mdl-card__media">
                            <img class="article-image" src="{{ URL::to('src/frontend/img/portfolio3.jpg') }}" border="0" alt="">
                        </div>
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">FP2020 Country Committee</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            The Indonesia FP2020 Country Committee is comprised of a diverse membership of institutions that actively work in the field of family planning throughout the country. The Country Committee includes representation from government institutions, professional organizations, private sector, civil society organizations, academia, and international development partners. 
                        </div>
                        <div class="mdl-card__actions  mdl-card--border">
                          <center>  
                            <a class="mdl-button mdl-button--raised mdl-js-button mdl-js-ripple-effect mdl-button--accent" href={{ route('frontend.partner') }}>Read More</a>
                          </center>
                        </div>
                    </div>
                  </section>
                </div>
              </div>
            </div>
          </section>
          </div>

          <div id="data">
          <section class="section--center mdl-grid site-max-width">
            <div class="mdl-card mdl-cell mdl-cell--12-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone  mdl-shadow--4dp">
              <div class="mdl-card__title" style="color:rgb(255, 255, 255); background:#3e50b4;">
                  <h2 class="mdl-card__title-text">DATA</h2>
              </div>
              <div class="mdl-card__supporting-text ">
                <center>
                  <a href="#" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" id="geninfo">General Info</a>
                  <a href="#" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" id="coreindi">FP2020 Core Indicator</a>
                  <a href="#" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" id="province">Data By Province</a>
                </center>
              </div>
              <div class="mdl-card__actions  mdl-card--border">
                  <div id="gen" class="mdl-cell mdl-cell--12-col mdl-card portfolio-card">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">General Info</h2>
                    </div>
                    <div class="mdl-card__media">
                        <img class="article-image" src="{{ URL::to('src/frontend/img/geninfo.png') }}" border="0" alt="">
                    </div>
                    <div class="mdl-card__supporting-text">
                      <a class="mdl-button mdl-button--raised mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="{{ URL::to('src/frontend/img/geninfo.png') }}" target="_blank">Download</a>
                    </div>
                  </div>

                  <div id="core" class="mdl-cell mdl-cell--12-col mdl-card portfolio-card">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">FP2020 Core Indicator</h2>
                    </div>
                    <div class="mdl-card__media">
                        <img class="article-image" src="{{ URL::to('src/frontend/img/core.png') }}" border="0" alt="">
                    </div>
                    <div class="mdl-card__supporting-text">
                      <a class="mdl-button mdl-button--raised mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="{{ URL::to('src/frontend/document/core.pdf') }}" target="_blank">Download</a>
                    </div>
                  </div>

                  <div id="prov" class="mdl-cell mdl-cell--12-col mdl-card portfolio-card">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">By Province</h2>
                    </div>
                    <div class="mdl-card__media">
                        <img class="article-image" src="{{ URL::to('src/frontend/img/portfolio3.jpg') }}" border="0" alt="">
                    </div>
                    <div class="mdl-card__supporting-text">
                      <a class="mdl-button mdl-button--raised mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="#" target="_blank">Download</a>
                    </div>
                  </div>
              </div>
            </div>
          </section>
          </div>

          <div id="key">
          <section class="section--center mdl-grid site-max-width">
            <div class="mdl-card mdl-cell mdl-cell--12-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone  mdl-shadow--4dp">
              <div class="mdl-card__title" style="color:rgb(255, 255, 255); background:#3e50b4;">
                  <h2 class="mdl-card__title-text">KEY DOCUMENTS</h2>
              </div>
              <div class="mdl-card__actions  mdl-card--border">
                  <section class="section--center mdl-grid site-max-width">
                    <div class="mdl-cell mdl-cell--6-col mdl-card portfolio-card">
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">National</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            
                          <ul>
                            <li><a href="{{ asset("documents/commitment.pdf") }}" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent">2012 Commitment</a></li>
                            <li><a href="#" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent">2016 Update Commitment</a></li>
                            <li><a href="{{ asset("documents/action.pdf") }}" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent">Country Action Plan</a></li>
                          </ul>   

                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--6-col portfolio-card">
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">FP2020 Country Committee</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                          <ul>
                            <li><a href="{{ route('frontend.document') }}" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent">Strategy</a></li>
                            <li><a href="{{ route('frontend.document') }}" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent">Reports</a></li>
                            <li><a href="{{ route('frontend.document') }}" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent">Presentations</a></li>
                            <li><a href="{{ route('frontend.document') }}" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent">Minutes OF MEETING</a></li>
                          </ul> 
                        </div>
                    </div>
                  </section>
              </div>
            </div>
          </section>
          </div>

          <div id="news">
          <div class="homepage-footer">
            <section class="mdl-grid site-max-width">
                <div class="mdl-cell mdl-card mdl-cell--8-col mdl-cell--4-col-tablet  mdl-shadow--4dp portfolio-card">
                  <div class="mdl-card__title" style="color:rgb(255, 255, 255); background:#3e50b4;">
                      <h2 class="mdl-card__title-text">NEWS & UPDATES</h2>
                  </div>
                  <ul class="demo-list-three mdl-list">
                  @if(count($news) == 0)
                    
                      <li class="mdl-list__item mdl-list__item--three-line">
                        <span class="mdl-list__item-primary-content">
                          
                          <span>No News & Update</span>
                        </span>
                      </li>
                   
                  @else
                    @foreach($news as $new)
                      
                        <li class="mdl-list__item mdl-list__item--three-line">
                          <span class="mdl-list__item-primary-content">
                            <i class="material-icons mdl-list__item-avatar">layers</i>
                            <span>{{ $new->title }}</span>
                            <span class="mdl-list__item-text-body">
                            <span>{{ $new->body }}</span> 
                              <a href="{{ route('frontend.news.single', ['news_id' => $new->id]) }}">Read More</a>
                            </span>
                          </span>
                        </li>
                      
                    @endforeach
                    </ul>
                    <a class="mdl-button mdl-button--raised mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="{{ route('frontend.news') }}">View All</a>
                  @endif
                </div>
                <div class="demo-card-event mdl-cell mdl-card mdl-shadow--4dp event-card portfolio-card">
                  <div class="mdl-card__title mdl-card--expand">
                    <h4>
                       EVENTS:<br>
                      @if(count($uevents) == 0)
                        No upcoming event
                      @else
                        @foreach($uevents as $uevent)
                          {{ $uevent->title }}<br>
                          {{ $uevent->date }}<br>
                          at {{ $uevent->place }}
                        @endforeach
                      @endif
                    </h4>
                  </div>
                  <div class="mdl-card__actions mdl-card--border">
                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="{{ route('frontend.event') }}">
                      View All Events
                    </a>
                    <div class="mdl-layout-spacer"></div>
                    <i class="material-icons">event</i>
                  </div>
                </div>
            </section>
          </div>
          </div>
            <script>
              $(document).ready(function(){
                  $("#core").hide();
                  $("#prov").hide();
                  
                  $("#geninfo").click(function(){
                      $("#gen").show();
                      $("#core").hide();
                      $("#prov").hide();
                  });
                  
                  $("#coreindi").click(function(){
                      $("#gen").hide();
                      $("#core").show();
                      $("#prov").hide();
                  });
                  
                  $("#province").click(function(){
                      $("#gen").hide();
                      $("#core").hide();
                      $("#prov").show();
                  });
                  
              });
            </script>

            <script>
              $(document).ready(function(){
                  $("#working").hide();
                  $("#our").hide();
                  
                  $("#whoweare").click(function(){
                      $("#who").show();
                      $("#working").hide();
                      $("#our").hide();
                  });
                  
                  $("#workinggroup").click(function(){
                      $("#who").hide();
                      $("#working").show();
                      $("#our").hide();
                  });
                  
                  $("#ourpartner").click(function(){
                      $("#who").hide();
                      $("#working").hide();
                      $("#our").show();
                  });
                  
              });
            </script>

@endsection