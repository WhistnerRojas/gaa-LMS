<?php
session_start();
if(!isset($_SESSION['email'])){
echo "<meta http-equiv='refresh' content='0;url=login.php'>";
exit();
}
else{
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
<script type='text/javascript' src='jsDatePick.min.1.3.js'></script>
<link rel='stylesheet' type='text/css' media='all' href='jsDatePick_ltr.min.css' />
<script type='text/javascript'>

	window.onload = function(){

		new JsDatePick({

			useMode:2,

			target:'inputField',

			dateFormat:'%Y-%m-%d'

			/*selectedDate:{				This is an example of what the full configuration offers.

				day:5,						For full documentation about these settings please see the full version of the code.

				month:9,

				year:2006

			},

			yearsRange:[1978,2020],

			limitToToday:false,

			cellColorScheme:'beige',

			dateFormat:'%Y-%m-%d',

			imgPath:'img/',

			weekStartDay:1*/

		});

	};

</script>
</head>
<body>
<div id="container">
	
    <div id="head">
		
		<h1><a href="index.php" title="">Golden Achievers Academy</a></h1>
		
		<ul id="menu">
        	<li><a href="../index.php" title="Home">Home</a></li>
			<li><a href="../aboutus.php" title="About us">About Us</a></li>
        	<li><a href="../features.php" title="Features">Features</a></li> 
        	<li><a href="../admission.php" title="Admission">Admission</a></li> 
        	<li><a href="../tuition.php" title="Tuition">Tuition</a></li>
        	<li><a href="../regulation.php" title="Regulations">Regulations</a></li>
			<li><a href="../contact.php" title="Contact">Contact</a></li>
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
        <h3></h3>
        <?php
		include 'db.php';
	if(isset($_GET['class'])){
		
	$utype=mysql_query("SELECT utype FROM members WHERE email='$email'")or die(mysql_error());
		$fetch=mysql_fetch_assoc($utype);
		$dbtype=$fetch['utype'];
	if($dbtype=='student'){
	$utype=mysql_query("SELECT utype FROM members WHERE email='$email'")or die(mysql_error());
	$fetch=mysql_fetch_assoc($utype);
	$dbtype=$fetch['utype'];
	if($dbtype=='student'){
	$classname=$_GET['class'];
	echo "<h3><a href='../assessment/index.php?assessment=$classname'>Take Assessment</a></h3><br/><br/>";
	$viewrec=mysql_query("SELECT * FROM $classname WHERE email='$email'")or die("".mysql_error());
	echo "<h2>Grade Book</h2>";
	echo "<table border='1' cellpadding='auto' cellspacing='0'/>";
	echo "<tr>";
	echo "<th align='center'>Email</th>";
	echo "<th align='center'>Chapter 1</th>";
	echo "<th align='center'>Chapter 2</th>";
	echo "<th align='center'>Chapter 3</th>";
	echo "<th align='center'>Chapter 4</th>";
	echo "<th align='center'>Chapter 5</th>";
	echo "<th align='center'>Final Grade</th>";
	echo "</tr>";
	while($view=mysql_fetch_assoc($viewrec)){
		$db_email=$view['email'];
		$db_ass1=$view['assessment1'];
		$db_ass2=$view['assessment2'];
		$db_ass3=$view['assessment3'];
		$db_ass4=$view['assessment4'];
		$db_ass5=$view['assessment5'];
		$db_fg=$view['F6'];
	echo "<tr>";
	echo "<td>$db_email</td>";
	echo "<td>$db_ass1</td>";
	echo "<td>$db_ass2</td>";
	echo "<td>$db_ass3</td>";
	echo "<td>$db_ass4</td>";
	echo "<td>$db_ass5</td>";
	echo "<td>$db_fg</td>";
	}
	echo "</table>";
	}
	}
	else{
	 "<meta http-equiv='refresh' content='0;url=index.php'>";	
	}
}
elseif(isset($_GET['classname'])){
	$cname=$_GET['classname'];
	$getclass=mysql_query("SELECT * FROM class_name WHERE teacheremail='$email' AND class_name='$cname'")or die(mysql_error());
	if($getclass==true){
		while($fetchclass=mysql_fetch_assoc($getclass)){
		$dbclass=$fetchclass['class_name'];
		$db_date=$fetchclass['datecreated'];
		$db_expire=$fetchclass['expirydate'];
		$db_id=$fetchclass['class_id'];
		$db_email=$fetchclass['teacheremail'];
		}
		echo "<fieldset><legend>Class Information</legend>";
					echo "<p>Class name :&nbsp;&nbsp;&nbsp;&nbsp; <b>$dbclass</b></p>";
					echo "<p>Date created :&nbsp;&nbsp;&nbsp;&nbsp; <b>$db_date</b></p>";
					echo "<p>Valid until :&nbsp;&nbsp;&nbsp;&nbsp; <b>$db_expire</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href='../class/index.php?classname=$dbclass&updateclass=$email'>Update</a></p>";if(isset($_GET['updateclass'])){$updateclass=$_GET['updateclass'];if(!date($updateclass)){echo "<script type='text/javascript'>
alert('Invalid date format!');
</script>";} echo "<form method='post' action='../class/index.php?classname=$dbclass&updateclass=$email'>Date  :<input type='date' id='inputField' name='validdate' maxlength='10' size='10'/>&nbsp;&nbsp;<input type='submit' name='submit' value='Update'/></form>"; 
if(isset($_POST['submit'])){
	
$date=$_POST['validdate'];
$currentdate=date("Y-f-d");
if($date==$currentdate||$date<$currentdate){
	$valid=mysql_query("UPDATE class_name SET expirydate='$date' WHERE class_name='$dbclass'")or die(mysql_error()); 
$validate=mysql_affected_rows(); 
if($validate!=0){
	echo "<script type='text/javascript'>
alert('Updating of your class is successfull.');
</script>";}
else{
	echo "<script type='text/javascript'>
alert('Update failed!');
</script>";}}}
					echo "<p>Class Teacher :&nbsp;&nbsp;&nbsp;&nbsp; <b>$db_email</b></p>";
					echo "</fieldset>";
	}
	else{echo "";}
}
else{
echo "<script type='text/javascript'>
alert('Date entered is invalid. The date must not be less than or equal to the current date.');
</script>";	
}
echo "</fieldset>";
					$showstudrec=mysql_query("SELECT * FROM $dbclass")or die(mysql_error());
					$studrecnum=mysql_num_rows($showstudrec);
					if($studrecnum!=0){
						echo "<div class='post'>";
						echo "<h2>Student Record</h2></br>";
						echo "<a href='../assessment/index.php?assessment=$dbclass'>Assessment</a></br>";
						echo "<a href='../class/index.php?addstudent&classname=$dbclass'>add student</a>";
						if(isset($_GET['addstudent'])){
					
					echo "<form action='index.php?addstudent&classname=$dbclass' method='post'>";
					echo "</br>Students Email: <ul><li><input type='text' name='email' maxlength='40' size='15'/></li>";
					echo "Temporary Password: <li><input type='password' name='pass' maxlength='30' size='15'/>";
					echo "&nbsp;&nbsp;&nbsp;<input type='submit' name='add' value='add student'/></li></ul>";echo "</form>";
					
					if(isset($_POST['add'])){
						if((!$_POST['email'])&&(!$_POST['email'])){
							echo "<p style='background-color:#F00'><b>*Fill up All Fields</b></p>";
						}
						elseif((!$_POST['email'])||(!$_POST['pass'])){
							echo "<p style='background-color:#F00'><b>*Fill up All Fields</b></p>";
						}
						else{
							$studemail=$_POST['email'];
							$temppass=md5($_POST['pass']);
							if(0===preg_match("/.+@.+\..+/", $_POST['email'])){
							echo "<script type='text/javascript'>
							alert('Enter valid email address!');
							</script>";
							}
							else{
								$insertadded=mysql_query("INSERT INTO members (email, pass) VALUES ('$studemail', '$temppass')")or die(mysql_error());
								if($insertadded==true){
									
									$updateclass=mysql_query("INSERT INTO classrecords (studenemail, class_name, teacheremail) VALUES ('$studemail', '$dbclass', '$email')")or die(mysql_error());
									if($updateclass==true){
									echo "<script type='text/javascript'>
							alert('Adding Successfull.');
							</script>";
									}
									else{
									echo "<script type='text/javascript'>
							alert('Adding failed.');
							</script>";
								}
								}
							}
						}
					}
					
				}
						echo "<table cellpadding='0' border='1' cellspacing='' datapagesize='auto' />";
						echo "<tr>";
						echo "<th>Email Address</th>";
						echo "<th>Exam 1</th>";
						echo "<th>Exam 2</th>";
						echo "<th>Exam 3</th>";
						echo "<th>Exam 4</th>";
						echo "<th>Exam 5</th>";
						echo "<th>Final Grade</th>";
						echo "<th>Rating</th>";
						echo "</tr>";
						while($showrow=mysql_fetch_assoc($showstudrec)){
							$dbemail=$showrow['email'];
							$dbass1=$showrow['assessment1'];
							$dbass2=$showrow['assessment2'];
							$dbass3=$showrow['assessment3'];
							$dbass4=$showrow['assessment4'];
							$dbass5=$showrow['assessment5'];
							$dbf6=$showrow['F6'];
							
							$rating=(((((int)$dbass1+(int)$dbass2+(int)$dbass3+(int)$dbass4+(int)$dbass5)/5)*30)+70);
							if($rating!=1){
								$grade="--";
							}
							elseif($rating>=75){
								$grade="passed";
							}
							else{
								$grade="failed";	
							}
							
						echo "<tr>";
						echo "<td align='center'>$dbemail</td><td align='center'>$dbass1</td><td align='center'>$dbass2</td><td align='center'>$dbass3</td><td align='center'>$dbass4</td><td align='center'>$dbass5</td><td align='center'>$dbf6</td><td align='center'>$grade</td>";
						echo "</tr><br/>";
						}
						echo "</table><br/>";
						echo "</div>";
					}
					else {
				echo "<fieldset><legend>Student Record</legend>";
				echo "You dont have any student enrolled to your Class.<br/>";
				echo "<p align='right'><a href='class.php?add=$classname'>add student</a></p>";
				echo "</fieldset>";
					}
				}
		?>

		</div>
        <div id="content_right">
        <h5><?php 
		include 'studnav.php';
			?><h4></h4><br/><br/>
        <div class="item_box">
        <a href="http://www.facebook.com/pages/Golden-Achievers-Academy/232715393412055" title="Like us on Facebook" target="_new"><img src="../images/facebook.jpg" height="30px" width="90px"/></a>
        </div>
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="210" height="300" id="tech" align="middle">
		<param name="allowScriptAccess" value="sameDomain" />
		<param name="movie" value="kl.swf" />
		<param name="quality" value="high" />
		<embed src="../kl.swf" quality="high" width="210" height="300" name="tech" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
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
