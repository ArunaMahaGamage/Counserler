<!DOCTYPE html>
<html>

    <head>
        <title>Online Medicines Ordering System</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--Styles-->
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script type="text/javascript" src="http://ie.kis.v2.scr.kaspersky-labs.com/B0D18251-3A27-F044-A33C-18ECBBA2646C/main.js" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="http://ie.kis.v2.scr.kaspersky-labs.com/C6462ABBCE81-C33A-440F-72A3-15281D0B/abn/main.css"/><script src="js/jquery.js"></script>

        <script type="text/javascript">
jQuery(document).ready(function($){
	var w,mHeight,tests=$("#testimonials");
	w=tests.outerWidth();
	mHeight=0;
	tests.find(".testimonial").each(function(index){
		$("#t_pagers").find(".pager:eq(0)").addClass("active");	//make the first pager active initially
		if(index==0)
			$(this).addClass("active");	//make the first slide active initially
		if($(this).height()>mHeight)	//just finding the max height of the slides
			mHeight=$(this).height();
		var l=index*w;				//find the left position of each slide
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
		var i=$(".testimonial.active").index(".testimonial");
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
        
    </head>

    <body style="background-color: #edeff8;">


        <!--header begins-->
        <nav class="header">
            <a href="index.html">Home</a>
            <a href="login1.php">Login</a>
            <a href="signup.html">Sign Up</a>
            <a href="about_us.html">About Us</a>
            <a href="testimonials.html" class="active">Testimonials</a>
        </nav>
        <!--header ends-->

        <!--contents begins-->     
        <div id="testimonials">
            <h2>TESTIMONIALS</h2>
            <div id="test_container">
                <div class="testimonial">
                    <div class="testimonial_text"><strong>Knock Knock.</strong><br>Who's there?<br>To.<br>To Who?<br>To <u><strong>Whom</strong></u>?</div>
                    <h3 class="testimonial_name">-Grammar Nazi</h3>
                    <div class="testimonial_designation">CEO, I Don't Care Inc.</div>
                </div>
                <div class="testimonial">
                    <div class="testimonial_text">Code Affair is new but has really interesting thoughts, keep going bro!</div>
                    <h3 class="testimonial_name">-Larry Page</h3>
                    <div class="testimonial_designation">CEO, Google Inc.</div>
                </div>
                <div class="testimonial">
                    <div class="testimonial_text">The guy is super cool, I wish I were like him :P</div>
                    <h3 class="testimonial_name">-Bill Gates</h3>
                    <div class="testimonial_designation">Founder, Microsoft</div>
                </div>
                <div class="testimonial">
                    <div class="testimonial_text">The guy is super cool, I wish I were like him :P</div>
                    <h3 class="testimonial_name">-Bill Gates</h3>
                    <div class="testimonial_designation">Founder, Microsoft</div>
                </div>
            </div>
            <div id="t_pagers"><a class="pager"></a><a class="pager"></a><a class="pager"></a><a class="pager"></a><a class="pager"></a><a class="pager"></a><a class="pager"></a><a class="pager"></a><a class="pager"></a><a class="pager"></a><a class="pager"></a></div>
        </div>
        <!--contents ends-->


    </body>

</html>
