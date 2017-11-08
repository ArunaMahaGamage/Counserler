
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Welcome to our Upakara</title>

        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"/> 
        <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"/> 

        <link rel="stylesheet" href="style.css" type="text/css" />

        <style>         body {
                background-image: url("imge/nbv.jpg");

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



        <body>

            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        
                        <img class="navbar-brand" src="imge/logo1.jpg" style="width:100px;height:100px">
                            <a class="navbar-brand" href="#"><h1><font color="sky blue">UPAKARA</font></h1></a>
                    </div><br><br><br>
                                    <div id="navbar" class="navbar-collapse collapse">
                                        <ul class="nav navbar-nav">
                                            <li ><a href="home.php"><font color="black">Home</font></a></li>            
                                            <li><a href="about_us.html"><font color="black">About Us</font></a></li>
                                            <li class="active"><a href="get_help.php"><font color="black">Get Help</font></a></li>
                                            <li>
                                                <a class="dropdown" href="resource.php"  ><font color="black">Resources</font></a>
                                                
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
                                    </head>
                                    </html>
                                    <br><br><br><br><br><br>
                                                                    <?php
                                                                    error_reporting(0);


                                                                    $title = "THIS IS THE TIME YOUR MENTALITY";
                                                                    $address = "gethelp.php";
                                                                    $randomizequestions = "yes"; // set up as "no" to show questions without randomization
//    END CONFIGURATION
// #########################################

                                                                    $a = array(
                                                                        1 => array(
                                                                            0 => "How would you rate your current physical health?",
                                                                            1 => " Very good",
                                                                            2 => " Good",
                                                                            3 => " Fair",
                                                                            4 => " Poor",
                                                                            
                                                                            6 => 1
                                                                        ),
                                                                        2 => array(
                                                                            0 => "How would you rate your current sleeping habits?",
                                                                            1 => " Good",
                                                                            2 => " Fair",
                                                                            3 => " Poor",
                                                                            4 => " Very poor",
                                                                            
                                                                            6 => 1
                                                                        ),
                                                                        3 => array(
                                                                            0 => "How would you rate your current eating habits?",
                                                                            1 => " very good",
                                                                            2 => " Good",
                                                                            3 => " Fair",
                                                                            4 => " Poor",
                                                                            5 => " Very poor",
                                                                            
                                                                            6 => 1
                                                                        ),
                                                                        4 => array(
                                                                            0 => "Are you currently experiencing overwhelming sadness, grief, or depression?",
                                                                            1 => " Yes",
                                                                            2 => " No",
                                                                            
                                                                            6 => 2
                                                                        ),
                                                                        5 => array(
                                                                            0 => "How often have you been bothered by Feeling down, depression or hopeless.",
                                                                            1 => " Not at all",
                                                                            2 => " Several days",
                                                                            3 => " More than half the days",
                                                                            4 => " Nearly every day",
                                                                            
                                                                            6 => 1
                                                                        ),
                                                                        6 => array(
                                                                            0 => "How often have you been bothered by Feeling bad about yourself - or that you are a failure or have let yourself or your family down.",
                                                                            1 => " Not at all",
                                                                            2 => " Several days",
                                                                            3 => " More than half the days",
                                                                            4 => " Nearly every day",
                                                                            
                                                                            6 => 1
                                                                        ),
                                                                        7 => array(
                                                                            0 => "How difficult have these problems made it for you to do your work, take care of things at home, or get along with other people?",
                                                                            1 => " Not difficult at all",
                                                                            2 => " Somewhat difficult",
                                                                            3 => " Very difficult",
                                                                            4 => " Extremely difficult",
                                                                            
                                                                            6 => 1
                                                                        ),
                                                                        8 => array(
                                                                            0 => "Are you currently experiencing anxiety, panic attacks or have any phobias?",
                                                                            1 => " Yes",
                                                                            2 => " No",
                                                                            
                                                                            6 => 2
                                                                        ),
                                                                        9 => array(
                                                                            0 => "Moving or speaking so slowly that other people could have noticed? Or the opposite - being so fidgety or restless that you have been moving around a lot more than usual?",
                                                                            1 => " Not difficult at all",
                                                                            2 => " Somewhat difficult",
                                                                            3 => " Very difficult",
                                                                            4 => " Extremely difficult",
                                                                            
                                                                            6 => 1
                                                                        ),
                                                                        10 => array(
                                                                            0 => "Are you currently experiencing any chronic pain?",
                                                                            1 => " Yes",
                                                                            2 => " No",
                                                                            
                                                                            6 => 2
                                                                        ),
                                                                    );

                                                                    $max = 10;

                                                                    $question = $_POST["question"];

                                                                    if ($_POST["Randon"] == 0) {
                                                                        if ($randomizequestions == "yes") {
                                                                            $randval = mt_rand(1, $max);
                                                                        } else {
                                                                            $randval = 1;
                                                                        }
                                                                        $randval2 = $randval;
                                                                    } else {
                                                                        $randval = $_POST["Randon"];
                                                                        $randval2 = $_POST["Randon"] + $question;
                                                                        if ($randval2 > $max) {
                                                                            $randval2 = $randval2 - $max;
                                                                        }
                                                                    }

                                                                    $ok = $_POST["ok"];

                                                                    if ($question == 0) {
                                                                        $question = 0;
                                                                        $ok = 0;
                                                                        $percentaje = 0;
                                                                    } else {
                                                                        $percentaje = Round(100 * $ok / $question);
                                                                    }
                                                                    ?>

                                                                    <HTML><HEAD><TITLE>Welcome to Upakara:  <?php print $title; ?></TITLE>

                                                                            <SCRIPT LANGUAGE='JavaScript'>
                                                                                <!-- 
                                                                                function Goahead(number) {
                                                                                    if (document.percentaje.response.value == 0) {
                                                                                        if (number ==<?php print $a[$randval2][6]; ?>) {
                                                                                            document.percentaje.response.value = 1
                                                                                            document.percentaje.question.value++
                                                                                            document.percentaje.ok.value++
                                                                                        } else {
                                                                                            document.percentaje.response.value = 1
                                                                                            document.percentaje.question.value++
                                                                                        }
                                                                                    }
                                                                                    if (number ==<?php print $a[$randval2][6]; ?>) {
                                                                                        document.question.response.value = "Correct"
                                                                                    } else {
                                                                                        document.question.response.value = "Incorrect"
                                                                                    }
                                                                                }
                                                                                // -->
                                                                            </SCRIPT>

                                                                        </HEAD>
                                                                        <BODY BGCOLOR=FFFFFF>

                                                                            <CENTER>
                                                                                <H2><?php print "$title"; ?></H2>
                                                                                <h5><font color="white">Please fill out this short questionnaire to provide some general and anonymous background about you and the issues you'd like to deal with in online therapy. It would help us match you with the most suitable therapist for you. Your answers will also give this counselor a good starting point in getting to know you.</font></h5>
                                                                                <TABLE BORDER=0 CELLSPACING=5 WIDTH=1000>

                                                                                    <?php if ($question < $max) { ?>

                                                                                        <TR><TD ALIGN=RIGHT>
                                                                                                <FORM METHOD=POST NAME="percentaje" ACTION="<?php print $URL; ?>">

                                                                                                    <BR><font color="blue">Percentage of correct responses: <?php print $percentaje; ?> %</font>
                                                                                                        <BR><font color="blue"><input type=submit value="Next"></font>

                                                                                                            <input type=hidden name=response value=0>
                                                                                                                    <input type=hidden name=question value=<?php print $question; ?>>
                                                                                                                        <input type=hidden name=ok value=<?php print $ok; ?>>
                                                                                                                            <input type=hidden name=Randon value=<?php print $randval; ?>>
                                                                                                                                <br><font color="blue"><?php print $question + 1; ?> / <?php print $max; ?></font>
                                                                                                                                    </FORM>
                                                                                                                                    <HR>
                                                                                                                                        </TD></TR>

                                                                                                                                        <TR><TD>
                                                                                                                                                <FORM METHOD=POST NAME="question" ACTION="">
                                                                                                                                                    <font color="black" font-size="18"><?php print "<b>" . $a[$randval2][0] . "</b>"; ?></font>

                                                                                                                                                    <BR>    <font color="white"> <INPUT TYPE=radio NAME="option" VALUE="1"  onClick=" Goahead(1);"></font><?php print $a[$randval2][1]; ?>
                                                                                                                                                            <BR>    <font color="white"> <INPUT TYPE=radio NAME="option" VALUE="2"  onClick=" Goahead(2);"></font><?php print $a[$randval2][2]; ?>
                                                                                                                                                                    <?php if ($a[$randval2][3] != "") { ?>
                                                                                                                                                                        <BR>    <font color="white"> <INPUT TYPE=radio NAME="option" VALUE="3"  onClick=" Goahead(3);"></font><?php
                                                                                                                                                                                print $a[$randval2][3];
                                                                                                                                                                            }
                                                                                                                                                                            ?>
                                                                                                                                                                            <?php if ($a[$randval2][4] != "") { ?>
                                                                                                                                                                                <BR>     <font color="white"><INPUT TYPE=radio NAME="option" VALUE="4"  onClick=" Goahead(4);"></font><?php
                                                                                                                                                                                        print $a[$randval2][4];
                                                                                                                                                                                    }
                                                                                                                                                                                    ?>
                                                                                                                                                                                    <?php if ($a[$randval2][5] != "") { ?>
                                                                                                                                                                                        <BR>     <font color="white"><INPUT TYPE=radio NAME="option" VALUE="5"  onClick=" Goahead(5);"></font><?php
                                                                                                                                                                                                print $a[$randval2][5];
                                                                                                                                                                                            }
                                                                                                                                                                                            ?>
                                                                                                                                                                                            


                                                                                                                                                                                                    </FORM><br><br><br>

                                                                                                                                                                                                    <?php
                                                                                                                                                                                                } else {
                                                                                                                                                                                                    ?>
                                                                                                                                                                                                        <TR><TD ALIGN=Center><br><br>
                                                                                                                                                                                                            The questionnaire has finished
                                                                                                                                                                                                            <BR>Percentage of correct responses: <?php print $percentaje; ?> %
                                                                                                                                                                                                                <br> If you got below 70%. better to contact with our consultant.
                                                                                                                                                                                                            <p><a HREF="new.php">Home Page</a>

                                                                                                                                                                                                                    <?php } ?>

                                                                                                                                                                                                        </TD></TR>
                                                                                                                                                                                                        </TABLE>

                                                                                                                                                                                                        </CENTER>
                                                                                                                                                                                                        </BODY>
                                                                                                                                                                                                        <br><br><br><br><br><br><br>

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