<?php


session_start();
$page = $_SERVER['PHP_SELF'];
$sec = "10";

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
 <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
<title>mytutorials.c1.biz/chat</title>
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
		
		.mytext
{
	padding: 3px;
     font-size: 20px;
     border-width: 1px;
     border-color: #CCCCCC;
     background-color: #ffffff;
     color: #000000;
     border-style: solid;
     border-radius: 17px;
     box-shadow: 0px 0px 5px rgba(66,66,66,.75);
     text-shadow:none;
	outline:none;
	width: 87%;
	text-align: left;
	
	
	
}
		
	.myButt {
	background-color:#fc466b;
	border-radius:27px;
	border:1px solid #fc466b;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:14px;
	padding:5px 9px;
	text-decoration:none;
	position: absolute;
	top: 10px;
	right: 3%;
}
		
.bubble
{
	
	
   position: absolute;
   width: 220px;
   height: 50px;
   padding: 4px 5px;
   background: #3f5efb;
   -webkit-border-radius: 0px;
   -moz-border-radius: 0px;
   border-radius: 0px;
}

.bubble:after
{
    content: '';
    position: absolute;
    border-style: solid;
    border-width: 8px 0 8px 16px;
    border-color: transparent #3f5efb;
    display: block;
    width: 0;
    z-index: 1;
    right: -16px;
    top: 0px;
	
}
		
.bubbother
{
	
	
   position: absolute;
   width: 220px;
   height: 50px;
   padding: 4px 5px;
   background: #fc466b;
   -webkit-border-radius: 0px;
   -moz-border-radius: 0px;
   border-radius: 0px;
}

.bubbother:after
{
    content: '';
    position: absolute;
    border-style: solid;
    border-width: 8px 16px 8px 0;
    border-color: transparent #fc466b;
    display: block;
    width: 0;
    z-index: 1;
    left: -16px;
    top: 0px;
	
}
		
.inner-border { 
                overflow-x: hidden; 
                overflow-y: scroll; 
            } 
            .inner-border::-webkit-scrollbar { 
                display: none; 
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
			if(f1.msg.value=="")
				{
					
					return false;
								}
			else
				{
					return true;
				}
		}
	
	
	
	</script>
	
	
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
	
		
		<div  style="position: absolute;left: 32%;top: 3%; background-color:#ffffff; color:white; background: rgba(0,0,0,0.5); width: 37%; font-size:20px; height: 720px" >
			
			<div  style="position: absolute; height: 80px;width: 100%;top: 0%; color: #fc4662;"><h1><i>Chat Here</i></h1></div>
			
			<div class="inner-border" style="position: absolute;top: 80px;width: 100%;height: 590px; ">
			<?php
				
				date_default_timezone_set('Asia/Kolkata');
				
					include("database.php");
		
					$qry1="SELECT * FROM msg";
					
					$r1=mysqli_query($conn,$qry1);
					
					while($row=mysqli_fetch_assoc($r1))
					{
						$msg=$row['msg'];
						$name=$row['name'];
						$tym=$row['tym'];
						$tmid=strtotime($tym);
						$tprint=date("h:i a.", $tmid);
						
						$t1=strtotime($_SESSION["tym"]);
						$t2=strtotime($tym);
						
						if($t2>$t1)
						{
						
						if($name==$_SESSION["uname"])
						{
						echo "<div class='bubble' style='background-color:#3f5efb; position:absolute;right:3%; width: fit-content;  height: fit-content'>";
						echo "<span>";
						echo $msg;
						echo $tprint;
						echo "</span>";
						echo "</div>";
						echo "<br>";
						echo "<br>";
						
							
						}
						else
							
						{
						echo "<div class='bubbother' style='background-color:#f6466b; position:absolute; left:3%; width: fit-content;  height: fit-content'>";
						echo "<span>";
						echo $name;
						echo "<br>";
						echo $msg;
						echo $tprint;
						echo "</span>";
						echo "</div>";
						echo "<br>";
						echo "<br>";
						echo "<br>";
						
						}
							
						}
						
						
					}
	
			?>
			</div>
			
			<div style="position: absolute;top:670px;width: 100%;height: 50px;">
			
				<form action="chat.php" name="f1" onSubmit="return myCheckk()" >
					
					<input type="text" name="msg" placeholder="Enter Msg" class="mytext" style="position: absolute; left:1%; top: 10px">
					
					<button class="myButt" name="btn"><i class="fa fa-send"></i></button>
					
					
					
			
			</form>
			
			
			
			</div>
			
			
		</div>
	
	
	</center>
	<?php
	date_default_timezone_set('Asia/Kolkata');
	
	if(isset($_REQUEST["btn"]))
	{
	
	
	$name=$_SESSION["uname"];
	$msg=$_REQUEST["msg"];
	$tym=date("m/d/Y h:i A.", time());
		
	
		include("database.php");
		
		$qry="insert into msg values('$name','$msg','$tym')";
		
		
		if(mysqli_query($conn,$qry))
		{
			
				
			$URL="chat.php";
                        echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
                        echo '<META HTTP-EQUIV="refresh" content="0;URL='.$URL.'">';
			
		}
		else
		{
			echo "".mysqli_error($conn);
			echo "<script>alert('not recorded')</script>";
		}
		
		
		
	}
	?>
 
	
	
</body>
</html>