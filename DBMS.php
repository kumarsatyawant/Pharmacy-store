<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
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
  cursor: pointer;
  height: 15px;
  width: 15px;
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
  .prev, .next,.text {font-size: 11px}
}
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body bgcolor="#E6E6FA">
<h1 style="text-align:center;background-color:DodgerBlue;">GREEN PHARMACY STORE</h1>
<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="https://www.writework.com/uploads/12/120533/modern-pharmacy-norway.jpg" style="width:100%">
  <div class="text">PHARMACY</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="https://scontent.fblr4-1.fna.fbcdn.net/v/t1.0-9/20106758_1432343070180507_7696404644377204290_n.jpg?_nc_cat=110&_nc_ht=scontent.fblr4-1.fna&oh=b70e7be1069254467281444ac9a16f78&oe=5CEC2D6D" style="width:100%">
  <div class="text">FOOD IS MEDICINE</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="https://ajp.com.au/wp-content/uploads/2017/08/22404342_xl.jpg" style="width:100%">
  <div class="text">DOCTOR'S CONSULTANT</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
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
<p style="color:red;text-align:center;"><strong><q>Alcohol, tobacco, and pharmaceutical drugs are legal, but they can hurt a lot of people.</q></strong></p>
<p style="color:green;text-align:center;"><strong><q>A healthy patient is just a prescription opportunity seen through the wrong end of a telescope.</q></strong></p>

<div class="row">
  <div class="column">
<a href="Doctor_details.php">
    <img src="https://www.scripps.org/sparkle-assets/images/primary_care_physician-17397793949202224780.jpg" style="width:400px;height:300px;">
<p><b>Doctor. info.....</b></p></a>
  </div>

  <div class="column">
<a href="Patient_details.php">
    <img src="https://patient.azureedge.net/themes/p5/gfx/Patient_fb_placeholder.png" style="width:400px;height:300px;">
<p><b>Patient.info.....</b></p></a>
  </div>

  <div class="column">
<a href="Drug_manufacturer_details.php">
    <img src="https://www.addiction-ssa.org/images/uploads/bigstock-Medicine-Pills-52148695.jpg"  style="width:400px;height:300px;">
<p><b>Drugs Suppliers.info.....</b></p></a>
  </div>
</div>

<div class="row">
<div class="column">
    <img src="https://greenpharmacy.co.in/wp-content/uploads/Product_3.png"  style="width:250px;height:400px;">
     <pre><p style="color:white;background-color:rgb(106, 90, 205)">
     <b><font size="6">
     FOR ALL SKIN 
     TYPES</font><font size="4">
        PERFECT COSMETIC</font></b></p></pre>
  </div>

<div class="column"><br>
    <img src="https://greenpharmacy.co.in/wp-content/uploads/fruit-food-care.jpg"  style="width:345px;height:251px;">
    <br><b>Best Seller Combo pack Rs. 599-/</b>
   </div>

<div class="column"><br>
<a href="https://www.narayanahealth.org/hospitals/bangalore/m-s-ramaiah-narayana-heart-centre-m-s-ramaiah-nagar">
  <img src="https://s3-ap-southeast-1.amazonaws.com/practo-fabric/sakra-world-hospital-bangalore-1483352655-586a2a4fab5f6.jpg" alt="HTML tutorial" style="width:400px;height:300px;border:0">
<p><b>MS Ramaiah Narayana Heart Centre,Bangalore Book An Appoinment</b></p>
</a>
</div>

<div class="column"><br>
<a href="https://www.americanoncology.com/">
  <img src="https://healthcareradius.files.wordpress.com/2017/04/32.jpg?w=723" alt="HTML tutorial" style="width:400px;height:300px;border:0">
<p><b>American Oconology institute, Hyderabad Book An Appoinment</b></p>
</a>
</div>

<div class="column"><br>
<a href="https://www.moolchandhealthcare.com/">
  <img src="http://moolchandhealthcare.com/assets/images/hospital_infra/emergency-mob.jpg" style="width:400px;height:300px;border:0">
<p><b>Moolchand Hospital, Delhi Book An Appoinment</b></p>
</a>
</div>
 </div>


<p style="color:green;text-align:center;"><strong><q>The marvelous pharmacy that was designed by nature and placed into our being by the universal architect produces most of the medicines we need.</q></strong></p>
<p style="color:darkblue;text-align:center;"><strong><q>We have a pharmacy inside us that is absolutely exquisite. It makes the right medicine, for the precise time, for the right target organ with no side effects.</q></strong></p>

<address style="background-color:rgb(120, 120, 120);"><b>
Request Details:<a href="mailto:webmaster123@example.com">Mail</a><br> 
Visit us at:California<br>
Example.com<br>
Box 564, Disneyland<br>
USA<br><br>
Tel: +91 80 4012 9100 / 9600<br>
Fax: +91 80 4012 9100<br>
Email: webmaster@example.com<br>
Web: http: // www.greenfarmacy.com<br>
</b>
</address>

<p style="color:rgb(255, 255, 255);background-color:darkblue"><marquee behavior="scroll" direction="left"><b>Copyright 2012 © Green Farmacy Store, All Rights Reserved. No part of this website can be reproduced in any form without the written permission of Green Farmacy. Website Design, Website Development by INI Technologies Pvt Ltd, Cochin, India</b></marquee></p>
</body>
</html>