@extends('daniel.projects.gnlc')

@section('content-submenu')
	<h1>Developer Log</h1>
	<h3>Version 0.2: IR sensors + USB port (Arduino)</h3>
	<p>
		Because of some problems with the LDR sensores in 
		<a href="/Daniel/Projects/GNLC/History-v01">version 0.1</a>, in August/2011
		I decided to make a prototype with IR (infrared) sensors. The idea is to put an IR emitter
		and a IR phototransistor that, analog to the LDR system, identifies when car passes the sensor.
	</p>
	{!! PhotoSwipeHelper::generatePictures(
		'60x45', '/images/daniel/projects/GNLC/v02/', [
			['ir-emitter-receiver', 'Phototransistors, photodiodes and IR LEDs.', '2277x1708'],
			['sensor-track-ir-1', 'IR Sensor Track - top view.', '2592x1944'],
			['sensor-track-ir-2', 'IR Sensor Track - bottom view.', '2592x1944'],
			['sensor-track-ir-3', 'Close up on phototransistors.', '2592x1944'],
			['sensor-track-ir-4', 'IR Sensore Track with emitters.', '2592x1944'],
	]) !!}
	<p>
		In this project I changed the power, track and accelerator connectors by the P4 component,
		which helps any future changes in the power supply model without having to
		cut and patch wires together. Since I've changed all my slot cars' power supplies plugs,
		I made a small board to connect the track, power and accelerator together without the race
		controller hardware -- to change the track direction, just invert the connectors on the tips.
	</p>
	{!! PhotoSwipeHelper::generatePictures(
		'60x45', '/images/daniel/projects/GNLC/v02/', [
			['plugs-p4-1', 'P4 connectors.', '2592x1944'],
			['plugs-p4-2', 'Connection Board: connects the power, track and accelerator without using the requiring a relay board.', '2592x1944'],
			['track-power-top', 'Power Track - top view.', '2592x1944'],
			['track-power-bottom', 'Power Track - bottom view.', '2592x1944'],
			['power-board-top', 'Relay Board (20/august/2011) - top view.', '2592x1944'],
			['power-board-bottom', 'Relay Board (20/august/2011) - bottom view.', '2592x1944'],
	]) !!}
	<p>
		Implementing the infrared sensors was relatively simple, even the Arduino code itself got
		simpler, because the IR sensors output a clean on-off signal, without needing to calibrate
		thresholds all the time. With the LDRs, it was required to keep measuring the
		light and calibrating it according to the minimuns and maximuns. On the con side, aligning
		the emitter and the sensor is not trivial, since we cannot see the IR light with naked eye.
	</p>
	<p>
		In my opinion the alignment problem is nothing compared to the benefits: the number of
		invalid readings plummeted even with vibrations or changes in room lighting. If the car
		hits the emitter and the alignment is completely lost, then we will have problems, that is why
		it is very important to properly fixate the emitters and put in sections less prone to accidents.
	</p>
	{!! PhotoSwipeHelper::generatePictures(
		'60x45', '/images/daniel/projects/GNLC/v02/', [
			['track-ir', 'Track with sensors and emitters assembled.', '1944x2592'],
			['track-ir-assembly-1', 'Suggestion of assembling the IR emitters.', '1024x768'],
			['track-ir-assembly-2', 'Notice the IR LED on, it appears as a dim light in my camera because it has no night mode.', '1024x768'],
	]) !!}
	<p>
		PS.: To see the IR light, try using an old cheap camera (without IR filter) or a newer camera
		with night vision (use night vision mode). In the software I created, I made a debug mode
		to check if the sensor is aligned, which was good enough to properly align without seeing it.
	</p>
	<p>
		Check also the development of <a href="/Daniel/Projects/GNLC/History-v03">version 0.3</a>, 
		where I used reed (magnetic) switches underneath the track so no light bridge or 
		IR emitter is needed anymore.
	</p>
@endsection
