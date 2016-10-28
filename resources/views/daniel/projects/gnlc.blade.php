@extends('layouts.master-submenu')

<?php
	use App\MenuItem;

	$core['submenu'] = [
		MenuItem::create('Home', 'Overview', '/Daniel/Projects/GNLC'),
		MenuItem::create('Use', 'How to use', '/Daniel/Projects/GNLC/HowToUse'),
		MenuItem::create('Get', 'Downloads', '/Daniel/Projects/GNLC/Downloads'),
		MenuItem::create('FW', 'Firmware', '/Daniel/Projects/GNLC/Firmware'),
		MenuItem::create('HW', 'Hardware', '/Daniel/Projects/GNLC/Hardware'),
		MenuItem::create('SW', 'Software', '/Daniel/Projects/GNLC/Software'),
		MenuItem::create('DIY', '#', [
			MenuItem::create('Overview', '/Daniel/Projects/GNLC/DIY'),
			MenuItem::create('Track', '/Daniel/Projects/GNLC/DIY-PowerTrack'),
			MenuItem::create('Cables', '/Daniel/Projects/GNLC/DIY-CablesAndAdapters'),
			MenuItem::create('Sensors', '/Daniel/Projects/GNLC/DIY-SensorsBoard'),
			MenuItem::create('Controller', '/Daniel/Projects/GNLC/DIY-Controller'),
		]),
		MenuItem::create('Log', '#', [
			MenuItem::create('Overview', '/Daniel/Projects/GNLC/History'),
			MenuItem::create('v0.0: LDR + LPT', '/Daniel/Projects/GNLC/History-v00'),
			MenuItem::create('v0.1: LDR + USB', '/Daniel/Projects/GNLC/History-v01'),
			MenuItem::create('v0.2: IR + USB', '/Daniel/Projects/GNLC/History-v02'),
			MenuItem::create('v0.3: REED + USB', '/Daniel/Projects/GNLC/History-v03'),
		]),
	];
?>

@section('title')
	{{$project->title}} - Projects - Daniel Thee Roperto
@endsection
