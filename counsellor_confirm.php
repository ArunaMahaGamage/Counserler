
<?php
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
    header("Location: login.php");
}
$UN = $_SESSION['userSession'];
$query = $DBcon->query("SELECT * FROM login WHERE Username='$UN'");
$userRow = $query->fetch_array();
$DBcon->close();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Welcome to our Upakara</title>

        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 

            <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">


                <link rel="stylesheet" href="style.css" type="text/css" />
                <style>         body {
                        background-image: url("imge/gf.jpg");

                    }</style>

                </head>
                <body>


                    <nav class="navbar navbar-default navbar-fixed-top">
                        <div class="container">
                            <div class="navbar-header">

                                <img class="navbar-brand" src="imge/logo1.jpg" style="width:100px;height:100px">
                                    <a class="navbar-brand" href="#"><h1><font color="sky blue">UPAKARA</font></h1></a>
                            </div><br><br><br>


                                        <ul class="nav navbar-nav">
                                            <li ><a href="new.php"><font color="black">Home</font></a></li>            
                                            <li><a href="about_us.html"><font color="black">About Us</font></a></li>
                                            <li ><a href="get_help.php"><font color="black">Get Help</font></a></li>
                                            <li>
                                                <a class="dropdown" href="resources.php.html"  ><font color="black">Resources</font></a>

                                            </li>
                                            <li><a href="contact_us.html"><font color="black">Contact Us</font></a></li>
                                        </ul>
                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a href="logout.php"><font color="black">Logout</font></a></li>
                                            <li><a href="user_register.html"><font color="black">Get Started</font></a></li>
                                        </ul>
                                        <!--/.nav-collapse -->
                                        </div>
                                        </nav><br><br><br><br><br><br><br>
                                                                    <div class="container" style="margin-top: 50px;" >
                                                                        <div class="row">
                                                                            <div class="span2">
                                                                                <img src="imge/download.jpg"  alt="" class="img-rounded">
                                                                            </div>



                                                                            <div class="container">

                                                                                <div class="panel panel-default">
                                                                                    <div class="panel-heading"></div>
                                                                                    <div class="panel-body">
<form action="search.php" method="GET">
<input id="search" name="search" type="text" placeholder="Type here">
<input id="submit" type="submit" value="Search">
</form>


                                                                                        <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "counselling";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT UserID,First_name,Last_name,User_name,Type,Date,From,To FROM sessionform where Counsellor_ID=" . 'Counsellor_ID';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Type</th><th>Date</th><th>From</th><th>To</th><th>Cancel</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo "<tr><td>".$row["Counsellor_ID"]."</td><td>".$row["First_name"]." ".$row["Last_name"]."</td><td>".$row["Type"]."</td><td>".$row["Date"]."</td><td>".$row["From"]."</td><td>".$row["To"]."</td><td>".$row[<div>
                                <form action="cancel.php">
                                    <button type="submit">Cancel</button>
                            </div><br>
                                </form>]."</td></tr>";
    echo "</table>";
} else {
    echo "0 results";
}
}
$conn->close();
?> 
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div>
                                                                                <form action="session.html">
                                                                                    <button type="submit">Session Form</button>
                                                                            </div><br>
                                                                                </form>

                                                                                <div>  <form action="chat.html">
                                                                                        <button type="submit">Chat</button></div><br>
                                                                                    </form>
                                                                                    <div>  <form action="payment.html">
                                                                                            <button type="submit">payment</button></div><br>
                                                                                    </form>
                                                                                        <div>  <form action="showtime.php">
                                                                                                <button type="submit">Timetable</button></div><br>
                                                                                    </form>



                                                                                    </div>
                                                                                    <br><br><br><br> <br><br><br><br> <br><br><br><br>

                                                                                                                                    <style>
                                                                                                                                        .footer {
                                                                                                                                            position: fixed;
                                                                                                                                            left: 0;
                                                                                                                                            bottom: 0;
                                                                                                                                            width: 100%;
                                                                                                                                            background-color: skyblue;
                                                                                                                                            color: white;
                                                                                                                                            text-align: center;
                                                                                                                                            height: 120px; 
                                                                                                                                        }
                                                                                                                                    </style>
                                                                                                                                    <footer class="footer">
                                                                                                                                        <div class="container">

                                                                                                                                            <p style="font-family:Book Antiqua;"align="center"class="lead">We provide Sri Lanka's best counseling service for you.</p>
                                                                                                                                        </div>
                                                                                                                                        <div class="container">
                                                                                                                                            <div class="row">
                                                                                                                                                <div class="col-md-17">
                                                                                                                                                    <div class="col-10">


                                                                                                                                                        <span class="col-sm-1"><a href="home.php" id="footer-home">Home</a></span>
                                                                                                                                                        <span class="col-sm-1"><a href="about_us.html">About us</a></span>
                                                                                                                                                        <span class="col-sm-1"><a href="get_help.php">Get Help</a></span>
                                                                                                                                                        <span class="col-sm-1"> <a href="resources.php.html" id="footer-reviews">Resources</a></span>
                                                                                                                                                        <span class="col-sm-2"><a href="contact_us.html">contact us</a></span>

                                                                                                                                                        <span class="col-sm-1"><a href="user_register.html">For User</a></span>
                                                                                                                                                        <span class="col-sm-2"> <a href="coun_register.html">For Counselors</a></span>


                                                                                                                                                        <span class="col-sm-2"> <a href="">Terms &amp; Conditions</a></span>
                                                                                                                                                        <span class="col-sm-1">  <a href="/privacy/">Privacy </a></span>


                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                                <div class="page-header pt-2">
                                                                                                                                                    <h5 style="font-size: 12" align="center"><font color="maroon" >If you are in a crisis or if you or any other person may be in danger - don't use this site. These resources can provide you with immediate help.</font></h5>
                                                                                                                                                </div>
                                                                                                                                                </footer>
                                                                                                                                                <script src="bootstrap/js/bootstrap.min.js" </script>

                                                                                                                                                </body>
                                                                                                                                                </html>