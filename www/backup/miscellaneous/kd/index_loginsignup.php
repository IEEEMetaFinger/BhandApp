<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
require_once "recaptchalib.php";
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>IPR4Students | Login/Sign-Up</title>
  <?php include 'css/css.html'; ?>
        <link rel="shortcut icon" href="img/icon.png" >
<script type="text/javascript"> //<![CDATA[ 
var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.comodo.com/" : "http://www.trustlogo.com/");
document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
//]]>
</script>
</head>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';
        
    }
    
    elseif (isset($_POST['register'])) { //user registering
        
        require 'register.php';
        
    }
}
?>
<body>
  <nav>
            <div class="line">
            
                  <p class="logo" style=" text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>IPR</strong>4students</p>
      
               
            </div>
         </nav>

  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab "><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">

        
             <div id="login">   
          <h1 style="color:white">Welcome to IPR4Students</h1>
          
          <form action="index_loginsignup.php" method="post" autocomplete="off">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="email"/>
          </div>
            <div class="top-row">
            <div class="field-wrap">
        <label>
          Password<span class="req">*</span>
        </label>
          <input type="password" id="pwd" style="width:465.5px"  required autocomplete="off" name="password"/>
           </div>
        
           <div class="field-wrap">
              <input type="button"  style="width:55px;float:right;height:37.5px;font-size:15px;" id="btn" value="show">
           </div>
       </div>
         
          
          <p class="forgot" ><a href="forgot.php"><font color="white">Forgot Password?</font></a></p>
          
          <button class="button button-block" name="login" >Log In</button>
          
          </form>

        </div>        






        <div id="signup">   
          <h1 style="color:white">Sign Up for Free</h1>
          
          <form action="index_loginsignup.php" method="post" autocomplete="off">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name='firstname' />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name='lastname' />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name='email' />
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>  <span id="result"></span>
            </label>
            <input type="password"required autocomplete="off" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number, one special symbol and one uppercase and lowercase letter, and at least 8 or more characters"/>
      
          </div> </div> 
     
          <!--<div class="g-recaptcha" data-sitekey="6Lc9MB8UAAAAAHogC4f0RKJVmR5tLfmz3V7OcRGa"  ></div><br>-->
          <button type="submit" class="button button-block" name="register" >Register</button>
          
          </form>

        
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
<footer>
<p  style="font-size:15px;color:white">Copyright 2017, IPR4Students<br>Designed and Maintained by : <a href="https://www.rainbowdimensions.org"><font size="3" color="white">Rainbow Dimensions</font></a> & <a href="mediaspa.in"><font size="3" color="white">Mediaspa</font></a>.<br>Contact:<br><a href="#"><font size="3" color="white">support@ipr4students.org</font></a></p>
<center><script language="JavaScript" type="text/javascript">
TrustLogo("https://ipr4students.org/img/comodo_secure_seal_76x26_transp.png", "CL1", "none");
</script>
<a  href="https://ssl.comodo.com/free-ssl-certificate.php" id="comodoTL">Free SSL</a>
</footer>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script></center>
<!--<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-98184758-1', 'auto');
  ga('send', 'pageview');

</script>-->
    <script src="js/index.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="js/eye.js"></script>
<script src="js/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

</body>
</html>
