@extends('daniel.projects.gnlc')

@section('content-submenu')
	<h1>Firmware</h1>
	<section>
		<h3>Warning</h3>
		<p>
			The firmware, software that runs inside the microcontroller,
			is written in Arduino. <b>You can damage your controller when changing the firmware:</b>
			in most scenarios, you may recover it by uploading the original firmware,
			but there is a risk of serious problems to the equipment, please check the topic
			<a href="#microcontroller-recovery">Microcontroller Recovery</a>.
		</p>
	</section>
	<section>
		<h3>Prerequisites</h3>
		<p>
			The microcontroller source code is provided with the Java source code of the
			lap counter software. Furthermore, you will need to install the Arduino IDE,
			which can be found in our 
			<a href="/Projects/Daniel/GNLC/Downloads">downloads page</a>.
			It is recommended that you are able to use the lap counter software before
			changing the firmware, this will ensure the controller and its drivers
			are all working properly.
		</p>
	</section>
	<section>
		<h3>Environment Setup</h3>
		<p>
			Inside the Arduino IDE, open the latest version of the microcode from our repository,
			found in <code>project/arduino</code> subfolder. Afterwards, configure you board
			as an "Arduino Uno", select the proper communications port and upload the code.
		</p>
		{!! PhotoSwipeHelper::generatePictures(
			'60x40', '/images/daniel/projects/GNLC/firmware/', [
				['arduino-board', 'Select "Arduino Uno" board.', '678x452'],
				['arduino-port', 'Select the correct communications port.', '500x600'],
		]) !!}
		<p>
			If you upload is succesful, you have just sent the firmware to the controller!
		</p>
	</section>
	<section>
		<h3 id="microcontroller-recovery" class="hash-anchor">Microcontroller Recovery</h3>
		<p>
			Ouch! Something went wrong?
			Before worring too much, try uploading again the original microcode as explained above
			in 'Environment Setup'. In most cases this will restore you controller.
		</p>
		<p>
			If you still cannot send the code to the controller, you may have lost the
			Arduino bootloader. To rewrite the bootloaded you will need to remove the
			ATMega328 chip and record it using an specific hardware.
			If you do not want to learn how to write a bootloader, maybe it will be easier
			to just buy a new ATMega328 with the "Arduino Uno" bootloader, which will
			probably be cheaper than buying the proper hardware to write it yourself.
		</p>
	</section>
	<section>
		<h3>Original Firmware</h3>
		<p>
			In the following sections we explain the main parts of the original lap counter firmware.
			Further explanations are given as comments inside the source code itself.
		</p>
	</section>
	<section>
		<h3>Magic Numbers</h3>
		<p>
			Contants used in many places within our code, it is a common practice doing so
			in case any of those numbers needs to be changed in the future.
		</p>
	</section>
	<section>
		<h3>States</h3>
		<p>
			All states that a sensor can have. 'Blocked' means the sensor is detecting the
			car and 'unblocked' that the sensor is not reading it.
			It works as follows:
		</p>
		<ol>
			<li><b>May block:</b> sensor is clear, waiting for a passing car.</li>
			<li><b>May not unblock:</b> detected a car passing, but it may not yet leave the sensor.</li>
				<ul><li>If the sensor unblocks now, the car reading will be ignored because it happened too fast to be a car.</li></ul>
			<li><b>May unblock:</b> some time passed (usually less than a millisecond) and the car may leave the sensor.</li></ul>
			<li><b>May not block:</b> the car left the sensor, the lap was counted, but it should not be detected again for a while.</li><ul>
		</ol>
		<p>
			One example that could happen if this system was not used:
			once a car approaches the sensor, but still too far to set a stable signal, 
			it could trigger the sensor several times very fast counting many laps instead of one.
			This system ensures that it triggers the counter only once per lap.
		</p>
	</section>
	<section>
		<h3>Timers</h3>
		<p>
			Defines the minimums and maximuns times for some functions, such as the changes of state
			described above.
		</p>
	</section>
	<section>
		<h3>Messages</h3>
		<p>
			Byte encoding for the communication between the controller and the lap counter software.
			In general the first bits identify the message type and the last ones some parameter data
			that can be required.
		</p>
		<p>
			Messages <code>P2A_</code> identify the messages sent from the computer to the
			controller and
			<code>A2P_</code> from the controller to the computer.
		</p>
	</section>
	<section>
		<h3>Pins</h3>
		<p>Define which ATMega/Arduino pins are connected to what.</p>
	</section>
	<section>
		<h3>Variables</h3>
		<p>
			Many global variables used by the firmware. I know, I do not like globals either...
		</p>
	</section>
	<section>
		<h3><code>reset()</code> function</h3>
		<p>
			When called, reconfigures all pins and initializes all globals.
			It is called when the controller is started/restarted and may
			be called if requested by the lap counter software.
		</p>
	</section>
	<section>
		<h3><code>send_xxx()</code> functions</h3>
		<p>
			Functions used to send data longer than one byte, such as numbers over 255.
		</p>
	</section>
	<section>
		<h3><code>setup()</code> function</h3>
		<p>
			Called when the controlled is started. It just configures the USB
			connection and then calls the <code>reset()</code> function.
		</p>
	</section>
	<section>
		<h3><code>loop()</code> function</h3>
		<p>
			Core function of the firmware. It is called several times in sequence,
			as soon as the previous call is finished, until the controller is turned off.
		</p>
	</section>
@endsection
