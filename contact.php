  <?php
$title="contact us";
include"header.php";?>
        <style> 
        #wrapper{max-width: 1400px; margin: 0 auto}
         body{background-image:  url("img/pp.jpg")}
     
        h1{color:#6f4a26;text-align: center}
        h2{color:#6f4a26;text-align: center}
         #map {
      float: right;margin-right: 110px;
 width: 500px ; height: 650px ; margin-top:30px ;
            
       }
        #image{width: 40px;height:35px}
        h5{font-size: 15px}
       table{width:700px; margin:50px auto }
      
       input[type=text], select, textarea {
  width: 300px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 30px;
  box-sizing: border-box;
  }
 label{color: #234c19 ;margin-left: 10px ; font-style:italic ; font-size: 20px}      
#t{ width: 500px ; height: 650px;border: 1px solid ; padding: 8px; margin-left: 30px ; }
 .button{background-color:#6b483d;
  color: white;
  padding: 10px 30px;
  border: none;
   width: 30%;
  border-radius: 40px;
  border-bottom: solid 2px #034b4b}
        </style>
    </head>
<?php
include 'connect.php';
if(!empty($_POST["bn"])) {
    $email="";
	$Reason = $_POST["Reason"];
	$name = $_POST["name"];
	$phone = $_POST["phone"];
	$mobile = $_POST["mobile"];
        $Email = $_POST["Email"];
        $message = $_POST["message"];
	$formcontent="From: $name \n Message: $message";
$recipient = "zanoob.j@hotmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
if(mail($recipient, $subject, $mailheader)){
echo "Thank You!";
}}
?>
    <body>
        <form action="contact.php" method="POST">
             <h1><strong>Contant us</strong></h1>
             <h2>
Don’t hesitate to reach us on any of the below channels</h2><table>
                 <tr><td><img src="img/loca.png" alt="location" name="uname" id='image' class="images"/></td>
                     <td><h5>Saudi Arabia Eastern Province - Al-Ahsa</h5></td>
                     
                 <td ><img src="img/fax.png" alt="fax" name="uname" id='image' class="images"/></td>
                     <td><h5>PO Box: 1790</h5></td></tr>
                 <td><img src="img/post.jpg" alt="postal" name="uname" id='image' class="images"/></td>
                     <td><h5>Postal Code: 31982</h5></td>
                 <td><img src="img/tele.png" alt="tele" name="uname" id='image' class="images"/></td>
                     <td><h5>Telephone : +966135825000</h5></td>
                 <tr><td><img src="img/email2.png" alt="tele" name="uname" id='image' class="images"/></td>
                     <td><h5>E-mail: creative.city@alhasa.gov.sa</h5></td></tr>
             </table><hr>
                
    <script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: -25.344, lng: 131.036};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>
   <iframe  id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.4520920350865!2d49.558215015121895!3d25.389673283807053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e3797a820e4f395%3A0x7071d2bce0839095!2sAlahsa%20Municipality!5e0!3m2!1sen!2ssa!4v1592522557132!5m2!1sen!2ssa" width="1000" height="1000"   frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
           <form action="mail.php" method="POST">
  
                <table id="t" >
                     <tr><th><label for="Reason"><strong>Request type</strong></label></th>
                         <td> <select id="fname" name="Reason" >
                                 <option value="select">select..</option>
                         <option value="Request">Request</option>
    <option value="complaint">complaint</option>
    <option value="suggesion">suggesion</option>
    <option value="inquiry">inquiry</option>
                             </select></td></tr>
                             <tr><td>  <label  for="name"><strong> Your Name</strong></label></td>
                             <td><input type="text" id="fname" name="name" placeholder="Your name.."></td></tr>
                    <tr> <td> <label for="phone"><strong>Your Phone</strong></label></td>
                         <td><input type="text" id="fname" name="phone" placeholder="Your Phone.."></td></tr>
                        <tr> <td> <label for="mobile"><strong>Your mobile</strong></label></td>
                         <td> <input type="text" id="fname" name="mobile" placeholder="Your moblie.."></td></tr>
                     <tr><td> <label for="fname"><strong>Your Email</strong></label></td>
                         <td><input type="text" id="fname" name="Email" placeholder="Your Email.."></td></tr>
                         <tr><td>  <label for="message"><strong>Your message</strong></label></td>
                         <td><textarea id="subject" name="message" placeholder="Write Your message.." style="height:150px"></textarea></td></tr>
                         <script type="text/javascript"> 
function ValidateForm(frm) {
if (frm.CaptchaCode.value == "") {alert('Enter web form code.');frm.CaptchaCode.focus();return false;}  
return false;
}
function ReloadCaptchaImage(captchaImageId) {
var obj = document.getElementById(captchaImageId);
var src = obj.src;
var date = new Date();
var pos = src.indexOf('&rad=');
if (pos >= 0) { src = src.substr(0, pos); }
obj.src = src + '&rad=' + date.getTime();
return false; }
</script>
<tr><td><i>Enter web form code*:</i></td>
    <td><input id="CaptchaCode" name="CaptchaCode" type="text" style="width:80px; border:1px solid #999999;" maxlength="6" /></td></tr>
<tr><td><a href="http://www.SnapHost.com"><img id="CaptchaImage" alt="Web Form Code" title="Anti-spam web forms"
style="margin-left:20px; border:1px solid #999999"
src="http://www.SnapHost.com/captcha/WebForm.aspx?id=HQWK4M77B9KH&ImgType=2" /></a></td></tr>
  <tr><td><br /><a href="#" onclick="return ReloadCaptchaImage('CaptchaImage');">
      <span style="font-size:12px;">reload image</span></a></td></tr>
                         <tr>
    <td colspan="2"  ><input class="button" type="submit"  name="bn" value="sign in" >
<input class="button" type="reset" value="Reset Data"/>
</td>
</tr>
                </table><hr>
                
                </form>
       
  <?php include 'footer.php';?>           
    </body>


