<!DOCTYPE html> 
<html>
 <head>
 <meta charset="utf-8" />
 
 <title>daryaft</title> 
 </head>
 <body>
 <?php 
 $code=$_POST["code1"];
 $lesson=$_POST['lesson'];
 $mark=$_POST['mark'];
 $zarib=$_POST['zarib'];
 
 include "new.class.php";
include"database.php";
$answer = new table;
echo $sum= $answer->insert($lesson, $mark, $zarib);
	?>
	
	</br></br>
	
	</body> 
	</html>
	
	<?php
	header('location:list.php');
	?>
	
	