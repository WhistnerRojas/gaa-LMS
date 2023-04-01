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
		
		<h1><a href="index.php" title="">Golden Achievers Academyo</a></h1>
		
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
         <form action="search.php" method="get">
        <input type="text" name="search" title="search" />&nbsp;&nbsp;&nbsp;<input type="image" src="images/search.png" name="s" title="GO" value="s"/>
        </form></br></br>
        <h3>Registration Form</h3>
        
				<div id="form">
						
						<div id="fields">
							<form action="register.php" method="post" target="_self" id="register">
                
		           <fieldset><label for="name"><br />
           First Name</label><input type="text" title="First Name" name="fname" id="firstname" value=""  size="20" maxlength="20" autocomplete="on" ><br/>
		          
		          Last Name</br><input type="text" title="Last Name" name="lname" id="secondname" value="" size="20" maxlength="20" autocomplete="on" ><br/>
                  </fieldset>
                  <fieldset>
                  <label for="gendercollection">Gender</label></br>
                
		          <select name="gender" id="gender" title="Gender">
		            
		            <option value="" selected="selected">- Select One -</option>
		           
		            <option title="male" value="male">Male</option>
		           
		            <option title="female" value="female">Female</option>
		            
	              </select><br/>
                  
                  <label for="birthdategroup">Birth date</label></br>
                
		          <select title="- Select Month -" name="mm" id="mm">
		            
		            <option value="" selected="selected">- Select Month -</option>
		            
		            <option value="January">January</option>
		           
		            <option value="February">February</option>
		            
		            <option value="March">March</option>
		            
		            <option value="April">April</option>
		            
		            <option value="May">May</option>
		           
		            <option value="June">June</option>
		            
		            <option value="July">July</option>
		            
		            <option value="August">August</option>
		            
		            <option value="September">September</option>
		            
		            <option value="October">October</option>
		            
		            <option value="November">November</option>
		           
		            <option value="December">December</option>
		           
	              </select>
		          
		          <select title="Day" name="dd" id="dd" >
				  <option selected="selected">-Select Day-</option>
				  <option value="01">01</option>
				  <option value="02">02</option>
				  <option value="03">03</option>
				  <option value="04">04</option>
				  <option value="05">05</option>
				  <option value="06">06</option>
				  <option value="07">07</option>
				  <option value="08">08</option>
				  <option value="09">09</option>
				  <option value="10">10</option>
				  <option value="11">11</option>
				  <option value="12">12</option>
				  <option value="13">13</option>
				  <option value="14">14</option>
				  <option value="15">15</option>
				  <option value="16">16</option>
				  <option value="17">17</option>
				  <option value="18">18</option>
				  <option value="19">19</option>
				  <option value="20">20</option>
				  <option value="21">21</option>
				  <option value="22">22</option>
				  <option value="23">23</option>
				  <option value="24">24</option>
				  <option value="25">25</option>
				  <option value="26">26</option>
				  <option value="27">27</option>
				  <option value="28">28</option>
				  <option value="29">29</option>
				  <option value="30">30</option>
				  <option value="31">31</option>
				  </select>
		          <select name="yy" id="yy" title="year">
		            <option selected="selected">-Select Year-</option>
		            <option value="1980">1980</option>
		            <option value="1981">1981</option>
		            <option value="1982">1982</option>
		            <option value="1983">1983</option>
		            <option value="1984">1984</option>
		            <option value="1985">1985</option>
		            <option value="1986">1986</option>
		            <option value="1987">1987</option>
		            <option value="1988">1988</option>
		            <option value="1989">1989</option>
		            <option value="1990">1990</option>
		            <option value="1991">1991</option>
		            <option value="1992">1992</option>
		            <option value="1993">1993</option>
		            <option value="1994">1994</option>
		            <option value="1995">1995</option>
		            <option value="1996">1996</option>
		            <option value="1997">1997</option>
		            <option value="1998">1998</option>
		            <option value="1999">1999</option>
		            <option value="2000">2000</option>
		            <option value="2001">2001</option>
		            <option value="2002">2002</option>
		            <option value="2003">2003</option>
		            <option value="2004">2004</option>
		            <option value="2005">2005</option>
		            <option value="2006">2006</option>
		            <option value="2007">2007</option>
		            <option value="2008">2008</option>
		            <option value="2009">2009</option>
		            <option value="2010">2010</option>
		            <option value="2011">2011</option>
	              </select>
                  </fieldset>
                  <fieldset>
		      <legend>Select an ID and password</legend>
		      
		        <label for="">ID and Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
		        
		        <input type="text" name="email" id="email" value="" size="32" maxlength="32" autocomplete="on" /><br/>
		        <label for="password">Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
		          <input type="password" name="pass" id="pass" value="" size="32" maxlength="32" /><br/>
                  <label for="passwordconfirm">Re-type Password</label>
		            <input type="password" name="cpass" id="cpass" value="" size="32" maxlength="32" /><br/>
                  <input type="hidden" name="utype" value="student"/>
						<div id="send">
				    <input type="submit" name="create" id="IAgreeBtn" value="Create" title="Create Account" border="0" >
                  </fieldset>
                  </form>
						</div>
				</div>            
		</div>
        
        <div id="content_right">
         <h4><?php if(isset($_SESSION['email'])){echo $_SESSION['email'];}else{echo "<a href='login.php' title='Click to Login'>Login</a> or <a href='register.php' title='Click to Register'>Register</a>";}?></h4><br/><br/></h4>
         
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
  <div id="madeby">
    <p></p>
</div>
</div> 
</body>
</html>
