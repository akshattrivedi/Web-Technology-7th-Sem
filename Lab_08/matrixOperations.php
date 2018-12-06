<html>
	<head>
		<title>Matrix Transpose</title>
	</head>
	<body>
	<h1>MATRIX TRANSPOSE</h1>
	<h2>ORIGINAL MATRIX</h2>
	<?php
		$mat =array(array(1,2,3),array(4,5,6),array(7,8,9));
		for($i=0;$i<3;$i++){
			for($j=0;$j<3;$j++)
			{
				echo $mat[$i][$j]."&nbsp;&nbsp;";
			}
			echo "<br>";
		}
	?>
	<h2>TRANSPOSE MATRIX</h2>
	<?php
	//	header("Content-Type:text/plain");
		$mat =array(array(1,2,3),array(4,5,6),array(7,8,9));
		for($i=0;$i<3;$i++){
			for($j=0;$j<3;$j++)
			{
				echo $mat[$j][$i]."&nbsp&nbsp";
			}
			echo "<br>";
		}
	?>
	
	<h1>MULTIPLICATION AND ADDITION</h1>
	<?php
		$mat1 = array(array(1,2,3),array(4,5,6),array(7,8,9));
		$mat2 = array(array(9,8,7),array(6,5,4),array(3,2,1));
		$r1 = count($mat1);
		$c1 = count($mat1[0]);
		$r2 = count($mat2);
		$c2 = count($mat2[0]);
		echo "<h2>MATRIX 1</h2>";
		for($i=0;$i<$r1;$i++){
			for($j=0;$j<$c1;$j++)
			{
				echo $mat1[$i][$j]."&nbsp&nbsp";
			}
			echo "<br>";
		}
		echo "<h2>MATRIX 2</h2>";
		for($i=0;$i<$r2;$i++){
			for($j=0;$j<$c2;$j++)
			{
				echo $mat2[$i][$j]."&nbsp&nbsp";
			}
			echo "<br>";
		}
		echo "<h2>MULTIPLICATION</h2>";
		for($i=0;$i<$r1;$i++){
			for($j=0;$j<$c2;$j++)
			{
				$value = $mat1[$i][$j] * $mat2[$i][$j];
				echo $value."&nbsp&nbsp";
			}
			echo "<br>";
		}
		echo "<h2>ADDITION</h2>";
		for($i=0;$i<$r1;$i++){
			for($j=0;$j<$c2;$j++)
			{
				$value = $mat1[$i][$j] + $mat2[$i][$j];
				echo $value."&nbsp&nbsp";
			}
			echo "<br>";
		}
	?>
		
	
	</body>
</html>
