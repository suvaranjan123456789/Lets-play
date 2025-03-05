<?php
include('admin_function.php');

$user_id=$_REQUEST['uid'];

$call=catagoryDelete($user_id);
if($call){
	echo "<script>
			alert('Catagory Delete Successful.');
			window.location.href='all_catagory.php';
		  </script>";
}
else{
	echo "<script>
			alert('Catagory Delete Unuccessful.');
			window.location.href='all_catagory.php';
		  </script>";
}


?>