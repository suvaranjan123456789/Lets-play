<?php
include('db_connection.php');
global $conn;
session_start();
$uid = $_SESSION['uid'];

$opid = $_POST['opid'];
$address = $_POST['address_type'];
$payment = $_POST['payment_type'];

$sql = "INSERT INTO confirm_order(user_id,p_id,address,payment) VALUES('" . $uid . "','" . $opid . "','" . $adress . "','" . $payment . "')";
$query = mysqli_query($conn, $sql);
if ($query) {
    echo "<script>
        alert('Order sucessfull.');window.location.href='index.php';
        </script>";
} else {
    echo "<script>
        alert('Order Unsucessfull.');window.location.href='index.php';
        </script>";
}

?>