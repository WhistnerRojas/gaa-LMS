<?php
session_start();
if(isset($_SESSION['email'])){
$email=$_SESSION['email'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Golden Achievers Academy</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<link href="images/icon.ico" id="ico" rel="icon" rev="ico" />
<link rel="stylesheet" type="text/css" href="slide.css" media="screen"/>
</head>
<body>
<div id="container">
	
    <div id="head">
		
		<h1><a href="index.php" title="">Golden Achievers Academy</a></h1>
		
		<ul id="menu">
        	<li><a class="current" href="index.php" title="Home">Home</a></li>
			<li><a href="aboutus.php" title="About us">About Us</a></li>
        	<li><a href="features.php" title="Features">Features</a></li> 
        	<li><a href="admission.php" title="Admission">Admission</a></li> 
        	<li><a href="regulation.php" title="Regulations">Regulations</a></li>
			<li><a href="contact.php" title="Contact">Contact</a></li>
            <?php
			if(isset($_SESSION['email'])){
				echo "<li><a href='lesson/index.php'>Topics</a></li>";
			}
			?>
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
        <form action="search.php" methof="get">
        <input type="text" name="search" title="search" />&nbsp;&nbsp;&nbsp;<input type="image" src="images/search.png" name="s" title="GO" value="s"/>
        </form></br>
        <h3>Welcome to Golden Achievers Academy</h3>
        
        <h4>Mission</h4>
			<p><b>Golden Achievers Academy</b> is committed to develop learners to be academically to be academically competent, creative, active and socially aware; to equip them with ideas, to nurture their God-given potentials to the fullest, and to inculcate in them positive values. The school dedicates itself into molding its students to be dynamic and productive members of society.</p>
            
        <h4>Vision</h4>
        <img src="images/aaaa.jpg" width="110" height="74" border="0" alt="p1" title="p1" class="pic_left" />
        
			<p><b>Golden Achievers Academy</b> envisions to form a true Filipino who continuously grows into a responsible citizen and leader who loves God, his people, his country and his environment.</p>
		</div>
        
        <div id="content_right">
        <h5><?php 
		include 'studnav.php';
			?><h4></h4><br/><br/>
        <div class="item_box">
        <a href="http://www.facebook.com/pages/Golden-Achievers-Academy/232715393412055" title="Like us on Facebook" target="_new"><img src="images/facebook.jpg" height="30px" width="90px"/></a>
        </div>
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="210" height="300" id="tech" align="middle">
		<param name="allowScriptAccess" value="sameDomain" />
		<param name="movie" value="kl.swf" />
		<param name="quality" value="high" />
		<embed src="kl.swf" quality="high" width="210" height="300" name="tech" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
    
        </div>
	<div class="spacer"></div>
	</div>
    
   		<div id="footer">
        	<div style="float:left; padding-left:40px;">
		Copyright 2007 <a href="http://localhost/phpmyadmin">&copy;</a> Golden Achievers Academy
        	</div>
        <div id="madeby"><br />
</div>
		</div> 
    
	
</div>

</body>
</html>
