@extends('layouts.frontend-master')

@section('content')
<link href="{{ URL::to('assets/css/custom.css') }}" rel="stylesheet">
			<div class="mdl-grid site-max-width">
              <div class="mdl-cell mdl-cell--12-col mdl-card welcome-card mdl-shadow--4dp portfolio-card">
                <div class="mdl-card__title">
                
                </div>
                <div class="mdl-card__actions mdl-card--border">
                  <div class="mdl-card__supporting-text">

                    {!! $intro->narrative !!}
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
                  <a href="#" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent about-us-btn active" data-type="who-we-are" id="whoweare">Who We Are</a>
                  <a href="#" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent about-us-btn" data-type="working-groups" id="workinggroup">Working Groups</a>
                  <a href="#" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent about-us-btn" data-type="our-partners" id="ourpartner">Our Partners</a>
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
                            {!! $globalshort !!} 
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
                            {!! $indonesiashort !!} 
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
                            <h2 class="mdl-card__title-text">Rights and Empowerment</h2>
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
                            <img class="article-image" src="{{ URL::to('src/frontend/img/profile4.png') }}" border="0" alt="">
                        </div>
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">Country Focal Points</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            Since 2013, the National Population and Family Planning Board (BKKBN) has chaired the FP2020 Country Committee together with the United Nations Population Fund (UNFPA) and the United States Agency for International Development. In April 2017, USAID formally stepped down as FP2020 Country Committee Co-Chair in Indonesia and its role as Donor Focal Point has been replaced by Global Affairs Canada.
                            
                        </div>
                        <div class="mdl-card__actions  mdl-card--border">
                          <center>  
                            <a class="mdl-button mdl-button--raised mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="{{ route('frontend.focal') }}">Read More</a>
                          </center>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--6-col mdl-card mdl-shadow--4dp portfolio-card">
                        <div class="mdl-card__media">
                            <img class="article-image" src="{{ URL::to('src/frontend/img/profil5.jpeg') }}" border="0" alt="">
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

              <div class="mdl-card__actions  mdl-card--border">
                  <div id="gen" class="mdl-cell mdl-cell--12-col mdl-card portfolio-card">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">General Info</h2>
                    </div>
                      <div class="menu-data">
                        Progress towards achieving the goals of the global FP2020 initiative is monitored through the Track20 initiative and implemented by Avenir Health. 
                       <br/>
                          To learn more about the <span style="font-weight: bold;">Track20 Initiative</span>, please click <a href="http://www.track20.org/pages/about/">here</a>. 
                        <br>
                          To learn more about the <span style="font-weight: bold;">FP2020 Core Indicators</span>, please click <a href="http://www.track20.org/pages/data/indicators">here</a>.  
                        <br>
                          To learn more about Indonesia’s <span style="font-weight: bold;">progress in family planning</span>, please click <a href="http://www.track20.org/pages/countries/all-countries/indonesia">here</a>.
                        <br/><br/>
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
                            <li><a href="{{ asset("documents/FP2020_2016_Annual_Commitment_Update_Questionnaire-Indonesia_DLC.pdf") }}" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent">2016 COMMITMENT UPDATE</a></li>
                            <li><a href="{{ asset("documents/action.pdf") }}" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent">2016-2017 FP2020 COUNTRY ACTION</a></li>
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
                            <span>{!! $new->body !!}</span> 
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
                    <h4 class="event-h4">
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
                  
                  $('.about-us-btn').click(function(){
                    $('.about-us-btn').removeClass('active');
                    $(this).addClass('active');
                    localStorage.setItem("aboutUs", $(this).data('type'));
                  });
                  $('[data-type="' + localStorage.getItem("aboutUs") + '"]').click();
              });
            </script>

@endsection