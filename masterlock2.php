<!DOCTYPE html>
<html>
	<title>Spin-Dial Masterlock Combination Assistant</title>
	<head></head>
<style>
table {border-collapse: collapse; width: 10%; font-size:20px;}
tr {height: 5px;}
th {text-align: left; height: 10px;}
td {padding-left: 5px; height: 10px;}
#column1 {text-align: left;}
#column2 {text-align: center;}
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
<body>
<b>Spin-Dial Masterlock Combination Assistant</b><br />This page will narrow your choices down to 100 possible combinations if you only know the <b><u>Second</u></b> number of the combination.
	<br /><a href="masterlock1.php"><b class="button">Click here if you only know the <b><u>first</u></b> number of the combination.</b></a>
	<br /><a href="masterlock2.php"><b class="button">Click here if you only know the <b><u>second</u></b> number of the combination.</b></a>
	<br /><a href="masterlock3.php"><b class="button">Click here if you only know the <b><u>third</u></b> number of the combination.</b></a>
	<br /><br />
<form id="form1" name="form1" action="" method="post">
	Enter the second number of the combination: <input id="u" name="u" value="0" size="5"/>
	<input type="submit" value="submit" name="submit">
</form>
<?php
$color1 = "#C0C0C0"; //Row color for table rows.
$color2 = "#F4F9FF"; //Row color for table rows.
$row_count = 0; //Set row counter.

//Ask user for the second number of the combination.
if(isset($_POST['submit'])){
$userinput=$_POST["u"];
if ($userinput > 39 || $userinput < 0){
	echo "<script type='text/javascript'>	alert('Number must be between 0 and 39!');</script>";
	}
else {
echo "<br /><h2>All possible combinations with " . $userinput . " as the second number.</h2>";
//PHP Range Function: range(low,high,step);
	$second = range(2,39,4); //Create array starting at number 2 to 39.
		if (in_array($userinput, $second)){//If the userinput is found in the array then $x=0.
			$x=0;//echo $x; //If it is zero start at 2 and add 4 until you get to 39.
			$first = range($x, 39, 4);
			$last = range($x, 39, 4);

echo "<hr /><br /><table border='1'><tr><th>Row</th><th>Combinations</th></tr>";
					foreach($first as $position1 => $key1) {
					foreach($last as $position3 => $key3){

						$row_color = ($row_count % 2) ? $color1 : $color2;
						echo "<tr bgcolor='" . $row_color . "'><td id='column1'>" . ($row_count + 1) . "</td><td id='column2'>" . $key1 . "-" . $userinput . "-" . $key3 . "</td></tr>";
						$row_count++;
						}
						}
echo "</table>";
			}
	$second = range(3,39,4); //Create array starting at number 3 to 39.
		if (in_array($userinput, $second)){ //If the userinput is found in the array then $x=1.
			$x=1;//echo $x; //If it is one start at 3 and add 4 until you get to 39.
			$first = range($x, 39, 4);
			$last = range($x, 39, 4);

echo "<hr /><br /><table border='1'><tr><th>Row</th><th>Combinations</th></tr>";
					foreach($first as $position1 => $key1) {
					foreach($last as $position3 => $key3){

						$row_color = ($row_count % 2) ? $color1 : $color2;
						echo "<tr bgcolor='" . $row_color . "'><td id='column1'>" . ($row_count + 1) . "</td><td id='column2'>" . $key1 . "-" . $userinput . "-" . $key3 . "</td></tr>";
						$row_count++;
						}
						}
echo "</table>";
			}
	$second = range(0,39,4); //Create array starting at number 0 to 39.
		if (in_array($userinput, $second)){ //If the userinput is found in the array then $x=2.
			$x=2;//echo $x; //If it is two start at 0 and add 4 until you get to 39.
			$first = range($x, 39, 4);
			$last = range($x, 39, 4);
echo "<hr /><br /><table border='1'><tr><th>Row</th><th>Combinations</th></tr>";
					foreach($first as $position1 => $key1) {
					foreach($last as $position3 => $key3){

						$row_color = ($row_count % 2) ? $color1 : $color2;
						echo "<tr bgcolor='" . $row_color . "'><td id='column1'>" . ($row_count + 1) . "</td><td id='column2'>" . $key1 . "-" . $userinput . "-" . $key3 . "</td></tr>";
						$row_count++;
						}
						}
echo "</table>";
			}
	$second = range(1,39,4); //Create array starting at number 1 to 39.
		if (in_array($userinput, $second)){ //If the userinput is found in the array then $x=3.
			$x=3;//echo $x; //If it is three start at 1 and add 4 until you get to 39.
			$first = range($x, 39, 4);
			$last = range($x, 39, 4);

echo "<hr /><br /><table border='1'><tr><th>Row</th><th>Combinations</th></tr>";
					foreach($first as $position1 => $key1) {
					foreach($last as $position3 => $key3){

						$row_color = ($row_count % 2) ? $color1 : $color2;
						echo "<tr bgcolor='" . $row_color . "'><td id='column1'>" . ($row_count + 1) . "</td><td id='column2'>" . $key1 . "-" . $userinput . "-" . $key3 . "</td></tr>";
						$row_count++;
						}
						}
echo "</table>";
			}
echo "\r\n";
}}
?>
</body>
</html>
