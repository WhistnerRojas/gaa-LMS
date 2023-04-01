<?php
session_start();
if(isset($_SESSION['email'])){
	echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Golden Achievers Academy</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<link href="images/icon.ico" id="ico" rel="icon" rev="ico" />
</head>

<body>
<div id="container">
    <div id="head">
		
		<h1><a href="index.php" title="">Golden Achievers Academyo</a></h1>
		
		<ul id="menu">
        	<li><a href="index.php" title="Home">Home</a></li>
			<li><a href="aboutus.php" title="About us">About Us</a></li>
        	<li><a href="features.php" title="Features">Features</a></li> 
        	<li><a href="admission.php" title="Admission">Admission</a></li> 
        	<li><a href="tuition.php" title="Tuition">Tuition</a></li>
        	<li><a href="regulation.php" title="Regulations">Regulations</a></li>
			<li><a href="contact.php" title="contact">Contact</a></li>
		</ul>
        
        <div class="top_head_banner">

        </div>
		
	</div>
    
    
    <div id="area">
		
	</div>
    
    
    <div id="main">
	
		<div id="welcome">
		  <h1>Education with the guidance of God</h1>
			
		</div>
		
		<div id="content_left">
         <form action="search.php" method="get">
        <input type="text" name="search" title="search" />&nbsp;&nbsp;&nbsp;<input type="image" src="images/search.png" name="s" title="GO" value="s"/>
        </form></br><br/>
        <h4>Login</h4></br>
        <?php include 'verify.php'; ?>
				<div id="form">
				<form action="login.php" method="post">
				Email<br/><input type="text" name="email" maxlength="40" size="15"/></br>
                Password</br><input type="password" name="pass" maxlenght="30" size="15"/></br><br/>
                <input type="submit" name="login" value="login" src="images/send.gif"/>
                </form>
				</div>            
		</div>
        
        <div id="content_right">
        <h4><a href="register.php" title="Click here to Register">Register</a></h4>
        <div class="item_box">
        <a href="http://www.facebook.com/pages/Golden-Achievers-Academy/232715393412055" title="Like us on Facebook" target="_new"><img src="images/facebook.jpg" height="30px" width="90px"/></a>
        </div>
       
        </div>
	<div class="spacer"></div>
	</div>
    
<div id="footer">
        	<div style="float:left; padding-left:40px;">
		Copyright 2007 &copy; Golden Achievers Academy 
        	</div>
  <div id="madeby">
    <p></p>
</div>
</div> 
</body>
</html>
