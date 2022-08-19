<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

.slideshow-container {
  
  position: relative;
  margin: auto;
}

.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 35px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 50%;
  user-select: none;
}

.next {
  right: 0;
  border-radius: 50%;
}

.prev:hover, .next:hover {
  background-color: #FFA500;
}

.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}




.dot {
  cursor: pointer;
  height: 50px;
  
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}


@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
.aaa{
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
}
.abc{
  background-color: white;
  padding-top: 50px;
  padding-right: 135px;
  padding-bottom: 350px;
  padding-left: 135px;
}





* {
  box-sizing: border-box;
}


.column {
    margin-top: 75px;
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; 
}


.row:after {
  content: "";
  display: table;
  clear: both;
}


.footers a {color:#696969;}
.footers p {color:#696969;}
.footers ul {line-height:30px;}
#social-fb:hover {
     color: #3B5998;
     transition:all .001s;
 }
 #social-tw:hover {
     color: #4099FF;
     transition:all .001s;
 }
 #social-gp:hover {
     color: #d34836;
     transition:all .001s;
 }
 #social-em:hover {
     color: #f39c12;
     transition:all .001s;
 }

</style>
</head>
<body>
<div>
<?php include_once("nav.php");?>
</div>
<div class="slideshow-container">

<div class="mySlides fade">
  
  <img src="https://ekamyoga.com/wp-content/uploads/2022/07/WEBS.jpeg" style="width:100%">
  
</div>

<div class="mySlides fade">
  
  <img src="https://ekamyoga.com/wp-content/uploads/2022/06/new-ekam-yoga-banner-1.jpg" style="width:100%">
 
</div>

<div class="mySlides fade">
  
  <img src="https://ekamyoga.com/wp-content/uploads/2022/07/ypi-web.jpeg" style="width:100%">
  
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>
	<marquee style="font-size: 35px; margin-top:50px"> Yoga Quote : "Yoga takes you into the present moment. The only place where life exists."</marquee>
	
<h3 class="aaa" style="margin-top:75px ; font-size:50px">Join Yoga Program for Health 2 Happiness</h3>

<!--card -->

<div class="abc">
    <img src="https://ekamyoga.com/wp-content/uploads/2022/06/yoga.jpeg" alt="">

    <div class="row">
  <div class="column">
    <h2>Requirements to get started</h2>
    
    <marquee style="font-size: 15px; margin-top:10px"> Learn yoga from the world best yoga instructor</marquee>
	<img style="margin-top: 35px;" src="https://images.myyogateacher.com/Teacher-Page/Dividerm2.png" alt="">

    <div style="background-color: #ffe6e6; border-radius: 2rem; margin-top:15px;" >
    <img style="margin-left: 15px;padding: 5px" src="https://images.myyogateacher.com/Teacher-Page/icon-01.png" alt="">
    <span style="margin-left: 15px;">Book your Favourite Session</span>
    </div>
    <div style="background-color: #ffe6e6; border-radius: 2rem; margin-top:15px;" >
    <img style="margin-left: 15px;padding: 5px" src="https://images.myyogateacher.com/Teacher-Page/icon-02.png" alt="">
    <span style="margin-left: 15px;">Download WebEx in your Favourite device you are using</span>
    </div>
    <div style="background-color: #ffe6e6; border-radius: 2rem; margin-top:15px;" >
    <img style="margin-left: 15px;padding: 5px" src="https://images.myyogateacher.com/Teacher-Page/icon-03.png" alt="">
    <span style="margin-left: 15px;">Place to practice</span>
    </div>
    <div style="background-color: #ffe6e6; border-radius: 2rem; margin-top:15px;" >
    <img style="margin-left: 15px;padding: 5px" src="https://images.myyogateacher.com/Teacher-Page/icon-04.png" alt="">
    <span style="margin-left: 15px;">Fast internet connection</span>
    </div>
    <div style="background-color: #ffe6e6; border-radius: 2rem; margin-top:15px;" >
    <img style="margin-left: 15px;padding: 5px" src="https://images.myyogateacher.com/Teacher-Page/icon-05.png" alt="">
    <span style="margin-left: 15px;">Yoga mat</span>
    </div>
    <div style="background-color: #ffe6e6; border-radius: 2rem; margin-top:15px;" >
    <img style="margin-left: 15px;padding: 5px" src="https://images.myyogateacher.com/Teacher-Page/icon-06.png" alt="">
    <span style="margin-left: 15px;">Observe your trainer during yoga session</span>
    </div>
    <div style="background-color: #ffe6e6; border-radius: 2rem; margin-top:15px;" >
    <img style="margin-left: 15px;padding: 5px" src="https://images.myyogateacher.com/Teacher-Page/icon-06.png" alt="">
    <span style="margin-left: 15px;">Do Yoga Everyday</span>
    </div>
    
  </div>
  <div class="column">
    <img style="margin-left:15px; margin-top:5px;" src="https://ekamyoga.com/wp-content/uploads/2022/03/session.png" alt=""> </div>
   </div>

</div>
<div style="background-color:#ffe6e6;margin-top:50px; padding:100px;">
    <h1 style="margin-top:50px; text-align: center;">Ekam Yoga's online session clients Feedback</h1>
    <img style="margin-top:10px; display: block;
  margin-left: auto;
  margin-right: auto;
  " src="https://images.myyogateacher.com/home-page/Divider.png" alt="">

<iframe style="margin-top:75px; display: block;
  margin-left: auto;
  margin-right: auto;
  width: 75%;" width="560" height="500" src="https://www.youtube.com/embed/iOu_PTBcHIU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  
</div>

<div  style="background-color:#DFE7F6; padding:100px;">
<h1 style="margin-top:50px; text-align: center;">Available on every platform</h1>
    <img style="margin-top:10px; display: block;
  margin-left: auto;
  margin-right: auto;
  " src="https://images.myyogateacher.com/home-page/Divider.png" alt="">
  <div style="margin-top: 20px;">
  <img style="margin-left: 35px;" src="https://ekamyoga.com/wp-content/uploads/2020/07/icn_1_sel.jpg" alt="">
  <span style="margin-left: 15px;">Schedule Group Live Yoga Class</span>
  <span><img style="margin-left: 200px;" src="https://ekamyoga.com/wp-content/uploads/2020/07/live.jpg" alt=""></span>
  <span style="margin-left: 15px;">Join live yoga session</span>
  <span><img style="margin-left: 200px;" src="https://ekamyoga.com/wp-content/uploads/2020/07/chat-purle.jpg" alt=""></span>
  <span style="margin-left: 15px;">Talk to your teacher</span>
  </div>
  <img style="margin-top:75px; display: block;
  margin-left: auto;
  margin-right: auto;
  width: 95%;" width="50%" height="50%" src="https://ekamyoga.com/wp-content/uploads/2020/07/device-home.jpg" alt="">
  <h1 style="margin-top:50px; text-align: center;">EKAM YOGA ACADEMY 360° tour</h1>
  

</div>




<section class="footers bg-light pt-5 pb-3">
   <div class="container pt-5">
       <div class="row">
           <div class="col-xs-12 col-sm-6 col-md-4 footers-one">
    		    <div class="footers-logo">
    		        <h5>Company</h5></div>
    		    <div class="footers-info mt-3">
    		        <p>Ekam Yoga Care Pvt Ltd</p>
                    <div class="social-icons">

                    <i class="fa-solid fa-envelope"></i>
                    <span>welcome@ekamyoga.com</span><br>
    <i class="fa-solid fa-address-book"></i>
    <span>+91-737-488-8111</span>
                </div>
                    
    		    </div>
    		    <div style="margin-top:20px;" class="social-icons"> 
                <a href="https://www.facebook.com/"><i id="social-fb" class="fa fa-facebook-square fa-2x social"></i></a>
                <a href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square fa-2x social"></i></a>
	            <a href="https://plus.google.com/"><i id="social-gp" class="fa fa-google-plus-square fa-2x social"></i></a>
	            <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-2x social"></i></a>
	        </div>
            <h5 style="margin-top: 15px;margin-bottom:35px;">Certified</h5>
            <img src="https://ekamyoga.com/wp-content/uploads/2020/06/logo_1.1.png" width="130" height="75" alt="">
<span><img style="margin-left: 15px;" src="https://ekamyoga.com/wp-content/uploads/2020/06/yoga-certification.png" width="100" height="75" alt=""></span>
<span><img src="https://ekamyoga.com/wp-content/uploads/2020/07/pngfind.com-design-png-3009490.png" width="60" height="75" alt=""></span>
  
    		</div>
    	   <div class="col-xs-12 col-sm-6 col-md-2 footers-two">
    		    <h5>Links </h5>
    		    <ul class="list-unstyled">
    			 <li><a href="maintenance.html">Home</a></li>
    			 <li><a href="contact.html">Blog</a></li>
    			 <li><a href="about.html">About Us</a></li>
    			 <li><a href="about.html">Be Yoga Volunteer</a></li>
    			 <li><a href="about.html">Certificate Of Holistic Wellness Event</a></li>
                 <li><a href="about.html">Certificate of Yoga Volunteer Program</a></li>
                 <li><a href="about.html">Corporate Yoga</a></li>
                 <li><a href="about.html">Press & Media</a></li>
                 <li><a href="about.html">EKAM Certified Trainers</a></li>
                 <li><a href="about.html">FAQ</a></li>
    			</ul>
    		</div>
    	   <div class="col-xs-12 col-sm-6 col-md-2 footers-three">
    		    <h5>Information </h5>
    		    <ul class="list-unstyled">
    			 <li><a href="maintenance.html">Downloads</a></li>
    			 <li><a href="contact.html">Contact Us</a></li>
    			 <li><a href="about.html">Login</a></li>
    			 <li><a href="about.html">Register</a></li>
    			 <li><a href="about.html">Tearms & Conditions</a></li>
                 <li><a href="about.html">Privacy Policy</a></li>
                 <li><a href="about.html">Refund & cancellation policy</a></li>

    			</ul>
    		</div>
    	   <div class="col-xl-4 col-sm-6 col-md-2 footers-four">
    		    <h5>Join our newsletter</h5>
    		    <p>We bring the right people together to challenge established thinking and drive transformation. We work with our students to build the capabilities that enable organizations to achieve sustainable advantage.</p>
    		</div>
    	   
    		
       </div>
   </div>
</section>


<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html> 
