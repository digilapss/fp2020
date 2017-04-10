@extends('layouts.frontend-sub')

@section('content')
	<section class="section--center mdl-grid site-max-width">
		<h2>News and Updates</h2>
	</section>

	<section class="section--center mdl-grid site-max-width">
	@if(count($news) == 0)
		No News
	@else
		@foreach($news as $new)
			
			  <div class="mdl-card mdl-cell mdl-cell--12-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone  mdl-shadow--4dp">
			    <div class="mdl-card__title">
			        <h2 class="mdl-card__title-text">{{ $new->title }}</h2>
			    </div>
			    <div class="mdl-card__supporting-text">
			    	{{ $new->date }} 
			    </div>
			    <div class="mdl-card__supporting-text">
			      <p>{{ $new->body }}</p>
			    </div>
			    <div class="mdl-card__actions  mdl-card--border">
                    <a class="mdl-button mdl-button--raised mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="{{ route('frontend.news.single', ['news_id' => $new->id]) }}">Read More</a>
                </div>
			  </div>
			
		@endforeach
	@endif
	</section>
	
	<center>
		<h4>
			<div class="pagination">
				@if($news->currentPage() !== 1)
					<a href="{{ $news->previousPageUrl() }}">&laquo;</a>
				@endif
				@if($news->currentPage() !== $news->lastPage() && $news->hasPages())
					<a href="{{ $news->nextPageUrl() }}">&raquo;</a>
				@endif
			</div>

		<h4>
	</center>

@endsection