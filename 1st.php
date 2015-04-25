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
for ($firstnumber=0; $firstnumber <=39; $firstnumber++){
//$firstnumber=$_POST["u"];
//if(isset($_POST['u'])){
//echo "You entered: " . $firstnumber;
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
//echo "<style>table {border-collapse: collapse;}</style>";
//echo "<table border='1'>";
						$row_count = 0;
					foreach($last as $position1 => $lastnumber) {
					foreach($second as $position2 => $middlenumber){

						$row_color = ($row_count % 2) ? $color1 : $color2;
						echo "insert into combinations (first, second, third, position) values (" . $firstnumber . "," . $middlenumber . "," . $lastnumber . ",1);<br />";
						$row_count++;
			}
			}

//echo "</table>";

}
//}
}
?>
