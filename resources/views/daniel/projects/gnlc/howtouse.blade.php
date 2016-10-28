@extends('daniel.projects.gnlc')

@section('content-submenu')
	<header>
		<h1>How to use</h1>
		<p>
			Learn how to install your GNLC lap counter prototype. If you do not have
			the prototype, learn how to <a href="/Daniel/Projects/GNLC/DIY">do it yourself</a>.
		</p>
	</header>
	<section>
		<h3>Driver Installation</h3>
		<p>
			The controller uses the FTDI FT232R-L as a USB communication device. The communication 
			type used is the VCP (Virtual Com Port), that emulates a COM serial port in your computer.
		</p>
		<p>
			Download the driver on our <a href="/Daniel/Projects/GNLC/Downloads">downloads page</a> and connect the controller
			via USB. For now you do not need to connect anything else. If you use Windows 8, you may need 
			to authorise unsigned driver installation (not approved by Microsoft). If in doubt, feel free
			to <a href="/Daniel/About">contact us</a>.
		</p>
		{!! PhotoSwipeHelper::generatePictures(
			'100x75', '/images/daniel/projects/GNLC/howtouse/', [
				['pc-controller', 'Controller connected to the driver installation.', '2592x1944'],
		]) !!}
	</section>
	<section>
		<h3>Program Installation</h3>
		<p>
			The program is written in Java and has a native library for serial communication. It is 
			prepared to work on Windows without further changes. If you use another operating system, 
			you may need to reconfigure the required library.
		</p>
		<p>
			If you do not already have an updated Java, you can refer to our
			<a href="/Daniel/Projects/GNLC/Downloads">download page</a>  to install or update Java on your computer.
		</p>
		<p>
			After downloading the lap counter software which is also available in our 
			<a href="/Daniel/Projects/GNLC/Downloads">downloads page</a>,
			create a folder, unzip the files and execute <code>run.bat</code> to start the program.
			If you do not use Windows, you need to manually start the program with the
			<code>java -cp .;res/;rxtx-lib/RXTXcomm.jar net.geral.slotcar.lapcounter.LapCounter</code>
			command.
		</p>
	</section>
	<section>
		<h3>Controller Connection</h3>
		<p>
			Use the diagram below to connect the controller lane. 
		</p>
		{!! PhotoSwipeHelper::generatePictures(
			'100x75', '/images/daniel/projects/GNLC/howtouse/', [
				['schematic-connections', 'Diagram of the controller connection.', '600x450'],
		]) !!}
	</section>
	<section>
		<h3>Program Configuration</h3>
		<p>
			To open the options menu, use the context menu (usualy by right clicking). 
			The images below illustrate the lap counter program configuration.
		</p>
		{!! PhotoSwipeHelper::generatePictures(
			'75x50', '/images/daniel/projects/GNLC/howtouse/', [
				['01-config-hardware', 'Step 1: Open the hardware configuration.', '600x400'],
				['02-welcome', 'Step 2: Hardware configuration screen.', '600x400'],
				['03-hardware-detect', 'Step 3: Hardware detection.', '600x400'],
				['04-relay-test', 'Step 4: Main power test.', '600x400'],
				['05-lights-test', 'Step 5: Race lights test.', '600x400'],
				['06-lanes-selection', 'Step 6: Choose the number of lanes.', '600x400'],
				['07-lane-1', 'Step 7: First lane configuration.', '600x400'],
				['08-lane-2', 'Step 8: Second lane configuration.', '600x400'],
				['09-testing', 'Step 9: Lane configuration test.', '600x400'],
				['10-finished', 'Step 10: Configuration completed.', '600x400'],
				['11-race-screen', 'Step 11: Configured racing program screen.', '600x400'],
		]) !!}
	</section>
@endsection
