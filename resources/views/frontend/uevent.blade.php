@extends('layouts.frontend-sub')

@section('content')
	<section class="section--center mdl-grid site-max-width">
		<h2>All Events</h2>
	</section>

	<section class="section--center mdl-grid site-max-width">
	@if(count($uevents) == 0)
		No Upcoming Event
	@else
		@foreach($uevents as $uevent)
			
			  <div class="mdl-card mdl-cell mdl-cell--12-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone  mdl-shadow--4dp">
			    <div class="mdl-card__title">
			        <h2 class="mdl-card__title-text">{{ $uevent->title }}</h2>
			    </div>
			    <div class="mdl-card__supporting-text">
			    	{{ $uevent->date }}
			      	
			    </div>
			    <div class="mdl-card__supporting-text">
			      <p>{{ $uevent->body }}</p>
			    </div>
			  </div>
			
		@endforeach
	@endif
	</section>
	
	<center>
		<h4>
			<div class="pagination">
				@if($uevents->currentPage() !== 1)
					<a href="{{ $uevents->previousPageUrl() }}">&laquo;</a>
				@endif
				@if($uevents->currentPage() !== $uevents->lastPage() && $uevents->hasPages())
					<a href="{{ $uevents->nextPageUrl() }}">&raquo;</a>
				@endif
			</div>

		<h4>
	</center>

@endsection