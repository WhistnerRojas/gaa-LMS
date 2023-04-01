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
		
		<h1><a href="index.php" title="">Golden Achievers Academy</a></h1>
		
		<ul id="menu">
        	<li><a href="index.php" title="Home">Home</a></li>
			<li><a href="aboutus.php" title="About us">About Us</a></li>
        	<li><a href="features.php" title="Features">Features</a></li> 
        	<li><a href="admission.php" title="Admission">Admission</a></li> 
        	<li><a href="tuition.php" title="Tuition">Tuition</a></li>
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
        <h3>Forgot Password?</h3>
        
        <h4>Email</h4>
		  <p><fieldset></br></br>
					<form action="forgotpass.php" method="post" enctype="application/x-www-form-urlencoded" name="recovery" dir="ltr" lang="en">
                    Email &nbsp;&nbsp;&nbsp;<input name="email" type="text"/>
                    &nbsp;&nbsp;&nbsp;&nbsp;<input name="recover" type="submit"  value="submit" />
					</form></br></br></fieldset></p>
</div>
        
        <div id="content_right">
        <h4><?php if(isset($_SESSION['email'])){echo $_SESSION['email'];}else{echo "<a href='login.php' title='Click to Login'>Login</a> or <a href='register.php' title='Click to Register'>Register</a>";}?></h4><br/><br/></h4>
<?php	
		if(isset($_POST['recover'])){

			$email1=$_POST['email'];
			$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1'.'X-Mailer: PHP/'. phpversion();
$headers .= 'From: tutorial@localhost' . "\r\n";
			if(!$email1){
				echo "No email specified";
				exit();
			}
	include 'db.php';
	$getemailinfo=mysql_query("SELECT email FROM members WHERE email='$email1'")or die(mysql_error());
	$result=mysql_num_rows($getemailinfo);
	if($result!=0){
		while($getemail=mysql_fetch_assoc($getemailinfo)){
			$dbemail=$getemail['email'];
			$encrypted=md5($dbemail);
	$msg="Dear $email1, <br/>&nbsp;These is Golden Achievers Academy. Below is the link for your request for password recovery</br> <a href='http://www.localhost/goldenachieversacademytutorial.com/forgotpass.php?recover=pass&id=$encrypted'>http://www.localhost/goldenachieversacademytutorial.com/forgotpass.php?recover=pass&id=$encrypted</a> </br></br>NOTE : Do not Reply.";
mail($email1, 'Password Recovery', $msg, $headers,ini_set("localhost","25"));
	echo $sent ? "mail sent":"mail not sent";
	}
	}
	else{
		$msg="Dear $email1, <br/>&nbsp;These is Golden Achievers Academy. We check our records and it seems to be you are not yet a member of GoldenAchieversAcademyTutorial.com if you want to register click the link below</br><a href='http://www.localhost/goldenachieversacademytutorial.com'>http://www.localhost/goldenachieversacademytutorial.com</a>.";
		mail($email1, 'Password Recovery', $msg, $headers, ini_set("localhost","25"));
		echo $sent ? "mail sent":"mail not sent";
	}
}
		
		
		?>
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
        <div id="madeby"><br />
</div>
		</div> 
    
	
</div>

</body>
</html>
