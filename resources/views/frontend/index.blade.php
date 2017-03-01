@extends('layouts.frontend')

@section('content')
	<div class="mother-grid" id="home">
		<div class="container">
			<div class="header clock wow bounceIn">
				
				<h1><img src="{{ URL::to('src/frontend/images/fp2020-logo.png') }}" width="80px">&nbsp;&nbsp;<a href="index.html">INDONESIA FAMILY PLANNING 2020</a></h1>
				<div class="nav-top">
					<span class="menu"><img src="{{ URL::to('src/frontend/images/menu-icon.png') }}" alt=""></span>
					<ul class="navgation">
						<li><a class="active" href="#home" class="scroll">HOME</a></li>
						<li><a href="#about" class="scroll">ABOUT</a></li>
						<li><a href="#services" class="scroll">COMMITMENT</a></li>
						<li><a href="#event" class="scroll">EVENT</a></li>
						<li><a href="#project" class="scroll">WORKING DOCUMENT</a></li>
						<li><a href="#project" class="scroll">NEWS & PHOTO</a></li>
						<li><a href="#partner" class="scroll">PARTNER</a></li>
					</ul>

					 <!--start-top-nav-script-->
					 <script>
						$( "span.menu" ).click(function() {
							$( "ul.navgation" ).slideToggle( 300, function() {
							// Animation complete.
							});
						});
					</script>
					<!--End-top-nav-script-->

				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
		
	<div class="banner">
		<div class="slider">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<h2>Caption 1</h2>
	                        <h5>sub caption 1</h5>
	  	    			</li>
	 	    			<li>
							<h2>Caption 2</h2>
							<h5>sub caption 2</h5>
						</li>
						<li>
							<h2>Caption 3</h2>
							<h5>sub caption 3</h5>
						</li>
						<li>
							<h2>Caption 4</h2>
							<h5>sub caption 4</h5>
						</li>
					</ul>
				</div>
			</section>

	  		<script>window.jQuery || document.write('<script src="{{ URL::to("src/frontend/js/libs/jquery-1.7.min.js") }}">\x3C/script>')</script>
	  		<!--FlexSlider-->
	  		<script defer src="{{ URL::to('src/frontend/js/jquery.flexslider.js') }}"></script>
			<script type="text/javascript">
			   	$(function(){
			      SyntaxHighlighter.all();
			    });
			    $(window).load(function(){
			      $('.flexslider').flexslider({
			        animation: "slide",
			        start: function(slider){
			          $('body').removeClass('loading');
			        }
			      });
			    });
	  		</script>
		</div>
	</div>

	<div class="about" id="about">
		<div class="container">
			<div class="about1 clock wow bounceIn">
				<div class="col-md-6 ">
					<div class="about-top">
						<h2>Strategy</h2>
						<br>
						<h3>Document</h3>
						<a href="#">Download</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6">
					<div class="about-bottom">
						<a href="#"><p class="para1">Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet,lectus arcu pulvinar ricus lorem ipsum dolor</p></a> 
						<p class="para2">vitae facilisis libero dolor a purus. Sed vel lacus. Mauris nibh felis , adipiscing varius, adipiscing in,lacinia vel, tellus. Suspendisse ac urna. Etiam pellentesque mauris ut lectus.</p> 
						<p class="para3">Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. integeralesuada.</p>     
					</div>                 
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>  
	</div>

	<div class="content" id="services">
		<div class="container">
			<div class="col-md-12">
				<div class="content-grids">
                    <center><h1><b>Commitment: Indonesia</b></h1></center>
					<br><br>
				</div>
			</div>
			<div class="content-1 clock wow bounceIn">
				<div class="col-md-3">
					<div class="content-grids">
						<div class="content-right">
							<h3>Program & Service Delivery</h3>
							<p>{{ $programshort }}</p>
							<button class="btn btn-info" data-toggle="modal" data-target="#myModal1">MORE</button>
						</div>
						<div class="clearfix"> </div>
					</div>                                                      
				</div>
				<div class="col-md-3">
					<div class="content-grids">
						<div class="content-right">
							<h3>Financial <br> &nbsp;</h3>
							<P>{{ $financialshort }}</P>
							<button class="btn btn-info" data-toggle="modal" data-target="#myModal2">MORE</button>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="content-grids">
						<div class="content-right">
							<h3>Policy & Political <br> &nbsp;</h3>
							<P>{{ $policyshort }}</P>
							<button class="btn btn-info" data-toggle="modal" data-target="#myModal3">MORE</button>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-3">
						<div class="content-grids">
							<div class="content-right">
								<h3>Objective <br> &nbsp;</h3>
                                <P>{{ $objectiveshort }}</P>
                                <button class="btn btn-info" data-toggle="modal" data-target="#myModal4">MORE</button>
                            </div>
						<div class="clearfix"> </div>
						</div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

    <div class="project" id="event">
        <div class="container">
            <div class="project-1 clock wow bounceIn">
                <h3>UPCOMING EVENT</h3>
                <br>
                <center><a href="{{ route('frontend.event') }}" class="btn btn-default"> Show All Event</a></center>
            </div>
        </div>
    </div>
    
	<!--Responsive-tabs-Starts-Here-->
	<div class="about" id="project">
		<div class="container">
			<div class="tabs-box clock wow bounceIn">
			<center><h1><b>Working Documents</b></h1></center>
			<br>
			<ul class="tabs-menu">
				<li><a href="#tab1"><img src="src/frontend/images/f.png" alt="">Strategy</a></li>
				<li><a href="#tab2"><img src="src/frontend/images/f.png" alt="">Workplans</a></li>
				<li><a href="#tab3"><img src="src/frontend/images/f.png" alt="">Reports</a></li>
				<li><a href="#tab4"><img src="src/frontend/images/f.png" alt="">PowerPoints</a></li>
				<li><a href="#tab5"><img src="src/frontend/images/f.png" alt="">TORs & MoM</a></li>
			</ul>
			<div class="clearfix"> </div>

			<div class="tab-grids">

				<div id="tab1" class="tab-grid">
					<div class="col-md-12 line1">
						@if(count($strategies) == 0)
					    	 <center>No Document</center>
						@else
							@foreach($strategies as $strategy)
								<blockquote>
									<h3>{{ $strategy->name }}</h3>
								    <p>{{ $strategy->description }}</p>
								    <footer>{{ $strategy->date }}</footer>
								    <br>
								    <a href="{{ asset("documents/$strategy->file") }}" class="btn btn-info" >Download</a>
								</blockquote>
							@endforeach
						@endif
					</div>
					<center><a href="{{ route('frontend.document', ['document_id' => 1]) }}" class="btn btn-primary"> Show All</a></center>
				</div>

				<div id="tab2" class="tab-grid">
					<div class="col-md-12 line1">
						@if(count($workplans) == 0)
					    	 <center><h1>No Document</h1></center>
					    	 <br>
						@else
							@foreach($workplans as $workplan)
								<blockquote>
									<h3>{{ $workplan->name }}</h3>
								    <p>{{ $workplan->description }}</p>
								    <footer>{{ $workplan->date }}</footer>
								    <br>
								    <a href="{{ asset("documents/$workplan->file") }}" class="btn btn-info" >Download</a>
								</blockquote>
							@endforeach
						@endif
					</div>
					
					<center><a href="{{ route('frontend.document', ['document_id' => 2]) }}" class="btn btn-primary"> Show All</a></center>
				</div>

				<div id="tab3" class="tab-grid">
					<div class="col-md-12 line1">
						@if(count($reports) == 0)
					    	 <center><h1>No Document</h1></center>
					    	 <br>
						@else
							@foreach($reports as $report)
								<blockquote>
									<h3>{{ $report->name }}</h3>
								    <p>{{ $report->description }}</p>
								    <footer>{{ $report->date }}</footer>
								    <br>
								    <a href="{{ asset("documents/$report->file") }}" class="btn btn-info" >Download</a>
								</blockquote>
							@endforeach
						@endif
					</div>
					
					<center><a href="{{ route('frontend.document', ['document_id' => 3]) }}" class="btn btn-primary"> Show All</a></center>
				</div>

				<div id="tab4" class="tab-grid">
					<div class="col-md-12 line1">
						@if(count($ppts) == 0)
					    	 <center><h1>No Document</h1></center>
					    	 <br>
						@else
							@foreach($ppts as $ppt)
								<blockquote>
									<h3>{{ $ppt->name }}</h3>
								    <p>{{ $ppt->description }}</p>
								    <footer>{{ $ppt->date }}</footer>
								    <br>
								    <a href="{{ asset("documents/$ppt->file") }}" class="btn btn-info" >Download</a>
								</blockquote>
							@endforeach
						@endif
					</div>
					
					<center><a href="{{ route('frontend.document', ['document_id' => 4]) }}" class="btn btn-primary"> Show All</a></center>
				</div>

				<div id="tab5" class="tab-grid">
					<div class="col-md-12 line1">
						@if(count($tors) == 0)
					    	 <center><h1>No Document</h1></center>
					    	 <br>
						@else
							@foreach($tors as $tor)
								<blockquote>
									<h3>{{ $tor->name }}</h3>
								    <p>{{ $tor->description }}</p>
								    <footer>{{ $tor->date }}</footer>
								    <br>
								    <a href="{{ asset("documents/$tor->file") }}" class="btn btn-info" >Download</a>
								</blockquote>
							@endforeach
						@endif
					</div>
						
					<center><a href="{{ route('frontend.document', ['document_id' => 5]) }}" class="btn btn-primary"> Show All</a></center>
				</div>


			</div>
			</div>
		</div>
		<!--Script-->
		<script src="{{ URL::to('src/frontend/js/jquery-1.11.0.min.js') }}"></script>
		<script src="{{ URL::to('src/frontend/js/myscript.js') }}"> </script>
`		<!--Script-->
	</div>
<!--Responsive-tabs-ends-Here-->

<!--Responsive-tabs-Starts-Here-->
	<div class="project" id="partner">
		<div class="container">
            <div class="project-1 clock wow bounceIn">
                <h3>Indonesia Familly Planning Partners</h3>
                <br>
                <center><a href="{{ route('frontend.partner')}}" class="btn btn-default"> Show All Partners</a></center>
            </div>
        </div>
	</div>
	<!--Responsive-tabs-ends-Here-->

    <div class="contact" id="contact">
		<div class="container">
			<div class="contact-1 clock wow bounceIn">
				<div class="col-md-3 contact-top1">
					<h3>Connect with us</h3>
                    <div class="contact-grid">
                        <a href="{{ URL::to('http://www.bkkbn.go.id/') }}" target="_blank"><img src="{{ URL::to('src/frontend/images/facebook.png') }}" alt="" height="100px"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="{{ URL::to('http://www.bkkbn.go.id/') }}" target="_blank"><img src="{{ URL::to('src/frontend/images/twitter.png') }}" alt="" height="100px"></a>
                        <div class="clearfix"></div>
                    </div>
 				</div>
				<div class="col-md-9 contact-top1">
					<h3>Core Partners</h3>
                    <div class="contact-grid">
                        <a href="{{ URL::to('http://www.bkkbn.go.id/') }}" target="_blank"><img src="{{ URL::to('src/frontend/images/bkkbn-small.png') }}" alt=""></a>&nbsp;&nbsp;

                        <a href="{{ URL::to('http://indonesia.unfpa.org/') }}" target="_blank"><img src="{{ URL::to('src/frontend/images/unfpa-small.png') }}" alt=""></a>&nbsp;&nbsp;
                        <a href="{{ URL::to('https://www.usaid.gov/') }}" target="_blank"><img src="{{ URL::to('src/frontend/images/usaid-small.png') }}" alt=""></a>&nbsp;&nbsp;
                        <div class="clearfix"></div>
                    </div>
 				</div>
                		    
                <div class="clearfix"> </div>
			</div>
		</div>
	</div>
	

	

	<!-- Modal -->
	<div id="myModal1" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Program & Service Delivery</h4>
	      </div>
	      <div class="modal-body">
	        <p>{{ $program->body }}</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>

	  </div>
	</div>

	<!-- Modal -->
	<div id="myModal2" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Financial </h4>
	      </div>
	      <div class="modal-body">
	        <p>{{ $financial->body }}</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>

	  </div>
	</div>

	<!-- Modal -->
	<div id="myModal3" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Policy & Political</h4>
	      </div>
	      <div class="modal-body">
	        <p>{{ $policy->body }}</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>

	  </div>
	</div>

	<!-- Modal -->
	<div id="myModal4" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Objective</h4>
	      </div>
	      <div class="modal-body">
	        <p>{{ $objective->body }}</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>

	  </div>
	</div>

	<!-- Modal -->
	<div id="myModal5" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">All Event</h4>
	      </div>
	      <div class="modal-body">
	        <p>Some text in the modal.</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>

	  </div>
	</div>

@endsection

@section('script')
	<script type="text/javascript">
		var token = "{{ Session::token() }}";
	</script>

@endsection