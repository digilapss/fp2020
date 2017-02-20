@extends('layouts.frontend')

@section('content')
	<div class="mother-grid" id="home">
		<div class="container">
			<div class="header clock wow bounceIn">
				<h1><a href="index.html">Family Planning 2020</a></h1>
				<div class="nav-top">
					<span class="menu"><img src="{{ URL::to('src/frontend/images/menu-icon.png') }}" alt=""></span>
					<ul class="navgation">
						<li><a class="active" href="#home" class="scroll">HOME</a></li>
						<li><a href="#about" class="scroll">ABOUT</a></li>
						<li><a href="#services" class="scroll">COMMITMENT</a></li>
						<li><a href="#project" class="scroll">DOCUMENT</a></li>
						<li><a href="#project" class="scroll">STRATEGY</a></li>
						<li><a href="#project" class="scroll">PRODUCT</a></li>
						<li><a href="#project" class="scroll">PICTURE</a></li>
						<li><a href="#contact" class="scroll">CONTACT</a></li>
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
							<h2>IPSUM DOLOR SIT AMET LAT</h2>
	                        <h5>Allquam tincidunt mauris cu risus</h5>
	  	    			</li>
	 	    			<li>
							<h2>IPSUM DOLOR SIT AMET LAT</h2>
							<h5>Allquam tincidunt mauris cu risus</h5>
						</li>
						<li>
							<h2>IPSUM DOLOR SIT AMET LAT</h2>
							<h5>Allquam tincidunt mauris cu risus</h5>
						</li>
						<li>
							<h2>IPSUM DOLOR SIT AMET LAT</h2>
							<h5>Allquam tincidunt mauris cu risus</h5>
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
							<a href="#">MORE</a>
						</div>
						<div class="clearfix"> </div>
					</div>                                                      
				</div>
				<div class="col-md-3">
					<div class="content-grids">
						<div class="content-right">
							<h3>Financial <br> &nbsp;</h3>
							<P>The government commits to maintaining its investment in finances for family planning programs, which has ...</P>
							<a href="#">MORE</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="content-grids">
						<div class="content-right">
							<h3>Policy & Political <br> &nbsp;</h3>
							<P>Indonesia is currently developing a national family planning and population strategy to improve ...</P>
							<a href="#">MORE</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-3">
						<div class="content-grids">
							<div class="content-right">
								<h3>Objective <br> &nbsp;</h3>
                                <P>Over half of Indonesia's women of reproductive age are using contraception to plan their families ...</P>
                                <a href="#">MORE</a>
                            </div>
						<div class="clearfix"> </div>
						</div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

    <div class="project">
        <div class="container">
            <div class="project-1 clock wow bounceIn">
                <h3>MORBI IN SEM LOREM PLACERAT</h3>
                <P>EUISMOD IN PHARETRA ULTRICIES CRASCONSEQUAT VAVIMUS SUP</P>
                <form>
			        <input type="text" size="30px"  value="cresent sbsum..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'cresent sbsum...';}">

                    <input type="submit" value="EGESTE">
                </form>
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
				<li><a href="#tab4"><img src="src/frontend/images/f.png" alt="">Strategy</a></li>
				<li><a href="#tab5"><img src="src/frontend/images/d.png" alt="">Report</a></li>
			</ul>
			<div class="clearfix"> </div>
			<div class="tab-grids">
				<div id="tab1" class="tab-grid">
					<div class="col-md-6 line1">
						<img src="src/frontend/images/port1.png" alt="">
						<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis Gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis lorem ipsum dolor.</p>
					    </div>
					 <div class="col-md-6 line2">   
				                <img src="src/frontend/images/port2.png" alt="">
						<p>Lorem egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis Gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper at felis lorem ipsum dolor.</p>
					</div>
                                <div class="clearfix"> </div>
				</div>
				<div id="tab2" class="tab-grid">
					<div class="col-md-6 line1">
						<img src="src/frontend/images/car.png" alt="">
						<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis Gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis lorem ipsum dolor.</p>
					    </div>
					 <div class="col-md-6 line2">   
				                <img src="src/frontend/images/grl.png" alt="">
						<p>Lorem egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis Gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper at felis lorem ipsum dolor.</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
				<div id="tab3" class="tab-grid">
					<div class="col-md-6 line1">
						<img src="src/frontend/images/boy7.png" alt="">
						<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis Gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis lorem ipsum dolor.</p>
					    </div>
					 <div class="col-md-6 line2">   
				                <img src="src/frontend/images/boy9.png" alt="">
						<p>Lorem egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis Gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper at felis lorem ipsum dolor.</p>
					</div>
					 <div class="clearfix"> </div>
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
	<div class="responsive-tabs" id="project2">
		<div class="container">
			<div class="tabs-box clock wow bounceIn">
			<center><h1><b>Strategy Document</b></h1></center>
			<br>
			<div class="clearfix"> </div>
			<div class="tab-grids">
				<div class="tab-grid">
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
		</div>

		<script type="text/javascript" src="{{ URL::to('src/backend/assets/js/vendor.js') }}"></script>
 		<script type="text/javascript" src="{{ URL::to('src/backend/assets/js/app.js') }}"></script>
		
	</div>
	<!--Responsive-tabs-ends-Here-->

    <div class="contact" id="contact">
		<div class="container">
			<div class="contact-1 clock wow bounceIn">
				<div class="col-md-3 contact-top1">
											    
                                                                                             
					<div class="clearfix"> </div>
				</div>
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

@endsection

@section('script')
	<script type="text/javascript">
		var token = "{{ Session::token() }}";
	</script>

@endsection