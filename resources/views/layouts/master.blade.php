<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-3.3.7/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theeroperto.css') }}">
    <script type="text/javascript" src="{{ asset('assets/jquery-3.1.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/bootstrap-3.3.7/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/theeroperto.js') }}"></script>
    @yield('headers')
    @if (App::environment('production'))
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-81142113-1', 'auto');
            ga('send', 'pageview');
        </script>
    @endif
    {!! PhotoSwipeHelper::generateIncludes() !!}
</head>

<body style="padding-top: 60px;" @yield('body') >
{!! PhotoSwipeHelper::generateHTML() !!}
@include('layouts.mainmenu')

@yield('content')
</body>
</html>
