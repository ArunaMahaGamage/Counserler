<?php

$n2=$_POST["First_name"];
$n3=$_POST["Last_name"];
$n4=$_POST["User_name"];
$n5=$_POST["Days"];
$n6=$_POST["Hours"];

$connect=mysqli_connect("localhost","root","");
if($connect){
	
	mysqli_select_db($connect,"counselling");
			$result=mysqli_query($connect,"insert into timetable (First_name,Last_name,User_name,Hours,Days) values('$n2','$n3','$n4','$n5','$n6')");
			if($result){				
				echo"sucess<a href=\"viewtime.php\">Timetable</a>";			
			}
			else{				
				echo"Failed the save";							
			}
}		
else{			
				echo"Failed";
}
?>
