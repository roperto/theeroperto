@extends('layouts.master')

@section('title', 'Portfolio - Daniel Thee Roperto')

@section('content')

<div class="container">
	<h1>Projects</h1>
	<div class="row">
		@foreach ($projects as $p)
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3" style="padding: 0px;">
				<a style="
					display: block;
					border: 1px solid black;
					border-radius: 5px;
					cursor: hand;
					margin: 5px;
					padding: 5px;
					cursor: pointer;
					color: inherit;
						" href="/Daniel/Projects/{{$p->getKey()}}">
					<div style="text-align: center;">
						<img src="/images/daniel/projects/{{$p->getKey()}}/cover.png"
							style="border: 1px solid gray; border-radius:5px; margin-bottom: 5px;"
							width="230" height="150" />
					</div>
					<strong>{{$p->getTitle()}}</strong>
					<div style="padding: 5px 20px; text-align: justify; min-height: 75px;">
						<i>{{$p->getSummary()}}</i>
					</div>
				</a>
			</div>
		@endforeach
	</div>
</div>

@endsection
