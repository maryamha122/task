<?php 
$title="admin";
session_start();
if(!isset($_SESSION['ID'])){
    header("Location:error.php");
    exit();
}
else{
include 'headerA.php';}
?>
<style> 
           #wrapper{max-width: 1400px; margin: 0 auto}
        body{background-image:  url("img/pp.jpg")}
        td img{width: 270px ; height: 250px; margin-bottom: 200px}
        button{width: 350px ; height: 52.5px;margin-bottom: 20px;border-radius: 40px; font-size: 23px;}
        button:hover{background-color:burlywood;}
        table{margin-left: 20px}
        </style>
        <table style="border: 4px  solid ; margin-left: 180px ;background: beige; margin-top: 20px ; width: 1000px">
                <tr><td style="font-size: 50px; text-align: center;">~~~Admin Servics~~~</td></tr>
                <tr><td> 
                        <div id="right">
                  <table>
                      <tr>
                          <td><a href="AddActivity.php"><button style=" background-color: lavenderblush"><strong>Add Activity</strong></button></a></td>
                      </tr>
                      <tr >
                          <td><a href="addNews.php"><button style="width:400px; background-color: blanchedalmond "><strong>Add News</strong></button></a></td>
                          <td rowspan="5"><img src="img/admin.png"/><td>
                      </tr>
                       <tr >
                           <td><a href="deleteNW.php"><button style="width:500px; background-color: #ecc0b2"><strong>Delete News</strong></button></a></td>
                      </tr>
                       <tr >
                           <td><a href="deleteactivity.php"><button style="width:600px ; background-color: #b37e7e"><strong>Delete Activity</strong></button></a></td>
                      </tr>
                       <tr>
                           <td><a href="update.php"><button style="width:700px; background-color:tan "><strong>Update Admin Information</strong></button></a></td>
                      </tr>
                  </table> 
            </div>
            </table>
          <?php include 'footer.php';?>
</div>
</body>
             
