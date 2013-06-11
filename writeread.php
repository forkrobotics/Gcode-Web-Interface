<?php
	$gcode = $_REQUEST["gcode"];
	function microtime_float(){
		list($usec, $sec) = explode(" ", microtime());
		return ((float)$usec + (float)$sec);
	}

	include("php_serial.class.php");

	$serial = new phpSerial;

	// First we must specify the device. This works on both linux and windows (if
	// your linux serial device is /dev/ttyS0 for COM1, etc)
	$serial->deviceSet("/dev/ttyUSB0");

	// We can change the baud rate, parity, length, stop bits, flow control
	$serial->confBaudRate(115200);
	$serial->confParity("none");
	$serial->confCharacterLength(8);
	$serial->confStopBits(1);
	$serial->confFlowControl("none");

	// Then we need to open it
	$serial->deviceOpen();

	// To write into
	$serial->sendMessage($gcode . "\r\n"); 
	sleep(1);
	
	$read = '';
	$theResult = '';
	$start = microtime_float();
	while ( ($read == '') && (microtime_float() <= $start + 0.5) ) {
		$read = $serial->readPort();
		if ($read != '') {
			$theResult .= $read;
			$read = '';
		}
	}

	$serial->deviceClose();
	if ($theResult == NULL) print "nothing here";
	print "<pre>";
	print $theResult . "\n";
	print "</pre>";
?>