<?php
include('admin_function.php');

$user_id=$_REQUEST['uid'];

$call=userDelete($user_id);
if($call){
	echo "<script>
			alert('User Delete Successful.');
			window.location.href='all_users.php';
		  </script>";
}
else{
	echo "<script>
			alert('User Delete Unuccessful.');
			window.location.href='manage_users.php';
		  </script>";
}


?>