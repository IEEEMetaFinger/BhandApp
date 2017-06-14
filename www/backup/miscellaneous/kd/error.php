<?php
/* Displays all error messages */
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>IPR4Students | Error</title>
  <?php include 'css/css.html'; ?>
  	    <link rel="shortcut icon" href="img/icon.png" >
</head>
<body>
	<nav>
            <div class="line">
            
                  <p class="logo" style=" text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>IPR</strong>4students</p>
      
               
            </div>
         </nav>

<div class="form">
    <h1 style="color:white">Error</h1>
    <p>
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ): 
        echo $_SESSION['message'];    
    else:
        header( "location: index_loginsignup.php" );
    endif;
    ?>
    </p>     
    <a href="index_loginsignup.php"><button class="button button-block"/>Retry</button></a>
</div>
	<footer>
<p  style="font-size:15px;color:white">Copyright 2017, IPR4Students<br>Designed and Maintained by: <a href="http://www.rainbowdimensions.org"><font size="3" color="white">Rainbow Dimensions</font></a> & <a href="mediaspa.in"><font size="3" color="white">Mediaspa</font></a>.<br>Contact:<br><a href="#"><font size="3" color="white">support@ipr4students.org</font></a></p>

</footer>
</body>
</html>
