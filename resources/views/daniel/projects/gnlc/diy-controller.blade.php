@extends('daniel.projects.gnlc')

@section('content-submenu')
	<h1>Do It Yourself</h1>
	<h2>Controller</h2>
	<section>
		<h3>Overview</h3>
		<p>
			The controller is an equipment that controls the sensors and the relays. It is made with a 
			double sided board and requires more of experience in PCB making. Here
			we are only demonstrating the assembly process. If you would like to learn how it works,
			you can get more information in the <a href="/Daniel/Projects/GNLC/Hardware">hardware page</a>. 
		</p>
		{!! PhotoSwipeHelper::generatePictures(
			'60x45', '/images/daniel/projects/GNLC/v03/', [
				['controller-1', 'Controller without the lid.', '2592x1944'],
				['controller-2', 'Controller without the expansion track board.', '2592x1944'],
				['controller-3', 'View from the controller\'s mainboard.', '2592x1944'],
				['controller-4', 'Covered controller: energy plugs, track and accelerator for 8 tracks.', '2592x1944'],
				['controller-5', 'The connectors from the controller: sensors, USB, starts-up light and power supply.', '2592x1944'],
		]) !!}
	<section>
	</section>
		<h3>Material needed</h3>
		<p>
			Components needed for the assembly of the controller with 4 lanes (parentheses for 8 lanes):
		</p>
		<ul>
			<li>1 Blank double-sided copper board with 125x90mm (+1 blank one-sided copper board 125x50 mm)</li>
			<li>2x Capacitor 22pF</li>
			<li>11x Capacitor 0,1µF</li>
			<li>1x Capacitor 0,33µF</li>
			<li>1x Capacitor 4,7µF</li>
			<li>5x Diode 4008 (+4)</li>
			<li>1x LM7805</li>
			<li>1x Socket for ATMega328-P</li>
			<li>4x Socket for TTLs</li>
			<li>1x ATMega328-P with Arduino Uno bootloader</li>
			<li>1x FT232RL</li>
			<li>1x TTL 7404</li>
			<li>1x TTL 7408</li>
			<li>1x TTL 7486</li>
			<li>13x Jack P4 (+12)</li>
			<li>Pin bar with 2 pins</li>
			<li>4x Relay 12V (+4)</li>
			<li>2x Conector KK male 2 vertical pin</li>
			<li>1x Conector KK male 6 vertical pins(+1)</li>
			<li>2x Conector KK female 2 pins with terminals</li>
			<li>10cm flat cable 2 pathways</li>
			<li>2x Yellow led 3mm</li>
			<li>2x Green led 5mm</li>
			<li>Crystal 16MHz</li>
			<li>2x Resistor 220Ω</li>
			<li>6x Resistor 470Ω</li>
			<li>6x Resistor 1KΩ</li>
			<li>17x Resistor 10KΩ</li>
			<li>3x Female RJ-12 Conector</li>
			<li>8x Transistor BC548 (+4)</li>
			<li>1x Female USB-B Conector</li>
			<li>Plastic box with screws</li>
			<li>Led support - 5mm</li>
			<li>Cable KK 6 wires 10cm to connect(just for the expansion board)</li>
			<li>Locknuts</li>
			<li>Spacers and screws for expansion board</li>
		</ul>
		{!! PhotoSwipeHelper::generatePictures(
			'60x45', '/images/daniel/projects/GNLC/diy/', [
				['controller-capacitors', 'Capacitors.', '2592x1944'],
				['controller-diodes-leds-resistors', 'Diodes, LEDs and Resistors.', '2592x1944'],
				['board-box', 'Blank double-sided copper board, plastic box, led supports, spacers and screws for internal fixation.', '2592x1944'],
				['controller-cis', 'Integrated sockets and circuits: LM7805, ATMega328-P, FT232RL and TTLs.', '2592x1944'],
				['controller-kks', 'Flat cable, connectors e KK terminals.', '2592x1944'],
				['controller-connectors', 'P4 connectors, RJ-12, USB-B e barra de pinos.', '2592x1944'],
				['controller-relays', 'Relays.', '2592x1944'],
				['controller-ct', 'Crystal and transistors.', '2592x1944'],
		]) !!}
	<section>
	</section>
		<h3>Assembly</h3>
		<p>
			The assembly for mainboard is a little bit more complicated because it has two sides. Futhermore, 
			this board has the SMD (Surface Mount Device) FT232RL integrated circuit. After the assembly of 
			the main board, the expansion board will be easier easier to make.
		</p>
		{!! PhotoSwipeHelper::generatePictures(
			'60x45', '/images/daniel/projects/GNLC/diy/', [
				['board-design-controller-top', 'Drawing of the mainboard top view.', '3155x2157'],
				['board-design-controller-bottom', 'Drawing of the mainboard bottom view.', '3155x2157'],
				['controller-placement', 'Placement of the components in the controller board.', '3735x2912'],
				['board-relay-expansion', 'Drawing of the expansion board.', '2937x1137'],
		]) !!}
		<p>
			Once your controller is ready, all you need to do is prepare a championship and send us the photos!
		</p>
	</section>
@endsection
