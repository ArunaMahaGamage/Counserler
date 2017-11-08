<?php

$n1=$_POST["First_name"];
$n2=$_POST["Last_name"];
$n3=$_POST["User_name"];
$n4=$_POST["Type"];
$n5=$_POST["Date"];
$n6=$_POST["From"];
$n7=$_POST["To"];

$connect=mysqli_connect("localhost","root","");
if($connect){
	
	mysqli_select_db($connect,"counselling");
			$result=mysqli_query($connect,"insert into sessionform (First_name,Last_name,User_name,Type,Date,From,To) values('$n1','$n2','$n3','$n4','$n5','$n6','$n7')");
			if($result){				
				echo"sucess";			
			}
			else{				
				echo"Failed the save";							
			}
}		
else{			
				echo"Failed";
}
?>