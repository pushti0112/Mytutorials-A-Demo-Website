<?php

session_start();


		if(isset($_COOKIE["email"]))
		{
		
			$_SESSION["email"]=$_COOKIE["email"];
			
			$URL="http://mytutorials.c1.biz/home.php";
			echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
			echo '<META HTTP-EQUIV="refresh" content="0;URL='.$URL.'">';
			
			
		}
	


?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>mytutorials.c1.biz/register</title>
	
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	
	
	<script>
	
	function myCheckk()
		{
			if(f1.uid.value=="" && f1.myp.value=="" && f1.uname.value=="" && f1.uenroll.value=="")
				{
					
					return false;
								}
			else
				{
					return true;
				}
		}
	
	
	
	</script>
	<center><img src="090bb44e-9432-4632-8059-9e4f11a3c568_200x200.png"></center>
	
	
	<center>
	
		<div class="mydiv" style="background-color:#ffffff; color:white; background: rgba(0,0,0,0.5); width: 37%; font-size:20px; height: 280px" >
			
			<div  style="height: 10px; color: #fc4662"><h1><i>Register</i></h1></div>
		
		<form action="register.php" name="f1" onSubmit="return myCheckk()" >
			
		<br>
			<br>
		<br>
		
			
		<table align="center" width="60%" border="0">
			
			<tr>
			
			<td align="left">Enter Name : </td>
			<td align="center"><input type="text" name="uname"></td>
			
			</tr>
			
			<tr>
			
				<td align="left">Enter EnrollmentId : </td>
				<td align="center"><input type="text" name="uenroll"></td>
			
			
			</tr>
			
			<tr>
			
				<td align="left">Enter EmailId : </td>
				<td align="center"><input type="email" name="uid"></td>
			
			</tr>
			
			<tr>
			
				<td align="left">Create Password :</td>
				<td align="center"><input type="password" name="myp"></td>
			
			</tr>
			
			<tr></tr>
			<tr></tr>
			<tr></tr>
			
			<tr>
			
				<td colspan="2" align="center"><input class="myButton" type="submit" name="btn" value="signup"></td>
				
			
			</tr>
			
			
			
			
			
			</table>
		
			
		
		
	
	
	</form>
		
		</div>
	
	
	</center>
	
	<?php
	
	
	if(isset($_REQUEST["btn"]))
	{
	
	$id=$_REQUEST["uid"];
	$name=$_REQUEST["uname"];
	$enroll=$_REQUEST["uenroll"];
	$p=$_REQUEST["myp"];
		
	
		include("database.php");
		
		$qry="insert into mytutorial values('$name','$enroll','$id','$p')";
		
		
		if(mysqli_query($conn,$qry))
		{
			echo "<div style='background-color: aliceblue'>saved.$p</div>";
			
			$URL="http://mytutorials.c1.biz/index.php";
			echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
			echo '<META HTTP-EQUIV="refresh" content="0;URL='.$URL.'">';
			
			
		}
		else
		{
			echo "<div style='background-color: aliceblue'>unsaved.</div>".mysqli_error($conn);
		}
		
		
		
	}
	
	?>
	
	
	
	
	
</body>
</html>