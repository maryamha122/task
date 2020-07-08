<?php 
$title="Gallery";
include 'header.php';
?>
<style>
         body{background-image: url("img/pp.jpg")}
         #wrapper {margin: 0 auto; max-width: 1400px};    
     td img{width: 700px; height: 400px}
         h1{text-align: center;}
         h2{text-align: center; border: 1px solid black ; background-color:burlywood; width: 300px; margin-left: 200px}
         a {color: black; text-decoration: none}
         table{margin: 0 auto}
</style>
        <body>
        <div id="wrapper">
                <table>
                    <tr>
                        <td><h1>Photo Gallery</h1></td>
                        <td><h1>Video Gallery</h1></td>
                    </tr>
                    <tr>
                        <td><img src="img/photo.png"></td>
                        <td><img src="img/video.png"></td>
                    </tr>
                    <tr>
                        <td><a href="hand.php"><h2>HandCraft</h2></a></td>
                        <td rowspan="3px"><a href="video.php"><h2>View all videos</h2></a></td>
                    </tr>
                    <tr>
                        <td><a href="folkart.php"><h2>Folk Art</h2></a></td>
                    </tr>
                    <tr>
                        <td><a href="aboutalhasa.php"><h2>About AL-Ahsa</h2></a></td>
                    </tr>
                </table>
            </div> 
        </body>
  <?php include 'footer.php';?>