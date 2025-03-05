<?php
session_start();
include('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST) && isset($_POST['AddAddress'])) {
    $district = $_POST['distric'];
    $city = $_POST['city'];
    $village = $_POST['village'];
    $pin = $_POST['pin'];
    $state = $_POST['state'];
    $honeadd = $_POST['homeadd'];
    $officeadd = $_POST['officeadd'];

    $uid = $_SESSION['uid'];

    global $conn;
    $sql = "INSERT INTO user_add(user_id,village,city,district,state,pin_no,home_address,office_address) VALUES('" . $uid . "','" . $village . "','" . $city . "','" . $district . "','" . $state . "','" . $pin . "','" . $honeadd . "','" . $officeadd . "')";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo "<script>alert('Address Add Successful.');window.location.href='account.php';</script>";
    } else {
        echo "<script>alert('Sorry, Address Add Unsuccessful.');</script>";
    }
}
else{
    echo "404 not found.";
}

    
