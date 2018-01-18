<!DOCTYPE html>
<html>
<head>
	<title>Onkunde</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<h1>MadLibs</h1>

	<div id="story">
	<?php
		$in_1 = $_POST['input_1'];
		$in_2 = $_POST['input_2'];
		$in_3 = $_POST['input_3'];
		$in_4 = $_POST['input_4'];
		$in_5 = $_POST['input_5'];
		$in_6 = $_POST['input_6'];

		echo "<p>*Someones ringing on the door, so you walk towards it and open it*</p>";
		echo "<p> 'Ahh, Goodmorning sir! My name is $in_1. I wanted to ask you, are you interested in $in_2?'</p>";
		echo "<p> 'Yes, sure, sign me up! My name is $in_3, but can i ask you how much they cost?'</p>";
		echo "<p> 'Yeah sure, they cost about $in_5 but dont be worried, you can $in_4 with them all the time'</p>";
		echo "<p> 'Well, $in_6 off then! you scammer!'</p>";

	?>
	</div>

</body>
</html>