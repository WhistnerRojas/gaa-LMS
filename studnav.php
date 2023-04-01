<?php
if(isset($_SESSION['email'])){
			$id=md5($email); 
			include 'db.php';
					  $pic =mysqli_query($connect,"SELECT * FROM users WHERE email='$email'")or die ("".mysqli_error($connect));			
$nr=mysqli_num_rows($pic);
if($nr!=0){
	while($row=mysqli_fetch_object($pic)){
		$picture=$row->file_get_contents;
		if($email)
{
echo "<img name='profilepic' src='../gaa/uploadpic/$picture' width='70' height='100' title = '$email'alt='' style='background-color: #CCCCCC' /></br></br>";
	}
}
}
else{
echo "<img name='profilepic' src='../gaa/images/fas.gif' width='60' height='60' title = '$email'alt='' style='background-color: #CCCCCC' /></br></br>";
}
echo "<a href='../profile.php?email=$email'>".$_SESSION['email']."</br>";
			echo "<a href='../profile.php?action=changepic'>Edit my profile picture</a></br>";
			echo "<a href='../gaa/academy.php?id=$id&email=$email'>Academy connection</a></br><a href='logout.php?email=$email'>Logout</a>";
			}
			else{
				echo "<a href='login.php' title='Click to Login'>Login</a> or <a href='register.php' title='Click to Register'>Register</a>";
			}
?>
</h5>