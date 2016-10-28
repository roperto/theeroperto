@extends('daniel.projects.gnlc')

@section('content-submenu')
	<h1>Do It Yourself</h1>
	<h2>Power Track</h2>
	<section>
		<h3>About</h3>
		<p>
			The power track will deliver power to the whole track, connecting each lane to an associated P4 connector.
			For larger racetracks it is suggested that you add more power tracks due to the voltage drop that appears between
			each track connection.
			At the end of this page, there is a video showing the whole assembly process.
		</p>
		{!! PhotoSwipeHelper::generatePictures(
			'100x75', '/images/daniel/projects/GNLC/diy/', [
				['power', 'Power Track.', '2592x1944'],
		]) !!}
	</section>
	<section>
		<h3>You will need</h3>
		<p>
			To assemble a power track for 4 lanes, using two 15" straights tracks, you will need:
		</p>
		<ul>
			<li>Two 15" straights</li>
			<li>Plastic glue (super glue or similar)</li>
			<li>Blank circuit board(165mm x 50mm)</li>
			<li>Electrical Tape (or similar)</li>
			<li>Clamps (or just hold it with your hands until it dries)</li>
			<li>4x P4 male connectors (image below)</li>
			<li>40cm of AWG #22 wire (0,3mm²)</li>
			<li>Kit to etch and make printed circuit boards</li>
			<li>Cleaning products (cloth, acetone and/or isopropyl alcohol)</li>
		</ul>
		{!! PhotoSwipeHelper::generatePictures(
			'100x75', '/images/daniel/projects/GNLC/diy/', [
				['p4', 'P4 connectors.', '300x194'],
		]) !!}
	</section>
	<section>
		<h3>Gluing Tracks</h3>
		<p>
			The first step is to glue both 15" straights into one single track with 4 lanes.
			I glued them together using the following procedure:
		</p>
		<ol>
			<li>Clean both borders that are going to be glued</li>
			<li>Stick them together using an adhesive tape underneath the track</li>
			<li>Apply glue in the gap between the tracks, avoid that any excess glue comes to the surface</li>
			<li>Put the clamp or just hold it until it dries</li>
			<li>Remove the tape and let it dry completely</li>
		</ol>
	</section>
	<section>
		<h3>Etching</h3>
		<p>
			The connector's board is a one-sided circuit board with 50x165mm. You can make it in many 
			different ways, such as toner transfer (shown in our video). If you use our design to create 
			the board, do not forget to download the high-definition (HD)
			version and ensure the printing scale is 100%.
		</p>
		{!! PhotoSwipeHelper::generatePictures(
			'60x45', '/images/daniel/projects/GNLC/diy/', [
				['board', 'Power track connectors.', '600x450'],
				['power-board', 'Board design.', '4192x1477'],
		]) !!}
	</section>
	<section>
		<h3>Drilling</h3>
		<p>
			All holes in this board can be make with an Ø 0,8mm drill bit. The J4/P4 connectors usually 
			require milling which can be made with several holes side by side.
		<p>
	</section>
	<section>
		<h3>Soldering</h3>
		<p>
			Cut the AWG #22 (0,3mm²) into 8 pieces of wire with 5cm each, stripping one of the tips. 
			Solder the wires and the connectors. To avoid problems with partially etched copper tracks
			you can add a solder layer to them.
		</p>
		</p>
			Before soldering the board to the track, expose the track's contacts underneath and clean them 
			well. After that, put the board over the track to measure the position you=u will need to strip 
			the wires. I suggest putting a wet cloth under the track to avoid melting the plastic while 
			soldering. You can use a small screwdriver to hold the wires in position until the solder 
			solidifies.
		</p>
		<p>
			When the track is ready, clean it throughly, apply some conformal coating and let it dry.
		</p>
	</section>
	<section>
		<h3>Alternative Track: hidden connectors</h3>
		<p>
			This is a simpler alternative for building this track. It is a good option when you want to 
			hide all cables of the track, you can make the connections under the table by passing the 
			cables through holes.
		</p>
		{!! PhotoSwipeHelper::generatePictures(
			'60x45', '/images/daniel/projects/GNLC/diy/', [
				['diy-ca-powertrack-alternative', 'Alternative power track assembly.', '600x450'],
		]) !!}
	</section>
	<section>
		<h3>Your power track is ready!</h3>
		<p>
			Now let's assemble the <a href="/Daniel/Projects/GNLC/DIY-CablesAndAdapters">cables and adapters</a> so we can test it.
		</p>
	</section>
@endsection
