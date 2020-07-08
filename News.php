<?php $title="News";include 'header.php';
                    include 'connect.php';
                    if(isset($_GET['page'])){
                        $page=$_GET['page'];
                    }
 else {$page=1;}
 $w=06;
 $star=($page-1)*06;
  $query="SELECT * from News limit $star,$w";
    $news=array();
  if($result = mysqli_query($con, $query)){
while($row= mysqli_fetch_assoc($result)){
$news[$row['title']]=array("photo"=>$row['photo'],"date"=>$row['date'],"text"=>$row['text'],"titlee"=>$row['title']);
  }
}
  ?>
    <style>
        #wrapper{max-width: 1400px; margin: 0 auto}
        body{background-image:  url("img/pp.jpg")}
        #content{width: 1400px; height: 1050px;padding: 20px ;display: inline-block;border: 0px solid black;}
        
        #row a{text-decoration: none; color: black}
        #row a:hover{color: gray; background-color: maroon}
        #row{width: 457px; height: 500px; background-color: beige;margin-left: 7px;margin-bottom: 11px;float: left}

.btn{font-size: 40px;text-decoration: none;color: black}

           </style>
 

            <div id="content">
                
   <?php foreach($news as $k=>$i){?>
                    
                <div id="row" ><a href="NewsContent.php?title=<?php echo $k?>">
                <image src="<?php echo $i['photo']; ?>" alt="newsphoto" style=" width: 260px; height: 260px; "/>
                <h3 style=" width: 160px; text-align: center; float: right; margin-right: 20px; margin-top: 50px"><?php echo $i['titlee']; ?></h3>
                <p style="margin: 20px; height: 160px; line-height:20px; overflow:hidden;">
<?php echo $i['text']; ?>
            </p>  
            <p style="margin: 20px"><?php echo $i['date']; ?></p>
                    </a> </div><?php } 
                    ?> 
                   </div>
           <div style="margin-left: 600px;">
           
           <?php  $p_query="SELECT * from News";
           $p_result = mysqli_query($con, $p_query);
           $t=  mysqli_num_rows($p_result);
           $tt=  ceil($t/$w);
           if($page>1){
              echo "<a href='News.php?page=".($page-1)."'><i class='fas fa-angle-double-left ' style='font-size:45px;color:red;'></i></a>";
               
           }
           for($i=1;$i<=$tt;$i++){
               echo "<a href='News.php?page=".$i."' class='btn btn-primary'>$i</a>";
           }
             if($i>$page){
              echo "<a href='News.php?page=".($page+1)."'><i class='fas fa-angle-double-right 'style='font-size:45px;color:red;'></i></a>"; 
           }
           
           ?>
               </div>
           

<?php include 'footer.php';?>