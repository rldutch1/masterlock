<!DOCTYPE html>
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
//$color1 = "#C0C0C0";
//$color2 = "#F4F9FF";
//echo "<style>table {border-collapse: collapse;}</style>";
//echo "<table border='1'>";
for ($lastnumber=0; $lastnumber <=39; $lastnumber++){
//$_POST["u"] = 9;
//$lastnumber=$_POST["u"];
//if(isset($_POST['u'])){
//echo "You entered: " . $lastnumber;
if ($lastnumber > 39 || $lastnumber < 0){
	echo "<script type='text/javascript'>	alert('Number must be between 0 and 39!');</script>";
	}
else {
$lastnumber_remainder = ($lastnumber % 4); //Divide last number of combination by 4 and only get the remainder.
//PHP Range Function: range(low,high,step);
$first = range($lastnumber_remainder, 39, 4); //Add 4 to the remainder until 39 is reached.
//print_r ($first);

//echo "<br />First Number Array: " . json_encode($first) . "\r\n";

//Second number.
if ($lastnumber_remainder === 0){ //If it is zero start at 2 and add 4 until you get to 39.
	$second = range(2,39,4);
	}
else if ($lastnumber_remainder === 1){ //If it is one start at 3 and add 4 until you get to 39.
	$second = range(3,39,4);
	}
else if ($lastnumber_remainder === 2){ //If it is two start at 0 and add 4 until you get to 39.
	$second = range(0,39,4);
	}
else if ($lastnumber_remainder === 3){ //If it is three start at 1 and add 4 until you get to 39.
	$second = range(1,39,4);
	}

//		for ($count=0; $count <= 100; $count++) {
//			echo "Count is: " . $count . ", <br />";
//			}

						//$row_count = 0;
					foreach($first as $position1 => $key1) {
					foreach($second as $position2 => $key2){

						$row_color = ($row_count % 2) ? $color1 : $color2;
						//echo "<tr bgcolor='" . $row_color . "'><th></th><td>" . $key1 . "-" . $key2 . "-" . $lastnumber . "</td></tr>";
						echo "insert into masterlock (first, second, third) values (" . $key1 . "," . $key2 . "," . $lastnumber . ");<br />";
						//$row_count++;
			}
			}
} //Forloop.
echo "</table>";
}
//}

?>

