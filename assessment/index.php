<?php
session_start();
include 'db.php';
if(!isset($_SESSION['email'])){
echo "<meta http-equiv='refresh' content='0;url=../login.php'>";
exit();
}
else{
$email=$_SESSION['email'];
$utype=mysql_query("SELECT utype FROM members WHERE email='$email'")or die(mysql_error());
$fetchtype=mysql_fetch_assoc($utype);
$dbtype=$fetchtype['utype'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Golden Achievers Academy</title>
<link rel="stylesheet" type="text/css" href="../style.css" media="screen" />
<link href="../images/icon.ico" id="ico" rel="icon" rev="ico" />
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
        <input type="text" name="search" title="search" />&nbsp;&nbsp;&nbsp;<input type="image" src="../images/search.png" name="s" title="GO" value="s"/>
        </form></br>
        <h3><?php if($dbtype=="student"){if(isset($_GET['assessment'])){echo "Select Assessment";}}else{echo "Select assessment to activate";} ?></h3>
        <?php
		if($dbtype=="student"){
	if(isset($_GET['assessment'])){
		$class=$_GET['assessment'];
	$getype=mysql_query("SELECT utype FROM members WHERE email='$email'")or die(mysql_error());
	$type=mysql_fetch_assoc($getype);
	$db_utype=$type['utype'];
	if($db_utype=='student'){
	$active=mysql_query("SELECT * FROM activation WHERE class_name='$class'")or die(mysql_error());
	$numrows=mysql_num_rows($active);
	if($numrows!=0){
		while($ass=mysql_fetch_assoc($active)){
			$db_act1=$ass['assessment1'];
			$db_act2=$ass['assessment2'];
			$db_act3=$ass['assessment3'];
			$db_act4=$ass['assessment4'];
			$db_act5=$ass['assessment5'];
			if(($db_act1=='activate')||($db_act2=='activate')||($db_act3=='activate')||($db_act4=='activate')||($db_act5=='activate')){
				if($db_act1=='activate'){
				echo "<a href='assessment.php?class=$class&chapter=assessment1' target='_new'>Chapter 1</a><br/>";
				}
				if($db_act2=='activate'){
				echo "<a href='start.php?class=$class&chapter=assessment2' target='_new'>Chapter 2</a><br/>";
				}
				if($db_act3=='activate'){
				echo "<a href='start.php?class=$class&chapter=assessment3' target='_new'>Chapter 3</a><br/>";
				}
				if($db_act4=='activate'){
				echo "<a href='start.php?class=$class&chapter=assessment4' target='_new'>Chapter 4</a><br/>";
				}
				if($db_act5=='activate'){
				echo "<a href='start?class=$class&chapter=assessment5' target='_new'>Chapter 5</a><br/>";
				}
		}
		else{
				echo "<script type='text/javascript'>
alert('No Active Assessment');
</script>";
				echo "No Active Assessment";
		}
		}
	}
	else{
	echo "No Active Assessment.";	
	}
	}
	else{header("Location:index.php");}
	}
		}
		else if(isset($_GET['assessment'])){
							$class=$_GET['assessment'];
						echo "Note: The activation and deactivation of the assessment is one at a time only. </br>";
						$checkactive=mysql_query("SELECT * FROM activation WHERE class_name='$class'")or die(mysql_error());
						$check=mysql_num_rows($checkactive);
						if($check!=0){
							while($checkrow=mysql_fetch_assoc($checkactive)){
							$dbactive1=$checkrow['assessment1'];
							$dbactive2=$checkrow['assessment2'];
							$dbactive3=$checkrow['assessment3'];
							$dbactive4=$checkrow['assessment4'];
							$dbactive5=$checkrow['assessment5'];
							
							if($dbactive1=='activate'||$dbactive2=='activate'||$dbactive3=='activate'||$dbactive3=='activate'||$dbactive5=='activate'){
							echo "Already active Assessment<br/>";
							}
							else {
							echo "No Active Assessment";	
						}
							
							if($dbactive1=='activate'){
								echo "Assessment 1";
								if($dbactive2=='activate'||$dbactive3=='activate'||$dbactive4=='activate'||$dbactive5=='activate'){
									echo ",";
								}
							}
							if($dbactive2=='activate'){
								echo " Assessment 2";
								if($dbactive3=='activate'||$dbactive4=='activate'||$dbactive5=='activate'){
									echo ",";
								}
							}
							if($dbactive3=='activate'){
								echo " Assessment 3";
								if($dbactive4=='activate'||$dbactive5=='activate'){
									echo ",";
								}
							}
							if($dbactive4=='activate'){
								echo " Assessment 4";
								if($dbactive5=='activate'){
									echo ",";
								}
							}
							if($dbactive5=='activate'){
								echo " Assessment 5";
							}
							}
						}
						
						if(isset($_GET['assessment'])){
$activate=$_GET['assessment'];
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
if((!isset($_GET['selectedclass']))&&(!isset($_GET['chapter']))){
	echo "<script type='text/javascript'>
alert('Please select a assessment you wish to be activated.');
</script>";
}
else{
	$selectedclass=$_GET['selectedclass'];
$chapter=$_GET['chapter'];
	include 'db.php';
	if($activate=='activate'){
		$activation=mysql_query("SELECT * FROM activation WHERE class_name='$selectedclass'")or die(mysql_error());
		$activationum=mysql_num_rows($activation);
		if($activationum!=0){
			$ckclass=mysql_query("UPDATE activation SET $chapter='$activate' WHERE class_name='$selectedclass'")or die(mysql_error());
			$activatedeffect=mysql_affected_rows();
			if($activatedeffect>0){
			echo "<script type='text/javascript'>
alert('Activation Successfull.');
</script>";
			}
			else{
				echo "<script type='text/javascript'>
alert('An error occur while your request is being process.');
</script>";
			}
		}
		else{
	$ckclass=mysql_query("INSERT INTO activation (class_name , $chapter) VALUES ('$selectedclass', '$activate')")or die(mysql_error());
	$activatedeffect=mysql_affected_rows();
	if($activatedeffect>0){
			echo "<script type='text/javascript'>
alert('Deactivation Successfull.');
</script>";
			}
			else{
				echo "<script type='text/javascript'>
alert('An error occur while your request is being process.');
</script>";
			}
		}
	}
	elseif($activate=='deactivate'){
		$activation=mysql_query("SELECT * FROM activation WHERE class_name='$selectedclass'")or die(mysql_error());
		$activationum=mysql_num_rows($activation);
		if($activationum!=0){
			$ckclass=mysql_query("UPDATE activation SET $chapter='$activate' WHERE class_name='$selectedclass'")or die(mysql_error());
			echo "<script type='text/javascript'>
alert('Deactivation Successfull.');
</script>";
		}
		else{
	$ckclass=mysql_query("INSERT INTO activation (class_name , $chapter) VALUES ('$selectedclass', '$activate')")or die(mysql_error());
	echo "<script type='text/javascript'>
alert('Deactivation Successfull.');
</script>";
		}
	}
}
}
						
						echo "<form action='index.php' method='get'/>";
						echo "<p>Select Class&nbsp;<select title='Select Class' name='selectedclass' />";
						echo "<option value='$class'/>$class</option>";
						echo "</selected></p>";
						echo "<input type='hidden'/><br/>";
						echo "</br><p>Assessment 1<input type='checkbox' name='chapter' value='assessment1'/></p>";
						echo "<p>Assessment 2<input type='checkbox' name='chapter' value='assessment2'/></p>";
						echo "<p>Assessment 3<input type='checkbox' name='chapter' value='assessment3'/></p>";
						echo "<p>Assessment 4<input type='checkbox' name='chapter' value='assessment4'/></p>";
						echo "<p>Assessment 5<input type='checkbox' name='chapter' value='assessment5'/></p>";
						echo "<input type='submit' name='assessment' value='activate'/>&nbsp;&nbsp;";
						echo "<input type='submit' name='assessment' value='deactivate'/>";
						echo "</form></br>";
						echo "if DONE <a href='../class/index.php?classname=ae4ea'>";
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
