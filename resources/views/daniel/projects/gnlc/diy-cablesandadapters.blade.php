@extends('daniel.projects.gnlc')

@section('content-submenu')
	<h1>Do It Yourself</h1>
	<h2>Cables and Adapters</h2>
	<section>
		<h3>Connection Diagram</h3>
		<p>
			The electrical connections are made through the controller so it can
			turn on/off the lanes individually.
			The controller has three conectors for each lane: one for the lane's power supply, another
			for the track and the last one for the accelerator, as shown below
		</p>
		{!! PhotoSwipeHelper::generatePictures(
			'60x45', '/images/daniel/projects/GNLC/diy/', [
				['schematic-connections', 'Connection Diagram.', '600x450'],
				['diy-ca-assembled-1', 'One lane connected.', '2592x1944'],
				['diy-ca-assembled-4', 'Four lanes connected.', '2592x1944'],
		]) !!}
	</section>
	<section>
		<h3>Power Supply</h3>
		<p>
			The power supply's cable is made by cutting a the original plug out and fitting a P4 male
			connector (positive in central pin).
			To ensure that the power supply is still compatible with the original track, install a
			P4 female plug with the old connector.
		</p>
		{!! PhotoSwipeHelper::generatePictures(
			'60x45', '/images/daniel/projects/GNLC/diy/', [
				['diy-ca-p4', 'P4 male connectors (left) and P4 female connectors (right).', '2592x1944'],
				['diy-ca-original-power-supply', 'Original power supply.', '2592x1944'],
				['diy-ca-original-power', 'Original track with original power supply.', '2592x1944'],
				['diy-ca-power-cut', "Cutting the power supply's wire.", '2592x1944'],
				['diy-ca-power-p4', 'Power supply with P4 connector.', '2592x1944'],
				['diy-ca-power-adapter', 'Adapter for connecting the power supply in the original track.', '2592x1944'],
				['diy-ca-power-adapter-connected', 'Power supply with and without the adapter.', '2592x1944'],
		]) !!}
	</section>
	<section>
		<h3>Accelerator</h3>
		<p>
			The preparation of the accelerator's cable is analog to the power supply's cable; however,
			in this case it does not matter which wire is connected to the central pin.
		</p>
		{!! PhotoSwipeHelper::generatePictures(
			'60x45', '/images/daniel/projects/GNLC/diy/', [
				['diy-ca-original-accelerator', 'Original accelerator.', '2592x1944'],
				['diy-ca-accelerator-cut', 'Wire cut and connector.', '2592x1944'],
				['diy-ca-accelerator-adapter', 'P4 accelerator and adapter.', '2592x1944'],
				['diy-ca-accelerator-adapted', 'P4 accelerator and adapter connecting to an original track.', '2592x1944'],
		]) !!}
	</section>
	<section>
		<h3>Track Power Cable</h3>
		<p>
			The track power cable is just a parallel cable AWG #22 (0,3mm²) with one P4 male plug
			at each tip.
			For most purposes, one meter of cable is enough and we can still use P4 extensions to
			increase its length.
		</p>
		{!! PhotoSwipeHelper::generatePictures(
			'60x45', '/images/daniel/projects/GNLC/diy/', [
				['diy-ca-track-cable', 'Track power cables', '2592x1944'],
				['diy-ca-track-with-cable', 'Track with 4 lanes connected.', '2592x1944'],
		]) !!}
	</section>
	<section>
		<h3>P4 extension</h3>
		<p>
			A simple extension cord with P4 connectors (one male one female).
			It can be used with the power supply, accelerator or with the track power cable.
			For extensions up to 5 meters we can use AWG #22 (0,3mm²) and until 20 meters AWG #20 (0,5mm²).
		</p>
		{!! PhotoSwipeHelper::generatePictures(
			'60x45', '/images/daniel/projects/GNLC/diy/', [
				['diy-ca-extension-cable-1', 'P4 Extension.', '2592x1944'],
				['diy-ca-extension-cable-2', 'The P4 extension can be used in several situations.', '2592x1944'],
		]) !!}
	</section>
	<section>
		<h3>Splitter Cable</h3>
		<p>
			To use only one power supply for several lanes you can assemble a little cable with one
			P4 female for input and two (or more) P4 male for output.
			We suggest at least AWG #22 (0,3mm²).
		</p>
		{!! PhotoSwipeHelper::generatePictures(
			'60x45', '/images/daniel/projects/GNLC/diy/', [
				['schematic-splitter', 'Diagram for the splitter cable.', '600x450'],
				['diy-ca-splitter', 'Splitter cable.', '2592x1944'],
				['diy-ca-splitter-connected', 'Example connecting two lanes using one power supply.', '2592x1944'],
		]) !!}
	</section>
	<section>
		<h3>Direct Connect Cable</h3>
		<p>
			This cable can be used to connect the power, track and accelerator without using a controller.
			It just connects all conectors in series, inverting the polarity in one of the plugs to make it
			easier to change the track's racing direction.
		</p>
		{!! PhotoSwipeHelper::generatePictures(
			'60x45', '/images/daniel/projects/GNLC/diy/', [
				['schematic-direct', 'Diagram of the direct connect cable, demonstrating how the direction inverting works.', '600x450'],
				['diy-ca-dcc', 'Direct Connect Cable.', '2592x1944'],
				['diy-ca-a', 'Examble of usage of the direct connect cable.', '2592x1944'],
				['diy-ca-dcc-stripped', 'Direct connect cable with stripped wires. The red wires are connected to the central pin.', '2592x1944'],
		]) !!}
	</section>
	<section>
		<h3>Sensors Cable</h3>
		<p>
			Just a direct 6-way cable (same pins in both tips) which connects the sensors to the controller, with RJ-12 6 pins connectors.
		</p>
		{!! PhotoSwipeHelper::generatePictures(
			'60x45', '/images/daniel/projects/GNLC/diy/', [
				['diy-ca-rj11-6pins', 'RJ-12 plugs (6 pins).', '2592x1944'],
				['diy-ca-sensor-cable', 'Sensors Cable.', '2592x1944'],
		]) !!}
	</section>
	<section>
		<h3>Cabo USB-B</h3>
		<p>
			An USB B-type cable, commonly used for printers, connecting the controller to the computer.
		</p>
		{!! PhotoSwipeHelper::generatePictures(
			'60x45', '/images/daniel/projects/GNLC/diy/', [
				['diy-ca-usb-b', 'USB B-type cable.', '2592x1944'],
		]) !!}
	</section>
	<section>
		<h3>Next Steps</h3>
		<p>
			Now you can test the
			<a href="/Daniel/Projects/GNLC/DIY-PowerTrack">power track</a> you made before using the direct connect cables.
			When ready, advance to the
			<a href="/Daniel/Projects/GNLC/DIY-SensorsBoard">sensors assembly</a>
			to continue assembling your lap counter.
		</p>
	</section>
@endsection
