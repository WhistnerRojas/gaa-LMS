<?php
session_start();
if(!isset($_SESSION['email'])){
	echo "<meta http-equiv='refresh' content='0;url=login.php'>";
	exit();
}
else{
	$email=$_SESSION['email'];
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
       	 	<li><a href="features.php" title="Features">Features</a></li> 
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
        <h3>CLASS RECORD</h3><br/><br/>
        <?php
		if((isset($_GET['email']))&&(isset($_GET['id']))){
	include 'db.php';
	$query=mysqli_query($connect, "SELECT * FROM members WHERE email='$email'") or die(mysqli_error($connect));
	$querynum=mysqli_num_rows($query);
	if($querynum!=0){
		$row=mysqli_fetch_assoc($query);
		$db_utype=$row['utype'];
		
		if($db_utype=='student'){
			$enrolled=mysqli_query($connect, "SELECT * FROM classrecords WHERE studentemail='$email'")or die(mysqli_error($connect));
			$enum=mysqli_num_rows($enrolled);
			if($enum!=0){
				while($efetch=mysqli_fetch_assoc($enrolled)){
					$db_enroll=$efetch['class_name'];
					$db_temail=$efetch['teacheremail'];
					
					echo "<fieldset><p>Class name   : <b><a href='../gaa/class/index.php?class=$db_enroll'>$db_enroll</a></b></p>";
					echo "<p>Class Teacher: <b>$db_temail</b></p></fieldset>";
				}
			}
			else{
				
				echo "You are not enrolled to anyone.";
				
			}
		}
		else if($db_utype=='teacher'){
			
			$class=mysqli_query($connect, "SELECT * FROM class_name WHERE teacheremail='$email'")or die(mysqli_error($connect));
			$classnum=mysqli_num_rows($class);
			if($classnum!=0){
				echo "<p align='left'><a href='../class/index.php?create'><input type='button' value='CREATE NEW CLASS'/></a></p>";
				echo "<fieldset><legend>Class List</legend><br/></br>";
				while($crow=mysqli_fetch_assoc($class)){
					$db_class=$crow['class_name'];
					$db_email=$crow['teacheremail'];
					
				echo "<a href='../gaa/class/index.php?classname=$db_class'>$db_class</a></br></br>";
				}
				echo "<br/></fieldset>";
			}
			else {
			echo "<p align='left'><a href='../gaa/class/index.php?create'><input type='button' value='CREATE NEW CLASS'/></a></p>";
			echo "<fieldset><legend>Class List</legend>";
			echo "You dont have any class</fieldset>";	
			}
		}
	}
		}
		?>
</div>
        
                
        <div id="content_right">
        <h5><?php 
		include 'studnav.php';
}
		?>
        </h5><h4></h4><br/><br/></h4>
        <div class="item_box">
       <a href="http://www.facebook.com/pages/Golden-Achievers-Academy/232715393412055" title="Like us on Facebook" target="_new"><img src="images/facebook.jpg" height="30px" width="90px"/></a>
        </div>
        <br/><br/>
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
