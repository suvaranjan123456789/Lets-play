<?php
include('db_connection.php');
//session_start();


function getAllUser(){
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

function getuserdetails($uid){
	global $conn;
	
	 $sql = "SELECT * FROM `registration_data` WHERE id='".$uid."'";
     $query = mysqli_query($conn, $sql);
     if (mysqli_num_rows($query) > 0) {
     	$data=mysqli_fetch_assoc($query);
     	return $data;
     }else{
     	return false;
     }

}



function getuser(){
	global $conn;
	session_start();
	$uid=$_SESSION['uid'];
	 $sql = "SELECT * FROM `registration_data` WHERE id='".$uid."'";
     $query = mysqli_query($conn, $sql);

	 if (mysqli_num_rows($query)) {
		$data=mysqli_fetch_assoc($query);
     	return $data;
     }else{
     	return false;
     }
}


function Adderssupdate($district,$city,$village,$pin,$state,$honeadd,$officeadd){
	$uid=$_SESSION['uid'];
	global $conn;
	 $sql = "UPDATE `user_add` set district='".$district."',	city='".$city."',village='".$village."',pin_no='".$pin."',state='".$state."', home_address='".$honeadd."', office_address='".$officeadd."' WHERE user_id='".$uid."'";
     $query = mysqli_query($conn, $sql);

    return $query?true:false;
    
}

function CartDelete($cart_id){
	global $conn;
	 $sql = "DELETE FROM `cart` WHERE id='".$cart_id."'";
     $query = mysqli_query($conn, $sql);
     if ($query) {
     	return true;
     }else{
     	return false;
     }
}


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




function getproduct($id){
	global $conn;
	 $sql = "SELECT * FROM `catagory` WHERE id='".$id."'";
     $query = mysqli_query($conn, $sql);

     if (mysqli_num_rows($query)) {
		$data=mysqli_fetch_assoc($query);
     	return $data;
     }else{
     	return false;
     }
}


function getTreandingproduct(){
	global $conn;
	 $sql = "SELECT * FROM `product` WHERE trending='1'";
     $query = mysqli_query($conn, $sql);

     if (mysqli_num_rows($query) > 0) {
		$data=mysqli_fetch_all($query,MYSQLI_ASSOC);
		return $data;
	}else{
		return false;
	}
}



function getAllProduct($cid){
	global $conn;
	 $sql = "SELECT * FROM `product` WHERE catagory_id='".$cid."'";
     $query = mysqli_query($conn, $sql);
	 
     if (mysqli_num_rows($query) > 0) {
     	$data=mysqli_fetch_all($query,MYSQLI_ASSOC);
     	return $data;
     }else{
     	return false;
     }

}


function getproductid($product_id){
	global $conn;
	 $sql = "SELECT * FROM `product` WHERE `id`='".$product_id."'";
     $query = mysqli_query($conn, $sql);

     if(isset($query)) {
		$data=mysqli_fetch_assoc($query);
     	return $data;
     }else{
     	return false;
     }
}


function Displayproduct($pid){
	global $conn;
	 $sql = "SELECT * FROM `product` WHERE id='".$pid."'";
     $query = mysqli_query($conn, $sql);

	 if (mysqli_num_rows($query) > 0) {
		$data=mysqli_fetch_all($query,MYSQLI_ASSOC);
		return $data;
	}else{
		return false;
	}
}


function DisplayCartpid(){
	global $conn;
	$uid=$_SESSION['uid'];
	$sql = "SELECT cart.id,cart.qty,product.pname,product.image,product.seling_price,product.discount,product.dcharge FROM `cart` JOIN `product` ON cart.p_id=product.id WHERE cart.user_id='".$uid."'";
    $query = mysqli_query($conn, $sql);
	if (mysqli_num_rows($query) > 0) {
		$data=mysqli_fetch_all($query,MYSQLI_ASSOC);
		return $data;
	}else{
		return false;
	}
}



function getAddress(){
	global $conn;
	$uid=$_SESSION['uid'];
	 $sql = "SELECT * FROM `user_add` WHERE user_id='".$uid."'";
     $query = mysqli_query($conn, $sql);

	 if (mysqli_num_rows($query)) {
		$data=mysqli_fetch_assoc($query);
     	return $data;
     }else{
     	return false;
     }
}

function getuseradddetails($user_id){
	global $conn;
	 $sql = "SELECT * FROM `user_add` WHERE id='".$user_id."'";
     $query = mysqli_query($conn, $sql);

     if (mysqli_num_rows($query)) {
		$data=mysqli_fetch_assoc($query);
     	return $data;
     }else{
     	return false;
     }
}
//add to catr function---------------------------
function getcartnum(){
	if (isset($_SESSION['username'])) {

		global $conn;
		$uid=$_SESSION['uid'];
		$max = "SELECT p_id FROM cart WHERE user_id='".$uid."'";   
		if($result=mysqli_query($conn,$max)){
		$row=mysqli_num_rows($result);
		return $row;
		}
	}
}

function InsertCartProduct($uid,$pid,$qty){
	global $conn;
	$sql = "INSERT INTO cart(user_id,p_id,qty) VALUES('" . $uid . "','" . $pid . "','".$qty."')";
    $query = mysqli_query($conn, $sql);
	return $query;
    
}
//---------------------------------------------
//wishlist function----------------------------
function getWishilistnum(){
	if (isset($_SESSION['username'])) {

		global $conn;
		$uid=$_SESSION['uid'];
		$max = "SELECT p_id FROM wishlist WHERE user_id='".$uid."'";   
		if($result=mysqli_query($conn,$max)){
		$row=mysqli_num_rows($result);
		return $row;
		}
	}
}

function Insertwishlist($uid,$pid){
	global $conn;
	$sql = "INSERT INTO wishlist(user_id,p_id) VALUES('" . $uid . "','" . $pid . "')";
    $query = mysqli_query($conn, $sql);
	return $query;
    
}

function Displaywishlistpid(){
	global $conn;
	$uid=$_SESSION['uid'];
	$sql = "SELECT wishlist.id,wishlist.p_id,product.pname,product.s_description,product.original_price,product.image,product.seling_price FROM `wishlist` JOIN `product` ON wishlist.p_id=product.id WHERE wishlist.user_id='".$uid."'";
    $query = mysqli_query($conn, $sql);
	if (mysqli_num_rows($query) > 0) {
		$data=mysqli_fetch_all($query,MYSQLI_ASSOC);
		return $data;
	}else{
		return false;
	}
}


//-----------------------------------------------

// order funtion start...



function getnameorder(){
	global $conn;
	$uid=$_SESSION['uid'];
	 $sql = "SELECT * FROM registration_data WHERE id='".$uid."'";
     $query = mysqli_query($conn, $sql);

	 if (mysqli_num_rows($query)) {
		$data=mysqli_fetch_assoc($query);
     	return $data;
     }else{
     	return false;
     }
}

function getaddressorder(){
	global $conn;
	$uid=$_SESSION['uid'];
	 $sql = "SELECT * FROM registration_data WHERE id='".$uid."'";
     $query = mysqli_query($conn, $sql);

	 if (mysqli_num_rows($query)) {
		$data=mysqli_fetch_assoc($query);
     	return $data;
     }else{
     	return false;
     }
}


function DisplayOrderProduct($pid){	
	global $conn;
	$sql = "SELECT * FROM product WHERE id='".$pid."'";
    $query = mysqli_query($conn, $sql);
	if (mysqli_num_rows($query) > 0) {
		$data=mysqli_fetch_assoc($query);
		return $data;
	}else{
		return false;
	}
}
// order funtion end...

?>