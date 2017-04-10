@extends('layouts.frontend-sub')

@section('content')
	<div class="site-content">
        <div class="mdl-grid site-max-width">
            <div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--4dp page-content">
            	<div class="mdl-card__title">
                	<h1 class="mdl-card__title-text">{{ $news->title }}</h1>
            	</div>
            	<div class="mdl-card__media">
              		<img class="article-image" src="{{ asset("documents/news/$news->foto") }}" border="0" alt="Portfolio Page">
              	</div>
            	<div class="mdl-grid site-copy">
	              	<div class="mdl-cell mdl-cell--12-col">
	              		<div class="mdl-cell mdl-cell--10-col mdl-card__supporting-text no-padding ">
	              			<p>{{ $news->date }}</p>
	    					<p>{{ $news->body }}</p>
	    					<br>
	    				</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection