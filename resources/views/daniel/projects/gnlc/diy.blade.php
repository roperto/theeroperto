@extends('daniel.projects.gnlc')

@section('content-submenu')
	<h1>Do It Yourself</h1>
	<p>
		On the following page we show the steps to create the GNLC system. 
		We suggest you to follow the steps below:
	</p>
	<ul>
		<li>
			<a href="#diy-track">Power Track</a><br />
			Instructions on how to assemble the power track, which is responsible for connecting the 
			power supply to the track. A power track is normally connected to the controller, but it 
			can also be connected using a direct-connect adapter.
			<br />
			<br />
		</li>
		<li>
			<a href="#diy-cables">Cables and Adapters</a><br />
			Demonstrates how to adapt the power supply and the accelerator to use P4 connector 
			while making an adapter using the original connectors.
			It also explains how to assemble the sensors cable and provides you several ideas for 
			other adapters.
			<br />
			<br />
		</li>
		<li>
			<a href="#diy-sensors">Sensors Board</a><br />
			Explains how to assemble the sensors board placed under the track. 
			<br />
			<br />
		</li>
		<li>
			<a href="#diy-controller">Controller</a><br />
			A detailed guide and step by step instructions on how to assemble the GNLC controller.
			<br />
			<br />
		</li>
	</ul>
	<h3>View it on YouTube</h3>
	<figure class="youtube-video">
		<iframe width="600" height="400"
			src="//www.youtube.com/embed/V1N91HeNfRg?origin=http://www.theeroperto.com&cc_load_policy=1"></iframe>
		<figcaption>Video showing all steps of the power track assemble.</figcaption>
	</figure>
@endsection
