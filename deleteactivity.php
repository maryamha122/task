<?php
$title='delete';
include 'header.php';
include 'process.php';?>
 <style>
        #wrapper{max-width: 1400px; margin: 0 auto}
         body{background:url("img/pp.jpg"); }
         .container{
             margin-left: 400px;
             display: inline-block;border: 2px solid black;
            height: 900px;
             width: 600px;
             
            border-radius: 40px 40px 40px 40px ; 
           background-color: beige
         }
         .table{
             margin-top: 100px;
             margin-left:50px;
         }
        
         .form-control{
             margin-top: 90px;
             margin-left:30px;
            height: 40px; width: 200px;border-radius: 40px;
         }
       
         .btn{
             height: 50px;width: 100px;font-size:30px; font-family:serif ;border-radius: 40px;
              background:brown; color:white;margin-top: 40px;margin-left: 200px;
         }
         .btn:hover{
             background-color: bisque;
         }
         .label{
             margin-left:   90px;
             
         }
         h1{
             text-align: center;
             color: #cc3300;
         }
         hr{border:2px solid black }
         th{font-size:25px; color:#cc3300;text-align: center;}
        td{font-size: 25px;}
         </style>
         <body>
             
             <?php 
             if(isset($_SESSION['message'])):?>
             
             <div class="alert alert-<?=$_SESSION['msg_type']?>">
             <?php 
             echo $_SESSION['message'];
             unset($_SESSION['msg_type']);
             ?>
             </div>
             <?php endif;?>
             <div class="container">
             <?php
             $mysqli=new mysqli('localhost','root','','web')or die(mysqli_error($mysqli));
             $result=$mysqli->query("SELECT * FROM activity")or die($mysqli->error);
        
             ?>
             <div class="row justify-content-center">
                 <h1> Delete Activity</h1>
                 <hr>
                 <table class="table">
                     <thead>
                         <tr>
                             
                             <th class="t1" >Activity Type</th> 
                             <th class="t1">Image</th>
                             <th class="t1">Action</th>
                         </tr>
                     </thead>
                     <?php
                                  while ($row=$result->fetch_assoc()):
                     ?>
                     <tr>
                         <td><?php echo $row['activity_type'];?></td>
                         <td> <image src="<?php echo $row['photo']; ?>" alt="" style=" width: 120px; height: 100px;"/></td>
                         
                         <td>
                             <a href="process.php?delete=<?php echo $row['id']; ?>" class="btnn btn-danger">Delete</a></td>
                          
                         
                         
                     </tr>
                     <tr><td colspan="3"><?php echo '<hr>'?></td></tr>
                     <?php endwhile;?>
                     
               
                     
                     
                 </table>
             </div>
             <?php
             function pre_r($array){
                 echo '<pre>';
                 print_r($array);
                 echo '</pre>';
             }
             ?>
                 
             </div>
    <?php include 'footer.php';  ?>                
         </body>
         
                 
         