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
        	<li><a href="index.php" title="Home">Home</a></li>
			    <li><a href="aboutus.php" title="About us">About Us</a></li>
       	 	<li><a class ="current" href="features.php" title="Features">Features</a></li> 
        	<li><a href="admission.php" title="Admission">Admission</a></li> 
        	<li><a href="regulation.php" title="Regulations">Regulations</a></li>
			    <li><a href="contact.php" title="Contact">Contact</a></li>
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
        <h3>features</h3>
        
        <ul>
          <li>Proven quality education at very low tuition fees</li><br/>
          <li>Fully air-conditioned classrooms</li><br/>
          <li>Clean, safe, warm and caring environment</li><br/>
          <li>Limited number of students per classroom</li><br/>
          <li>10-15 students for nursery class</li><br/>
       	  <li>15-20 students for Kinder</li><br/>
          <li>20-25 students for prep class</li><br/>
          <li>*With teacher aid for preschool classes</li><br/>
          <li>25-30 students for grades 1-6 classes</li><br/>
          <li>35-40 students for first year to fourth year high school</li></ul><br/>
        
        <ul>
          <li>Highly qualified teachers and staff</li><br/>
          <li>English medium of instruction</li><br/>
          <li>Free trial class for one week</li><br/>
          <li>Payments in annual, semi-annual, quarterly and monthly basis</li><br/>
          <li>Free review classes for science high school and entrance tests</li>
        </ul>
        </div>
        
                
        <div id="content_right">
        <h5><?php 
	
		include 'studnav.php';
			
			?></h5><h4></h4><br/><br/></h4>
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
		Copyright 2007 &copy; Golden Achievers Academy 
        	</div>
        <div id="madeby">
</div>
		</div> 
    
	
</div>

</body>
</html>
