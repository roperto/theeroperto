@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<nav class="col-xs-12 visible-xs check-active">
				<ul class="nav nav-tabs">
					@foreach ($core['submenu'] as $item)
						@include('layouts.menuitem', ['item'=>$item, 'short'=>true])
					@endforeach
				</ul>
			</nav>
		</div>
	
		<div class="row">
			<article class="col-xs-12 col-sm-10">
				@yield('content-submenu')
			</article>
			
			<nav class="hidden-xs col-xs-1 col-sm-2 check-active">
				<ul class="nav nav-pills nav-stacked">
					@foreach ($core['submenu'] as $item)
						@include('layouts.menuitem', ['item'=>$item, 'short'=>false])
					@endforeach
				</ul>
			</nav>
		</div>
	</div>
@endsection