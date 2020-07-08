 <?php 
$title="Activity";
include 'header.php';
?>
<style>
             #wrapper{max-width: 1400px; margin: 0 auto}
        body{background-image:url("img/pp.jpg"); font-family: poppins;
    display: block;
    justify-content: center;
    align-items: center;
    align-content: center;
    min-height: 100vh;
    color: #fff;

    
}

.container{
    width: 1000px;
    
     display:flex;
    flex-wrap:wrap;
    justify-content:space-between;
 margin-left: 160px;

   
}
.card{
    position: relative;
/*    left: -6%;*/
    right: -1%;
    width: 300px;
    height: 370px;
  
    margin-left: 30px;
     transition: 0.3s  ease-in-out;
     box-shadow: 0 3px 15px rgba(0,0,0,0.7);
    
}

.card .imgbox{
     position: relative;
     top: 0;
     left: 0;
     width: 100%;
     height: 100%;
   
     
}

.card .imgbox img{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 80%;
    display: block;
    transition: 0.1s;
      
   
    
}

.card .content{
    position: absolute;
    left: 0;
    bottom:0;
    width: 100%;
    height: 100px;
    padding: 12px;
    background:#666666;
    transition:all 0.5s cubic-bezier(.48,-0.28,0.41,1.4);
    box-sizing: border-box;
    overflow: hidden;
    
    
}

.card:hover .content{
    width: 100%;
    height: 75%;
    left: 0;
    bottom: 0;
}

.content p{
    margin: 10px 0 0;
    padding: 1em 1em;
    transform: translateY(2em);
    line-height: 1.3em;
    transition: 0.3s;
    text-align: justify;
    opacity: 0;
    font-size: 15px;
    
}
.card:hover .content p{
    transform: translateY(0);
    opacity: 1;
}
h2{
    text-align: center;
}

.card:hover {
    box-shadow: 0 0 5em rgba(0,0,0,0.7);
}

 h1{
     opacity:0.9;
     font-style:italic;
     font-family: initial;
     font-size: 70px; 
  display:block;

margin-right: 1090px;

    color: black;
}
        </style>
         <div class="container">
            
                <h1 >Activities</h1>
            
            <div class="card">
                
                
                <div class="imgbox">
                    <a href="page1.php"  ><img class="pic1" src="img/p1.jpg" alt="pic1"></a>
                </div>
                
                <div class="content">
                
                    <h2>Al-Qaysaria Festival</h2>
                    <p>"Al-Qaysariya Market", which is considered one of the oldest historical folk markets in the Kingdom, in the Al-Rifaa area in the city of Hofuf, was built in 1822 AD 1238 AH, and includes about 422 stores, its architectural designs mimic the ancient heritage of the people of the eastern region.</p>
                </div>
                
            </div>
             <div class="card">
                <div class="imgbox">
                    <a href="page2.php">  <img class="pic3" src="img/h1.jpg" alt="pic3"></a>
                </div>
                <div class="content">
                    <h2>AlAhsa Creative </h2>
                    <p>The Al-Ahsa Creative Festival for Handicrafts and Folk Arts, organized by the Al-Ahsa Secretariat at Al-Fareej Heritage Headquarters, has recovered its visitors ’memory for many years past time by reviving folklore, enhancing cultural mobility in the field of crafts and arts, and highlighting the potential of Al-Ahsa on an international level.</p>
                </div>
                
            </div>
            <div class="card">
                <div class="imgbox">
                    <a href="page3.php"><img class="pic2" src="img/t1.jpg" alt="pic2"></a> 
                </div>
                <div class="content">
                    <h2>Dates Marketing Festival </h2>
                    <p>Al-Ahsa is famous for its abundance of palm trees, as there are 2.3 million palm trees in the governorate in what is considered the "largest palm oasis in the world". Al-Ahsa represents about 10% of the Kingdom's production of dates.</p>
                </div>
                
            </div>
            
           
                  </div>
        <?php        include 'footer.php';?>
        