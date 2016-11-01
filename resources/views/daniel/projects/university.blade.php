@extends('layouts.master-submenu')

<?php
$core['submenu'] = [];
?>

@section('title')
    {{$project->getTitle()}} - Projects - Daniel Thee Roperto
@endsection
