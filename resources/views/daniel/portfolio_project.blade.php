<?php use App\Helpers\PhotoSwipeHelper; ?>

@extends('layouts.master')

@section('title', $project->title.' - Portfolio - Daniel Thee Roperto')

@section('content')
	<div class="container portfolio">
		<div class="jumbotron">
			<h1>{{$project->title}}</h1>
			<i>{{$project->summary}}</i><br />
			<small class="pull-right" style="margin-top: 5px; text-align: right;">
				<strong>Started in:</strong><br />
				{{$project->getStartedText()}}
			</small>
		</div>
		
		<?php $technologies = $project->getTechnologiesSummary(); ?>
		@if ($technologies)
			<section>
				<h3>Technologies</h3>
				<p>
					{{$technologies}}
				</p>
			</section>
		@endif

		<section>
			<h3>Objective</h3>
			<p>{{$project->objective}}</p>
		</section>
		
		<section>
			<h3>Responsabilities</h3>
			<p>{{$project->responsabilities}}</p>
		</section>
		
		<?php $features = $project->features; ?>
		@if (count($features) > 0)
			<section>
				<h3>Core Features</h3>
				<ul>
					@foreach ($features as $f1)
						@if ($f1[0])
							<li><strong>{{$f1[0]}}</strong><ul>
						@endif
						
						@foreach ($f1[1] as $f2)
							@if (is_array($f2))
								<li>
									<?php
										list($url, $size) = explode(':', $f2[1]);
										$url = "images/daniel/portfolio/{$project->key}/{$url}";
										echo PhotoSwipeHelper::generateLink($f2[0], $url, $size);
									?>
								</li>
							@else
								<li>{{$f2}}</li>
							@endif
						@endforeach
						
						@if ($f1[0])
							</ul></li>
						@endif
					@endforeach
				</ul>
			</section>
		@endif
		
		<?php $technologies = $project->getTechnologiesSorted(); ?>
		@if (count($technologies) > 0)
			<section>
				<h3>Technology Usage</h3>
				<ul>
					@foreach ($technologies as $tech=>$desc)
						<li><strong>{{$tech}}</strong> {{$desc}}</li>
					@endforeach
				</ul>
			</section>
		@endif
		
		@if (PhotoSwipeHelper::hasGroup())
			<section>
				<h3>Gallery</h3>
				{!! PhotoSwipeHelper::generateLinkGallery('100x75') !!}
			</section>
		@endif
		
		@if ($project->video)
			<section>
				<h3>Video</h3>
				{!! $project->video !!}
			</section>
		@endif
	</div>
@endsection
