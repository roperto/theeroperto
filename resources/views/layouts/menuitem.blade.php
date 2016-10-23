@if ($item->hasSubitems())
	<li class="dropdown">
		<a href="#"
				class="dropdown-toggle" data-toggle="dropdown" role="button"
				aria-haspopup="true" aria-expanded="false">{{$item->getLongTitle()}} <span class="caret"></span></a>
		<ul class="dropdown-menu">
			@foreach ($item->getSubItems() as $sub)
				@include('layouts.menuitem', ['item'=>$sub,'short'=>$short])
			@endforeach
		</ul>
	</li>
@else
	@if ($item->isSeparator())
		<li role="separator" class="divider"></li>
	@else
		<li><a href="{{ url($item->getUrl()) }}">{{$short ? $item->getShortTitle() : $item->getLongTitle()}}</a></li>
	@endif
@endif
