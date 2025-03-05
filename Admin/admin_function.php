<?php
include('../db_connection.php');

// All users database page sql

function getAllUsers(){
	global $conn;
	 $sql = "SELECT * FROM `registration_data`";
     $query = mysqli_query($conn, $sql);
     if (mysqli_num_rows($query) > 0) {
     	$data=mysqli_fetch_all($query,MYSQLI_ASSOC);
     	return $data;
     }else{
     	return false;
     }

}


function userDelete($user_id){
	global $conn;
	 $sql = "DELETE FROM `registration_data` WHERE id='".$user_id."'";
     $query = mysqli_query($conn, $sql);
     if ($query) {
     	return true;
     }else{
     	return false;
     }
}

function getuserdetails($user_id){
	global $conn;
	 $sql = "SELECT * FROM `registration_data` WHERE id='".$user_id."'";
     $query = mysqli_query($conn, $sql);

     if (mysqli_num_rows($query)) {
		$data=mysqli_fetch_assoc($query);
     	return $data;
     }else{
     	return false;
     }
}

function userupdate($user_id,$name,$email,$phone,$gender,$address1,$address2,$city,$region,$pin,$image){
	global $conn;
	 $sql = "UPDATE `registration_data` set name='".$name."',email='".$email."',phone='".$phone."',gender='".$gender."',address1='".$address1."',address2='".$address2."',image='".$image."' WHERE id='".$user_id."'";
     $query = mysqli_query($conn, $sql);

    return $query?true:false;
    
}

// End------------------------------->>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>


// All Product SQL-------------->>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

function getAllProduct(){
	global $conn;
	$sql ="SELECT * FROM `product`";
	$query = mysqli_query($conn, $sql);
	if (mysqli_num_rows($query) > 0){
		$data=mysqli_fetch_all($query,MYSQLI_ASSOC);
		return $data;
     }else{
     	return false;
     }
	
}

function getProductdetails($user_id){
	global $conn;
	 $sql = "SELECT * FROM `product` WHERE id='".$user_id."'";
     $query = mysqli_query($conn, $sql);

     if (mysqli_num_rows($query)) {
		$data=mysqli_fetch_assoc($query);
     	return $data;
     }else{
     	return false;
     }
}

function productDelete($user_id){
	global $conn;
	 $sql = "DELETE FROM `product` WHERE id='".$user_id."'";
     $query = mysqli_query($conn, $sql);
     if ($query) {
     	return true;
     }else{
     	return false;
     }
}

function productupdate($cid,$pname,$slap,$sdes,$des,$op,$sp,$qua,$status,$treading,$mt,$md,$mk,$image){
	global $conn;
	 $sql = "UPDATE `product` set pname='".$pname."',slup='".$slap."',s_description='".$sdes."',description='".$des."',original_price='".$op."',seling_price='".$sp."',	image='".$image."',qty='".$qua."',status='".$status."',trending='".$treading."', meta_title='".$mt."', meta_description='".$md."', meta_kywords='".$mk."' WHERE catagory_id='".$cid."'";
     $query = mysqli_query($conn, $sql);
    return $query?true:false;
    
}
// End------------------------------->>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>


//  All Catagory SQL start--------------------------------->>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>




function getAllCatagory(){
	global $conn;
	 $sql = "SELECT * FROM `catagory`";
     $query = mysqli_query($conn, $sql);
     if (mysqli_num_rows($query) > 0) {
     	$data=mysqli_fetch_all($query,MYSQLI_ASSOC);
     	return $data;
     }else{
     	return false;
     }

}



function getCatagorydetails($user_id){
	global $conn;
	 $sql = "SELECT * FROM `catagory` WHERE id='".$user_id."'";
     $query = mysqli_query($conn, $sql);

     if (mysqli_num_rows($query)) {
		$data=mysqli_fetch_assoc($query);
     	return $data;
     }else{
     	return false;
     }
}


function catagoryDelete($user_id){
	global $conn;
	 $sql = "DELETE FROM `catagory` WHERE id='".$user_id."'";
     $query = mysqli_query($conn, $sql);
     if ($query) {
     	return true;
     }else{
     	return false;
     }
}


function Catagoryupdate($id,$cname,$description,$image){
	global $conn;
	 $sql = "UPDATE `catagory` set name='".$cname."',description='".$description."',	image='".$image."' WHERE id='".$id."'";
     $query = mysqli_query($conn, $sql);

    return $query?true:false;
    
}
// End------------------------------->>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

//contact us function-------masseges
function getAllMessages(){
	global $conn;
	 $sql = "SELECT * FROM `messages`";
     $query = mysqli_query($conn, $sql);
     if (mysqli_num_rows($query) > 0) {
     	$data=mysqli_fetch_all($query,MYSQLI_ASSOC);
     	return $data;
     }else{
     	return false;
     }

}


function getMessagedetails($user_id){
	global $conn;
	 $sql = "SELECT * FROM `messages` WHERE id='".$user_id."'";
     $query = mysqli_query($conn, $sql);

     if (mysqli_num_rows($query)) {
		$data=mysqli_fetch_assoc($query);
     	return $data;
     }else{
     	return false;
     }
}

//contact us function-------masseges



function DisplayOrder(){
	global $conn;
	// $uid=$_SESSION['uid'];
	$sql = "SELECT confirm_order.p_id,confirm_order.address,confirm_order.payment,product.pname,product.image FROM confirm_order JOIN product ON confirm_order.p_id=product.id";
    $query = mysqli_query($conn, $sql);
	if (mysqli_num_rows($query) > 0) {
		$data=mysqli_fetch_all($query,MYSQLI_ASSOC);
		return $data;
	}else{
		return false;
	}
}
?>