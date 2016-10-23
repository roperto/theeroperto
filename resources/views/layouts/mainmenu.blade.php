<nav class="navbar navbar-inverse navbar-fixed-top check-active">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="btn-group" style="margin: 7px 7px 7px 0;">
				<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Thee Roperto <span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<li><a href="/">Thee Roperto</a></li>
					<li role="separator" class="divider"></li>
					@foreach ($theeroperto['names'] as $p)
						<li><a href="{{url($p)}}">{{$p}}</a></li>
					@endforeach
				</ul>
			</div>
		</div>
		<div class="collapse navbar-collapse" id="main-navbar-collapse">
			<ul class="nav navbar-nav">
				@foreach ($theeroperto['menu'] as $item)
					@include('layouts.menuitem', ['item'=>$item,'short'=>false])
				@endforeach
			</ul>
		</div>
	</div>
</nav>
