
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Welcome to our Upakara</title>

        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
            <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 

                <link rel="stylesheet" href="style.css" type="text/css" />

                <style>         body {
                        background-image: url("imge/58.jpg");

                    }</style>

                <style>
                    * {box-sizing:border-box}
                    body {font-family: Verdana,sans-serif;}
                    .mySlides {display:none}

                    /* Slideshow container */
                    .slideshow-container {
                        max-width: 1000px;
                        max-height: 300px;
                        position: relative;
                        margin: auto;
                    }

                    /* Caption text */
                    .text {
                        color: #f2f2f2;
                        font-size: 15px;
                        padding: 8px 12px;
                        position: absolute;
                        bottom: 8px;
                        width: 100%;
                        text-align: center;
                    }

                    /* Number text (1/3 etc) */
                    .numbertext {
                        color: #f2f2f2;
                        font-size: 12px;
                        padding: 8px 12px;
                        position: absolute;
                        top: 0;
                    }

                    /* The dots/bullets/indicators */
                    .dot {
                        height: 15px;
                        width: 15px;
                        margin: 0 2px;
                        background-color: #bbb;
                        border-radius: 50%;
                        display: inline-block;
                        transition: background-color 0.6s ease;
                    }

                    .active {
                        background-color: #717171;
                    }

                    /* Fading animation */
                    .fade {
                        -webkit-animation-name: fade;
                        -webkit-animation-duration: 1.5s;
                        animation-name: fade;
                        animation-duration: 1.5s;
                    }

                    @-webkit-keyframes fade {
                        from {opacity: .4} 
                        to {opacity: 1}  
                    }

                    @keyframes fade {
                        from {opacity: .4} 
                        to {opacity: 1}
                    }

                    /* On smaller screens, decrease text size */
                    @media only screen and (max-width: 300px) {
                        .text {font-size: 11px}
                    }
                </style>



                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header">

                            <img class="navbar-brand" src="imge/logo1.jpg" style="width:100px;height:100px">
                                <a class="navbar-brand" href="#"><h1><font color="sky blue">UPAKARA</font></h1></a>
                        </div><br><br><br>
                                    <div id="navbar" class="navbar-collapse collapse">
                                        <ul class="nav navbar-nav">
                                            <li ><a href="new.php"><font color="black">Home</font></a></li>            
                                            <li ><a href="about_us.html"><font color="black">About Us</font></a></li>
                                            <li ><a href="get_help.php"><font color="black">Get Help</font></a></li>
                                            <li class="active">
                                                <a class="dropdown" href="resource.php"><font color="black">Resources</font></a>
                                                <div class="dropdown-content"  >
                                                    <a href="Audio.html">Audio</a>
                                                    <a  href="Video.html">Video</a>
                                                    <a  href="Pdf.html">PDF</a>
                                                </div>
                                            </li>
                                            <li><a href="contact_us.html"><font color="black">Contact Us</font></a></li>
                                        </ul>
                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a href="login.php"><font color="black">Login</font></a></li>
                                            <li><a href="user_register.html"><font color="black">User Register</font></a></li>
                                        </ul>
                                    </div><!--/.nav-collapse -->
                                    </div>
                                    </nav>




<div class="container"> 
<div class="row">
<div class="col-md-12">
<h2 style="color:white">Download Resources</h2>
</div>
</div>
</div>
<div class="container well">
<p>PDF</p>
<div class="row">


<?php

$conn = mysqli_connect("localhost", "root", "", "counselling") or die("db connect error: " . mysqli_connect_error());
                                                                                        mysqli_set_charset($conn, "utf8");
$t="PDF";
$result=mysqli_query($connect,"select * from resource where Rtype=".'Rtype');
while($row=mysqli_fetch_array($result)){
	
$Rname=$row["Rname"];
$Rfile=$row["Rfile"];

echo "<div class='col-md-4 well'>";
///insert image here
echo $Rname;
echo "<a href='$Rfile' target='_blank'>DOWNLOAD</a>";
echo "</div>";

}

?>



</div>



</div>




<div class="container well">
<p>Audio</p>
<div class="row">


<?php

include("Db.php");
mysqli_select_db($connect,"project");
$t="Audio";
$result=mysqli_query($connect,"select * from resource where Rtype='$t'");
while($row=mysqli_fetch_array($result)){
	
$Rname=$row["Rname"];
$Rfile=$row["Rfile"];

echo "<div class='col-md-4 well'>";

echo $Rname;
echo "<a href='$Rfile' target='_blank'>DOWNLOAD</a>";
echo "</div>";

}

?>



</div>



</div>


<div class="container well">
<p>Vedio</p>
<div class="row">


<?php

include("Db.php");
mysqli_select_db($connect,"project");
$t="Vedio";
$result=mysqli_query($connect,"select * from resource where Rtype='$t'");
while($row=mysqli_fetch_array($result)){
	
$Rname=$row["Rname"];
$Rfile=$row["Rfile"];

echo "<div class='col-md-4 well'>";

echo $Rname;
echo "<a href='$Rfile' target='_blank'>DOWNLOAD</a>";
echo "</div>";

}

?>



</div>



</div>












                                    <br><br><br><br><br><br>
                                                            <style>
                                                                .footer {
                                                                    
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