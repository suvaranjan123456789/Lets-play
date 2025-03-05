<?php


include('admin_function.php');



if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST) && isset($_POST['updateuser'])){
    //echo "<pre>";
    //print_r($_POST);
    $user_id=$_POST['user_id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $gender=$_POST['gender'];
    $address1=$_POST['address1'];
    $address2=$_POST['address2'];
    $city=$_POST['city'];
    $region=$_POST['region'];
    $pin=$_POST['pin'];

    $old_img=$_POST['old_img']; 
      $pic=$_FILES['pic']; 
      $image=' '; 
      if( $pic['name']!='') 
      { 
        $img_type=strtolower(pathinfo($pic['name'],PATHINFO_EXTENSION)); 
        $image="User_name_".time().".".$img_type; 
      } 
      else 
      { 
        $image=$old_img; 
      }

      


    $returndata=userupdate($user_id,$name,$email,$phone,$gender,$address1,$address2,$city,$region,$pin,$image);
    if($returndata){
      if( $pic['name']!='') 
      { 
        unlink('../Assets/user_img/'.$old_img); 
        move_uploaded_file($pic['tmp_name'],'../Assets/user_img/'.$image); 
      } 
      echo "<script>
      alert('User update Successful.');
      window.location.href='all_users.php';
      </script>";
    }
    else{
        echo "<script>
			alert('User update  NotSuccessful.');
			window.location.href='all_users.php';
		  </script>";
    }
}

?>