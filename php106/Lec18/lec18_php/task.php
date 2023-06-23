<html>
<body>
	<h1>
		form with get
	</h1>
	<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label>
			Enter your first Name:
		</label>
		<input type="text" name="fName"><br><br>
		<label>
			Enter your second Name:
		</label>
		<input type="text" name="sName"><br><br>
		<label>
			Enter your email:
		</label>
		<input type="email" name="email"><br><br>		
		<input type="submit" value="save">
	</form>
<body>	
</html>
<?php
	if($_SERVER['REQUEST_METHOD']=="GET")
	{
		$fName=$_REQUEST["fName"];
		$sName=$_REQUEST["sName"];
		$email=$_REQUEST["email"];
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
			echo("wlcome.... <mark>".$fName."</mark><br>");
			echo("First Name: ".$fName."<br>");
			echo("Second Name: ".$sName."<br>");
			if(empty($email))
			{
				echo("you did not entered an email!<br>");
			}
			else
			{
			echo("your Email: ".$email."<br>");
			}	
		}
	}
?>