<?php 
ob_start();
$title="Add Activity";
include 'header.php';
include ('connect.php');
       if(isset($_POST['submit'])){            
        $TYPE=$_POST['type'];
        if(empty($_POST['type']) || empty($_FILES) ){
            echo "fill";
        }
        else{
            $TYPE=$_POST['type'];
              //for pic file
        $file_name=basename($_FILES['add']['name']);
        $tmp=$_FILES['add']['tmp_name'];
        $type=$_FILES['add']['type'];
        $size=$_FILES['add']['size'];
        $error=$_FILES['add']["error"];
          //destination location
        $extension=  explode(".",$file_name );
        $end_ex=end($extension);
        $dest="img/recipes/$file_name";
        //check for issue
        $accept_img=array('png','jpg','jpeg');
        if(!$error and $size <= 500000 and in_array($end_ex,$accept_img)){
          //move the file to destination for temp loation to pirm location
           $move_file=  move_uploaded_file($tmp,  $dest);//return boolean 
            if($move_file){
               //run query
            $query="INSERT INTO activity SET activity_type='$TYPE', photo='$dest'";
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
<?Php if(isset($result) and $result) { ?>
<p style="font-size: 17px;text-align: left;color: green; background-color: beige"><strong>Activity added successfully to the Database</strong><p/>
<?Php } 
else if(isset ($result) and !$result) { ?>
<p style="font-size: 17px;text-align: left;color: red;background-color: beige"><strong> Sorry Activity was not added to the Database!! </strong><p/>

<?Php }?>
<style>
     #wrapper{max-width: 1400px; margin: 0 auto;}
        body{background-image:  url("img/pp.jpg")}
         img{width: 1400px;height:900px;}              
h1{color: #ff6633;;text-align: center; margin-right:  35px;}
#content{background-color: floralwhite ; padding: 30px ; width: 340px ; margin-left: 220px;display: inline-block;border: 1px solid black;height: 350px}
button{font-size: 18px;background-color: #ff6633;;color: white;height: 30px;text-align: center; margin-top: 20px; border-radius: 12px;width: 100px;margin-left: 40px; float: left} 
select{margin-left: 0; background-color:gray;width: 160px;}
label{font-size: 19px;font-family: monospace;color: black; }
#infor{ transform: translate(70%, -90%);background-color: white; border: 2px solid black;display: inline-block; padding: 4px; } 
p{width: 350px;font-size: 15px;}
 #co{width:500px;height: 420px;transform: translate(2%,4%); position: absolute}
  .error{
background-color: red;
      color: white;
      font-style: italic;
      font-weight: bold;
      visibility: hidden;
  }
        </style>
         <br > <br> <br>
             <div id="content">
            <form action="" method="post" enctype="multipart/form-data">
     
           <table cellspacing="10px" >
               <tr><td><h1>Activity Page</h1></td></tr>
               <tr>
                   <td ><label for="type" ><strong><em> Choose an activity :*</em></strong></label></tr>
               <tr>
               <td>
                   
                   <select name="type" id="tp" style=" width: 300px; height: 20px">
                       <option value="Select">Select</option>
                       <option value=" Al-Qaysaria Festival"> Al-Qaysaria Festival</option>
                       <option value="Dates Marketing Festival"> Dates Marketing Festival</option>
                       <option value="AlAhsa Creative"> AlAhsa Creative</option>
                      
                        </select>
                          
                           </td>
<!-- <td colspan="3"><img src="ac.png"  style="width: 120px; height: 120px;max-height: 120px;max-width: 120px;margin-left: 100px"/></td>-->
               </tr>
               <tr><td><label for="add"><strong><em> Add Photo :*</em></strong></label></td></tr><tr> <td><input type="file" name="add" id= "ad" style=" width: 300px; height: 20px; background-color: lightgray"/></td>
        
            </tr>
            <tr>
                 <td class="error" id="er">Please fill out all the filed with *</td>
             </tr>
           </table>
            <button name="submit" onclick="return validate()">  <strong>Save</strong> </button>
                      
            <button>  <strong>Cancel</strong> 
                      </button>
                </form>
             </div>
             <img  id="co" src="img/bb.png" alt=""/>
        <div id="infor">
           
            <p><strong> Please fill the following to add your activity to the user </strong></p>
        </div>
              <script>
        function validate(){
            var vaild=true;
            var add=document.getElementById("ad");
            var type=document.getElementById("tp");
            var er= document.getElementById("er");

        if(add.value===""|| type.value==="Select"){
                er.style.visibility="visible";
                 vaild=false;
        }
                else{
            er.style.visibility="hidden";
             vaild=true;
        }
        
                if(add.value===""){
            add.style.borderColor="red";
            vaild= false;
        }
        else{
            add.style.borderColor="blue";
            vaild=true;
        }
        
        if(type.value==="Select"){
            type.style.borderColor="red";
            vaild=false;
        }
        else{
            type.style.borderColor="blue";
            vaild=true;
        }
  if(vaild){
      return true;
  }
  else{
        return false;}
    }
    </script>
    <?php include 'footer.php';?>