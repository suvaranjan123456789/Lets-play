<?php

    include('../db_connection.php');


    if($_SERVER['REQUEST_METHOD']==="POST" && isset($_POST) && isset($_POST['addproduct'])){
        $catagory_id=$_POST['catagory_id'];
        $pname=$_POST['pname'];
        $slap=$_POST['slap'];
        $smalldes=$_POST['sdes'];
        $des=$_POST['des'];
        $originalp=$_POST['op'];
        $selingp=$_POST['sp'];
        $quentity=$_POST['qua'];
        $status=isset($_POST['status'])?'1':'0';
        $trending=isset($_POST['trending'])?'1':'0';
        $mtitle=$_POST['mt'];
        $mdes=$_POST['md'];
        $mkeyword=$_POST['mk'];
        //$cid=$_POST['cid'];

        $file_name=$_FILES['image_file']['name'];
        $custom_name='';
        if(isset($file_name)){
            $file_tmp_name=$_FILES['image_file']['tmp_name'];
            $imageFileType = strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
            $imgeTypeAllow=array("jpg",'png','bmp','gif','webp');
            $custom_name="Product_".time().'.'.$imageFileType;
            if(!in_array($imageFileType, $imgeTypeAllow)){
                echo "File not Take";
            }
        }

        if($pname!="" && $slap!="" && $des!=""){
            global $conn;
            $sql="INSERT INTO product (catagory_id,pname,slup,s_description,description,original_price,seling_price,qty,status,trending,meta_title,meta_description,meta_kywords,image) VALUES('".$catagory_id."','".$pname."','".$slap."','".$smalldes."','".$des."','".$originalp."','".$selingp."','".$quentity."','".$status."','".$trending."','".$mtitle."','".$mdes."','".$mkeyword."','".$custom_name."')";
            $query=mysqli_query($conn,$sql);
            if($query){
                if(isset($custom_name)){
                    $destination="../Assets/p_img/".$custom_name;
                    move_uploaded_file($file_tmp_name,$destination);
                }
                //$_SESSION['username']=$data['name'];
                echo "<script>alert('Product Add Successful.');window.location.href='all_product.php';</script>";
            }
            else{
                echo "<script>alert('Sorry,Something went wrong.');window.location.href='add_product.php';</script>";
            }
        }
    }


?>