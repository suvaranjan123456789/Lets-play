<?php

session_start();

include('user_function.php');

if (isset($_SESSION['username'])) {
  $uid = $_SESSION['uid'];
  $pcid = base64_decode($_REQUEST['pcid']);
  $qty = $_REQUEST['quentity'];

  $insert = InsertCartProduct($uid, $pcid, $qty);

  if ($insert) {
    echo "<script>alert('Product add to cart successful.');window.location.href='add_to_cart.php';</script>";
  } else {
    echo "<script>alert('Sorry, product add to cart Un-successful.');window.location.href='details.php';</script>";
  }
} else {
  echo "
    <script>
    alert ('Please First Login.');window.location.href='login.php';
    </script>
  ";
}
