<?php

include("../db_connection.php");
global $conn;

if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST) && isset($_POST['admin_login'])){
    $email=$_POST['Email'];
    $password=$_POST['password'];
    echo "<pre>";
    $sql="SELECT * FROM admin WHERE email='".$email."'";
    $query=mysqli_query($conn,$sql);
    $get_no_row=mysqli_num_rows($query);
    if($get_no_row){
        $data=mysqli_fetch_assoc($query);
        if($data['password']== md5($_POST['password'])){
            session_start();
            $_SESSION['username']=$data['name'];
            header('location:dashbord.php');
        }
        else{
            echo "<script>
            alert('Email don't match ......');
            window.location.href='index.php';
            </script>";
        }
    }
    else{
        echo "<script>
            alert('User not Exit ......');
            window.location.href='index.php';
            </script>";
    }


    // echo "<pre>";
    // print_r($_POST);
}



?>