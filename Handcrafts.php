<?php 
$title="Handcrafts";
include 'header.php';
?>
<style>
      #wrapper{max-width: 1400px; margin: 0 auto}
        body{background:beige}
          .menu{
 margin-left: 0px;
 margin-bottom:  -100px;
  width: 300px;
  height: 350px;
  transition: all ease-in-out 0.5s;
  z-index: 9997;
  transition: all 0.5s;
  padding: 0 50px;
  background:burlywood;
  overflow-y: auto;
  margin-top: -47px;
        }
       .nav-menu {
  padding-top: 30px;
}

.nav-menu * {
  margin: 0;
  padding: 0;
  list-style: none;
}

.nav-menu > ul > li {
  position: relative;
  white-space: nowrap;
}

.nav-menu a {
  display: flex;

  color: black;
  padding: 12px 15px;
  margin-bottom: 15px;
  transition: 0.3s;
  font-size: 20px;
  margin-left:  -40px;
  text-decoration: none;
}

.nav-menu a i {
  font-size: 24px;
  padding-right: 8px;
  color: #6f7180;
}

.nav-menu a:hover, .nav-menu li:hover > a {
  text-decoration: none;
  color: white;
}

.nav-menu a:hover i, .nav-menu li:hover > a i {
  color: #149ddd;
}    section {
  padding: 70px 50px;;
  overflow: hidden;
}
.Handcrafts{margin-left:400px;margin-top: -500px;}
.National{margin-top: -150px;}
.challenges{margin-top: -150px;}
.Craft{margin-top: -150px;}


.section-title h2 {
  font-size: 32px;
  font-weight: bold;
  margin-bottom: 20px;
  padding-bottom: 22px;
  position: relative;
  color: #173b6c;
  margin-top: 80px;
 
}

.section-title h2::after {
  content: '';
  position: absolute;
  display: block;
  width: 70px;
  height: 3px;
  background: #149ddd;
  bottom: 0;
  left: 0;
   list-style: none;
  padding: 0;
  padding-bottom: 10px;
}

 h4 {
 margin-left: 20px;
 font-size: 25px;
}
.section-title ul{
    color: red;
     font-size: 22px;
    
}
.back-to-top{
    position: fixed;
    width: 50px;
    height: 50px;
    background: black;
    bottom:    40px;
    right: 50px;
    text-decoration: none;
    text-align: center;line-height: 50px;
    color: white;
    font-size:  50px;
    transition: display 0.5s ease-in-out;
  z-index: 99999;

  
 
}


.back-to-top:hover {
  color: #fff;
  background: #2eafec;
  transition: background 0.2s ease-in-out;
}
html{scroll-behavior:smooth;}
#slideshow {/*slider container css*/
  width: 800px;
  height: 400px;
  overflow: hidden;
  margin: 50px auto 50px auto;
  box-shadow: 0px 0px 50px #333;
  -moz-box-shadow: 0px 0px 50px #333;
  -webkit-box-shadow: 0px 0px 50px #333;
  background-color:#cccccc;
}

#slideshow ul {/*manage slider scroll elements css*/
  width: 4000px;
  list-style: none; 
}

#slideshow ul li {
  float: left;
}




.slideshow-container {
  max-width: 650px;
  max-height: 450px;
  position: relative;
  margin: auto;
  margin-top: 77px;
  margin-left: 100px;
}
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

 .dot:hover {
  background-color: #717171;
}

        </style>
        <a class="back-to-top" href="#"><i class="fa fa-toggle-up"></i></a>
        <div class="menu">
                <nav class="nav-menu">
                <ul>
                    <li><a href="#Handcrafts"><i class="fas fa-book"></i> <span><strong>Handcrafts Definition</strong></span></a></li>
                <li><a href="#National"><i class="fas  fa-calendar-alt"></i> <span><strong>The National Program for Development<br>of crafts and handicraft"Barea"</strong></span></a></li>
                <li><a href="#challenges"><i class="fas fa-tasks"></i> <span><strong>The main challenges facing handicrafts</strong></span></a></li>
                <li><a href="#Craft"><i class="fas fa-stream"></i><span><strong> Craft Classification</strong></span></a></li>
                </ul>
            </nav>
                 </div>
            
          
             
<main id="main">
     
     <section id="Handcrafts" class="Handcrafts">
          
         <div class="container">
           
             <div class="section-title">
                 <br>
                 <br>
                   <h2>Handcrafts Definition</h2>
             
                   <h4>A real expression of the live human traditions reflected in the three fundamentals of sustainable development and human values :</h4>
                  <br>
                  <ul>
                       <li><strong>Adaptation</strong></li>
                       <li><strong>Renewal</strong></li>
                       <li><strong>Creativity</strong></li>
                   </ul>
                   <br>
                   <h4>Through “crafts” : Nations keep their cultural identity ,National authenticity and social heritage .</h4>
             </div>
             <br><br>
              <hr>
               <hr>
             
             
             
         </div>
     </section>
    <section id="National" class="National">
        <div class="container ">
            <div class="section-title">
                <h2>The National Program for the Development of crafts and handicraft "Barea"</h2>
                <ul>  
                     <li><strong>The advancement of the industry</strong></li>
                     <li><strong>Cultural heritage development </strong></li>
                       <li><strong>Display of authenticity features </strong></li>
                        <li><strong>The advancement of the industry </strong></li>
                </ul>
                                <div id="slideshow">
 
    <ul>
        <li id="slide1"><img src="img/vv.jpg" style="width:320px;height: 320px; padding: 3px;"/></li>
      <li id="slide2"><img src="img/v22.jpg" style="width:320px;height: 320px; padding: 3px;margin-left: 70px;" /></li>
    
    </ul>
  </div>
                <br><br>
                <hr>
               <hr>
            </div>
            </div>
    </section>
    <section id="challenges" class="challenges">
         <div class="container">
             <div class="section-title">
                 <h2>The main challenges facing handicrafts</h2>
                   <ul>  
                     <li><strong>Part of cultural identity vanishing</strong></li>
                       <li><strong>Inconsiderable craftsmen </strong></li>
                       <li><strong>Lack of job opportunity </strong></li>
                        <li><strong>Lack of skills development and creative abilities of Young men</strong></li>
                          <li><strong>High competition of imported crafts</strong></li>
                </ul>
                 <div id="slideshow">
    <!-- List of slider images -->
    <ul>
        <li id="slide1"><img src="img/ww.jpg" style="width:320px;height: 320px; padding: 3px;"/></li>
      <li id="slide2"><img src="img/v1.jpg" style="width:320px;height: 320px; padding: 3px;margin-left: 70px;" /></li>
    
    </ul>
  </div>
                 <br><br>
                 <hr>
               <hr>
             </div>
         </div>
    </section>
        <section id="Craft" class="Craft">
         <div class="container">
             <div class="section-title">
                 <h2>Craft Classification</h2>
                 <table>  
                     <tr>
                         <td>	<table border="1" cellpadding="5px" cellspacing="5px" style="width: 300px; height: 290px;color: black;background: white; margin-top:40px;">
		<tbody>
			<tr>
                            <td style="text-align: center; font-size: 20px;"><strong>Plant sources</strong></td>
			</tr>
                        <tr>
				<td style="text-align: center;font-size: 20px;"><strong>Animal sources</strong></td>
			</tr>
                        <tr>
				<td style="text-align: center;font-size: 20px;"><strong>Natural sources</strong></td>
			</tr>
                        <tr>
				<td style="text-align: center;font-size: 20px;"><strong>Metal sources</strong></td>
			</tr>
                        <tr>
				<td style="text-align: center;font-size: 20px;"><strong>Other sources</strong></td>
			</tr>
		</tbody>
	</table></td>
        
        <td><div class="slideshow-container">

<div class="mySlides">

  <img src="img/m1.jpg" style="width:600px;height: 370px;">
 
</div>
    <div class="mySlides">

  <img src="img/m2.jpg" style="width:600px;height: 420px ;">
 
</div>
    <div class="mySlides ">

  <img src="img/m3.jpg" style="width:100%">
 
</div>
    <div class="mySlides">

  <img src="img/m4.jpg"style="width:600px;">
 
</div>
    <div class="mySlides">


        <img src="img/m5.jpg" style="width:100%">
 
</div>
    <div class="mySlides">

  <img src="img/m6.jpg" style="width:600px ;">
 
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
</div></td>
                     </tr>
                 </table>
                

      

             </div>
         </div>
    </section>
    
</main>
        <script src="https://kit.fontawesome.com/a076d05399.js"> </script>
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

                <?php        include 'footer.php';?>