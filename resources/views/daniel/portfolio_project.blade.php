@extends('layouts.master')

@section('title', $project->getTitle().' - Portfolio - Daniel Thee Roperto')

@section('content')
	<div class="container portfolio">
		<div class="jumbotron">
			<h1>{{$project->getTitle()}}</h1>
			<i>{{$project->getSummary()}}</i><br />
			<small class="pull-right" style="margin-top: 5px; text-align: right;">
				<strong>Started in:</strong><br />
				{{$project->getStarted()}}
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
			<p>{{$project->getObjective()}}</p>
		</section>
		
		<section>
			<h3>Responsibilities</h3>
			<p>{{$project->getResponsibilities()}}</p>
		</section>
		
		<?php $groups = $project->getFeatureGroups(); ?>
		@if (count($groups) > 0)
			<section>
				<h3>Core Features</h3>
				<ul>
					@foreach ($groups as $group)
						@if ($group->getTitle() != '')
							<li>
                                <strong>{{$group->getTitle()}}</strong>
                                <ul>
						@endif
						
						@foreach ($group->getFeatures() as $feature)
							@if ($feature->hasImage())
								<li>
									<?php
										$url = "images/daniel/portfolio/{$project->getKey()}/{$feature->getImageFile()}";
										echo PhotoSwipeHelper::generateLink($feature->getTitle(), $url, $feature->getSize());
									?>
								</li>
							@else
								<li>{{$feature->getTitle()}}</li>
							@endif
						@endforeach
						
						@if ($group->getTitle() != '')
						    	</ul>
                            </li>
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
		
		@if ($project->getVideoHTML())
			<section>
				<h3>Video</h3>
				{!! $project->getVideoHTML() !!}
			</section>
		@endif
	</div>
@endsection
