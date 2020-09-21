<?php
session_start();
setcookie("email","",time()-3600,"/");
session_destroy();

			$URL="http://mytutorials.c1.biz/index.php";
			echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
			echo '<META HTTP-EQUIV="refresh" content="0;URL='.$URL.'">';
			
?>