<?php
include'db.php';
if(isset($_POST['login'])){// if 1
$email=$_POST['email'];
$pass=$_POST['pass'];
if(!$email&&!$pass){
	echo "<script type='text/javascript'>
alert('Enter your email address and password');
</script>";
}
elseif(!$email){
	echo "<script type='text/javascript'>
alert('Enter your Email Address');
</script>";
}
elseif(!$pass){
	echo "<script type='text/javascript'>
alert('Enter Password');
</script>";
}
else{
$encrypt=md5($pass);
$usercheck=mysqli_query($connect,"SELECT * FROM users WHERE email='$email' AND pass='$pass'")or die("".mysqli_error($connect));
$check=mysqli_num_rows($usercheck);
if($check!=0){//student user check
							
while($rows=mysqli_fetch_assoc($usercheck)){
								
$db_email=$rows['email'];
$db_pass=$rows['pass'];
$db_utype=$rows['accesstype'];	

$active=1;
$online=mysqli_query($connect,"UPDATE users SET userStatus='$active' WHERE email='$db_email'")or die(mysqli_error($connect));
$affect=mysqli_affected_rows($connect);
if($affect!=0){
	if(($email=$db_email)&&($pass=$db_pass)){
			
$_SESSION['email']=$email;
echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}
//inside of user check					
else{
	echo "<script type='text/javascript'>
alert('The account you are using is already used by another user');
</script>";
}
}//closing of inside if in user check
			else{
				echo "<script type='text/javascript'>
alert('The account you are trying to use is already used by another user');
</script>";
			}
}
}//closing student check

else{
							 
echo "<script type='text/javascript'>
alert('Incorrect email or password');
</script>";
							 
}
}
}
?>