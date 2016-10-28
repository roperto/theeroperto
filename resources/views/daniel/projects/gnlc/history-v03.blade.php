@extends('daniel.projects.gnlc')

@section('content-submenu')
	<h1>Developer Log</h1>
	<h3>Version 0.3: REED switches + USB port (Arduino)</h3>
	<p>
		Even though the <a href="/Daniel/Projects/GNLC/History-v02">version 0.2</a> system with IR sensors was working,
		in October/2011
		I decided to further improve the project in two aspects:
		assembly of the track and assembly of the equipment.
		In this project I also added the race startup lights; however, I never really used those lights,
		only using the computer to launch the race.
	</p>
	<p>
		At first I was not happy with the way to assemble the track, I needed a better way to detect laps
		without needing a light bridge or something similar. Reading online informations about similar
		projects, I found out some people using switches triggered by magnetic field: the reed switches.
	</p>
	{!! PhotoSwipeHelper::generatePictures(
		'60x45', '/images/daniel/projects/GNLC/v03/', [
			['component-reed', 'Reed switches.', '2592x1944'],
			['sensor-track-reed-overview', 'Track with the reed switches glued on it.', '2592x1944'],
			['sensor-track-reed-closeup', 'Track with the reed switches glued on it.', '2592x1944'],
	]) !!}
	<p>
		The first tests proven excellent results; however, I noticed an issue when assembling the track:
		the switches are inside a small glass capsule with very delicate terminals inside and, probably
		because I am an ogre, I broke half of the sensors I tried to assemble: because of overheating
		when soldering, when gluing or maybe when I packed them.
	</p>
	<p>
		The first issue I solved with a simple idea: instead of gluing them into the track, I made
		a small board with them soldered on it and just put it underneath the track when needed.
		The soldering this way is much quicker, there is no need to use hot glue and it is much easier
		to safely pack it.
	</p>
	{!! PhotoSwipeHelper::generatePictures(
		'60x45', '/images/daniel/projects/GNLC/v03/', [
			['sensor-reed-1', 'Sensor board to put underneath the track.', '2592x1944'],
			['sensor-reed-2', 'RJ-11 plug used to connect the sensors to the controller.', '2592x1944'],
			['sensor-reed-3', 'Sensors board under the track, notice that this board is for 4 lanes not only 2.', '2592x1944'],
	]) !!}
	<p>
		Another issue with reed switches is that some old collection cars' do not have a proper
		magnets to hold them on the track (my father has some very old cars) and, in that case, there
		was not much that I could do. In any case, the collection cars' do not participate in our
		championships, all they can do is watch from afar.
	</p>
	{!! PhotoSwipeHelper::generatePictures(
		'60x45', '/images/daniel/projects/GNLC/v03/', [
			['collection-car-01', 'Under an old car without magnets - courtesy of <a href="mailto:afonso@roperto.net">Afonso</a>.', '553x415'],
			['collection-car-02', 'Collection cars\'s - courtesy of <a href="mailto:afonso@roperto.net">Afonso</a>.', '1600x1067'],
			['collection-car-03', 'Collection cars\'s - courtesy of <a href="mailto:afonso@roperto.net">Afonso</a>.', '1600x1200'],
			['collection-car-04', 'Collection cars\'s - courtesy of <a href="mailto:afonso@roperto.net">Afonso</a>.', '570x608'],
	]) !!}
	<p>
		Using the same idea of the sensors board to put under the track, I updated the
		power track by soldering the wires to a board with P4 connectors. In this way I believed
		to be a good solution to make the track assembly easier.
	</p>
	{!! PhotoSwipeHelper::generatePictures(
		'60x45', '/images/daniel/projects/GNLC/v03/', [
			['track-power-p4-bottom-1', 'Power board with P4 connectors.', '2592x1944'],
			['track-power-p4-bottom-2', 'Power board with P4 connectors.', '2592x1944'],
			['track-power-p4-top', 'Power board with P4 connectors - top view.', '2592x1944'],
			['track-power-p4-reed-1', 'Track with power board and sensors board.', '2592x1944'],
			['track-power-p4-reed-2', 'Track with power board and sensors board.', '2592x1944'],
	]) !!}
	<p>
		To make it easier to assemble the controller, I abandoned the first idea of using an Arduino Shield
		and decided to put the Arduino built in the controlled board. In other words, not using one Arduino,
		one Relay Board and one Sensor Input Board, but combining all three in only one controller board.
		In the end I actually made two boards inside a plastic box, where the inferior one was
		the main board and the one on top was an expanding board, adding for more relays to control
		an 8 lanes track.
	</p>
	{!! PhotoSwipeHelper::generatePictures(
		'60x45', '/images/daniel/projects/GNLC/v03/', [
			['controller-1', 'Controller without the lid.', '2592x1944'],
			['controller-2', 'Controller without the expansion track board.', '2592x1944'],
			['controller-3', 'View from the controller\'s mainboard.', '2592x1944'],
			['controller-4', 'Covered controller: energy plugs, track and accelerator for 8 tracks.', '2592x1944'],
			['controller-5', 'The connectors from the controller: sensors, USB, starts-up light and power supply.', '2592x1944'],
			['debugger', 'Debugger (21/october/2011): to aid the software programming (button emulates lapping car, LEDs shows relay state).', '2592x1944'],
	]) !!}
	<p>
		Some ideas were still left for another project: like network connection where each racer using their own
		mobile instead of a computer. Another idea is using hall-effect sensors instead of reed switches,
		maybe with that we can detect the magnetic field distortions when a car passes by even without
		a magnet. Of course the most important thing by now would be to improve the software, not the hardware.
	</p>
	<figure class="youtube-video">
		<iframe width="600" height="400"
			src="//www.youtube.com/embed/PyTqoOXJyK8?origin=http://www.theeroperto.com&cc_load_policy=1&cc_lang_pref=en"></iframe>
		<figcaption>
			Video in which the reed switches prototype was used - courtesy of
			<a href="mailto:afonso@roperto.net">Afonso</a>.
		</figcaption>
	</figure>
	<p>
		If you want to assemble this controller, we provide all
		<a href="/Daniel/Projects/GNLC/DIY">DYI instructions</a>. If you have any questions about this project,
		or suggestions, ideas, whatsoever... feel free to
		<a href="/Daniel/About">contact me</a>.
	</p>
@endsection
