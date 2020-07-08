<?php
$title="Update";

 include 'header.php';
?>

          
<style> 
        #wrapper{max-width: 1400px; margin: 0 auto}
        body{background-image:  url("img/pp.jpg")}
          #contect{position:absolute;transform: translate(20%, -100%);}
 
        #content{margin: 0 auto; margin-left:450px; margin-right:400px;display: inline-block; margin-top: 10px;background-color: white; border: 2px solid black; }
    .btn{margin-left: 180px; margin-top: 5px ; height: 60px;width: 100px ;background-color: #ff6633;color: white ;border: 2px solid white;height: 30px;border: 2px solid black}
h5{text-align: right;color: red}
    .error{
      
      color:red;
      font-style: italic;
      font-size: 12px;
      visibility: hidden;

      
  }
          a:hover{color: navajowhite}
</style>         

<?php
include("connect.php");
   if(isset($_POST["update"])) {
      $idu=$_POST['idu']; 
  $result="";
if(isset($_POST['userNamech'])){
    $member_name=$_POST['member_name'];   
    $query="UPDATE `admin` SET `Name`='".$member_name."' WHERE `ID`=$idu";
    $result = mysqli_query($con, $query) ;
    }
    if(isset($_POST['Passwordch'])){
    $member_pass=$_POST['member_pass'];   
   $query="UPDATE `admin` SET `Password`='".$member_pass."' WHERE `ID`=$idu";
    $result = mysqli_query($con, $query) ;
    }
    if(isset($_POST['Emailch'])){
    $member_email=$_POST['member_email'];  
    $query="UPDATE `admin` SET `Email`='".$member_email."' WHERE `ID`=$idu";
    $result = mysqli_query($con, $query) ;
  }
    if(isset($_POST['Phone'])){
     $member_phone=$_POST['member_phone']; 
     $query="UPDATE `admin` SET `Phone`='".$member_phone."' WHERE `ID`=$idu";
     $result = mysqli_query($con, $query) ;
  }
   
    if($result) {
    echo  'data updated';
    }
     else 
    {
    echo 'not updated';    
    }
   }
            ?>
<form action="update.php" method="post">
    <fieldset id="content" style=" font-size: 27px">
            <legend><em><strong> Update Your Password</strong></em></legend>

  <table >
      <tr>
          <td rowspan="6"><img src="sp1.png" alt=""  style="width: 200px ;height: 200px ; max-height: 200px ; max-width: 200px"/></td>
          <td><label for="idll">Enter your ID</label></td>
          <td><input type="text" name="idu" id="iduu"  /> <span class="error" id="YUU">Error!!</span></td>
      </tr>
     <tr>
          <td><label for="userName">UserName</label></td>
          <td><input type="text" name="member_name" id="usern"  /></td>
          <td><input type="checkbox" name="userNamech" value="user" id="user" /> <span class="error" id="us">complete the blank</span></td>
      </tr>
      <tr>
                 <td><label for="Password">Password</label></td>
          <td><input type="Password" name="member_pass" id="paa"/></td> 
          <td>  <input type="checkbox" name="Passwordch" value="pass" id="pass"/>  <span class="error" id="pa">complete the blank</span></td>
         
      </tr>
      <tr > <td><label for="Email">Email</label></td>
          <td><input type="Email" name="member_email" id="em"/></td>
          <td> <input type="checkbox" name="Emailch" value="em" id="email"/>    <span class="error" id="emu">complete the blank</span></td>
       
      </tr>
      <tr> <td><label for="Phone">Phone</label></td>
          <td><input type="text" name="member_phone" id="ph"/></td>
          <td> <input type="checkbox" name="Phone" value="Phonech" id="phone"/>  <span class="error" id="phh">complete the blank</span></td>
         
      </tr>



      
  </table>
            <input type="submit" name="update"  class="btn" value="Update" onclick=" return validate()" style="font-size: 20px">
          
   
   
   <h5><strong>Only mark the information you want to change.</strong></h5>
   
   
        </fieldset>
  
   
           </form>                
 <script>
            
           function validate(){
               var error=0;
               
               var ide=document.getElementById("iduu");
               var id=document.getElementById("YUU");
               var user=document.getElementById("usern");
                var us=document.getElementById("user");
                var usery= document.getElementById("us");
                var pass=document.getElementById("paa");
                var passw=document.getElementById("pass");
                var passy=document.getElementById("pa");
                var em=document.getElementById("em");
                var email=document.getElementById("email");
                var emy=document.getElementById("emu");
                var ph=document.getElementById("ph");
                var phone=document.getElementById("phone");
                var phy=document.getElementById("phh");
            
              if (us.checked==false && email.checked ==false && phone.checked ==false && passw.checked ==false) {
              alert("please select at least one");
              error=1;
          }
          else{
              error=0;
          }
          if(ide.value===""){
                 id.style.visibility="visible";
                   error=1;
               }else{
                   id.style.visibility="hidden";
                   error=0; 
            }
           
                 
                 if (us.checked&&user.value===""){
               usery.style.visibility="visible";
                   error=1;
               }else{
                   usery.style.visibility="hidden";
                   error=0;
               }
               
                 
     if (passw.checked&&pass.value===""){
                passy.style.visibility="visible";
                   error=1;
               }else{
                   passy.style.visibility="hidden";
                   error=0;
               }
            if (email.checked&&em.value===""){
                emy.style.visibility="visible";
                   error=1;
               }else{
                   emy.style.visibility="hidden";
                   error=0;
               }
                if (phone.checked&&ph.value===""){
                phy.style.visibility="visible";
                   error=1;
               }else{
                   phy.style.visibility="hidden";
                   error=0;
               }
              
        if (error){
            return false;
        }else{
            return true;
        }
          

            }
        </script>     
        
          <?php include 'footer.php';?>