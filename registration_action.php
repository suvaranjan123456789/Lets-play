<?php
$con=mysqli_connect("localhost","root","","e-com");
if(!$con){
    die("Connection Unsuccessful.".mysqli_connect_error());
	
}




$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$dob=$_POST['dob'];
$add1=$_POST['add1'];
$add2=$_POST['add2'];
$city=$_POST['city'];
$region=$_POST['region'];
$code=$_POST['code'];
// $img=$_POST['image_file'];

$sql_duplicate_check="SELECT * FROM `registration_data` where `email`='".$email."'";
$check=mysqli_query($con,$sql_duplicate_check);
if(mysqli_num_rows($check)>0){
	echo "<script>
			alert('Email Already Existelse{.');
			window.location.href='registration.php';
		  </script>";
}
else{

		$file_name=$_FILES['image_file']['name'];
		$custom_name='';
		if(isset($file_name)){
			$file_tmp_name=$_FILES['image_file']['tmp_name'];
			$imageFileType = strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
			$imgeTypeAllow=array('jpg','png','bmp','gif','webp');
			$custom_name="student_name_".time().'.'.$imageFileType;
			if(!in_array($imageFileType, $imgeTypeAllow)){
				echo "File not Take";
			}
		}


	$sql="INSERT INTO registration_data(name,email,password,phone,dob,address1,address2,city,region,pin,image) VALUES('".$name."','".$email."','".$password."','".$phone."','".$dob."','".$add1."','".$add2."','".$city."','".$region."','".$code."','".$custom_name."')";
	$query=mysqli_query($con,$sql);
	if($query){

		if(isset($custom_name)){
			$destination="Assets/user_img/".$custom_name;
			move_uploaded_file($file_tmp_name,$destination);
		}
		echo "<script>alert('Registration Successful.');window.location.href='login.php';</script>";

		
		// $_SESSION['username']=$name;

		// echo "<script>alert('Registration Successful.');window.location.href='login.php';</script>";
	}
	else{
		echo "<script>alert('Sorry, Registration Unsuccessful.');window.location.href='registration.php';</script>";
	}
}

?>