<meta charset="utf-8" />
<body>
<?php


 
include"database.php";

 //$code=$_POST["code1"];
 $lesson=$_POST['lesson'];
 $mark=$_POST['mark'];
 $zarib=$_POST['zarib'];
 
 include "new.class.php";

$answer = new table;
echo $sum= $answer->maximum($mark);

echo"</br>";

echo $sum= $answer->minimum($mark);

echo"</br>";

echo $sum= $answer->average($mark);

?>


</br>
 <p><a href="list.php">back</a></p>
 </p>

</body>
