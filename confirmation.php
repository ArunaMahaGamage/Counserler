<?php
$n1=$_POST["Session_form_ID"];
$n1=$_POST["Counsellor_ID"];
$n1=$_POST["Status"];


$connect=mysqli_connect("localhost","root","");
if($connect){
	
	mysqli_select_db($connect,"counselling");
			$result=mysqli_query($connect,"insert into sessionform (Session_form_ID,Counsellor_ID,Status) values('$n1'$n2','Sn3')");
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
      
   
