<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thee Roperto</title>
</head>
<body>
Which site would you like to visit?

@foreach($theeroperto['names'] as $who)
    <a href="{{url($who)}}"><img src="{{url('img/home/'.strtolower($who).'.png')}}"
                                 alt="{{$who}}" title="{{$who}}"/></a>
@endforeach
</body>
</html>
