<?php 
ob_start();
$title="Add news";
include 'connect.php';
if(isset($_POST["submit"])){
    $topic = $_POST['topic'];    
                $date = $_POST['date'];
                $text= $_POST['text'];    
        if(empty($topic) || empty($_FILES) ){
            echo "fill";
        }
        else{
              //for pic file
         $file_name=basename($_FILES['photo']['name']);
        $tmp=$_FILES['photo']['tmp_name'];
        $type=$_FILES['photo']['type'];
        $size=$_FILES['photo']['size'];
        $error=$_FILES['photo']["error"];
          //destination location
        $extension=  explode(".",$file_name );
        $end_ex=end($extension);
        $dest="img/recipes/$file_name";
        //check for issue
        $accept_img=array('png','jpg','jpeg');
        if(!$error and $size <= 99900000 and in_array($end_ex,$accept_img)){
          //move the file to destination for temp loation to pirm location
           $move_file=  move_uploaded_file($tmp,  $dest);//return boolean 
            if($move_file){
               //run query
   $query = "INSERT INTO News(title,date,text,photo) VALUES ('$topic','$date','$text','$dest')";
   $result = mysqli_query($con,$query);
            }  
             else{
                 $result=0;
             }
  }
        else { 
            $result=0;   
        }
        }
        }
        ?>

     <style>
        #wrapper{max-width: 1400px; margin: 0 auto}
        body{background-image:  url("img/pp.jpg")}
        #content{background-image: url("img/new.jpg"); width: 1300px; height: 750px; margin-left: 50px;}
        #content form{float: right; width: 600px; height: 700px; margin-right: 30px}
        fieldset{width: 540px; height: 550px;margin-left: 17px; border-color: black}
        #action button{margin-left: 20px;width: 90px; height: 34px; font-size: 20px; border-radius: 20%; color: #ffffff; background-color: #ff6633; border-color: black}
          .error{
      color: red;
      font-style: italic;
      font-weight: bold;
      visibility: hidden;
  }
        </style>
    <body>
        <div id="wrapper">
<?php include 'header.php';?>
            <div id="content">
                <?Php if(isset($result) and $result) { ?>
<p style="font-size: 17px;text-align: left;color: green; background-color: beige"><strong>News added successfully to the Database</strong><p/>
<?Php } 
else if(isset ($result) and !$result) { ?>
<p style="font-size: 17px;text-align: left;color: red;background-color: beige"><strong> Sorry News was not added to the Database!! </strong><p/>

<?Php }?>
                <form style=" background-color: burlywood" action="" method="post" enctype="multipart/form-data">
                <h1 style=" font-family: sans-serif; margin-left: 50px"><br>Add News</h1>
                <fieldset>
                    <h3 class="error" id="er">Please fill out all the filed with *</h3>
                    <table style=" margin-left: 20px; font-size: 25px;" cellspacing="9px">
                        <tr>
                            <td>Topic of news*</td>
                        </tr>
                        <tr>
                            <td><input type="text" name="topic" id="topic" style="background-color: floralwhite; width: 490px" /><br></td>
                        </tr>                         
                        <tr>
                            <td>Photo of news*</td>
                        </tr>
                        <tr>
                            <td><input type="file" name="photo" id="photo" style="background-color: lightgray;width: 490px" /><br></td>
                        </tr> 
                        <tr>
                            <td>Date of news*</td>
                        </tr>                        
                        <tr>
                            <td><input type="date" id="date" name="date" style="background-color: beige;width: 490px"/><br></td>
                        </tr>  
                        <tr>
                            <td>Write the news*</td>
                        </tr>                        
                        <tr>
                            <td><textarea id="text" name="text" style=" width: 490px; height: 150px; background-color: lightyellow;">Please write here....</textarea></td>
                        </tr>                     
                    </table> 
                    <div id="action">
                        <br><button name="submit" onclick="return validate()"> Add</button>
                    <button name="reset">Reset</button>                         
                    </div>
                </fieldset>
                </form>
            </div>
<?php include 'footer.php';  ?>
        </div>
      <script>
        function validate(){
            var vaild=true;
        var date=document.getElementById("date");
        var topic=document.getElementById("topic");        
        var photo=document.getElementById("photo");
        var text=document.getElementById("text");
        var er= document.getElementById("er");
        if(date.value===""|| photo.value===""||text.value==="Please write here...."||topic.value===""){
                er.style.visibility="visible";
        }
                else{
            er.style.visibility="hidden";
        }
        if(topic.value==""){
            topic.style.borderColor="red";
            vaild=false;
        }
        else{
            topic.style.borderColor="blue";
            vaild=true;
        }
        if(date.value==""){
            date.style.borderColor="red";
            vaild=false;
        }
        else{
            date.style.borderColor="blue";
            vaild=true;
        }
        if(photo.value==""){
            photo.style.borderColor="red";
            vaild=false;
        }
        else{
            photo.style.borderColor="blue";
            vaild=true;
        }
            if(text.value==="Please write here...."){
            text.style.borderColor="red";
            vaild=false;
        }
        else{
            text.style.borderColor="blue";
            vaild=true;
        }
         if(vaild){
      return true;
  }
  else{
        return false;}
        
    }
    </script>        
    </body>