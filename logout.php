<?php
		session_start();
		$email=$_GET['email'];
		include 'db.php';
		$logout=mysqli_query($connect,"UPDATE users SET userStatus='0' WHERE email='$email'")or die(mysqli_error($connect));
		$logouteffect=mysqli_affected_rows($connect);
		if($logout!=0){
		session_destroy();
		echo "<script type='text/javascript'>
alert('You have been successfully logout');
</script>";
echo "<meta http-equiv='refresh' content='0;url=login.php'>";
		}
		else{
			echo "<script type='text/javascript'>
alert('Failed to logout');
</script>";
echo "<meta http-equiv='refresh' content='0;url=index.php'>";
		}

?>