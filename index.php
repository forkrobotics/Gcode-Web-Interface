<?php

?>

<!doctype html>
<html lang="en">
<head>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="/resources/demos/external/jquery.mousewheel.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="functions.js"></script>
</head>
<body>

<button id="GetSettings">Get TinyG Settings</button>
<p>
<label for="spinner">Select a value:</label>
<input id="spinner" name="value" />
</p>

<button id="Xplus">X+</button>
<button id="Xminus">X-</button>
<button id="Yplus">Y+</button>
<button id="Yminus">Y-</button>
<button id="Zplus">Z+</button>
<button id="Zminus">Z-</button>

<p />
<input id="CommandInput" type="text" />
<button id="SendCommand">Send Command</button>

<div id="Results" />
</body>