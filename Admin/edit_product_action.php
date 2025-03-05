<?php


  include('admin_function.php');



  if($_SERVER['REQUEST_METHOD']==="POST" && isset($_POST) && isset($_POST['editproduct'])){
      $cid=$_POST['cid'];
      $catagory=$_POST['catagory'];
      $pname=$_POST['pname'];
      $slap=$_POST['slap'];
      $sdes=$_POST['sdes'];
      $des=$_POST['des'];
      $op=$_POST['op'];
      $sp=$_POST['sp'];
      $qua=$_POST['qua'];
      $status=$_POST['status'];
      $treading=$_POST['trending'];
      $mt=$_POST['mt'];
      $md=$_POST['md'];
      $mk=$_POST['mk'];
      


      $old_img=$_POST['old_img']; 
      $pic=$_FILES['pic']; 
      $image=' '; 
      if( $pic['name']!='') 
      { 
        $img_type=strtolower(pathinfo($pic['name'],PATHINFO_EXTENSION)); 
        $image="Product_".time().".".$img_type; 
      } 
      else 
      { 
        $image=$old_img; 
      }

      $returndata=productupdate($cid,$pname,$slap,$sdes,$des,$op,$sp,$qua,$status,$treading,$mt,$md,$mk,$image);
      if($returndata){
        if( $pic['name']!='') 
        { 
          unlink('../Assets/p_img/'.$old_img); 
          move_uploaded_file($pic['tmp_name'],'../Assets/p_img/'.$image); 
        } 
       echo "<script>
        alert('Product update Successful.');
        window.location.href='all_product.php';
        </script>";
      }
      else{
          echo "<script>
        alert('Product update  NotSuccessful.');
        window.location.href='product_edit.php';
        </script>";
      }
   }

?>