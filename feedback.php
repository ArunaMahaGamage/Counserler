<?php

// clean user inputs to prevent sql injections
$name = trim($_POST['name']);
$name = strip_tags($name);
$name = htmlspecialchars($name);


$email = trim($_POST['Email_address']);
$email = strip_tags($email);
$email = htmlspecialchars($email);

$comments = trim($_POST['comments']);
$comments = strip_tags($comments);
$comments = htmlspecialchars($comments);


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
    $query1 = "INSERT INTO comments(name,Email_address,comments) VALUES('$name','$email','$comments')";   
    $res1 = mysqli_query($conn, $query1);
    //$result=mysqli_query($con,$sql);

    if ($res1) {        
            echo "Your comment Has Been Sent!  <a href=\"home.php\">Back To Home</a>";        
    } else {
        echo "Error in Query1";
    }
}
?>    




