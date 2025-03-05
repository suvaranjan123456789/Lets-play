<?php


  include('admin_function.php');



  if($_SERVER['REQUEST_METHOD']==="POST" && isset($_POST) && isset($_POST['editcatagory'])){
        $id=$_POST['id'];
      $cname=$_POST['cname'];
      $description=$_POST['des'];
    
      $old_img=$_POST['old_img']; 
      $pic=$_FILES['pic']; 
      $image=' '; 
      if( $pic['name']!='') 
      { 
        $img_type=strtolower(pathinfo($pic['name'],PATHINFO_EXTENSION)); 
        $image="Catagory_".time().".".$img_type; 
      } 
      else 
      { 
        $image=$old_img; 
      }

      $returndata=Catagoryupdate($id,$cname,$description,$image);
      if($returndata){
        if( $pic['name']!='') 
        { 
          unlink('../Assets/c_img/'.$old_img); 
          move_uploaded_file($pic['tmp_name'],'../Assets/c_img/'.$image); 
        } 
        echo "<script>
        alert('Product update Successful.');
        window.location.href='all_catagory.php';
        </script>";
      }
      else{
          echo "<script>
        alert('Product update  NotSuccessful.');
        window.location.href='catagory_edit.php';
        </script>";
      }
   }

?>