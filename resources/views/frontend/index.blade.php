@extends('layouts.frontend')

@section('content')
	<div class="mother-grid" id="home">
		<div class="container">
			<div class="header clock wow bounceIn">
				<h1><a href="index.html">FAMILY PLANNING 2020</a></h1>
				<div class="nav-top">
					<span class="menu"><img src="{{ URL::to('src/frontend/images/menu-icon.png') }}" alt=""></span>
					<ul class="navgation">
						<li><a class="active" href="#home" class="scroll">HOME</a></li>
						<li><a href="#about" class="scroll">ABOUT</a></li>
						<li><a href="#services" class="scroll">COMMITMENT</a></li>
						<li><a href="#event" class="scroll">EVENT</a></li>
						<li><a href="#project" class="scroll">DOCUMENT</a></li>
						<li><a href="#strategy" class="scroll">STRATEGY</a></li>
						<li><a href="#project" class="scroll">PRODUCT</a></li>
						<li><a href="#project" class="scroll">PICTURE</a></li>
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
						<h2>COUNTRY DATA AND RESOURCES </h2>
						<br>
						<h3>AT YOUR FINGERTIPS</h3>
						<a href="#">MORE INFO</a>
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
							<P>Indonesia will include post-partum family planning services as part of its national childbirth insurance ... </P>
							<button class="btn btn-info" data-toggle="modal" data-target="#myModal1">MORE</button>
						</div>
						<div class="clearfix"> </div>
					</div>                                                      
				</div>
				<div class="col-md-3">
					<div class="content-grids">
						<div class="content-right">
							<h3>Financial <br> &nbsp;</h3>
							<P>The government commits to maintaining its investment in finances for family planning programs, which has ...</P>
							<button class="btn btn-info" data-toggle="modal" data-target="#myModal2">MORE</button>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="content-grids">
						<div class="content-right">
							<h3>Policy & Political <br> &nbsp;</h3>
							<P>Indonesia is currently developing a national family planning and population strategy to improve ...</P>
							<button class="btn btn-info" data-toggle="modal" data-target="#myModal3">MORE</button>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-3">
						<div class="content-grids">
							<div class="content-right">
								<h3>Objective <br> &nbsp;</h3>
                                <P>Over half of Indonesia's women of reproductive age are using contraception to plan their families ...</P>
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
                <button class="btn btn-default" data-toggle="modal" data-target="#myModal5">View All Event</button>
            </div>
        </div>
    </div>
    
	<!--Responsive-tabs-Starts-Here-->
	<div class="about" id="project">
		<div class="container">
			<div class="tabs-box clock wow bounceIn">
			<center><h1><b>Document</b></h1></center>
			<br>
			<ul class="tabs-menu">
				<li><a href="#tab1"><img src="src/frontend/images/f.png" alt="">TOR</a></li>
				<li><a href="#tab2"><img src="src/frontend/images/d.png" alt="">Workplans</a></li>
				<li><a href="#tab3"><img src="src/frontend/images/u.png" alt="">Minutes of Meetings</a></li>
				<li><a href="#tab4"><img src="src/frontend/images/f.png" alt="">Power Point</a></li>
				<li><a href="#tab5"><img src="src/frontend/images/d.png" alt="">Report</a></li>
			</ul>
			<div class="clearfix"> </div>

			<div class="tab-grids">

				<div id="tab1" class="tab-grid">
					<div class="col-md-12 line1">
						<blockquote>
							<h3>TOR 1</h3>
						    <p>For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
						    <footer>Unfpa | January 1, 2016</footer>
						    <br>
						    <button class="btn btn-info">Download</button>
						</blockquote>
					</div>
					<div class="col-md-12 line1">
						<blockquote>
							<h3>TOR 2</h3>
						    <p>For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
						    <footer>Unfpa | January 1, 2016</footer>
						    <br>
						    <button class="btn btn-info">Download</button>
						</blockquote>
					</div>
					<div class="clearfix"></div>
					<div align="right"> 
						<button class="btn btn-info btn-block">View All</button>
					</div>
				</div>

				<div id="tab2" class="tab-grid">
					<div class="col-md-12 line1">
						<blockquote>
							<h3>Workplan 1</h3>
						    <p>For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
						    <footer>Unfpa | January 1, 2016</footer>
						    <br>
						    <button class="btn btn-info">Download</button>
						</blockquote>
					</div>
					<div class="col-md-12 line1">
						<blockquote>
							<h3>Workplan 2</h3>
						    <p>For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
						    <footer>Unfpa | January 1, 2016</footer>
						    <br>
						    <button class="btn btn-info">Download</button>
						</blockquote>
					</div>
					<div class="clearfix"></div>
					<div align="right"> 
						<button class="btn btn-info btn-block">View All</button>
					</div>
				</div>

				<div id="tab3" class="tab-grid">
					<div class="col-md-12 line1">
						<blockquote>
							<h3>MoM 1</h3>
						    <p>For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
						    <footer>Unfpa | January 1, 2016</footer>
						    <br>
						    <button class="btn btn-info">Download</button>
						</blockquote>
					</div>
					<div class="col-md-12 line1">
						<blockquote>
							<h3>MoM 2</h3>
						    <p>For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
						    <footer>Unfpa | January 1, 2016</footer>
						    <br>
						    <button class="btn btn-info">Download</button>
						</blockquote>
					</div>
					<div class="clearfix"></div>
					<div align="right"> 
						<button class="btn btn-info btn-block">View All</button>
					</div>
				</div>

				<div id="tab4" class="tab-grid">
					<div class="col-md-12 line1">
						<blockquote>
							<h3>Power Point 1</h3>
						    <p>For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
						    <footer>Unfpa | January 1, 2016</footer>
						    <br>
						    <button class="btn btn-info">Download</button>
						</blockquote>
					</div>
					<div class="col-md-12 line1">
						<blockquote>
							<h3>Power Point 2</h3>
						    <p>For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
						    <footer>Unfpa | January 1, 2016</footer>
						    <br>
						    <button class="btn btn-info">Download</button>
						</blockquote>
					</div>
					<div class="clearfix"></div>
					<div align="right"> 
						<button class="btn btn-info btn-block">View All</button>
					</div>
				</div>

				<div id="tab5" class="tab-grid">
					<div class="col-md-12 line1">
						<blockquote>
							<h3>Report 1</h3>
						    <p>For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
						    <footer>Unfpa | January 1, 2016</footer>
						    <br>
						    <button class="btn btn-info">Download</button>
						</blockquote>
					</div>
					<div class="col-md-12 line1">
						<blockquote>
							<h3>Report 2</h3>
						    <p>For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
						    <footer>Unfpa | January 1, 2016</footer>
						    <br>
						    <button class="btn btn-info">Download</button>
						</blockquote>
					</div>
					<div class="clearfix"></div>
					<div align="right"> 
						<button class="btn btn-info btn-block">View All</button>
					</div>
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
	<div class="responsive-tabs" id="strategy">
		<div class="container">
			<div class="tabs-box clock wow bounceIn">
			<div class="card">
				<center><h1><b>Strategy Document</b></h1></center>
				<br>
				<div class="clearfix"> </div>
				<div class="col-md-12">
					<table class="datatable table table-striped primary" cellspacing="0" width="100%">
						<thead>
							<tr>
							    <th>Title</th>
							    <th>Date</th>
							    <th>Action</th>
						    </tr>
						</thead>
						<tbody>
						    <tr>
						    	<td>Document 1</td>
						    	<td>Date 2</td>
						    	<td>
						    		<a href="" class="btn btn-xs btn-primary">
										Download
									</a>
								</td>
							</tr>
							<tr>
						    	<td>Document 3</td>
						    	<td>Date 4</td>
						    	<td>
						    		<a href="" class="btn btn-xs btn-primary">
										Download
									</a>
								</td>
							</tr>
							<tr>
						    	<td>Document 5</td>
						    	<td>Date 6</td>
						    	<td>
						    		<a href="" class="btn btn-xs btn-primary">
										Download
									</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
		</div>

		<script type="text/javascript" src="{{ URL::to('src/backend/assets/js/vendor.js') }}"></script>
 		<script type="text/javascript" src="{{ URL::to('src/backend/assets/js/app.js') }}"></script>
		
	</div>
	<!--Responsive-tabs-ends-Here-->

    <div class="contact" id="contact">
		<div class="container">
			<div class="contact-1 clock wow bounceIn">
				<div class="col-md-6 contact-top1">
					<h3>QUICK CONTACT</h3>
                    <div class="contact-grid">
                        <div class="contact-left">
                     		<img src="{{ URL::to('src/frontend/images/bkkbn-small.png') }}" alt="">
                     		<br>
                        </div>
                        <div class="contact-right">
                            <img src="{{ URL::to('src/frontend/images/unfpa-small.png') }}" alt="">
                        </div>
                        <div class="clearfix"></div>
                    </div>
 				</div>
                <div class="col-md-6 contact-top3">
                    <h3>&nbsp;</h3>
                    <div class="contact-grid">
	                   	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d30912.73175219394!2d79.98639619999999!3d14.4218904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1410591500477" width="600" height="450" frameborder="0" style="border:0"> </iframe>
	                    <h4>Address</h4>
	                    <p>Building name, some street name, some city name, country</p>
	                    <a href="mailto:info@example.com">info@sitename.com  /  (000)  888 888 8888</a>
                    </div>
                </div>				    
                <div class="clearfix"> </div>
			</div>
		</div>
	</div>
	

	<div class="footer">
		<div class="container">
			<div class="footer-text">
				<p> &copy 2014 Template by <a href="http://w3layouts.com/">w3layouts</a></p>
			</div>
		</div>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
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
	        <p>Some text in the modal.</p>
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
	        <p>Some text in the modal.</p>
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
	        <p>Some text in the modal.</p>
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
	        <p>Some text in the modal.</p>
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