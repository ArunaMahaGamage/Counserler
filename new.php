
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Welcome to our Upakara</title>

        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
            <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 

                <link rel="stylesheet" href="style.css" type="text/css" />

                <link href="reset.css" rel="stylesheet" type="text/css">
                    <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src="js/jquery.js"></script>

        <script type="text/javascript">


                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


                    <style>
                        * {box-sizing:border-box}
                        body {font-family: Verdana,sans-serif;}
                        .mySlides {display:none}
                        .slider-holder
                        {
                            width: 1000px;
                            height: 400px;
                            background-color: white;
                            margin-left: auto;
                            margin-right: auto;
                            margin-top: 0px;
                            text-align: center;
                            overflow: hidden;
                            -webkit-animation: slide 2s forwards;
                            -webkit-animation-delay: 5s;

                            animation-delay: 5s;
                        }
                        /* Slideshow container */
                        .slideshow-container {
                            max-width: 1270px;
                            max-height: 300px;
                            position: relative;
                            margin: auto;
                            background-position:center;
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
                            -webkit-animation-duration: 3s;
                            animation-name: fade;
                            animation-duration: 3s;
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
                    <style>
                        .dropbtn {
                            background-color: #4CAF50;
                            color: white;
                            padding: 16px;
                            font-size: 16px;
                            border: none;
                            cursor: pointer;
                        }

                        .dropdown {
                            position: relative;
                            display: inline-block;
                        }

                        .dropdown-content {
                            display: none;
                            position: absolute;
                            background-color: #f9f9f9;
                            min-width: 160px;
                            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                            z-index: 1;
                        }

                        .dropdown-content a {
                            color: black;
                            padding: 12px 16px;
                            text-decoration: none;
                            display: block;
                        }

                        .dropdown-content a:hover {background-color: #f1f1f1}

                        .dropdown:hover .dropdown-content {
                            display: block;
                        }

                        .dropdown:hover .dropbtn {
                            background-color: #3e8e41;
                        }
                    </style>
                    </head>
                    <body>

                        <nav class="navbar navbar-default navbar-fixed-top">
                            <div class="container">
                                <div class="navbar-header">

                                    <img class="navbar-brand" src="imge/logo1.jpg" style="width:100px;height:100px">
                                        <a class="navbar-brand" href="#"><h1><font color="sky blue">UPAKARA</font></h1></a>
                                </div><br><br><br>
                                                <div id="navbar" class="navbar-collapse collapse">
                                                    <ul class="nav navbar-nav">
                                                        <li class="active"><a href="home.php"><font color="black">Home</font></a></li>            
                                                        <li><a href="about_us.html"><font color="black">About Us</font></a></li>
                                                        <li><a href="get_help.php"><font color="black">Get Help</font></a></li>
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

                                                <br><br><br>  <br><br><br>  








                                                                            <div class="slideshow-container">

                                                                                <div class="mySlides fade">
                                                                                    <div class="numbertext"></div>
                                                                                    <img src="imge/14.jpg" style="max-width:100%" >
                                                                                        <div class="text"><h3><font color="black">It's time for Upakara.</font></h3></div>
                                                                                </div>

                                                                                <div class="mySlides fade">
                                                                                    <div class="numbertext"></div>
                                                                                    <img src="imge/10.jpg" style="max-width:100%">
                                                                                        <div class="text"><h3><font color="black">Convenient, affordable, secure online counseling.</font></h3></div>
                                                                                </div>

                                                                                <div class="mySlides fade">
                                                                                    <div class="numbertext"></div>
                                                                                    <img src="imge/1.jpg" style="max-width:100%">
                                                                                        <div class="text"><h3><font color="black">Anytime, anywhere you can contact us.</font></h3></div>
                                                                                </div>
                                                                                <div class="mySlides fade">
                                                                                    <div class="numbertext"></div>
                                                                                    <img src="imge/41.jpg" style="max-width:100%">
                                                                                        <div class="text"><h3><font color="white">Your life does not get better by chance,it gets better by change.</font></h3></div>
                                                                                </div>
                                                                                <div class="mySlides fade">
                                                                                    <div class="numbertext"></div>
                                                                                    <img src="imge/5.jpg" style="max-width:100%">
                                                                                        <div class="text"><h3><font color="white">Love yourself enough to set boundaries.</font></h3></div>
                                                                                </div>

                                                                            </div>
                                                                            <br>

                                                                                <div style="text-align:center">
                                                                                    <span class="dot"></span> 
                                                                                    <span class="dot"></span> 
                                                                                    <span class="dot"></span> 
                                                                                    <span class="dot"></span> 
                                                                                    <span class="dot"></span> 
                                                                                </div>

                                                                                <script>
                                                                                    var slideIndex = 0;
                                                                                    showSlides();

                                                                                    function showSlides() {
                                                                                        var i;
                                                                                        var slides = document.getElementsByClassName("mySlides");
                                                                                        var dots = document.getElementsByClassName("dot");
                                                                                        for (i = 0; i < slides.length; i++) {
                                                                                            slides[i].style.display = "none";
                                                                                        }
                                                                                        slideIndex++;
                                                                                        if (slideIndex > slides.length) {
                                                                                            slideIndex = 1
                                                                                        }
                                                                                        for (i = 0; i < dots.length; i++) {
                                                                                            dots[i].className = dots[i].className.replace(" active", "");
                                                                                        }
                                                                                        slides[slideIndex - 1].style.display = "block";
                                                                                        dots[slideIndex - 1].className += " active";
                                                                                        setTimeout(showSlides, 3000); // Change image every 2 seconds
                                                                                    }
                                                                                </script>















                                                                                </div>
                                                                                </div>
                                                                                <script>

                                                                                    function commentSubmit() {
                                                                                        if (form1.name.value == '' && form1.comments.value == '') { //exit if one of the field is blank
                                                                                            alert('Enter your message !');
                                                                                            return;
                                                                                        }
                                                                                        var name = form1.name.value;
                                                                                        var comments = form1.comments.value;
                                                                                        var xmlhttp = new XMLHttpRequest(); //http request instance

                                                                                        xmlhttp.onreadystatechange = function () { //display the content of insert.php once successfully loaded
                                                                                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                                                                                document.getElementById('comment_logs').innerHTML = xmlhttp.responseText; //the chatlogs from the db will be displayed inside the div section
                                                                                            }
                                                                                        }
                                                                                        xmlhttp.open('GET', 'insert.php?name=' + name + '&comments=' + comments, true); //open and send http request
                                                                                        xmlhttp.send();
                                                                                    }

                                                                                    $(document).ready(function (e) {
                                                                                        $.ajaxSetup({cache: false});
                                                                                        setInterval(function () {
                                                                                            $('#comment_logs').load('logs.php');
                                                                                        }, 2000);
                                                                                    });

                                                                                </script>
                                                                                 <div class="getstarted section">
            <div class="container">
                <h3>How do I get started?</h3>
                <div class="row">
                    <div class="col-sm-4" style="background-color: #0099ff ;">
                        
                        <p>Fill out a questionnaire to help us assess your needs and get matched to a <var product_name>UPAKARA</var> counselor.</p>
                       
                    </div>
                    
                    
                    <div class="col-sm-4" style="background-color: #b3e0ff;">
                        
                        <p>Message your counselor whenever and wherever through our web site.</p>
                    </div>
                    <div class="col-sm-4" style="background-color: #66c2ff;">
                       
                        <p>Not happy with our counselling? Let us know.</p>
                    </div>
                    <br><br><br><div> <div><form action="get_help.php">
                    <button class="col-sm-4 btn-primary center-block" type="submit" style="margin-top:5px;width:200px;">Get Started</button>
                      </div>      
                              </div>                                                                
                                                                                               
                    </div>
                </div>
            </div>
        </div>
                                                                                
           
     <div>
         <form action="get_help.php"></div>
             
                <script type="text/javascript">                                                          
        jQuery(document).ready(function($){
	var w,mHeight,tests=$("#testimonials");
	w=tests.outerWidth();
	mHeight=0;
	tests.find(".testimonial").each(function(new){
		$("#t_pagers").find(".pager:eq(0)").addClass("active");	//make the first pager active initially
		if(index==0)
			$(this).addClass("active");	//make the first slide active initially
		if($(this).height()>mHeight)	//just finding the max height of the slides
			mHeight=$(this).height();
		var l=new*w;				//find the left position of each slide
		$(this).css("left",l);			//set the left position
		tests.find("#test_container").height(mHeight);	//make the height of the slider equal to the max height of the slides
	});
	$(".pager").on("click",function(e){	//clicking action for pagination
		e.preventDefault();
		next=$(this).index(".pager");
		clearInterval(t_int);	//clicking stops the autoplay we will define later
		moveIt(next);
	});
	var t_int=setInterval(function(){	//for autoplay
		var i=$(".testimonial.active").new(".testimonial");
		if(i==$(".testimonial").length-1)
			next=0;
		else
			next=i+1;
		moveIt(next);
	},3000);
});
function moveIt(next){	//the main sliding function
	var c=parseInt($(".testimonial.active").removeClass("active").css("left"));	//current position
	var n=parseInt($(".testimonial").eq(next).addClass("active").css("left"));	//new position
	$(".testimonial").each(function(){	//shift each slide
		if(n>c)
			$(this).animate({'left':'-='+(n-c)+'px'});
		else
			$(this).animate({'left':'+='+Math.abs(n-c)+'px'});
	});
	$(".pager.active").removeClass("active");	//very basic
	$("#t_pagers").find(".pager").eq(next).addClass("active");	//very basic
}
</script>
        <div id="testimonials">
            <h2>TESTIMONIALS</h2>
            
            
                <div class="testimonial">
                    <div class="testimonial_text">Courage doesn't happen when you have all the answers. It happens when you are ready to face the questions you have been avoiding your whole life. </div>
                    <h3 class="testimonial_name">-Shannon L. Alder</h3>
                    <div class="testimonial_designation">Therapist</div>
                </div>
                <div class="testimonial">
                    <div class="testimonial_text">The world's greatest achievers have been those who have always stayed focused on their goals and have been consistent in their efforts. </div>
                    <h3 class="testimonial_name">-Roopleen</h3>
                    <div class="testimonial_designation">Authos in "Happy Life" Book</div>
                </div>
                <div class="testimonial">
                    <div class="testimonial_text">All people should be taught to unconditionally accept, approve,admire, appreciate, forgive, trust and ultimately, love their own person. </div>
                    <h3 class="testimonial_name">-Asa Don Brown</h3>
                    <div class="testimonial_designation">American psychology</div>
                </div>
            <div class="testimonial">
                    <div class="testimonial_text">I wanted to explain that trusting is harder than being trusted. </div>
                    <h3 class="testimonial_name">-Simon Van Booy</h3>
                    <div class="testimonial_designation">Counsellor in Relax minded web site.</div>
                    <div class="testimonial">
                    <div class="testimonial_text">Forgiveness is highest degree of a trust in a better man.</div>
                    <h3 class="testimonial_name">-Slaven vuijc </h3>
                    <div class="testimonial_designation">Therapist</div>
                </div>
                </div>
            </div>
            <div id="t_pagers"><a class="pager"></a><a class="pager"></a><a class="pager"></a><a class="pager"></a><a class="pager"></a><a class="pager"></a><a class="pager"></a><a class="pager"></a><a class="pager"></a><a class="pager"></a><a class="pager"></a></div>
        </div>
	                                                                              

                                                                                                    <br><br><br>


                                                                                                                <div class="container">  
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-sm-4" >

                                                                                                                            <p style="background-color:bisque"><font color="maroon">Worrying doesn't take away tomorrow's troubles, it takes away today's peace.
                                                                                                                                    <br><br><br><br><br><br><br>
                                                                                                                                                                Have regular hours for work and play; make each day both useful and pleasant, and prove that you understand worth of time by employing it well.
                                                                                                                                                                </font></p>
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-4">
                                                                                                                                                                    <img src="imge/6.jpg" style="width:100%;height:50% ">  
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-4" >

                                                                                                                                                                    <p style="background-color:bisque"><font color="maroon">
                                                                                                                                                                            Its not    selfish    to   love    yourself,   take   care   of      yourself          and to make your happiness a priority.
                                                                                                                                                                            <br><br><br><br><br><br><br><br>
                                                                                                                                                                                                        Even the darkest night will end and the sun will arise.</font></p>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        </div>

                                                                                                                                                                                                        <!-- /.container -->
                                                                                                                                                                                                        <br><br><br><br><br><br><br><br>

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