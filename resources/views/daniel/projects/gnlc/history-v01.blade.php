@extends('daniel.projects.gnlc')

@section('content-submenu')
	<h1>Developer Log</h1>
	<h3>Version 0.1: LDR sensors + USB port (Arduino)</h3>
	<p>
		Due to the problems mentioned on 
		<a href="/Daniel/Projects/GNLC/History-v00">version 0.0</a>,
		once I decided to continue this project in May/2010 I already knew one thing:
		this system should
		be connected to the computer by USB. While I was getting ready to crack my brain finding
		a way to process the USB's electronic signals, I found out Arduino. As soon as I discovered
		that technology, I saw the light in the end of the tunnel - not only for the USB controller,
		but also for its high-level programming (relatively speaking) on its microcontroller.
	</p>
	<p>
		With two Arduinos in hand (one original and one clone that I've assembled), I easily managed
		to forward the LDR readings to the computer. Besides that, I found many projects related
		to Arduino Controlled Relays, which brought me the idea of four relays controlling the power of
		each lane.
	</p>
	{!! PhotoSwipeHelper::generatePictures(
		'70x35', '/images/daniel/projects/GNLC/v01/', [
			['arduino', 'Arduino Duemilanove (original, made in Italy).', '1522x2360'],
			['boarduino', 'Boarduino (Arduino clone for protoboard) - you buy the kit and assemble at home.', '1998x1278'],
			['components-ldrs-relays', 'Relays (Blue: Songle 5V ; Black: Tianbo 12V) and LDRs (3mm).', '2424x1518'],
			['track-sensor-ldr-a1', 'LDRs under the lanes (1st model).', '2292x1744'],
			['track-sensor-ldr-a2', 'LDRs under the lanes (1st model). Focus on the LDRs.', '2592x1944'],
			['track-sensor-ldr-a3', 'LDRs under the lanes (1st model). Notice how fragile is the assembly, the orange wire is already broken.', '2592x1944'],
			['track-sensor-ldr-b1', 'LDRs under the lanes (2nd model).', '2592x1944'],
			['track-sensor-ldr-b2', 'LDRs under the lanes (2nd model). This assembly is much sturdier, but creates a gap below the track.', '2592x1944'],
	]) !!}
	<p>
		I decided to control the lanes separately in our slot car because we usually put one
		power supply per lane, instead of only one for the whole track; therefore, we could not
		do that if using only one relay for the whole track. Furthermore, 
		per lane power control allows new possibilities of race modes. Also, I decided to
		leave the relays powered through the 'normally closed' contacts of the relay so, in that way,
		if the equipment is off the power is locked on for all lanes. In the second assembly I used
		P4 connectors, but only in
		<a href="#history-v02">version 0.2</a>
		I adopted them as a standard.
	</p>
	{!! PhotoSwipeHelper::generatePictures(
		'60x45', '/images/daniel/projects/GNLC/v01/', [
			['power-relays-1-top', 'Relay Board (25/may/2010) - top view.', '2592x1944'],
			['power-relays-1-bottom', 'Relay Board (25/may/2010) - bottom view.', '2592x1944'],
			['power-relays-2-top', 'Relay Board (09/june/2010) - top view.', '2592x1944'],
			['power-relays-2-bottom', 'Relay Board (09/june/2010) - bottom view.', '2592x1944'],
			['track-power-bottom-overview', 'Power Track: overview of connections.', '2592x1944'],
			['track-power-bottom-zoom', 'Power Track: close up of connections.', '2592x1944'],
			['track-power-top-overview', 'Power Track: top overview.', '2592x1548'],
			['track-power-top-zoom', 'Power Track: the track melted a little bit when soldering, but stil acceptable.', '2000x1500'],
	]) !!}
	<p>
		With the hardware working, I created a C# program to manage the races. The basic idea:
		adjust the number of laps (or time) and click the start button, then there is a countdown
		and the relays power on all lanes at once. When someone reaches the predetermined number of laps
		(or time is elapsed), all lanes are powered off and the race finishes.
	</p>
	{!! PhotoSwipeHelper::generatePictures(
		'100x75', '/images/daniel/projects/GNLC/v01/', [
			['software', 'Lap Counter software in Brazilian Portuguese (25/maio/2010), written in C#.', '913x574'],
	]) !!}
	<p>
		At this point it possible to have short races using the controller, but it happened often
		that the Arduino froze, especially when a car runs out of the track while accelerating.
		I noticed it could be due to RF/EMF interference and tried to create a snubber with
		high impedance of the sensores from the Arduino. Basically a filter with a high impedance connection.
	</p>
	{!! PhotoSwipeHelper::generatePictures(
		'100x75', '/images/daniel/projects/GNLC/v01/', [
			['snubber', 'Attempt to create a snubber (11/junho/2010) to protect the Arduino from interferences.', '4824x1684'],
	]) !!}
	<p>
		It appeared to me that this little board made a difference, but was still far from solving the
		problem. I also noticed that the original Arduino (not the clone that I've made) was much
		less prone to the interference, freezing less frequently. I saw that the arduino has a
		hatched ground plane and I decided to adopt this strategy and also to use the same components
		from the Arduino, not the cheaper compatible ones, in my next assemblies.
	</p>
	{!! PhotoSwipeHelper::generatePictures(
		'100x75', '/images/daniel/projects/GNLC/v01/', [
			['arduino-closeup', 'Hatched ground plane (negative) of Arduino.', '2592x1944'],
	]) !!}
	<p>
		When using this prototype in races, another issue was related to the light conditions
		affecting the sensors. For example: if someone turned on or off the light while 
		we were racing, it would take a few laps so the firmware would adjust itself to the new light
		levels. Not only that, but also when someone tried to reach the car over the track some
		extra laps could be counted by mistake. Even though I could solve that partially by software,
		I decided the best was to create a light bridge.
	</p>
	{!! PhotoSwipeHelper::generatePictures(
		'60x45', '/images/daniel/projects/GNLC/v01/', [
			['light-bridge-1', 'Light bridge trying to eliminate light interference.', '2592x1944'],
			['light-bridge-2', 'We need to be carefull to properly align all the lights towards the sensors.', '2592x1944'],
			['light-bridge-3', 'This bridge I made with an ice cream pot and four bright leds.', '2592x1944'],
			['light-bridge-4', 'Turned off.', '2592x1944'],
			['light-bridge-5', 'Turned on.', '2592x1944'],
	]) !!}
	<p>
		The project with the light bridge was very precise, but still suffered from huge light
		changes in the environment, such as photocamera's flashes. But the biggest problem was
		still the alignment with the sensors because of vibrations while racing, someone hitting
		up the table by accident (or not) or even, believe me or not, from people that manage to
		run out of the track in the straight part of the track and hitting the bridge! And still,
		once in a while the Arduino still froze.
	</p>
	<figure class="youtube-video">
		<iframe width="500" height="400"
			src="//www.youtube.com/embed/lkRtM4mTaVE?origin=http://www.theeroperto.com&cc_load_policy=1"></iframe>
		<figcaption>Video recorded when I finished the first working prototype. The audio in is english, but I suggest you to use the english subtitles.</figcaption>
	</figure>
	<p>
		Once this prototype was finished, I was very happy with it. Still, I knew there so much
		to improve. Know all changes made in <a href="/Daniel/Projects/GNLC/History-v02">version 0.2</a>, where I used
		infra-red (IR) sensors instead of LDRs.
	</p>
@endsection
