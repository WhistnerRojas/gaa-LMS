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
       	 	<li><a href="features.php" title="Features">Features</a></li> 
        	<li><a href="admission.php" title="Admission">Admission</a></li> 
        	<li><a href="regulation.php" title="Regulations">Regulations</a></li>
			<li><a class ="current" href="contact.php" title="Contact">Contact</a></li>
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
        <h3>Contact Form</h3>
        
				<div id="form">
                <?php
			
		if(isset($_POST['send'])){

			$msg_from=$_POST['email'];
			$msg_to="goldenachieversacad@hotmail.com";
			$msg=$_POST['msg'];
			$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1'.'X-Mailer: PHP/'. phpversion();
$headers .= 'From: '.$msg_from. "\r\n";
$headers .= ini_set("smtp.live.com","25");
			if(!$msg_from){
				echo "No email specified";
				exit();
			}
	
		$sent=mail($msg_to, 'Password Recovery', $msg, $headers);
		echo $sent ? "mail sent":"mail not sent";
	if($sent==true){
		echo "<script type='text/javascript'>
alert('E-mail sent');
</script>";
	}
	else{echo "<script type='text/javascript'>
alert('E-mail not sent');
</script>";}
}
		?>
						
						<div id="fields">
                        <form actio="contact.php" method="post">
							<label for="inputname">Name:</label>
							<input type="text" name="name" /><br />
							<label for="inputmail">Email:</label>
							<input type="text" name="email" /><br />
							<label for="inputmessage">Message:</label>
							<textarea name="msg" cols="28" rows="4"></textarea>
						</div>
						<div id="send">
							<input type="image" src="images/send.gif" name="send" value="send" />
						</div>
					</form>
				</div> 
                
                
          <div class="contact_info">      
          <h3>Adress Information</h3>
				<ul>
					<li>Address: Andrew corner Apollos Streets Annex 35, Better Living Subdivision, Don Bosco Parañaque City</li>
					<li>Tel.: </li>
					<li>Fax.: </li>
					<li><a href="mailto:goldenachieversacademy@yahoo.com" title="">goldenachieversacademy@yahoo.com</a></li>
				</ul> 
                
          </div> 
                        
		</div>
        
        <div id="content_right">
			<?php 
			include 'studnav.php';
			?><h4></h4><br/><br/></h4>
        <div class="item_box">
        <a href="http://www.facebook.com/pages/Golden-Achievers-Academy/232715393412055" title="Like us on Facebook" target="_new"><img src="images/facebook.jpg" height="30px" width="90px"/></a>
        <br/><br/><br/>
        <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="210" height="300" id="tech" align="middle">
		<param name="allowScriptAccess" value="sameDomain" />
		<param name="movie" value="kl.swf" />
		<param name="quality" value="high" />
		<embed src="kl.swf" quality="high" width="210" height="300" name="tech" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
        </div>  
        </div>
		
		
		
	<div class="spacer"></div>
	</div>
    
   		<div id="footer">
        	<div style="float:left; padding-left:40px;">
		Copyright 2007 &copy; Golden Achievers Academy</div>
        <div id="madeby"><br /> 
</div>
		</div> 
    
	
</div>

</body>
</html>
