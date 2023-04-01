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
		
		<h1><a href="index.html" title="">Golden Achievers Academy</a></h1>
		
		<ul id="menu">
        	<li><a href="index.php" title="">Home</a></li>
			<li><a href="aboutus.php" title="">About Us</a></li>
       	 	<li><a href="features.php">Features</a></li> 
        	<li><a href="admission.php">Admission</a></li> 
        	<li><a class ="current" href="tuition.php">Tuition</a></li>
        	<li><a href="regulation.php">Regulations</a></li>
			<li><a href="contact.php" title="">Contact</a></li>
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
          <p><strong>APPROVED TUITION &amp; OTHER FEES</strong></p>
          <p><strong>PRE-ELEMENTARY &amp; ELEMENTARY DEPARTMENT</strong></p>
          <p> <strong>SCHOOL YEAR 2011-2012</strong></p>
          <table width="auto" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <th scope="col">&nbsp;LEVEL</th>
    <th scope="col">&nbsp;TUITION FEE</th>
    <th scope="col">&nbsp;MISCELLANEOUS FEE</th>
    <th scope="col">&nbsp;COMPUTER FEE</th>
    <th scope="col">&nbsp;AIRCON FEE</th>
  </tr>
  <?php
		  include 'db.php';
		  $tuition=mysql_query("SELECT * FROM tuitionfee")or die(mysql_error());
		  $numrows=mysql_num_rows($tuition);
		  if($numrows!=0){
			  while($tfetch=mysql_fetch_assoc($tuition)){
				  $dblevel=$tfetch['level'];
				  $dbtuition=$tfetch['tuitionfee'];
				  $dbmiscellaneous=$tfetch['miscellaneousfee'];
				  $dbcomp=$tfetch['computerfee'];
				  $dbaircon=$tfetch['airconfee'];
		?>
        <tr>
        <td><?php echo $dblevel;?></td>
        <td><?php echo $dbtuition;?></td>
        <td><?php echo $dbmiscellaneous;?></td>
        <td><?php echo $dbcomp;?></td>
        <td><?php echo $dbaircon;?></td>
        </tr>
        <?php
			  }
		  }
		  ?>
</table>
          <br />
<p> <strong>MISCELLANEOUS FEE INCLUDES THE FOLLOWING:</strong></p>
<p>a. Registration Fee                                         f. Library Fee</p>
<p>b. Dental &amp; Medical Fee                                  g. Guidance Fee</p>
<p>c. Instructional Materials                                h. Laboratory Fee</p>
<p>d. Class Pictures                                            i.  Athletics Fee</p>
<p>e. School I.D.</p>
<p> <strong>PURPOSES AND JUSTIFICATION OF EACH ITEM</strong></p>
<p>1. TUITION FEE – to generate funds for basic salary, allowances and other fringe</p>
<p>benefits of all teaching and non-teaching staff</p>
<p>2. REGISTRATION FEE – to generate funds for printing and students forms, records,</p>
<p>and other expenses relative to registration of the students.</p>
<p>3. MEDICAL AND DENTAL FEE – to generate funds for the improvement and</p>
<p>maintenance of medical and dental facilities and purchase of medicine.</p>
<p>4. LIBRARY – to cover cost of maintenance and acquisition of books and  other  library</p>
<p>facilities, purchase of books and salary of library staff.</p>
<p>5. GUIDANCE &amp; COUNSELING – to generate funds for the maintenance of guidance</p>
<p>facilities and salary of counseling staff.</p>
<p>6. IDENTIFICATION CARD – to defray expenses for the picture of students,</p>
<p>printing and lamination.</p>
<p>7. ATHLETICS – to defray expenses for the improvement and maintenance of</p>
<p>athletics  and  playground facilities.</p>
<p>&nbsp;      </p>
      </div>
        
                
        <div id="content_right">
        <h5><?php 
		include 'studnav.php';
		?><h4></h4><br/><br/></h4>
         
        <div class="item_box">
        <a href="http://www.facebook.com/pages/Golden-Achievers-Academy/232715393412055" title="Like us on Facebook" target="_new"><img src="images/facebook.jpg" height="30px" width="90px"/></a>
        </div>
         <br/><br/><br/>
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
