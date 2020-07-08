<?php $title="News-content";
include 'header.php';
 include 'connect.php';
 $titlee=$_GET['title'];
  $query="SELECT * from News where title='$titlee'";
  $news=array();
 $result = mysqli_query($con, $query);
$row= mysqli_fetch_assoc($result);
$news[$row['title']]=array("photo"=>$row['photo'],"date"=>$row['date'],"text"=>$row['text'],"titlee"=>$row['title']);
  ?>

    <style>
        #wrapper{max-width: 1400px; margin: 0 auto}
        body{background-image:  url("img/pp.jpg")}
       #content{margin-left: 100px; margin-right: 100px}

           </style> 
           <div id="wrapper">
           <div id="content">
                  <?php foreach ($news as $i) {?>
                <h3 style=" width: 900px; text-align: center; margin-top: 50px; font-size: 40px; margin-left: 140px"><?php echo $i['titlee']; ?></h3>
                <image src="<?php echo $i['photo']; ?>" alt="newsphoto" style=" width: 900px; height: 500px;margin-left: 150px "/>
                <p style=" font-size: 30px; width: 1200px;text-align: center ">
<?php echo $i['text']; ?>
            </p>  <?php }?>
           </div> 
           </div>
<?php include 'footer.php';?>