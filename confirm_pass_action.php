<?php
include('db_connection.php');
global $conn;
$email=$_POST['email'];
$password=$_POST['pass'];
$sql="UPDATE registration_data SET password='".$password."' WHERE email='".$email."'";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('Password change successfully.');window.location.href='login.php';</script>";
}
else{
    echo "<script>alert('Password Not changed.');window.location.href='confirm_password.php';</script>";

}

?>