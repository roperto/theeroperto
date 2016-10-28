@extends('daniel.projects.gnlc')

@section('content-submenu')
	<h1>Do It Yourself</h1>
	<h2>Sensors Board</h2>
	<section>
		<h3>How does it work</h3>
		<p>
			The assembly of the current version uses reed switches to detect a passing slot car.
			When the car goes over the sensor, its magnet atracts one of the switch's terminal closing it 
			for a brief moment, allowing the system to detect it. In the developer's log you can learn more 
			about the usage of 
			<a href="/Daniel/Projects/GNLC/History-v01">LDRs</a> and
			<a href="/Daniel/Projects/GNLC/History-v02">infrared</a> sensors.
		</p>
		{!! PhotoSwipeHelper::generatePictures(
			'60x45', '/images/daniel/projects/GNLC/diy/', [
				['sensor-reed-1', 'Sensors board.', '2592x1944'],
				['sensor-reed-3', 'Sensors board under a two-lanes track.', '2592x1944'],
				['track-power-p4-reed-1', 'Sensors board with power track.', '2592x1944'],
		]) !!}
	</section>
	<section>
		<h3>You will need</h3>
		<p>
			To assemble the sensors board for 4 lanes you will need:
		</p>
		<ul>
			<li>Blank copper board (165mm x 50mm)</li>
			<li>4 reed switches</li>
			<li>1 female RJ-12 6P6C (6 pins) connector</li>
			<li>Track with 4 lanes to use as a template when soldering</li>
			<li>Electric tape or another tape to temporary hold it in place</li>
			<li>Kit to etch and make printed circuit boards</li>
			<li>Cleaning products (cloth, aceton and/or isopropyl alcohol)</li>
		</ul>
		{!! PhotoSwipeHelper::generatePictures(
			'60x45', '/images/daniel/projects/GNLC/diy/', [
				['pcb-rj12-reed', 'Blank copper board, reed switches and RJ-12 6P6C connectors.', '2592x1944'],
				['board-design-sensor-track', 'Sensors board design.', '4192x1477'],
				['pcb-sensors', 'Printed circuit before soldering.', '2592x1944'],
		]) !!}
	</section>
	<section>
		<h3>Preparing the board</h3>
		<p>
			The sensors board is a one-sided circuit board with 50x165mm.
			You can make it in many different ways such as tonner transfer.
			If you use our design to create your board, do not forget to download the high-definition (HD) 
			version and ensure the print scale is 100%.
		</p>
		<p>
			Most of the drills in this board can be made with a Ø 0,6mm drill. The RJ-12 may require a larger
			drill for its plastic holder.
		</p>
		<p>
			The soldering is easy, but the reed switches are delicate and can break easily with heat or due 
			to mechanical stress. The steps to solder them are:
		</p>
		<ol>
			<li>Place the reed switches so they gently touch the track.</li>
			<li>Put a little bit of solder on one the terminals for each switch to hold it in place.</li>
			<li>Solder the other terminals.</li>
			<li>Now move back soldering all the remaining terminals.</li>
			<li>If possible, test all sensors with a multimeter and a magnet.</li>
			<li>Solder the RJ-12 connector.</li>
			<li>Clean everything and apply the conformal coating.</li>
		</ol>
		<figure class="youtube-video">
			<iframe width="600" height="360"
				src="//www.youtube.com/embed/s6wGE8dSgN0?origin=http://www.theeroperto.com&cc_load_policy=1"></iframe>
			<figcaption>Video showing the steps to assemble the sensors board.</figcaption>
		</figure>
		<p>
			Now your sensors board is ready! Now let's move on and assemble the last part: the
			<a href="/Daniel/Projects/GNLC/DIY-Controller">controller</a>.
		</p>
	</section>
@endsection
