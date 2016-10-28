@extends('daniel.projects.gnlc')

@section('content-submenu')
	<header>
		<h1>Hardware</h1>
		<p>
			Here we show all parts of the controller hardware, trying to explain in details
			how it works, allowing people to better understand it and/or help us improving it.
		</p>
	</header>
	<section>
		<h3>Voltage Regulator</h3>
		<p>
			Using a LM7805, this part of the circuit lowers the input voltage to a regulated 5V supply.
		</p>
		{!! PhotoSwipeHelper::generatePictures(
			'100x75', '/images/daniel/projects/GNLC/hardware/', [
				['power-regulator', 'Schematic for the voltage regulator circuit.', '833x713'],
		]) !!}
		<ul>
			<li><b>J4-PWR:</b> Connects the circuit to an external 12V power supply, central pin positive.</li>
			<li><b>D1:</b> Reverse voltage protection (in case of inverted polarity in the external power supply).</li>
			<li><b>Vcc:</b> Vcc is the voltade after D1.</li>
			<li>
				<b>U1 C1 C2:</b> According to the U1 LM7805's datasheet we installed the C1 and C2 capacitors.
			</li>
			<li><b>+5V:</b> Regulated 5V provided by the LM7805.</li>
			<li>
				<b>LED_PWR KK1 R1:</b> Led connected to the power regulator output,
				when the controlled is connected to an external power supply, it turns on.
				The R1 resistor and the KK1 connector are soldered to the board,
				while the led LED_PWR will be fixed in the outer box and connected through
				the KK1 connector.
			</li>
		</ul>
	</section>
	<section>
		<h3>USB Controller</h3>
		<p>
			The USB controller uses an FT232RL IC to provide serial communication.
			Both the FT232RL and the ATMega328 are powered using the USB supply, not
			the external supply.
		</p>
		{!! PhotoSwipeHelper::generatePictures(
			'100x75', '/images/daniel/projects/GNLC/hardware/', [
				['usb-controller', 'USB controller.', '1187x1315'],
		]) !!}
		<ul>
			<li><b>X1:</b> Female USB type B connector, used to connect the computer and the controller.</li>
			<li><b>Vusb:</b> Voltage from the USB power, powering part of the controller's circuit.</li>
			<li><b>C3 C4:</b> Capacitors to regulate Vusb.</li>
			<li><b>U2:</b> FT232RL integrated circuit, responsible for the serial communication.</li>
			<li><b>C5:</b> Decoupling capacitor for the FT232RL.</li>
			<li><b>C6:</b> We do not use the 3.3V available from the FT232RL, so we disconnect this pin using a decoupling capacitor.</li>
			<li>
				<b>C7:</b> Capacitor connecting the DTR (Data Terminal Ready)
				to the ATMega328's RESET pin.
				It ensures that, when the slot car lap counter software
				opens the serial communication, the Arduino firmware running
				inside the ATMega328 is restarted.
			</li>
			<li>
				<b>LED_USB KK2 R2:</b> Led connected to Vusb, turning on when the USB cable is connected.
				The led LED_USB is connected to the board through the KK2 connector.
				</li>
			<li><b>LED_TX R3:</b> Led indicating data transmitted.</li>
			<li><b>LED_RX R4:</b> Led indicating data received.</li>
			<li>
				<b>ATMEGA_RESET Line:</b> Connected to the ATMega328 reset pin.
				When the USB communication is started, a 0V pulse is sent to restart the ATMega328.
			</li>
			<li><b>RS_TXD Line:</b> FT232RL's transmitter, connected to the ATMega328's receiver.</li>
			<li><b>RS_RXD Line:</b> FT232RL's received, connected to the ATMega328's transmitter.</li>
		</ul>
	</section>
	<section>
		<h3>"Arduino" Microcontroller</h3>
		<p>
			The U3 microcontroller is an ATMega328, made by Atmel. Inside it runs the firmware developed in 
			Arduino.
		</p>
		{!! PhotoSwipeHelper::generatePictures(
			'100x75', '/images/daniel/projects/GNLC/hardware/', [
				['arduino-microprocessor', '"Arduino" Microcontroller.', '1717x1024'],
		]) !!}
		<ul>
			<li><b>U3:</b> ATMega328 microcontroller, where the firmware runs.</li>
			<li><b>R5:</b> Pull-up for the RESET pin.</li>
			<li><b>C8 C9:</b> Decoupling capacitos.</li>
			<li><b>Q1 C10 C11:</b> Crystal and capacitors to generate the 16MHz clock for the ATMega328.</li>
			<li>
				<b>R6 to R13:</b>
				Resistors that connect the relay which controls the track power.
				The relays activated by transistors because they are powered with Vcc instead of
				Vusb and they also demand more current that the ATMega328 can provide.
				These resistors limit the current flow through the base of the transistors.
			</li>
			<li>
				<b>R14 R15:</b> Increases the impedance (resistance) 
				between the serial communication line with the FT232RL (safety resistor).
			</li>
			<li>
				<b>ATMEGA_RESET Line:</b> Connected to the ATMega328 reset pin.
				When the USB communication is started, a 0V pulse is sent to restart the ATMega328.
			</li>
			<li><b>RS_TXD Line:</b> FT232RL's transmitter, connected to the ATMega328's receiver.</li>
			<li><b>RS_RXD Line:</b> FT232RL's received, connected to the ATMega328's transmitter.</li>
			<li><b>RELAY_AB# Line:</b> Conntected to the relays, where 'A' represent the relays in the main board and 'B' in the expansion board.</li>
			<li><b>Dx_Sy Lines:</b> Connects the Arduino's digital pin 'x' (2-9) to the track sensors 'y' (1-8).</li>
			<li><b>Ax_Ly Lines:</b> Connects the Arduino's analog pins 'x' (4-5) to the race lights system.</li>
		</ul>
	</section>
	<section>
		<h3>Sensors Connectors and Relay Expansion Connectors</h3>
		<p>
			The connectors to the sensors provide 5V and GND in case the sensors need them.
			The reed switches are passive (unpowered), therefore they do not use the 5V.
		</p>
		<p>
			The connector to the expansion relays board is a simple conector to control more 4 relays,
			allowing the expansion of the track from 4 lanes to 8 lanes.
		</p>
		{!! PhotoSwipeHelper::generatePictures(
			'100x75', '/images/daniel/projects/GNLC/hardware/', [
				['connectors', 'Sensors Connectors and Relay Expansion Connectors.', '1613x563'],
		]) !!}
		<ul>
			<li><b>RJ12-A:</b> Connects the sensors of the first four lanes (1-4).</li>
			<li><b>RJ12-B:</b> Connects the sensors of the last four lanes (5-8).</li>
			<li>
				<b>R16 to R23:</b> 
				Resistors to increase the impedance of the sensors system, trying to
				avoid interferences since the sensors are very close to the track.
			</li>
			<li><b>KK3:</b> KK connector to connect the expansion board when available.</li>
			<li><b>RELAY_B# Lines:</b> Connected to the ATMega328.</li>
			<li><b>Dx_Sy Lines:</b> Connects the Arduino's digital pin 'x' (2-9) to the track sensors 'y' (1-8).</li>
		</ul>
	</section>
	<section>
		<h3>Race Lights</h3>
		<p>
			The race lights circuit converts 2 bits to four light states:
			off, one red, two reds and two greens.
			It may be used not only for the race start, but also to show when the race is paused.
		</p>
		{!! PhotoSwipeHelper::generatePictures(
			'100x75', '/images/daniel/projects/GNLC/hardware/', [
				['lights', 'Race lights.', '1562x1147'],
		]) !!}
		<ul>
			<li><b>RJ12-C:</b> Connection to the race lights.</li>
			<li><b>U4:</b> AND logical gates, TTL7408.</li>
			<li><b>U5:</b> XOR (exclusive or) logical gates, TTL7486.</li>
			<li><b>U6:</b> Inverter (not) logical gate, TTL7404.</li>
			<li><b>R24 to R27:</b> Resistors to limit the transistor's base current.</li>
			<li><b>T1 to T4:</b> Transistors to turn on the LEDs.</li>
			<li>
				<b>R28 to R31:</b> Resistors to limit the LED current.
				The values for the green and red leds are different due to different voltage drop.
			</li>
			<li><b>Ax_Ly Lines:</b> Connects the Arduino's analog pins 'x' (4-5) to the race lights system.</li>
		</ul>
		<p>
			Below we demonstrate the logic behind these gates.
			While we show 4 separated leds, we suggest using only two bicolored leds (red and green).
		</p>
		{!! PhotoSwipeHelper::generatePictures(
			'60x40', '/images/daniel/projects/GNLC/hardware/', [
				['0-off', 'All lights off.', '600x395'],
				['1-ready', 'One red light.', '600x395'],
				['2-steady', 'Two red lights.', '600x395'],
				['3-go', 'Two green lights.', '600x395'],
		]) !!}
	</section>
	<section>
		<h3>Race Light ICs</h3>
		<p>
			This circuit only shows the decoupling capacitors and grouding the
			unused gates' pins, since these TTLs provide more logical gates than we needed.
		</p>
		{!! PhotoSwipeHelper::generatePictures(
			'100x75', '/images/daniel/projects/GNLC/hardware/', [
				['lights-circuit', 'Race Light ICs.', '1530x1155'],
		]) !!}
		<ul>
			<li><b>C12 C13 C14:</b> Decoupling capacitors.</li>
			<li><b>U4:</b> AND logical gates, TTL7408.</li>
			<li><b>U5:</b> XOR (exclusive or) logical gates, TTL7486.</li>
			<li><b>U6:</b> Inverter (not) logical gate, TTL7404.</li>
		</ul>
	</section>
	<section>
		<h3>Relays</h3>
		<p>
			This is the circuit for the 4 relays in the main board.
			We do not show the relays of the expansion board because
			they operate in the exact same way.
		</p>
		{!! PhotoSwipeHelper::generatePictures(
			'100x75', '/images/daniel/projects/GNLC/hardware/', [
				['1-relay', 'Relays (one circuit).', '904x547'],
				['4-relays', 'Relays (all four).', '1846x1043'],
		]) !!}
		<ul>
			<li>
				<b>T5 to T8:</b> Transistors to drive the relays.
				The relays operate in Vcc (12V) and need to be activated
				from a small current from the ATMega328 (5V).
			</li>
			<li>
				<b>D2 to D5:</b> Reverse surge protection diodes.
				When the relays are turned off, they generate a voltage surge
				that could damage other components if the diode was not there.
			</li>
			<li>
				<b>K1 to K4:</b> Relays to activate each lane's power.
				The relays are connected in the "normally closed" position
				so, even if the controller is powered off, the lanes will
				be powered on.
			</li>
			<li>
				<b>Jxy:</b> Connection to the lane 'x' (1 à 4) for the power supply (P),
				track (T) and accelerator (A).
				The power supply and the accelerator may be inverted to change
				the lane's running direction.
			</li>
			<li><b>RELAY_A# Lines:</b> Connected to the ATMega328.</li>
		</ul>
	</section>
@endsection
