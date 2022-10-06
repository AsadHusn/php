<?php
// While
$i = 1;
while ($i <= 5) {
	echo $i, " ";
	$i++;
}

echo "<br>";

// do While
do {
	echo $i, " ";
	$i++;
} while ($i <= 10);

echo "<br>";

// For
for ($i=0; $i < 10; $i++) {
	echo $i, " ";
}

echo "<br>";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// For Each
foreach($age as $x => $val) {
	echo "$x = $val<br>";
}

?>