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
        	<li><a href="index.php" title="">Home</a></li>
		    	<li><a href="aboutus.php" title="">About Us</a></li>
       	 	<li><a href="features.php">Features</a></li> 
        	<li><a href="admission.php">Admission</a></li> 
        	<li><a class ="current" href="regulation.php">Regulations</a></li>
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
        <h3> <strong>I. Introduction:</strong></h3>
        
        <ul>
        <p> Welcome! Golden Achiever’s Academy is your school. It’s your second home which aims to form in you a person with a well rounded personality – a person with a well developed mind, purified heart and a strong will. Thus, we formulated the school rules and regulations to HELP you strengthen your character by requiring you to exercise responsible self discipline. They are of value only by making them your own and with conviction by recognizing them to be necessary during the years of formation.</p>
        </ul>
        
        <h3><strong>II. School Curriculum:</strong></h3>
        <p>The school follows/implements the curriculum prescribed by the DepEd for the Preparatory Course, Elementary Course and Secondary Course.</p>
        <h3><strong>A. Learning Areas</strong></h3>
        
        <table cellpadding="o" cellspacing="10" border="0">
        <tr>
        <th>English </th>
        <th> Math</th>
        </tr>
        <tr>
        <th>Science </th>
        <th> Social Studies</th>
        </tr>
        <tr>
        <th>MAPE/PHEM </th>
        <th>  GMRC/Christian Living Values </th>
        <th> CAT/Scouting(4th year)</th>
        </tr>
        </table>
        
        <h3><strong>B. Class Schedule – (given during orientation week)</strong></h3>
        
        <p>It shall be the policy of the school to have a grading system which will place greater emphasis on student performance during the final examinations in each of the four (4) quarterly periods during the school year; and on the last four (4) quarterly grading periods; and on competitive written performance in (class examinations, test, recitation and quizzes, over other forms of measurement). Formative and summative tests over other forms of measurement.</p>
        
        <p>The highest grade is 100% and the lowest grade shall be 65% and the passing grade in any given subjects shall be 75%.</p>
        
        <h3><strong>2. Criteria for the Selection of Honors</strong></h3>
        <h4><strong>Preschool and Elementary</strong></h4>
        <p>2.1 The pupil should have a grade of 85 or above in all major subjects in all quarterly grading periods.</p>
        <p>2.2 The pupil should have a grade of 83 or above in all minor subjects in all quarterly grading periods.</p>
        <p>2.3 The pupil should have an average of 92 or above in all quarterly grading periods.</p>
        <p>2.4 The pupil should be active in co-curricular and extra-curricular activities.</p>
        <p>2.5 The pupil should have a grade of 95% or above in Conduct and Diligence in all quarterly grading period.</p>
        <h4></h4>
        <h3><strong>3. Recognition of Special Talent/Skills</strong></h3>
        <p> Recognition shall also be given to children with special talents, skills and other types of intelligence. </p><br/>
        <h3><strong>III. School Discipline</strong></h3>
        <p> Golden Achievers Academy shall maintain discipline inside the school campus as well as outside the school premises when pupils or students are engaged in activities authorized by the school. </p>
        <h3><strong>1. Mandated by the Department of Education/City Ordinance</strong></h3>
        <p>1.1 Cellphones are not allowed on school.</p>
        <p>1.2 Students are prohibited to use the internet café during school days from 7:00am-10:00pm. If it is needed for research paper student should be accompanied by their parent and with ID.</p>
        <p>1.3 Students are highly encouraged to speak in English with the strong participation of faculty members and staff. (Parents are encouraged to support this National English Campaign)</p>
        <h3><strong>2. Imposition of Disciplinary Action</strong></h3>
        <p>2.1 School officials and teachers shall have the right to impose appropriate reasonable disciplinary measures in case of minor offenses or infarctions of good discipline. However, no cruel or physically harmful punishment shall be imposed or applied against and pupil or student.</p>
        <p>2.2 Suspension/Expulsion: For first and other offenses which are not serious in nature an oral reprimand shall be given to the pupil. However, parents must be informed by the teacher thru Student Diary.</p>
        <p>2.3 For the first and other offenses, which are serious in nature, three (3) days suspension may be authorized by the principal. Parents must be informed by the teacher or the school principal of any misconduct on the part of their children for which disciplinary action is necessary.</p>
        <p>2.4 For the persistent offender or one guilty of a serious offense, a suspension for not more than one (1) week may be imposed. However, parents must be informed in writing by the teacher or the school principal of a misconduct for which disciplinary action is necessary.</p>
        <p>2.5 In all cases of suspension, a written promise of future exemplary conduct signed by the pupil/students and countersigned by his parents or guardian shall be required as a condition for readmission and must be required in the case of suspension for more than three (3) days.</p>
        <p>2.6 Offenses punishable by suspension or expulsion depending on the seriousness of the offenses.</p>
        <ul>
          <li>Gross misconduct</li>
          <li>Cheating and stealing</li>
          <li>Assaulting a teacher or any other school authority on his agents.</li>
          <li>Smoking inside the school premises.</li>
          <li>Vandalism, writing on or destroying school property like chairs, tables, windows, books, laboratory equipment and others.</li>
          <li>Gambling of any sort</li>
          <li>Carrying and concealing of deadly weapons</li>
          <li>Extortion</li>
          <li>Tampering and forgery</li>
          <li>Habitual disregard of school rules</li>
          <li>Fighting or acts of violence resulting to physical injury</li>
          <li>Other similar injuries</li>
          <li>Bringing pornography to school.</li>
          <li>Membership in any fraternity or sorority</li>
          <li>Bringing or using any prohibited drugs</li>
        </ul>
        
        <h3><strong>IV. Other School Policies</strong></h3>
        <h3><strong>A. Attendance</strong></h3>
        <p>Students must be present at least 80% of the total number of school days in a year, to fulfill the requirements of the DepEd. Absences of a student should not exceed the allowed 20% of the total number of days in a school year.</p>
        <p>1.         <strong>Punctuality and Tardiness</strong></p>
        <p>Students are expected to come to school on time. A student is considered late if he/she comes after the assembly and he/she must secure an Admission slip from the H.T. /Principal using the correspondence page of the Student Diary.</p>
        <p>2.         A student may leave the school upon the parent’s request. The letter of request is granted upon an approval from the office of the principal.</p>
        <p>3.         <strong>Reporting to School after an illness</strong></p>
        <p>3.1 The student must present an excuse slip with a medical certificate when he/she is ready to attend classes.</p>
        <p>3.2 Any student who gets sick with any contagious disease like chicken pox, measles, sore eyes, mumps and others, is advised to stay home. He/she is allowed to come to school if fully healed and with a medical certificate/clearance.</p>
        <p>4.         <strong>Special Test</strong></p>
        <p>A special exam is scheduled to students who missed any Summative (Quizzes, Long Tests, Quarterly Exam)</p>
        <p>5.         <strong>Systems of Communication</strong></p>
        <p>5.1       <strong>Diary</strong></p>
        <p>The best means of communication between the home and school/parents and teachers is the Student Diary. Parents are highly encouraged to follow-up their child/children by inspecting and signing daily any communication written in the diary. Fill-up pp. 5, 11 and the last page of school policies/rules and regulations.</p>
        <p>5.2       <strong>Circular Parents</strong></p>
        <p>The school updates the parents of the student’s activities with parent’s participation through a circular. Parents are requested to read and file the circular and to fill up. Reply Slip and send it back to school the following day.</p>
        <p>6.         <strong>Identification Card</strong></p>
        <p>The school ID is part of the school uniform. It should be worn every time they come to school for all occasions.</p>
        <p>7.         <strong>Dress Code</strong></p>
        <p>7.1       <strong>Daily</strong><strong> School</strong><strong> Uniform</strong></p>
        <p>Students should come to school during school days and school function in the prescribed uniform, wearing of expensive and fashion jewelries are highly discouraged.</p>
        <p>New students are given 30 days to wear their civilian clothes if the school uniform is not yet available.</p>
        <p>7.2       <strong>P.E. Uniform</strong></p>
        <p>Students should wear their prescribed P.E. uniform during scheduled P.E. day/days.</p>
        <p>8.         <strong>Library</strong></p>
        <p>The library is a place for study or research. The students are expected to observe its rules and regulations.</p>
        <p>9.         <strong>Laboratory/Computer Room/ Home Economics</strong></p>
        <p>The students are expected to observe its rules and regulations in using any of the rooms. They report lost or damaged equipment to the teacher.</p>
        <p>10.       <strong>Suspension of Classes</strong></p>
        <p>REVISED GUIDELINES ON THE SUSPENSION OF CLASSES WHEN TYPHOONS AND OTHER CALAMITIES OCCUR (DECS Order No. 68, s, 1998)</p>
        <p>Classes shall be automatically suspended, without need any announcement in the following situations:</p>
        <p>11.       <strong>School Activities</strong></p>
        <p>11.1 All students are encouraged to join school/activities like; Holy mass, Recollection, Confession, First Holy Communion (except non-Catholic students), Foundation Day and other educational programs.</p>
        <p>11.2 Excursion and Field Trips</p>
        <p>Joining class excursion, field trips and other out-of-school activities will require parent’s written permission.</p>
        <p>12. <strong>Leaving the School Campus</strong></p>
        <p>12.1 In case of illness, a student may go home but with a parent or guardian to fetch him/her.</p>
        <p>12.2 A student may leave the campus with parent’s permission written in the Student Diary</p>
        <ol>
          <li>When typhoon signal No.1 is raised by PAGASA, classes in the pre-schools shall be automatically suspended and typhoon signal No. 2 for elementary and High School levels.</li>
          <li>Where the rains are heavy causing floods in the community and in the area of the school, classes in the schools affected are automatically suspended.</li>
          <li>Where other calamities such as floods, fire and earthquakes have occurred and have seriously damaged the homes of families in the community and probable recurrence of such calamities is declared by proper authorities, classes in all levels are automatically suspended.</li>
          <li>Announcement by the DepEd’s Regional Director – As a matter of policy, the suspension cancellation and/or postponement of classes in a particular region if it is region-wide, shall be announced by the Regional Director after consultation with superintendents  and local government officials.</li>
          <li>Announcement by the School Heads/Principals – In cases where conditions endanger the lives and safety of students, teachers and other school personnel. School Heads/principals are enjoined to use their best judgment in this regard.</li>
        </ol>
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
