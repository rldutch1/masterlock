<?php
for ($userinput=0; $userinput <=39; $userinput++){

//$color1 = "#C0C0C0"; //Row color for table rows.
//$color2 = "#F4F9FF"; //Row color for table rows.
//$row_count = 0; //Set row counter.

//Ask user for the second number of the combination.
//$userinput=$_POST["u"];
//if(isset($_POST['u'])){
//echo "You entered: " . $userinput;
if ($userinput > 39 || $userinput < 0){
	echo "<script type='text/javascript'>	alert('Number must be between 0 and 39!');</script>";
	}
else {
//PHP Range Function: range(low,high,step);
	$second = range(2,39,4); //Create array starting at number 2 to 39.
		if (in_array($userinput, $second)){//If the userinput is found in the array then $x=0.
			$x=0;//echo $x; //If it is zero start at 2 and add 4 until you get to 39.
			$first = range($x, 39, 4);
			$last = range($x, 39, 4);
//echo "<style>table {border-collapse: collapse;}</style>";
//echo "<table border='1'>";
					foreach($first as $position1 => $key1) {
					foreach($last as $position3 => $key3){

						$row_color = ($row_count % 2) ? $color1 : $color2;
						echo "insert into combinations (first, second, third) values (" . $key1 . "," . $userinput . "," . $key3 . ");<br />";
						$row_count++;
						}
						}
//echo "</table>";
			}
	$second = range(3,39,4); //Create array starting at number 3 to 39.
		if (in_array($userinput, $second)){ //If the userinput is found in the array then $x=1.
			$x=1;//echo $x; //If it is one start at 3 and add 4 until you get to 39.
			$first = range($x, 39, 4);
			$last = range($x, 39, 4);
//echo "<style>table {border-collapse: collapse;}</style>";
//echo "<table border='1'>";
					foreach($first as $position1 => $key1) {
					foreach($last as $position3 => $key3){

						$row_color = ($row_count % 2) ? $color1 : $color2;
						echo "insert into combinations (first, second, third) values (" . $key1 . "," . $userinput . "," . $key3 . ");<br />";
						$row_count++;
						}
						}
//echo "</table>";
			}
	$second = range(0,39,4); //Create array starting at number 0 to 39.
		if (in_array($userinput, $second)){ //If the userinput is found in the array then $x=2.
			$x=2;//echo $x; //If it is two start at 0 and add 4 until you get to 39.
			$first = range($x, 39, 4);
			$last = range($x, 39, 4);
//echo "<style>table {border-collapse: collapse;}</style>";
//echo "<table border='1'>";
					foreach($first as $position1 => $key1) {
					foreach($last as $position3 => $key3){

						$row_color = ($row_count % 2) ? $color1 : $color2;
						echo "insert into combinations (first, second, third) values (" . $key1 . "," . $userinput . "," . $key3 . ");<br />";
						$row_count++;
						}
						}
//echo "</table>";
			}
	$second = range(1,39,4); //Create array starting at number 1 to 39.
		if (in_array($userinput, $second)){ //If the userinput is found in the array then $x=3.
			$x=3;//echo $x; //If it is three start at 1 and add 4 until you get to 39.
			$first = range($x, 39, 4);
			$last = range($x, 39, 4);
echo "<style>table {border-collapse: collapse;}</style>";
echo "<table border='1'>";
					foreach($first as $position1 => $key1) {
					foreach($last as $position3 => $key3){

						$row_color = ($row_count % 2) ? $color1 : $color2;
						echo "insert into combinations (first, second, third) values (" . $key1 . "," . $userinput . "," . $key3 . ");<br />";
						$row_count++;
						}
						}
//echo "</table>";
			}
//echo "\r\n";
}
//}
} //Forloop.
?>
