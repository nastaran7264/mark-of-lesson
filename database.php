<?php

 
 $servername="localhost"; 
 $dbname="lesson"; 
 $user="root"; 
 $pass="";
 
 $link=mysql_connect($servername,$user,$pass);
 mysql_select_db($dbname,$link);


 mysql_query("SET NAMES 'utf8'");


 
 
 
 
?>