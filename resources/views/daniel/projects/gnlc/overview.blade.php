@extends('daniel.projects.gnlc')

@section('content-submenu')
	<header class="jumbotron">
		<h1>{{$project->title}}</h1>
		<i>{{$project->summary}}</i><br />
	</header>
	<section>
		<h1>Overview</h3>
		<p>
			The GNLC project is a Slot Car Lap Counter system with race management and track power control.
			We provide all information so you can build your own hardware and the software is available to download for free.
			Although it is aimed at HO scale tracks, it should be straightfoward to adapt the system to other scales.
		</p>
	</section>
	<section>
		<h3>How to use</h3>
		<p>
			We currently have a working prototype which can already be used for slot car enthusiasts,
			please check our <a href="/Daniel/Projects/GNLC/HowToUse">how to use</a> to know more. At the moment I
			am unable to assemble or sell this prototype, you will have to build it on your own.
		</p>
	</section>
	<section>
		<h3>Pricing</h3>
		<p>
			It is all free!
			Our software source code is available <a href="/Daniel/Projects/GNLC/Downloads">here</a>.
			The hardware is open for anyone to produce -- we offer
			<a href="#diy">DIY instructions</a> so you can build it yourself.
		</p>
	</section>
	<section>
		<h3>Development</h3>
		<p>
			If you want to further develop the system or just want to learn how we created it,
			we provide plenty of information that may be helpful:
		</p>
		<ul>
			<li>
				To create your own device, check the
				<a href="/Daniel/Projects/GNLC/DIY">Do It Yourself</a> page.
			</li>
			<li>
				The <a href="/Daniel/Projects/GNLC/Software">Software page</a> provides guidance on the software
				programing.
			</li>
			<li>
				The <a href="/Daniel/Projects/GNLC/Firmware">Firmware page</a> shows how is the firmware programmed
				and how to change it.
			</li>
			<li>
				The <a href="/Daniel/Projects/GNLC/Hardware">Hardware page</a> explains why the hardware was
				made that way.
			</li>
			<li>
				For more information on other things we tried before, check the
				<a href="/Daniel/Projects/GNLC/History">Developer Log page</a>.
			</li>
		</ul>
	</section>
	<section>
		<h3>Feedback</h3>
		<p>
			Please send us pictures or information when you use, create or modify our system, we would love to hear about it! =)
		</p>
	</section>
@endsection
