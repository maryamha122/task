<?php 
$title="Al-Qaysaria Festival";
include 'header.php';
?>
<style>
             #wrapper{max-width: 1400px; margin: 0 auto}
         body{
    background: url("img/pp.jpg");
    padding: 0;
  
    margin:0;
             }
        
   .slidershow p{
   font-size: 40px;
  text-align: center;
    font-style:initial; 
    font-family:sans-serif;
    color: black;
   margin-left: 60px;
}
.slidershow{
    width: 900px;
    height: 600px;
    overflow: hidden;

   
}
.middle{
    position: relative;
    margin: 0 auto;
}

.navigation{
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
}
.bar{
    width: 50px;
    height: 10px ;
    border:2px solid #fff;  
    margin: 6px;
    cursor: pointer;
    transition: 0.4s;
}
.bar:hover{
    background: #fff;
}

input[name="r1"]{
    position: absolute;
    visibility: hidden;
}
.slides{
    width: 500%;
    height: 100%;
   display: flex;

}
.slide{
    width: 20%;
    transition: 0.5s;
}
.slide img{
    width: 100%;
    height: 100%;
    
}

#r1:checked ~ .s1{
    margin-left: 0%;
}
#r2:checked ~ .s1{
    margin-left: -20%;
}
#r3:checked ~ .s1{
    margin-left: -40%;
}
#r4:checked ~ .s1{
    margin-left: -60%;
}
#r5:checked ~ .s1{
    margin-left: -80%;
}
  
.slidershow.middle{
    display: block;
  
     margin-bottom:50px;
}
        
        
        </style>
        <div class="slidershow middle">
            <div>
                <p>Some of the photos in the Al-Qaysaria Market Festival</p>
            </div>
            
            <div class="slides">
                <input type="radio" name="r" id="r1" checked>
                 <input type="radio" name="r" id="r2">
                  <input type="radio" name="r" id="r3">
                   <input type="radio" name="r" id="r4">
                    <input type="radio" name="r" id="r5">
                <div class="slide s1">
                    <img src="img/p2.jpg"  alt="pic4">
                </div>
                <div class="slide">
                    <img src="img/p3.jpg"  alt="pic5">
                </div>
                <div class="slide">
                    <img src="img/p4.jpg"  alt="pic6">
                </div>
                <div class="slide">
                    <img src="img/p5.jpg"  alt="pic7">
                </div>
                   <div class="slide">
                    <img src="img/p6.jpg"  alt="pic8">
                </div>
            </div>
            <div class="navigation">
                <label class="bar" for="r1"></label>
                <label class="bar" for="r2"></label>
                <label class="bar" for="r3"></label>
                <label class="bar" for="r4"></label>
                <label class="bar" for="r5"></label>
            </div>
            
        </div>
            
         <?php        include 'footer.php';?>   
            
            
            
        