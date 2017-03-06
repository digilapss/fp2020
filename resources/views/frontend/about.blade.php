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

					<button class="btn btn-info btn-block btn-lg">{{ $abouts->name }}</button>
					<br>
					<p>{{ $abouts->description }}</p>
					<br>
					@if($abouts->id == 2)
						<ul>
							<li> 
								<b>{{ $group->name }}</b> : {{ $group->role }} &nbsp;&nbsp;&nbsp;<a href="{{ route('frontend.group', ['group_id' => $group->id]) }}"><i>More Info</i></a>

							</li>
							<li> <b>3 Working Group</b> 
								<ul>
									<li>{{ $wg1->name }} &nbsp;&nbsp;&nbsp; <a href="{{ route('frontend.group', ['group_id' => $wg1->id]) }}"><i>More Info</i></a>
</li>
									<li>{{ $wg2->name }} &nbsp;&nbsp;&nbsp; <a href="{{ route('frontend.group', ['group_id' => $wg2->id]) }}"><i>More Info</i></a>
</li>
									<li>{{ $wg3->name }} &nbsp;&nbsp;&nbsp; <a href="{{ route('frontend.group', ['group_id' => $wg3->id]) }}"><i>More Info</i></a>
</li>
								</ul>

							</li>
						</ul>
					@endif
		</div>
	</div>
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