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
        <input type="text" name="search" title="search" />&nbsp;&nbsp;&nbsp;<input type="image" src="images/search.png" name="s" title="GO" value="search"/>
        </form></br>
        <h3>Search result</h3>
        <?php
		//search
		include 'db.php';
if(isset($_GET['s'])){
$button = $_GET ['s'];
$search = $_GET ['search']; 
if(!$button)
echo "you didn't submit a keyword";
else
{
if(strlen($search)<=1)
echo "Search term too short";
else{
echo "You searched for ".$search."";
echo "<hr size='1'></br>";
include 'db.php';

$search_exploded = explode (" ", $search);

foreach($search_exploded as $search_each)
{
$x=0;
$x++;
if($x==1)
$construct="description LIKE '%$search_each%' OR tutorial LIKE '%$search_each%'";
}

$query =mysqli_query($connect, "SELECT * FROM searchengine WHERE $construct")or die("Error in $construct".mysqli_error($connect));;


$foundnum = mysqli_num_rows($query);

if ($foundnum==0)
echo "Sorry, there are no matching result for $search.</br></br>1. 
Try more general words</br>2. Try different words with similar
 meaning</br>3. Please check your spelling";
else
{
echo "$foundnum result(s) found !<p>";

while($runrows = mysqli_fetch_assoc($query))
{
$tutorial=$runrows['tutorial'];
$desc = $runrows ['description'];
$url = $runrows ['url'];

echo "
<a href='$url'><b>$desc</b></a></br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;$tutorial</p>
";
}
}
}
}
}
		?>
       <p></p> 

		</div>
        
        <div id="content_right">
        <h5><?php 
		
		if(isset($_SESSION['email'])){
		$id=md5($email); 
			include 'db.php';
					  $pic =mysqli_query($connect, "SELECT * FROM upload WHERE email='$email'")or die ("".mysqli_error($connect));			
$nr=mysqli_num_rows($pic);
if($nr!=0){
	while($row=mysqli_fetch_object($pic)){
		$picture=$row->file_name;
		if($email)
{
echo "<img name='profilepic' src='uploadpic/$picture' width='70' height='100' title = '$email'alt='' style='background-color: %23CCCCCC' /></br></br>";
	}
}
}
else{
echo "<img name='profilepic' src='images/fas.gif' width='60' height='60' title = '$email'alt='' style='background-color: %23CCCCCC' /></br></br>";
}
			echo $_SESSION['email']."</br>";
			echo "<a href='academy.php?action=changepic'>Edit my profile picture</a></br>";
			echo "<a href='academy.php?id=$id'>Academy connection</a></br><a href='logout.php?email=$email'>Logout</a>";
			}
			else{
				echo "<a href='login.php' title='Click to Login'>Login</a> or <a href='register.php' title='Click to Register'>Register</a>";
			}
			
			?></h5><h4></h4><br/><br/>
        <div class="item_box">
        <a href="http://www.facebook.com/pages/Golden-Achievers-Academy/232715393412055" title="Like us on Facebook" target="_new"><img src="images/facebook.jpg" height="30px" width="90px"/></a><br/><br/><br/>
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
		Copyright 2007 <a href="http://localhost/phpmyadmin">&copy;</a> Golden Achievers Academy
        	</div>
        <div id="madeby"><br />
</div>
		</div> 
    
	
</div>

</body>
</html>
