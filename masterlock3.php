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
<b>Spin-Dial Masterlock Combination Assistant</b><br />This page will narrow your choices down to 100 possible combinations if you only know the <b><u>Third</u></b> number of the combination.
	<br /><a href="masterlock1.php"><b class="button">Click here if you only know the <b><u>first</u></b> number of the combination.</b></a>
	<br /><a href="masterlock2.php"><b class="button">Click here if you only know the <b><u>second</u></b> number of the combination.</b></a>
	<br /><a href="masterlock3.php"><b class="button">Click here if you only know the <b><u>third</u></b> number of the combination.</b></a>
	<br /><br />
<form id="form1" name="form1" action="" method="post">
	Enter the third number of the combination: <input id="u" name="u" value="0" size="5"/>
	<input type="submit" value="submit" name="submit">
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

if(isset($_POST['submit'])){
$lastnumber=$_POST["u"];
if ($lastnumber > 39 || $lastnumber < 0){
	echo "<script type='text/javascript'>	alert('Number must be between 0 and 39!');</script>";
	}
else {
echo "<br /><h2>All possible combinations with " . $lastnumber . " as the last number.</h2>";
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

echo "<hr /><br /><table border='1'><tr><th>Row</th><th>Combinations</th></tr>";
						$row_count = 0;
					foreach($first as $position1 => $firstnumber) {
					foreach($second as $position2 => $middlenumber){

						$row_color = ($row_count % 2) ? $color1 : $color2;
						echo "<tr bgcolor='" . $row_color . "'><td id='column1'>" . ($row_count + 1) . "</td><td id='column2'>" . $firstnumber . "-" . $middlenumber . "-" . $lastnumber . "</td></tr>";
						$row_count++;
			}
			}

echo "</table>";
}}
?>
</body>
</html>
