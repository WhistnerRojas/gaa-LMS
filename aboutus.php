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
			<li><a class ="current" href="aboutus.php" title="About us">About Us</a></li> 
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
        <h3>Welcome to Golden Achievers Academy</h3>
        
        <h4>History</h4>
			<p><b>Golden Achievers Academy</b> draws its root from a preschool named Hansel and Gretel Learning Center which, in turn inspired by the well-known fairy tale Hansel and Gretel, aimed at catering to the educational needs of the children of Annex 35 and nearby communities in Better Living, Parañaque City. Golden Achievers Academy was founded by Ms. Ana Belen M. Zaraspe, A Mathematics and Science teacher for 15 years. She graduated in 1979 with a degree in Bachelor of Chemistry and received a certificate in Teaching and Master in Education Management from Philippine Normal University.</p>

			<p>Hansel and Gretel Learning Center was established in 1998 and offered all three levels of preparatory school for children aged three to five, with only one teacher and one aide. It was located at the residence of its founder at Cornelius Street Annex 35, Better Living Subdivision, Parañaque City with a converted living room serving as the classroom and a garage for a play area.</p>
            
            <p>The following year, in June 1999, the school was granted a permit by the department of Education, Culture and Sports (DECS) to open the elementary grades I-VI. This also paved the way for further expansion and improvement of its facilities. With the permit to operate the Grade School, the name was changed into Hansel and Gretel Academy with greater commitment to offer quality education and services to its students and parents.</p>
            
            <p>In the School Year 2006-2007, Hansel and Gretel Academy opened its doors to first and second year high school students, further expanding its social services and commitment to the community. Thus, from a three-story school building, Hansel and Gretel Academy now houses a twin three storey edifice to accommodate the incoming freshmen, sophomores and junior students.</p>
            
            <p>After a decade of continuous commitment to quality education, Hansel and Gretel Academy now sports a new name GOLDEN ACHIEVERS ACADEMY in the same location, with the same management now offering complete 1st yr. to 4th yr. high school levels. The new name signifies its institutional objective of producing graduates who are not only locally responsive but globally competitive.</p>
            
            <p><b>Golden Achievers Academy</b> will continue to live to its commitment of providing quality education at affordable low tuition fees to more and more students entrusted to its care.</p>
            
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
        <div id="madeby"><br />
</div>
        
        
        
		</div> 
    
	
</div>

</body>
</html>
