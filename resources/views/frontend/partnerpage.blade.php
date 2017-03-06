@extends('layouts.frontend')

@section('content')
<div class="mother-grid" id="home">
		<div class="container">
			<div class="header clock wow bounceIn">
				
				<h1><img src="{{ URL::to('src/frontend/images/fp2020-logo.png') }}" width="80px">&nbsp;&nbsp;<a href="#">INDONESIA FAMILY PLANNING 2020</a></h1>
				<div class="nav-top">
					<span class="menu"><img src="{{ URL::to('src/frontend/images/menu-icon.png') }}" alt=""></span>
					<ul class="navgation">
						<li><a class="active" href="{{ route('frontend.index') }}" class="scroll">BACK TO HOME</a></li>
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
	
	<div class="about" id="strategy">
		<div class="container">
			<div class="tabs-box clock wow bounceIn">
			<center><h1><b>Partners</b></h1></center>
			<br>
			<ul class="tabs-menu">
				<li><a href="#tab1">Ministries and Government Institutions</a></li>
				<li><a href="#tab2">Professional Organizations</a></li>
				<li><a href="#tab3">Private Sector</a></li>
				<li><a href="#tab4">NGO/Civil Society Organizations</a></li>
				<li><a href="#tab5">Academia</a></li>
				<li><a href="#tab6">International Development Partners</a></li>
			</ul>
			<div class="clearfix"> </div>

				<div id="tab1" class="tab-grid">
					<div class="col-md-12 line1">
						@if(count($ones) == 0)
					    	 <center>No Partner</center>
						@else
							@foreach($ones as $one)
								<div class="row">
								<div class="col-md-3">
									<img src="{{ URL::to("partner/$one->logo") }}" width="200px">
								</div>
								<div class="col-md-9">
									<table>
										<tr>
											<td><h2>{{ $one->name }}</h2></td>
										</tr>
										<tr>
											<td>{{ $one->website }}</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td colspan="3">{{ $one->narrative }}</td>
										</tr>
									</table>
								</div>
							</div>

							<br><br>
							@endforeach
						@endif
					</div>
				</div>

				<div id="tab2" class="tab-grid">
					<div class="col-md-12 line1">
						@if(count($twos) == 0)
					    	 <center>No Partner</center>
						@else
							@foreach($twos as $two)
								<div class="row">
								<div class="col-md-3">
									<img src="{{ URL::to("partner/$two->logo") }}" width="200px">
								</div>
								<div class="col-md-9">
									<table>
										<tr>
											<td><h2>{{ $two->name }}</h2></td>
										</tr>
										<tr>
											<td>{{ $two->website }}</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td colspan="3">{{ $two->narrative }}</td>
										</tr>
									</table>
								</div>
							</div>

							<br><br>
							@endforeach
						@endif
					</div>
				</div>

				<div id="tab3" class="tab-grid">
					<div class="col-md-12 line1">
						@if(count($threes) == 0)
					    	 <center>No Partner</center>
						@else
							@foreach($threes as $three)
								<div class="row">
								<div class="col-md-3">
									<img src="{{ URL::to("partner/$three->logo") }}" width="200px">
								</div>
								<div class="col-md-9">
									<table>
										<tr>
											<td><h2>{{ $three->name }}</h2></td>
										</tr>
										<tr>
											<td>{{ $three->website }}</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td colspan="3">{{ $three->narrative }}</td>
										</tr>
									</table>
								</div>
							</div>

							<br><br>
							@endforeach
						@endif
					</div>
				</div>

				<div id="tab4" class="tab-grid">
					<div class="col-md-12 line1">
						@if(count($fours) == 0)
					    	 <center>No Partner</center>
						@else
							@foreach($fours as $four)
								<div class="row">
								<div class="col-md-3">
									<img src="{{ URL::to("partner/$four->logo") }}" width="200px">
								</div>
								<div class="col-md-9">
									<table>
										<tr>
											<td><h2>{{ $four->name }}</h2></td>
										</tr>
										<tr>
											<td>{{ $four->website }}</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td colspan="3">{{ $four->narrative }}</td>
										</tr>
									</table>
								</div>
							</div>

							<br><br>
							@endforeach
						@endif
					</div>
				</div>

				<div id="tab5" class="tab-grid">
					<div class="col-md-12 line1">
						@if(count($fives) == 0)
					    	 <center>No Partner</center>
						@else
							@foreach($fives as $five)
								<div class="row">
								<div class="col-md-3">
									<img src="{{ URL::to("partner/$five->logo") }}" width="200px">
								</div>
								<div class="col-md-9">
									<table>
										<tr>
											<td><h2>{{ $five->name }}</h2></td>
										</tr>
										<tr>
											<td>{{ $five->website }}</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td colspan="3">{{ $five->narrative }}</td>
										</tr>
									</table>
								</div>
							</div>

							<br><br>
							@endforeach
						@endif
					</div>
				</div>

				<div id="tab6" class="tab-grid">
					<div class="col-md-12 line1">
						@if(count($sixs) == 0)
					    	 <center>No Partner</center>
						@else
							@foreach($sixs as $one)
								<div class="row">
								<div class="col-md-3">
									<img src="{{ URL::to("partner/$one->logo") }}" width="200px">
								</div>
								<div class="col-md-9">
									<table>
										<tr>
											<td><h2>{{ $one->name }}</h2></td>
										</tr>
										<tr>
											<td>{{ $one->website }}</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td colspan="3">{{ $one->narrative }}</td>
										</tr>
									</table>
								</div>
							</div>

							<br><br>
							@endforeach
						@endif
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



	</div>
				<div class="contact" id="contact">
		<div class="container">
			<div class="contact-1 clock wow bounceIn">
				<div class="col-md-3 contact-top1">
					<h3>Connect with us</h3>
                    <div class="contact-grid">
                        <a href="#" target="_blank"><img src="{{ URL::to('src/frontend/images/facebook.png') }}" alt="" height="70px"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="#" target="_blank"><img src="{{ URL::to('src/frontend/images/twitter.png') }}" alt="" height="70px"></a>
                        <div class="clearfix"></div>
                    </div>
 				</div>
				<div class="col-md-9 contact-top1">
					<h3>Focal Points</h3>
                    <div class="contact-grid">
                        <a href="{{ URL::to('http://www.bkkbn.go.id/') }}" target="_blank"><img src="{{ URL::to('src/frontend/images/bkkbn-small.png') }}" alt="" ></a>&nbsp;&nbsp;

                        <a href="{{ URL::to('http://indonesia.unfpa.org/') }}" target="_blank"><img src="{{ URL::to('src/frontend/images/unfpa-small.png') }}" alt=""></a>&nbsp;&nbsp;
                        <a href="{{ URL::to('https://www.usaid.gov/') }}" target="_blank"><img src="{{ URL::to('src/frontend/images/usaid-small.png') }}" alt="" height="70"></a>&nbsp;&nbsp;
                        <div class="clearfix"></div>
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
	

@endsection

@section('script')
	<script type="text/javascript">
		var token = "{{ Session::token() }}";
	</script>

@endsection