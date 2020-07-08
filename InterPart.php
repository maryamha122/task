<?php 
$title="International Participations";
include 'header.php';
?>

<style> 
        #wrapper{max-width: 1400px; margin: 0 auto}
        body{background-image: url("img/pp.jpg")}
      a:hover{color: navajowhite}
        
         body{
/*    margin: 0;*/
    font-family: poppins;
    /*display: inline-block;*/
    justify-content:center ;
    align-items: center;
    align-content: center;
    min-height: 100vh;
    color: #fff;
    
     

/*    background-image:url("pp.jpg");*/
    
}

.container{
    width: 1000px;
    
     display:flex;
    flex-wrap:wrap;
    justify-content:space-between;
 margin-right: 0px;

   
}
.card{
    position: relative;
/*    left: -6%;*/
    right: -1%;
    width: 300px;
    height: 450px;
  display:block;
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
    padding: 10px;
    background:#333;
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
    margin: -20px 0 0;
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
     ;
     font-family: initial;
     font-size: 50px; 
  display:block;

margin-left: 30px;

    color:#333;
}
        </style>
 
   <div id="wrapper">
            
                  <div class="container">
            
                <h1 >International Participations</h1>
            
                
                <table>
                    <tr>
                        <td>   
                        
            <div class="card">
                
                
                <div class="imgbox">
                    <a href="SouthKorea.php"  ><img class="SouthKorea" src="img/pic4.jpeg" alt="pic4"></a>
                </div>
                
                <div class="content">
                
                    <h2>South Korea</h2>
                    <p>Al-Ahsa participated as the representative of the Kingdom in the international handicraft workshop for member cities of the UNESCO Creative Cities Network established in South Korea, where Al-Hasa joined the global network in the creative field of handicrafts and folk arts at the initiative of Al-Ahsa Municipality. Advisor to the Mayor and Head of the Task Force of the Al-Ahsa membership in the network, Eng. Ahmed Al-Matar and the international communication officer.</p>
                   
                </div>
                
            </div>
                    
               </td>  
               <td>     
             <div class="card">
                <div class="imgbox">
                    <a href="sweden.php">  <img class="sweden" src="img/pic5.jpeg" alt="pic5"></a>
                </div>
                <div class="content">
                    <h2>Sweden </h2>
                    <p>Al Ahsa topped the book "Creative Cities of the World" issued by the network of creative cities of the United Nations Educational, Scientific and Cultural Organization (UNESCO), after joining the network in the field of handicrafts and folklore (the first Gulf and the second Arab). The book, which was distributed on the occasion of the "Creative Cities Network" conference, was held yesterday in the Swedish city of Ustarland with the participation of Amin Al-Ahsa, Eng. Adel Al-Melhem.</p>
                </div>
            </div>
                 </td>   
                    
                 <td>  
            <div class="card">
                <div class="imgbox">
                    <a href="France.php"><img class="France" src="img/pic6.jpeg" alt="pic6"></a> 
                </div>
                <div class="content">
                    <h2>France</h2>
                    <p>Al-Ahsa Municipality participated in the 11th annual meeting of the member cities of UNESCO's Creative Cities Network, which was held during the period from June 30, 2017 and until July 2, 2017 in Enghien-les-Bains, France. The history of Al-Ahsa, which extends from the heart of the Middle East and over 7,000 years of time, where Al-Ahsa was settled by the Canaanites and Chaldeans and recently by the Arab tribes, adding that Al-Ahsa is the world's largest and the largest oil field in the world.</p>
                </div></div>
                
                    </td> 
                        <td>  
            <div class="card">
                <div class="imgbox">
                    <a href="Paducah.php"><img class="Paducah" src="img/pic7.jpeg" alt="pic7"></a> 
                </div>
                <div class="content">
                    <h2>Paducah </h2>
                    <p>Al-Ahsa Municipality participated in the first annual meeting of the member cities of UNESCO's Creative Cities Network in the field of handicrafts and folk arts in Paducah, the creative city of Kentucky, USA, on 23-27 September 2017. In the creative field at the initiative of Al Ahsa Municipality. The meeting dealt with a number of development axes on creative cities and tourism opportunities, which were addressed by a number of specialists and those interested in the field of development.</p>
                </div></div>
                
                    </td> 
                </tr>
                
                
                
                <tr>
                         
                    <td>
                 <div class="card">
                
                
                <div class="imgbox">
                    <a href="Poland.php"  ><img class="Poland" src="img/pic8.jpeg" alt="pic8"></a>
                </div>
                
                <div class="content">
                
                    <h2>Poland</h2>
                    <p>Al-Ahsa has affirmed the continuity of achieving the objectives of sustainability in the development of handicrafts and folklore, through several operational projects and cultural ideas that will preserve the stock of historical heritage owned by Al-Ahsa. Members of UNESCO's network of creative cities in the cities of Krakow-Katowice, Republic of Poland. The meeting, which will last until June 15, opened in Krakow in the presence of Katowice Mayor Marcin Karuba and UNESCO Deputy Director-General.</p>
                </div>
                
            </div>
                     </td>   
                        
                      <td>   
             <div class="card">
                <div class="imgbox">
                    <a href="China.php">  <img class="China" src="img/pic9.jpeg" alt="pic9"></a>
                </div>
                <div class="content">
                    <h2>China</h2>
                    <p>The representative of member cities of UNESCO's Creative Cities Network met at the Al-Ahsa Creative Center at The 8th China Suzhou Creative & Design Cultural Industry Expo, on Friday, April 19, 2019. He was a member of the global network of creative arts and crafts at the initiative of Al-Ahsa Municipality . At the same exhibition, the "Men's Abaya" was the focus of the participants' admiration. The creativity and skill in the abaya was attractive to them, expressing their delight in taking.</p>
                </div>
                
            </div>
                   </td>       
                          
                     <td>      
            <div class="card">
                <div class="imgbox">
                    <a href="Italy.php"><img class="Italy" src="img/pic10.jpeg" alt="pic10"></a> 
                </div>
                <div class="content">
                    <h2>Italy</h2>
                    <p>The Mayor of Al-Ahsa, the head of the delegation of Al-Ahsa creative Adel bin Mohammed Al-Melhem, said that Ahsa keen to achieve the drawings goals in the preservation of creativity in handicrafts and folklore at the local level, through several projects and programs, which worked to sustain creativity, Which has given Al Ahsa its achievements over the past four years. It is the member of the Creative Cities Network in 2015, the registration of Al-Ahsa Oasis as a World Heritage Site 2018.</p>
                </div>
                </div>
                        </td> 
                        <td>  
            <div class="card">
                <div class="imgbox">
                    <a href="Japan.php"><img class="Japan" src="img/pic11.jpeg" alt="pic11"></a> 
                </div>
                <div class="content">
                    <h2>Japan</h2>
                    <p>The mayor of Al-Ahsa, Eng. Adel bin Mohammed Al-Mulhim,the Head of the Al-Ahsa Creative Delegation presented in the annual meeting of the member cities of the UNESCO Creative Cities Network in Kanazawa, Japan, In the presence of the Mayor of the city, Mr. "Yamano Yakyoshi" and the representatives of 30 countries around the world, a detailed presentation on the global and regional files obtained by Ahsa(Selected as a UNESCO World Heritage Site in 2018, membership of the Creative Cities Network.</p>
                </div></div>
                
                    </td> 
                </tr>
                </table>
                          
            </div>
       <?php include 'footer.php';?>
   </div>
             



