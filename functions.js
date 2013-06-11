
$(function() {
	var spinner = $( "#spinner" ).spinner();
	$( "#disable" ).click(function() {
		if ( spinner.spinner( "option", "disabled" ) ) {
			spinner.spinner( "enable" );
		} else {
			spinner.spinner( "disable" );
		}
		 $( "button" ).button();
	});
});

$(document).ready(function() {
	$("#GetSettings").button()
		.click(function() {
			$("#Results").load("writeread.php",{gcode:"$$"});
	});
});

$(document).ready(function() {
	$("#ShowHelp").button()
		.click(function() {
			$("#Results").load("writeread.php",{gcode:"$h"});
	});
});

$(document).ready(function() {
	$("#SendCommand").button()
		.click(function() {
			$("#Results").load("writeread.php",{gcode:$("#CommandInput").val()});
	});
});

$(document).ready(function() {
	$("#Xplus").button()
		.click(function() {
			var sendcode = "G91 G0 X" + $("#spinner").val()
			$("#Results").load("writeread.php",{gcode:sendcode});
	});
});

$(document).ready(function() {
	$("#Xminus").button()
		.click(function() {
			var sendcode = "G91 G0 X-" + $("#spinner").val()
			$("#Results").load("writeread.php",{gcode:sendcode});
	});
});

$(document).ready(function() {
	$("#Yminus").button()
		.click(function() {
			var sendcode = "G91 G0 Y-" + $("#spinner").val()
			$("#Results").load("writeread.php",{gcode:sendcode});
	});
});

$(document).ready(function() {
	$("#Yplus").button()
		.click(function() {
			var sendcode = "G91 G0 Y" + $("#spinner").val()
			$("#Results").load("writeread.php",{gcode:sendcode});
	});
});

$(document).ready(function() {
	$("#Zminus").button()
		.click(function() {
			var sendcode = "G91 G0 Z-" + $("#spinner").val()
			$("#Results").load("writeread.php",{gcode:sendcode});
	});
});

$(document).ready(function() {
	$("#Zplus").button()
		.click(function() {
			var sendcode = "G91 G0 Z" + $("#spinner").val()
			$("#Results").load("writeread.php",{gcode:sendcode});
	});
});
