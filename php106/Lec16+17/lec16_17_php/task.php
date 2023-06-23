<html>
<body>
	<h1>
		form with post
	</h1>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label>
			Enter your first Name:
		</label>
		<input type="text" name="fName"><br>
		<label>
			Enter your second Name:
		</label>
		<input type="text" name="sName"><br>
		<input type="submit" value="save">
	</form>
<body>	
</html>
<?php
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$fName=$_REQUEST["fName"];
		$sName=$_REQUEST["sName"];
		if(empty($fName) or $fName==" ")
		{
			echo("First Name is empty<br>");
		}
		else if(empty($sName) or $sName==" ")
		{
			echo("Second Name is empty<br>");
		}
		else
		{
			echo("wlcome.... <mark>".$fName." ".$sName."</mark><br>");
		}
	}
?>