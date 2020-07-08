<?php $title='login';
include"header.php";?>

<style> 
        #wrapper{max-width: 1400px; margin: 0 auto}
        body{background-image:  url("img/pp.jpg")}
        #image{width: 55px;height:50px}
#image1{width: 65px;height:60px}
        img{width: 1000px;height:500px;}
         .button{
   background-color: #bbb;
  color: black;
  padding: 10px 30px;
  border: none;
  width: 30%;
  border-radius: 40px;
  border-bottom: solid 2px #034b4b;
  margin-left: 70px
}
.l{
 float: left; margin-top: 30px; margin-left: 10px   
}
button:hover{background-color:burlywood; }
table{width:20px; height: 500px; font-size: 20px}
input[type=text], input[type=password] {
  width: 200px;
  padding: 12px 20px ; border-radius: 40px;
}
 
      
        .error{
    color:red;
    font-style: italic;
    font-size: 20px;
    float: right;
    visibility: hidden;
}
.error1{
    color:red;
    font-style: italic;
    font-size: 24px;
}
         </style>
         
    </head>
    
 
   
    <?php
     include 'connect.php';
     if(isset($_POST['login']))
     {
    $ID = $_POST['ID']; 
    $Password =$_POST['Password'];
    $query = "SELECT * FROM admin WHERE ID='$ID' AND Password='$Password'";
    $result = mysqli_query($con, $query);
      if(mysqli_num_rows($result)==1)
          {
                  session_start();
                $_SESSION['ID']=$ID;
                header("Location: admin.php");
                EXIT();
        }
        else{
            $error=1;
        }
          }
             ?>
    <body>
        <div id="wrapper">
         <form  method="POST" action="login.php">
        
          <table style="border: 1px  solid ; margin-left: 400px ;background-color: beige; margin-top: 20px ; width: 500px ;height: 300px">
                <tr><td style="color: #ff6633;font-size: 30px; text-align: center">Hello Admin</td></tr>
               
                <tr>
    <th class="l" >Enter your ID</th>
<td><input type="text" name="ID" id="id" maxlength="10" title="Enter your ID" placeholder="Enter your  ID"/></td>
</tr>
                 <tr>
    <th class="l" >Enter your password</th>
<td><input type="password" id="password" placeholder="Enter your  password"  name="Password" /></td>
</tr>
               <tr><td></td><td colspan="2" class="error" id="iderr" >username and password is required</td></tr>
                   <tr><td></td><td colspan="2"><?php if (isset($error)and $error==1){?><p class="error1">incorrect password or id </p>
                 <?php }?></td></tr>
                   <tr id="lc"><td colspan="2" ><input class="button" type="submit" name="login" value="Login" onclick="return validate()" style="background-color: #ff6633; color: white;margin-left: 170px; font-size: 20px"></tr>
</table>
         </form>
               <script>
            function validate()
           
            {
              var vaild=true;
              var id =document.getElementById("id")
              var pasid =document.getElementById("pasid")
              var iderr=document.getElementById("iderr");
              if(id.value===""||pasid.value==="")
              {
                  iderr.style.visibility="visible";
                  id.style.borderColor="red";
                  pasid.style.borderColor="red";
                 vaild=false;
              }
              else 
              {
                 iderr.style.visibility="hidden";
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

<?php        include 'footer.php';?>