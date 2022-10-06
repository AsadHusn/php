<form>
Apple: <input type="checkbox" name="arr[]" value="apple"><br>
Banana: <input type="checkbox" name="arr[]" value="banana"><br>
Mango: <input type="checkbox" name="arr[]" value="mango"><br>
<input type="submit">
</form>

<?php

if($_POST != NULL)
{
	$fruits = $_POST["arr"];
	
	echo $fruits[0], "<br>";
	echo $fruits[1], "<br>";
	echo $fruits[2], "<br>";
}

?>

