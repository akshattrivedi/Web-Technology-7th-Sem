<html>
<head>
	<title> TESTING OF DATE AND TIME </title>
<style>
p{
	color:red;
	text-align: center;
	background: blue;
	font-size: 50px;
}
</style>
</head>
<body bgcolor="Yellow">


<?php 

echo "<p id=\"tab\">Today's date is :"; 
date_default_timezone_set("Asia/Kolkata");
$today = date("d/m/Y, h:i:s A"); 
echo $today; 
echo "</p>";

?> 
</body>
</html>
