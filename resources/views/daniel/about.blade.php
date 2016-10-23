@extends('layouts.master')

@section('title', 'Daniel Thee Roperto')

@section('content')

<div class="container">
	<div class="jumbotron">
		<h1>I am a coder</h1>
		<p>
			I guide electrons. I control machines.
		</p>
	</div>
	<article>
		<h3>What else do you want to know?</h3>
		<p>
			Have a look around, maybe you will find something interesting!
		</p>
		<h3>Just ask...</h3>
		<p>
			Feel free to contact me on <a href="mailto:daniel@theeroperto.com">daniel@theeroperto.com</a>
			or find me on:<br />
			<br />
			@foreach ([
						['Facebook', 'facebook', 'https://www.facebook.com/roperto'],
						['GitHub', 'github', 'https://github.com/roperto'],
						['Google+', 'google', 'https://plus.google.com/+DanielTheeRoperto'],
						['LinkedIn', 'linkedin', 'https://www.linkedin.com/in/daniel-thee-roperto-0a960715'],
						['YouTube', 'youtube', 'https://www.youtube.com/channel/UCDmy8uyq_HPUl4_PFuu7YPA/videos?sort=dd&shelf_id=0&view=0'],
					] as $a)
				<a href="{{$a[2]}}" target="_blank" class="large-tooltip"
					data-toggle="tooltip" title="{{$a[0]}}" data-placement="bottom"><img
					src="{{url('images/daniel/about/'.$a[1].'.svg')}}" alt="{{$a[0]}}"
					width="32" height="32" /></a>
			@endforeach
		</p>
	</article>
</div>

@endsection
