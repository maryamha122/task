<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title><?php echo $title;?> </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
        
        #nav{ background-color: beige;width: 1400px;font-family:fantasy;margin-bottom: 50px;}
        #nav a{text-decoration: none;color: black; float: left;}
        #nav ul{list-style: none;display: table-cell;height: 90px;vertical-align: middle;}
        #nav li{margin-left:30px;border-right: 3px solid;border-right: 0; font-size: 17px; float: left;}
        header img{width: 1400px;height:200px}
        header>ul{list-style: none;text-align:center;position:absolute;color: white; font-size:40px;font-family:sans-serif;transform: translate(160%, -220%);}
      .fas{margin-right:5px;}   
      #nav li:hover {background: gainsboro;cursor: pointer;}
      a:hover{color: navajowhite}
      
     
           </style>
    </head>
    <body>
        <div id="wrapper">
         <header>
             <image src="img/aaa.png" alt="welcome" style="width: 1400px;"/> 
           <ul style=" text-align: center"><li><strong>Al-Ahsa Creative City</strong></li>
               <li style=" font-size: 30px">of crafts & Folkart</li>    
           </ul>
        </header>
            <div id="nav">
                <ul>

                    <li><a href="Home.php" ><i class="fas fa-home"></i>Home</a></li>
                    <li><a href="login.php"><i class="fas fa-user"></i>Admin</a></li>
                    <li><a href="Handcrafts.php"><i class="fas fa-cut"></i>Handcrafts</a></li>
                    <li><a href="Folk_Arts.php"><i class="fas fa-pencil-ruler"></i>Folk Arts</a></li>
                    <li><a href="Gallery.php"><i class="fas fa-book"></i>Gallery</a></li>
                <li><a href="activity.php"><i class="fas fa-cogs"></i>Activities</a></li>
                <li><a href="News.php"><i class="fas fa-globe"></i>News</a></li>
                <li><a href="InterPart.php"><i class="fas fa-handshake "></i>International participations</a></li>
<!--                <li><a href="contact.php"><i class="fas fa-phone"></i>Contact Us</a></li>-->
                
                </ul>
        </div>
             