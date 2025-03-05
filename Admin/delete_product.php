<?php
include('admin_function.php');

$user_id=$_REQUEST['uid'];

$call=productDelete($user_id);
if($call){
	echo "<script>
			alert('Product Delete Successful.');
			window.location.href='all_product.php';
		  </script>";
}
else{
	echo "<script>
			alert('Product Delete Unuccessful.');
			window.location.href='all_product.php';
		  </script>";
}

include('admin_footer_link.php');

?>