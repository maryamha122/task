<?php
$title="Delete News";
include 'header.php';
    ?>
<?php include 'connect.php';
$query="select * from news";
$result = mysqli_query($con,$query);
$news=array();
while ($row=mysqli_fetch_assoc($result)){
    $news[$row['title']]=array('topic'=>$row['title'],
        'photo'=>$row['photo'],'date'=>$row['date'],'text'=>$row['text']   
    );
}
if(isset($_POST["submit"])){
 $topic=$_POST['item'];
 $select="Select photo from News where title='$topic'";
 $resul=mysqli_query($con,$select);
 $rw=mysqli_fetch_assoc($resul);
 $path=$rw['photo'];
 $state=unlink($path);
 if($state){
 $que="DELETE from News where title='$topic'";
 $res = mysqli_query($con,$que);
    }
 else{
     $res=0;
 }
}

?>

<style> 
    #wrapper{max-width: 1400px; margin: 0 auto}
        body{background-image:  url("img/pp.jpg")}
         .content{background-color: #f4f3f2 ; padding: 20px ; width: 700px ; margin-left: 350px;display: inline-block;border: 2px solid black; } 
 #content h1 {
    font-size: 24px; 
    text-align: center;
    text-transform: uppercase;
    line-height: 1.6;
    font-weight: normal;    
}
.content button{   width: 375px;
    text-align: center;
    border: 1px solid auto;
    background: #ff6633;
    color: #FFF;
    -webkit-border-radius: 2px;
    border-radius: 2px;    
    font-size: 14px;
    text-transform: uppercase;
    padding: 14px; 
}
 
 
form {width: 700px; margin: 34px auto;}

form a {width: 375px; margin-bottom: 16px;}
form li {
    margin-top: 5px;
    width: 85px;
    vertical-align: middle;
    padding: 8px;
     background: #f4f3f2; 
    }
#myUL li a {
  border: 1px solid #ddd;   
  padding: 12px; 
  text-decoration: none; 
  font-size: 15px; 
  color: black;
  display: inline-block; 
}

#myUL li a:hover:not(.header) {
  background-color: lightblue; }
 #myUL { list-style-type: none; padding: 0; margin: 0;}

#myInput { background-color: white; width: 19%; font-size: 16px;  padding: 12px 20px 12px 40px;border: 1px solid #FAA12F;float: left;margin-top: -20px;margin-left: 10px;}
.content img{margin-top: -100px;width: 220px;height: 220px;float: right}
</style>

<?Php if(isset($res) and $res) { ?>
<p style="font-size: 17px;text-align: left;color: green; background-color: beige; display: inline-block"><strong>News deleted successfully from the Database</strong><p/>
<?Php } 
else if(isset ($res) and !$res) { ?>
<p style="font-size: 17px;text-align: left;color: red;background-color: beige; display: inline-block"><strong> Sorry News was not delete from the Database!! </strong><p/>

<?Php }?>
<div class="content">
    
    <h1>Delete News</h1>
    <hr>
        <form id='content'name='mm' method='post' action="">
       
        <INPUT id="myInput" onkeyup="myFunction()" type="text" placeholder="Search By Titel" value="">
        <br>
       <div id="myUL">
    <?php 
$query="select * from news";
$result = mysqli_query($con,$query);
$news=array();
while ($row=  mysqli_fetch_assoc($result)){
    $news[$row['title']]=array('topic'=>$row['title'],
       
        'photo'=>$row['photo'],'date'=>$row['date'],'text'=>$row['text']
        
    );
}
?>
   <?php        foreach ($news as $k=>$i){?>
        <li><a href="#"><input type="radio" name="item" id='item' value='<?php echo $k?>'/>
            <?php echo $i['topic']?></a></li>   
        
        <?php }?> 
       </div>
            <button name="submit">Delete</button>

            <img src="img/de2.jpeg"/>
    </form>
</div>
<script>
         function myFunction() {
         var input, filter, ul, li, a, i, txtValue;
         input = document.getElementById('myInput');
        filter = input.value.toUpperCase();
        ul = document.getElementById("myUL");
        li = ul.getElementsByTagName('li');

       for (i = 0; i < li.length; i++) {
           a = li[i].getElementsByTagName("a")[0];
           txtValue = a.textContent || a.innerText;
           if (txtValue.toUpperCase().indexOf(filter) > -1) {
                 li[i].style.display = "";
          } else {
                 li[i].style.display = "none";
    }
  }
}
</script>   
<?php    include 'footer.php';?>