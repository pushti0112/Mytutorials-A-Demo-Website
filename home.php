<?php


session_start();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>mytutorials.c1.biz/home</title>
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
	<div style="position: absolute; top: 1%; left: 43%"><img src="090bb44e-9432-4632-8059-9e4f11a3c568_200x200.png"></div>
	
	<div style="color: white;position: absolute;top: 25%; left: 45%"><?php echo("<h2><i>hello ".$_SESSION["uname"]."</i></h2>"); ?></div>
	
   
	
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
	
	<div style="background-color:#ffffff; color:white; background: rgba(0,0,0,0.5);font-size:20px; position: absolute; top: 35%; left: 5%; width: 90%; height: 450px">
	
	
	<iframe src="list.html" height="99%" width="10%"></iframe>
	<iframe src="body.html" style="position:absolute;height: 99%;width:90%;left: 10%"  name="body"></iframe>
	
	
	
	</div>
	
	
	
</body>
</html>