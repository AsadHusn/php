<?php include "header.html";?>
	<form action="2. Calculator.php" method="get">
		N1: <input type="number" name="n1">
		<br>
		N2: <input type="number" name="n2">
		<br>
		<input type="submit">
	</form>

	<?php 
		// if($_GET != null)
		$_GET["n1"] = null;
		echo $_GET["n1"];
	?>
<?php include "footer.html";?>