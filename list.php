<meta charset="utf-8" />
<body>
<p>

<?php
include"database.php";
include "new.class.php";

 $lesson=$_POST['lesson'];
 $mark=$_POST['mark'];
 $zarib=$_POST['zarib'];


$answer = new table;

echo $sum= $answer->view($lesson,$mark,$zarib)
?>




	
	
</br>

  <button type="submit" name="button" id="button" ><a href="mark.php">وضعیت نمرات</a></button></br></br>


<a href="insert.htm"> <button>افزودن نمرات</button></a>

</body>