<!DOCTYPE html>
<html>
	<title>Spin-Dial Masterlock Picker Assistant</title>
	<head>Spin-Dial Masterlock Picker Assistant</head>
<body>
<form id="form1" name="form1" action="" method="post">
	Enter the last number of the combination: <input id="u" name="u" value="0" size="5" onblur="checkcell();"/>
	<input type="submit" name="submit">
</form>
<?php
//18-0-24
//First Number: Divide the third number in the combination by 4. Take the remainder and add 4 until you get to 39.
//This will produce all of the possible first numbers of the combination.

/*To get the second number use the following key:
0 --> 2
1 --> 3
2 --> 0
3 --> 1

If the remainder is one of these numbers:
	If it is zero start at 2 and add 4 until you get to 39.
	If it is one start at 3 and add 4 until you get to 39.
	If it is two start at 0 and add 4 until you get to 39.
	If it is three start at 1 and add 4 until you get to 39.
*/

//$number = range(0,50,10);
//print_r ($number);
$u=$_POST["u"];
//$u = 33;
$firstremainder = ($u % 7);
//echo "The remainder is: " . ($u % 4);
//print_r ($firstremainder);
//print "First Number: " . range($first, 39, 4) . "\r\n";
$first = range($firstremainder, 39, 5);
//print_r ($first);

	$a  = $first[0];
	$b  = $first[1];
	$c  = $first[2];
	$d  = $first[3];
	$e  = $first[4];
	$f  = $first[5];
	$g  = $first[6];
	$h  = $first[7];
	$i  = $first[8];
	$j  = $first[9];

//echo "<br />First Number Array: " . json_encode($first) . "\r\n";

//Second number is not working yet.
if ($firstremainder === 0){
//	echo "<br />Remainder 0<br />";
	$second = range(2,39,4);
//	echo "<br />Second Number Array: " . json_encode($second) . "<br />";
			$k = $second[0];
			$l = $second[1];
			$m = $second[2];
			$n = $second[3];
			$o = $second[4];
			$p = $second[5];
			$q = $second[6];
			$r = $second[7];
			$s = $second[8];
			$t = $second[9];

	}
else if ($firstremainder === 1){
//	echo "<br />Remainder 1<br />";
	$second = range(3,39,4);
//	echo "<br />Second Number Array: " . json_encode($second) . "<br />";
			$k = $second[0];
			$l = $second[1];
			$m = $second[2];
			$n = $second[3];
			$o = $second[4];
			$p = $second[5];
			$q = $second[6];
			$r = $second[7];
			$s = $second[8];
			$t = $second[9];

	}
else if ($firstremainder === 2){
//	echo "<br />Remainder 2<br />";
	$second = range(0,39,4);
//	echo "<br />Second Number Array: " . json_encode($second) . "<br />";
			$k = $second[0];
			$l = $second[1];
			$m = $second[2];
			$n = $second[3];
			$o = $second[4];
			$p = $second[5];
			$q = $second[6];
			$r = $second[7];
			$s = $second[8];
			$t = $second[9];

	}
else if ($firstremainder === 3){
//	echo "<br />Remainder 3<br />";
	$second = range(0,39,4);
//	echo "<br />Second Number Array: " . json_encode($second) . "<br />";
			$k = $second[0];
			$l = $second[1];
			$m = $second[2];
			$n = $second[3];
			$o = $second[4];
			$p = $second[5];
			$q = $second[6];
			$r = $second[7];
			$s = $second[8];
			$t = $second[9];

	}

echo $a."-".$k."-".$u."<br />";
echo $a."-".$l."-".$u."<br />";
echo $a."-".$m."-".$u."<br />";
echo $a."-".$n."-".$u."<br />";
echo $a."-".$o."-".$u."<br />";
echo $a."-".$p."-".$u."<br />";
echo $a."-".$q."-".$u."<br />";
echo $a."-".$r."-".$u."<br />";
echo $a."-".$s."-".$u."<br />";
echo $a."-".$t."-".$u."<br />";
echo $b."-".$k."-".$u."<br />";
echo $b."-".$l."-".$u."<br />";
echo $b."-".$m."-".$u."<br />";
echo $b."-".$n."-".$u."<br />";
echo $b."-".$o."-".$u."<br />";
echo $b."-".$p."-".$u."<br />";
echo $b."-".$q."-".$u."<br />";
echo $b."-".$r."-".$u."<br />";
echo $b."-".$s."-".$u."<br />";
echo $b."-".$t."-".$u."<br />";
echo $c."-".$k."-".$u."<br />";
echo $c."-".$l."-".$u."<br />";
echo $c."-".$m."-".$u."<br />";
echo $c."-".$n."-".$u."<br />";
echo $c."-".$o."-".$u."<br />";
echo $c."-".$p."-".$u."<br />";
echo $c."-".$q."-".$u."<br />";
echo $c."-".$r."-".$u."<br />";
echo $c."-".$s."-".$u."<br />";
echo $c."-".$t."-".$u."<br />";
echo $d."-".$k."-".$u."<br />";
echo $d."-".$l."-".$u."<br />";
echo $d."-".$m."-".$u."<br />";
echo $d."-".$n."-".$u."<br />";
echo $d."-".$o."-".$u."<br />";
echo $d."-".$p."-".$u."<br />";
echo $d."-".$q."-".$u."<br />";
echo $d."-".$r."-".$u."<br />";
echo $d."-".$s."-".$u."<br />";
echo $d."-".$t."-".$u."<br />";
echo $e."-".$k."-".$u."<br />";
echo $e."-".$l."-".$u."<br />";
echo $e."-".$m."-".$u."<br />";
echo $e."-".$n."-".$u."<br />";
echo $e."-".$o."-".$u."<br />";
echo $e."-".$p."-".$u."<br />";
echo $e."-".$q."-".$u."<br />";
echo $e."-".$r."-".$u."<br />";
echo $e."-".$s."-".$u."<br />";
echo $e."-".$t."-".$u."<br />";
echo $f."-".$k."-".$u."<br />";
echo $f."-".$l."-".$u."<br />";
echo $f."-".$m."-".$u."<br />";
echo $f."-".$n."-".$u."<br />";
echo $f."-".$o."-".$u."<br />";
echo $f."-".$p."-".$u."<br />";
echo $f."-".$q."-".$u."<br />";
echo $f."-".$r."-".$u."<br />";
echo $f."-".$s."-".$u."<br />";
echo $f."-".$t."-".$u."<br />";
echo $g."-".$k."-".$u."<br />";
echo $g."-".$l."-".$u."<br />";
echo $g."-".$m."-".$u."<br />";
echo $g."-".$n."-".$u."<br />";
echo $g."-".$o."-".$u."<br />";
echo $g."-".$p."-".$u."<br />";
echo $g."-".$q."-".$u."<br />";
echo $g."-".$r."-".$u."<br />";
echo $g."-".$s."-".$u."<br />";
echo $g."-".$t."-".$u."<br />";
echo $h."-".$k."-".$u."<br />";
echo $h."-".$l."-".$u."<br />";
echo $h."-".$m."-".$u."<br />";
echo $h."-".$n."-".$u."<br />";
echo $h."-".$o."-".$u."<br />";
echo $h."-".$p."-".$u."<br />";
echo $h."-".$q."-".$u."<br />";
echo $h."-".$r."-".$u."<br />";
echo $h."-".$s."-".$u."<br />";
echo $h."-".$t."-".$u."<br />";
echo $i."-".$k."-".$u."<br />";
echo $i."-".$l."-".$u."<br />";
echo $i."-".$m."-".$u."<br />";
echo $i."-".$n."-".$u."<br />";
echo $i."-".$o."-".$u."<br />";
echo $i."-".$p."-".$u."<br />";
echo $i."-".$q."-".$u."<br />";
echo $i."-".$r."-".$u."<br />";
echo $i."-".$s."-".$u."<br />";
echo $i."-".$t."-".$u."<br />";
echo $j."-".$k."-".$u."<br />";
echo $j."-".$l."-".$u."<br />";
echo $j."-".$m."-".$u."<br />";
echo $j."-".$n."-".$u."<br />";
echo $j."-".$o."-".$u."<br />";
echo $j."-".$p."-".$u."<br />";
echo $j."-".$q."-".$u."<br />";
echo $j."-".$r."-".$u."<br />";
echo $j."-".$s."-".$u."<br />";
echo $j."-".$t."-".$u."<br />";

?>


</body>
</html>