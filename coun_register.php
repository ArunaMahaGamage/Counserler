<?php

// clean user inputs to prevent sql injections
$title = trim($_POST['title']);
$title = strip_tags($title);
$title = htmlspecialchars($title);

$fname = trim($_POST['firstname']);
$fname = strip_tags($fname);
$fname = htmlspecialchars($fname);

$lname = trim($_POST['lastname']);
$lname = strip_tags($lname);
$lname = htmlspecialchars($lname);

$gender = trim($_POST['gender']);
$gender = strip_tags($gender);
$gender = htmlspecialchars($gender);

$mail = trim($_POST['email']);
$mail = strip_tags($mail);
$mail = htmlspecialchars($mail);

$dob = trim($_POST['dob']);
$dob = strip_tags($dob);
$dob = htmlspecialchars($dob);



$mobile = trim($_POST['tpno']);
$mobile = strip_tags($mobile);
$mobile = htmlspecialchars($mobile);


$address = trim($_POST['address']);
$address = strip_tags($address);
$address = htmlspecialchars($address);

$username = trim($_POST['username']);
$username = strip_tags($username);
$username = htmlspecialchars($username);

$password = trim($_POST['password']);
$password = strip_tags($password);
$password = htmlspecialchars($password);

$qua = trim($_POST['qua']);
$qua = strip_tags($qua);
$qua = htmlspecialchars($qua);


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
    $query1 = "INSERT INTO counsellor(Title,First_name,Last_name,Email_address,Gender,DOB,Tp_no,Address,Qualification,User_name,Password) VALUES ('$title','$fname','$lname','$mail','$gender','$dob','$mobile','$address','$qua','$username','$password')";
    $query2 = "INSERT INTO login(Username,Password,Email_address,Activation,type) VALUES ('$username','$password','$mail',1,0)";
    $res1 = mysqli_query($conn, $query1);
    $res2 = mysqli_query($conn, $query2);
    //$result=mysqli_query($con,$sql);

    if ($res1) {
        if ($res2) {
            echo "Registration Sucessfully completed. <a href=\"profile.php\">Login</a>";
        } else{
            echo "Error in Query2";
        }
    } else {
        echo "Error in Query1";
    }
}
?>    


