<?php

session_start();


		if(isset($_COOKIE["email"]))
		{
		
			$_SESSION["email"]=$_COOKIE["email"];
			$URL="home.php";
                        echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
                        echo '<META HTTP-EQUIV="refresh" content="0;URL='.$URL.'">';
			
		}
	


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>mytutorials.c1.biz/index</title>
	
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	
	<script>
	
	function myCheckk()
		{
			if(f1.uid.value=="" && f1.myp.value=="")
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
	
		<div class="mydiv"  style="background-color:#ffffff; color:white; background: rgba(0,0,0,0.5); width: 37%; font-size:20px; height: 300px" >
			
			<div  style="height: 10px; color: #fc4662"><h1><i>Login</i></h1></div>
		
		<form action="index.php" name="f1" onSubmit="return myCheckk()" >
			
		<br>
			<br>
		<br>
		
			
		<table align="center" width="60%" border="0">
			
			
			<tr>
			
				<td align="left">Enter EmailId : </td>
				<td align="center"><input type="email" name="uid"></td>
			
			</tr>
			
			<tr>
			
				<td align="left">Enter Password :</td>
				<td align="center"> <input type="password" name="myp"></td>
			
			</tr>
			
			<tr></tr>
			
			<tr>
				
				
			
				<td align="left" colspan="2"><input type="checkbox" value="keepme" name="keep">Keep Me login</td>
				
			
			</tr>
			
			<tr></tr>
			<tr></tr>
			
			<tr>
			
				<td colspan="2" align="center"><input class="myButton" type="submit" name="btn" value="Login"></td>
				
			
			</tr>
			
			<tr></tr>
			<tr></tr>
			<tr></tr>
			
			<tr>
			<td align="left">Not registered?</td>
			<td align="left"><a href="register.php" style="color: white">signup here</a></td>
			</tr>
			
			
			
			</table>
		
			
		
		
	
	
	</form>
	<?php
	date_default_timezone_set('Asia/Kolkata');
	
	if(isset($_REQUEST["btn"])) 
    {     

        $id = $_REQUEST["uid"]; 
        $p = $_REQUEST["myp"]; 
		
		
			if(isset($_REQUEST["keep"]))
			{
			setcookie("email",$id,time()+(86400),"/");
			}
			
		
		include("database.php");
		
		$qry="SELECT * FROM mytutorial WHERE id = '$id' ";
       
        $res = mysqli_query($conn,$qry);
								$num_row= mysqli_num_rows($res);
								//$row = mysqli_fetch_array($result);
								if($rec = mysqli_fetch_row($res))
								{
									if($rec[2]==$id)
									{
										if($rec[3]==$p)
										{
											$_SESSION["email"]=$id;
											$_SESSION["uname"]=$rec[0];
											$_SESSION["myp"]=$p;
											$_SESSION["tym"]=date("m/d/Y h:i A.", time());
											$URL="home.php";
                                                                                        echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
                                                                                        echo '<META HTTP-EQUIV="refresh" content="0;URL='.$URL.'">';
										}
										else
										{
											echo "<script>alert('Incorrect Password')</script>";
										}
									}
								}
								else
								{
									echo "<script>alert('Incorrect id')</script>";
								}
							}
	
	?>
        </div>
	
	
	</center>
	
	
	
	
</body>
</html>