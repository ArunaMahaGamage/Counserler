<?php

// clean user inputs to prevent sql injections
$fname = trim($_POST['firstname']);
$fname = strip_tags($fname);
$fname = htmlspecialchars($fname);

$lname = trim($_POST['lastname']);
$lname = strip_tags($lname);
$lname = htmlspecialchars($lname);

$mobile = trim($_POST['tpno']);
$mobile = strip_tags($mobile);
$mobile = htmlspecialchars($mobile);


$desc = trim($_POST['desc']);
$desc = strip_tags($desc);
$desc = htmlspecialchars($desc);

$email = trim($_POST['email']);
$email = strip_tags($email);
$email = htmlspecialchars($email);



define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'counselling');

$conn = mysqli_connect(DBHOST, DBUSER, DBPASS);
$dbcon = mysqli_select_db($conn, DBNAME);
//mysqli_select_db($conn, $db_name)

if (!$conn) {
    die("Connection failed : " . mysql_error());
}

if (!$dbcon) {
    die("Database Connection failed : " . mysql_error());
} else {
    $query1 = "INSERT INTO contactus(First_name,Last_name,Email_address,Tp_no,Description) VALUES ('$fname','$lname','$email','$mobile','$desc')";   
    $res1 = mysqli_query($conn, $query1);
    //$result=mysqli_query($con,$sql);

    if ($res1) {        
            echo "Your Message Has Been Sent!  <a href=\"home.php\">Back To Home</a>";        
    } else {
        echo "Error in Query1";
    }
}
?>    


