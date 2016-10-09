<!DOCTYPE html>
<html>
	<title>Spin-Dial Masterlock Combination Assistant</title>
	<head><b>Spin-Dial Masterlock Combination Assistant</b><br />This tool will narrow your choices down to 100 possible combinations if you only know the <b><u>first</u></b> number of the combination.
	<br />Click <a href="masterlock1.php"><b>here</b></a> if you only know the <b><u>first</u></b> number of the combination.
	<br />Click <a href="masterlock2.php"><b>here</b></a> if you only know the <b><u>second</u></b> number of the combination.
	<br />Click <a href="masterlock3.php"><b>here</b></a> if you only know the <b><u>third</u></b> number of the combination.
	<br /><br /></head>
<body>
<form id="form1" name="form1" action="" method="post">
	Enter the first number of the combination: <input id="u" name="1st" value="0" size="5"/>
	<input type="submit" name="submit">
</form>
<?php
//First Number: Divide the third number in the combination by 4. Take the remainder and add 4 until you get to 39.
//This will produce all of the possible first numbers of the combination.

/*To get all possible second numbers use the following key for the remainder:
If the remainder is one of these numbers:
	If remainder is "zero" start at 2 and add 4 until you get to 39.
	If remainder is "one" start at 3 and add 4 until you get to 39.
	If remainder is "two" start at 0 and add 4 until you get to 39.
	If remainder is "three" start at 1 and add 4 until you get to 39.
*/
$color1 = "#C0C0C0";
$color2 = "#F4F9FF";

$firstnumber=$_POST["1st"];
if(isset($_POST['1st'])){
echo "You entered: " . $firstnumber;
if ($firstnumber > 39 || $firstnumber < 0){
	echo "<script type='text/javascript'>	alert('Number must be between 0 and 39!');</script>";
	}
else {
$firstnumber_remainder = ($firstnumber % 4); //Divide first number of combination by 4 and only get the remainder.
//PHP Range Function: range(low,high,step);
$last = range($firstnumber_remainder, 39, 4); //Add 4 to the firstnumber_remainder until 39 is reached.
//print_r ($last);

//echo "<br />First Number Array: " . json_encode($last) . "\r\n";

//Second number.
if ($firstnumber_remainder === 0){ //If it is zero start at 2 and add 4 until you get to 39.
	$second = range(2,39,4);
	}
else if ($firstnumber_remainder === 1){ //If it is one start at 3 and add 4 until you get to 39.
	$second = range(3,39,4);
	}
else if ($firstnumber_remainder === 2){ //If it is two start at 0 and add 4 until you get to 39.
	$second = range(0,39,4);
	}
else if ($firstnumber_remainder === 3){ //If it is three start at 1 and add 4 until you get to 39.
	$second = range(1,39,4);
	}


//		for ($count=0; $count <= 100; $count++) {
//			echo "Count is: " . $count . ", <br />";
//			}
echo "<style>table {border-collapse: collapse;}</style>";
echo "<table border='1'>";
						$row_count = 0;
					foreach($last as $position1 => $lastnumber) {
					foreach($second as $position2 => $middlenumber){

						$row_color = ($row_count % 2) ? $color1 : $color2;
						echo "<tr bgcolor='" . $row_color . "'><th>" . ($row_count + 1) . "</th><td>" . $firstnumber . "-" . $middlenumber . "-" . $lastnumber . "</td></tr>";
						$row_count++;
			}
			}

echo "</table>";

}}
?>
</body>
</html>