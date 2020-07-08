<?php
$title='Folk_Arts';
include"header.php";?>
<style>
          body{background-image: url("img/pp.jpg")}
         #wrapper {margin: 0 auto; max-width: 1400px}; 
 #i{width: 700px;height: 400px; padding: 20px}
 img{width: 700px; height: 400px}
 .slideshow-container {
  max-width: 650px;
  max-height: 450px;
  position: relative;
  margin: auto;
  margin-top: 77px;
}
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: brown;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
 .dot:hover {
  background-color: #717171;}
    </style>
        <body>
        <div id="wrapper">
   <table> 
    <tr>
    <td colspan="2"> <h1 style="text-align: center;">~~~    Folk Arts    ~~~~</h1></td> 
    </tr>
    <tr>
    <td><img src="img/2.png" alt="welcome" id="i"/> </td>   
    <td ><h2 style="text-align: center;">There are a lot of popular arts in Al-Ahsa inherited generation after generation, which is characterized by the original Arab spirit, which expresses the heritage of Saudi Arabia, and adds a special charm and character, and in Ahsa many different folk arts that reflect their history and recount historical stories to highlight what the ancestors of the glories And tournaments over the years.
    Al-Ahsa is characterized by its beautiful coastal and agricultural landscapes, and from its picturesque environment, many popular arts have emerged that express their environment. In these beautiful folk colors, the drums, the drums and the paws are used under successive rhythms, in addition to various popular rhythms.</h2></td></tr>
   </table>
 </div>
            <hr>
<div class="slideshow-container">
<div class="mySlides">
    <a href="#"><img src="img/a.png" style="width:100%"></a>
</div>
    <div class="mySlides">
  <img src="img/b.png" style="width:100%"> 
</div>
    <div class="mySlides ">
  <img src="img/c.png" style="width:100%">
 
</div>
    <div class="mySlides">

  <img src="img/d.png" style="width:100%">
 
</div>
    <div class="mySlides">

  <img src="img/e.png" style="width:100%">
 
</div>
    <div class="mySlides">

  <img src="img/f.png" style="width:100%">
 
</div>

</div>

<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
   <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
  <span class="dot" onclick="currentSlide(6)"></span>
</div>
        </body>
 <?php include 'footer.php';?>   
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