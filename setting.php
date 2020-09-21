<?php


session_start();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>mytutorials.c1.biz/setting</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<style>
.dropbtn {
  background-color:#3f5efb;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3f5efb;}


}
</style>
</head>

<body>
<?php

if(!isset($_SESSION["email"]))
		{
			
				
			$URL="index.php";
                        echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
                        echo '<META HTTP-EQUIV="refresh" content="0;URL='.$URL.'">';
			
		}
?>
<script>
	
	function myCheckk()
		{
			if(f1.uid.value=="" && f1.myop.value=="" && f1.mynp.value=="" && f1.mycp.value=="" && f1.uname.value=="" && f1.uenroll.value=="")
				{
					
					return false;
								}
			else
				{
					return true;
				}
		}
	
	
	
	</script>
	<div style="position: absolute; top: 1%; left: 43%"><img src="090bb44e-9432-4632-8059-9e4f11a3c568_200x200.png"></div>
	
	<div style="position: absolute; right: 0%; top: 0%; height:50px; width: 145px; background-color: aliceblue">
		
		 
		
		<div class="dropdown">
  <button class="dropbtn">Profile&nbsp;<i class="fa fa-caret-down"></i></button>
  <div class="dropdown-content">
    <a href="setting.php">account setting</a>
	<a href="chat.php">Group Chat</a>
        <a href="home.php">Work</a>
        
    <a href="logout.php">logout</a>
   
  </div>
</div>
		
		<i class="fa fa-user-circle-o" style="font-size:35px; color: black; position: absolute; top: 20%; right: 6%"></i>
		
		
	</div>
	
	
	
<center>
	
		<div class="mydiv" style="background-color:#ffffff; color:white; background: rgba(0,0,0,0.5); width: 37%; font-size:20px; height: 350px" >
			
			<div  style="height: 10px; color: #fc4662"><h1><i>Update Profile</i></h1></div>
		
		<form action="setting.php" name="f1" onSubmit="return myCheckk()" >
			
		<br>
			<br>
		<br>
		
			
		<table align="center" width="60%" border="0">
			
			<tr>
			
				<td align="left">Enter EmailId : </td>
				<td align="center"><input type="email" name="uid" value="<?php echo $_SESSION['email'];?>" disabled="disabled"></td>
			
			</tr>
			
			<tr>
			
			<td align="left">Enter Name : </td>
			<td align="center"><input type="text" name="uname"></td>
			
			</tr>
			
			<tr>
			
				<td align="left">Enter EnrollmentId : </td>
				<td align="center"><input type="text" name="uenroll"></td>
			
			
			</tr>
			
			<tr>
			
				<td align="left">old Password :</td>
				<td align="center"> <input type="password" name="myop"></td>
			
			</tr>
			
			<tr>
			
				<td align="left">New Password :</td>
				<td align="center"> <input type="password" name="mynp"></td>
			
			</tr>
			
			
			<tr>
			
				<td align="left">Confirm Password :</td>
				<td align="center"> <input type="password" name="mycp"></td>
			
			</tr>
			
			<tr></tr>
			<tr></tr>
			<tr></tr>
			
			<tr>
			
				<td colspan="2" align="center"><input class="myButton" type="submit" name="btn" value="update"></td>
				
			
			</tr>
			
			
			
			
			
		  </table>
		
			
		
		
	
	
	</form>
		
		</div>
	
	
	</center>
<?php
		
		if(isset($_REQUEST["btn"]))
		{
			$id=$_SESSION["email"];
			$unm = $_REQUEST["uname"];
			$enroll=$_REQUEST["uenroll"];
			$mynp = $_REQUEST["mynp"];
			$mycp = $_REQUEST["mycp"];
			$myop=$_REQUEST["myop"];
			
			if($myop!=$_SESSION['myp'])
			{
				echo '<script>alert("old password is incorrect")</script>'; 
			}
			elseif($mynp!=$mycp)
			{
				echo '<script>alert("passwords didnt matched")</script>'; 
			}
			else
			{
				include("database.php");
			
				$qry="UPDATE mytutorial SET name='$unm',enroll='$enroll',pass='$mycp' WHERE id='$id'";
				if(mysqli_query($conn,$qry))
				{
				echo '<script>alert("Updated Succesfully!")</script>';	
					unset($_SESSION["uname"]);
					$_SESSION["uname"]=$unm;
					
			$URL="home.php";
                        echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
                        echo '<META HTTP-EQUIV="refresh" content="0;URL='.$URL.'">';
			
				}
				else
				{
				echo '<script>alert("Updation Failed!")</script>';
				}
			}
			
		}	
	?>
</body>
</html>