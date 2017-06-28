<?php
class table
{
	
	
	public function view($lesson,$mark,$zarib)
		{
			
 
			include"database.php";
			$result=mysql_query("select * from student",$link);


			echo "<table border='1px' width='300'>";
			echo "<tr height='40'>";
			echo "<th>ID</th><th>lesson</th><th>mark</th><th>zarib</th>";
			echo "</tr>";
			while($record=mysql_fetch_assoc($result))
			{
				echo "<tr>";
				echo "<td>$record[id]</td><td>$record[lesson]</td><td>$record[mark]</td><td>$record[zarib]</td>
				
				";
				echo "</tr>";
			}
			echo "</table>";
			echo"</br>";
			echo"</br>";
	
	
		}
	//------------------------------------------------------------

		public function insert($lesson,$mark,$zarib)
		{

		$Query="INSERT into `student` (`lesson`,`mark`,`zarib`) values ('{$lesson}','{$mark}','{$zarib}')"; 
		$javab=mysql_query($Query) or die(mysql_error()); 

		if ($javab) {
			
			print"ok";
			}

			else 	
			{
			print("error in register data ");
			}
	
	
		}

//-----------------------------------------------------------
		
	public function average($mark)
		{
		    include"database.php";
			$result=mysql_query("select avg(mark) as average from student",$link);

				echo "<table border='1px' width='100'>";
				echo "<tr height='40'>";
				echo "<th>معدل</th>";
				echo "</tr>";
				while($record=mysql_fetch_assoc($result))
				{
					echo "<tr>";
					echo "<td>$record[average]</td>
					";
					echo "</tr>";
				}
				echo "</table>";
				echo"</br>";
		}
		
		
	//--------------------------------------------------------	
		
		public function minimum($mark)
		{
			include"database.php";
			$result=mysql_query("select min(mark) as minimum from student",$link);

				echo "<table border='1px' width='100'>";
				echo "<tr height='40'>";
				echo "<th>کمترین نمره</th>";
				echo "</tr>";
				while($record=mysql_fetch_assoc($result))
				{
					echo "<tr>";
					echo "<td>$record[minimum]</td>
					";
					echo "</tr>";
				}
				echo "</table>";
				echo"</br>";
		}
		
		
	//--------------------------------------------------------	
		public function maximum($mark)
		{
	        include"database.php";
			$result=mysql_query("select max(mark) as maximum from student",$link);

				echo "<table border='1px' width='100'>";
				echo "<tr height='40'>";
				echo "<th>بیشترین نمره</th>";
				echo "</tr>";
				while($record=mysql_fetch_assoc($result))
				{
					echo "<tr>";
					echo "<td>$record[maximum]</td>
					";
					echo "</tr>";
				}
				echo "</table>";
				echo"</br>";
		}
		

		
}

?>