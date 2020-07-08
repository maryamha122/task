<?php 
$title="Home";
include 'header.php';
?>
        <style> 
        #wrapper{max-width: 1400px; margin: 0 auto}
        body{background-image:  url("img/pp.jpg")}
        img{width: 1400px;height:900px;}
        #nav{margin-bottom: 0px}
        #start{margin-top: 70px}
        #start #but1{background-image: url("img/ss.jpg");border-radius: 20%}#start #but2{background-image: url("img/Cap.jpg");border-radius: 20%}
        #word>ul{font-family: sans-serif;list-style: none;transform: translate(2%, -330%); color: white; font-size:60px;position: absolute}      
        footer{background-image:URL("img/foott.png");width: 1400px;height:390px; margin-top: 500px}
        footer>ul{list-style: none;text-align:center; float: left; margin-left: 90px;margin-top:100px;margin-right: 100px}
        .top{font-size: 35px;margin-bottom: 20px; color: #ff6633;}
        footer li{font:bold fantasy;font-size: 20px;margin-bottom: 18px;}
        footer a{color: white;text-decoration: none;}
        a:hover{color: navajowhite}
        </style>
    </head>
    <body>

            <div id="word" />
            <image src="img/pic.png" alt="welcome"/>
                <ul>
                <li>Knowledge of heritage</li>
                <li style="color: blanchedalmond">&nbsp &nbsp enlightens ideas </li>
                <li style="color:  navajowhite">&nbsp &nbsp &nbsp &nbsp and paths of life</li>
            </ul>
            </div>
        <div id="start">
            <h1 style="float:left; margin-left:250px; ">Definition of Al-Ahsa</h1>
            <h1 style="float:right; margin-right:160px;">Unesco network for creative cities</h1>
            <a href="about2.php"><button  id="but1" style="width: 500px; height: 250px; float: left; margin-left:150px;"></button></a>
            <a href="about1.php"> <button id="but2" style="width: 500px; height: 250px; float: left; margin-left:100px" ></button></a>
        </div>
           
        <footer>
            <ul id="first">
                <li class="top"><strong>About</strong></li>
                <li><a href="about1.php">Unesco network for creative cities</a></li>
                <li><a href="about2.php">General Presentation</a></li>  
                <li><a href="about3.php">Committee Organizational Chart</a></li> 
            </ul>
            <ul>
                <li class="top"><strong>Other</strong></li>
                <li><a href="#">Heritage Map</a></li>
                <li><a href="News.php">News</a></li>
                <li><a href="InterPart.php">International participations</a></li>
            </ul>
            <ul>
                <li class="top"><strong>Contact Us</strong></li>
                <li><a href="contact.php"><image src="img/em.png" alt="contact" style="height: 120px;width: 120px"/></a></li>    
            </ul>
        </footer>
        
    </body>