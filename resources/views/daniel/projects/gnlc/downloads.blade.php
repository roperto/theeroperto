@extends('daniel.projects.gnlc')

@section('content-submenu')
	<?php
	$links['java'] = 'http://www.java.com/pt_BR/download/index.jsp';
	$links['ft232r-win'] = 'http://www.ftdichip.com/Drivers/CDM/CDM20830_Setup.exe';
	$links['ftdi'] = 'http://www.ftdichip.com/Drivers/VCP.htm';
	$links['gnlc-stable'] = '/downloads/gnlc.zip';
	$links['gnlc-dev'] = '/downloads/gnlc-dev.zip';
	$links['jdk'] = 'http://www.oracle.com/technetwork/java/javase/downloads/';
	$links['eclipse'] = 'http://www.eclipse.org/downloads/';
	$links['arduino'] = 'http://arduino.cc/en/Main/Software';
	$links['gitscm'] = 'http://git-scm.com/downloads';
	$links['github-gnlc'] = 'https://github.com/geralnet/gnlc';
	?>
	<h1>Downloads</h1>
	<section>
		<h3>Application</h3>
		<p>
			If you want to use the Slot Car Lap Counter, you will need:
		</p>
		<ul>
			<li>
				Java - download from the
				<a href="{{$links['java']}}" target="_blank">official website</a>.
			</li>
			<li>
				USB Driver (FT232R VCP) - download for  
				<a href="{{$links['ft232r-win']}}" target="_blank">Windows</a>
				or see more options on
				<a href="{{$links['ftdi']}}" target="_blank">FTDI official website</a>
			</li>
			<li>Slot Car Lap Counter Program</li>
			<ul>
				<li><a href="{{$links['gnlc-stable']}}">Stable release</a> - recommended
				for those who prefer BUGS (problems) free program.</li>
				<li><a href="{{$links['gnlc-dev']}}">Beta release</a> - Help us find 
				those BUGS!</li>
				<ul><li>
					<b>Note:</b> Some browers may issue a security warning because it contains some executable 
					files within the ZIP.
				</li></ul>
			</ul>
		</ul>
		<p>
			To learn more about the installation, please refer to <a href="#how-to-use">How to use</a>.
		</p>
	</section>
	<section>
		<h3>Development</h3>
		<p>
			If you want to make any changes in the Slot Car Lap Counter Program, you will need:
		</p>
		<ul>
			<li>
				JDK (Java Development Kit) - download from the
				<a href="{{$links['jdk']}}" target="_blank">official website</a>.
			</li>
			<li>
				Eclipse Standard - download from the
				<a href="{{$links['eclipse']}}" target="_blank">official website</a>.
			</li>
			<li>
				Git (there are several options) - we recommend
				<a href="{{$links['gitscm']}}" target="_blank">git-scm</a>.
			</li>
		</ul>
		<p>
			To download the source code, please follow the instructions on the
			<a href="/Daniel/Projects/GNLC/Software">Software</a> 
			page or visit our
			<a href="{{$links['github-gnlc']}}" target="_blank">repository in GitHub</a>.
		</p>
		<p>
			If you need to make any changes on the controller firmware, as explained in 
			<a href="/Daniel/Projects/GNLC/Firmware">firmware</a> page, you will need:
		</p>
		<ul>
			<li>
				Arduino IDE - download from the
				<a href="{{$links['arduino']}}" target="_blank"> official website.</a>
			</li>
		</ul>
		<p>
			To download the PCB (Printed Circuit Board) design, please refer the board you want to assemble in 
			<a href="/Daniel/Projects/GNLC/DIY">DIY Instructions</a>. The electronic scheme is explained in
			<a href="/Daniel/Projects/GNLC/Hardware">Hardware</a> page.
		</p>
	</section>
	<footer>
		<p>
			If you have any questions or find any broken links, please <a href="/Daniel/About">
			contact us</a> and we will try to resolve it ASAP.
		</p>
	</footer>
@endsection
