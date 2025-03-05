<?php

session_start();

include('user_function.php');

if (isset($_SESSION['username'])) {
  $uid = $_SESSION['uid'];
  $pcid = base64_decode($_REQUEST['dpid']);
//   $qty = $_REQUEST['quentity'];

  $insert = Insertwishlist($uid, $pcid);

  if ($insert) {
    echo "<script>alert('Product add to wishlist successful.');window.location.href='wishlist.php';</script>";
  } else {
    echo "<script>alert('Sorry, product add to wishlist Un-successful.');window.location.href='details.php';</script>";
  }
} else {
  echo "
    <script>
    alert ('Please First Login.');window.location.href='login.php';
    </script>
  ";
}
