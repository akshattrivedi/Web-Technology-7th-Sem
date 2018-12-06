<html>
	<head>
		<title>php Calculator</title>
	</head>
	<body>
	<form method="post">
		<table>
			<tr><td>First Number:</td><td> <input type="number" name="n1"></td></tr>
			<tr><td>Second Number:</td><td> <input type="number" name="n2"></td></tr>
			<br><br>
		</table>
		<table>
			<tr><td><input type="submit" value="+" name="op"></td>
			<td><input type="submit" value="-" name="op"></td>
			<td><input type="submit" value="*" name="op"></td>
			<td><input type="submit" value="/" name="op"></td></tr>
			<tr><td><h3 bgcolor="green">Result is: </h3></td></tr>

		</table>
	</form>
	<?php
		$num1 = $_POST['n1'];
		$num2 = $_POST['n2'];
		$oprnd = $_POST['op'];

		switch($oprnd)
		{
		case '+': $res = $num1 + $num2;
			break;
		case '-': $res = $num1 - $num2;
			break;
		case '*': $res = $num1 * $num2;
			break;
		case '/': $res = $num1 / $num2;
			break;
		}
		echo $res
	?>
	</body>
</html>


