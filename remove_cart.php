
<?php
include('user_function.php');


$cart_id=$_REQUEST['rpid'];

$call=CartDelete($cart_id);
if($call){
	echo "<script>
			 alert('Cart Delete Successful.');
			window.location.href='add_to_cart.php';
		  </script>";
}
else{
	echo "<script>
			alert('Cart Delete Unuccessful.');
			window.location.href='add_to_cart.php';
		  </script>";
}


?> 