<?php
if(isset($_SESSION['email'])){
			$id=md5($email); 
			include 'db.php';
					  $pic =mysqli_query($connect, "SELECT * FROM users WHERE email='$email'")or die ("".mysqli_error($connect));			
$nr=mysqli_num_rows($pic);
if($nr!=0){
	while($row=mysqli_fetch_object($pic)){
		$picture=$row->file_get_contents;
		if($email)
{
echo "<img name='profilepic' src='../uploadpic/$picture' width='70' height='100' title = '$email'alt='' style='background-color: #CCCCCC' /></br></br>";
	}
}
}
else{
echo "<img name='profilepic' src='../images/fas.gif' width='60' height='60' title = '$email'alt='' style='background-color: #CCCCCC' /></br></br>";
}
echo "<a href='../profile.php?email=$email'>".$_SESSION['email']."</br>";
			echo "<a href='../profile.php?action=changepic'>Edit my profile picture</a></br>";
			echo "<a href='../academy.php?id=$id&email=$email'>Academy connection</a></br><a href='logout.php?email=$email'>Logout</a>";
			}
			else{
				echo "<a href='login.php' title='Click to Login'>Login</a> or <a href='register.php' title='Click to Register'>Register</a>";
			}
?>
</h5>
<ul class="pureCssMenu pureCssMenum">
	<li class="pureCssMenui"><a class="pureCssMenui" href="index.php">Biology</a></li>
    <li class="pureCssMenui"><a class="pureCssMenui" href="index.php?pioneers">Pioneers</a></li>
	<li class="pureCssMenui"><a class="pureCssMenui" href="#"><span>Famous Biologist</span><![if gt IE 6]></a><![endif]><!--[if lte IE 6]><table><tr><td><![endif]-->
	<ul class="pureCssMenum">
		<li class="pureCssMenui"><a class="pureCssMenui" href="index.php?famous=foreign">Foriegn Biologist</a></li>
		<li class="pureCssMenui"><a class="pureCssMenui" href="index.php?famous=local">Local Biologist<![if gt IE 6]></a><![endif]><!--[if lte IE 6]><table><tr><td><![endif]-->
		<!--[if lte IE 6]></td></tr></table></a><![endif]--></li>
	</ul>
	<!--[if lte IE 6]></td></tr></table></a><![endif]--></li>
	<li class="pureCssMenui"><a class="pureCssMenui" href="#"><span>Templates</span><![if gt IE 6]></a><![endif]><!--[if lte IE 6]><table><tr><td><![endif]-->
	<ul class="pureCssMenum">
		<li class="pureCssMenui"><a class="pureCssMenui" href="#">Template 1</a></li>
		<li class="pureCssMenui"><a class="pureCssMenui" href="#">Template 2</a></li>
		<li class="pureCssMenui"><a class="pureCssMenui" href="#">Template 3</a></li>
		<li class="pureCssMenui"><a class="pureCssMenui" href="#">Template 4</a></li>
		<li class="pureCssMenui"><a class="pureCssMenui" href="#">Template 5</a></li>
		<li class="pureCssMenui"><a class="pureCssMenui" href="#">Template 6</a></li>
	</ul>
	<!--[if lte IE 6]></td></tr></table></a><![endif]--></li>
	<li class="pureCssMenui"><a class="pureCssMenui" href="#">FAQ</a></li>
	<li class="pureCssMenui"><a class="pureCssMenui" href="#">Contact Us</a></li>
</ul><br/></br><br/>