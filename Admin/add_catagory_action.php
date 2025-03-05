<?php

    include('../db_connection.php');


    if($_SERVER['REQUEST_METHOD']==="POST" && isset($_POST) && isset($_POST['addcatagory'])){
        $cname=$_POST['cname'];
        $des=$_POST['des'];
        

        $file_name=$_FILES['image_file']['name'];
        $custom_name='';
        if(isset($file_name)){
            $file_tmp_name=$_FILES['image_file']['tmp_name'];
            $imageFileType = strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
            $imgeTypeAllow=array("jpg",'png','bmp','gif','webp');
            $custom_name="Catagory_".time().'.'.$imageFileType;
            if(!in_array($imageFileType, $imgeTypeAllow)){
                echo "File not Take";
            }
        }

        if($cname!="" && $des!=""){
            global $conn;
            $sql="INSERT INTO catagory (name,description,image) VALUES('".$cname."','".$des."','".$custom_name."')";
            $query=mysqli_query($conn,$sql);
            if($query){
                if(isset($custom_name)){
                    $destination="../Assets/c_img/".$custom_name;  //catagory image store..
                    move_uploaded_file($file_tmp_name,$destination);
                }
                //$_SESSION['username']=$data['name'];
                echo "<script>alert('Catagory Add Successful.');window.location.href='all_catagory.php';</script>";
            }
            else{
                echo "<script>alert('Sorry,Something went wrong.');window.location.href='add_catagory.php';</script>";
            }
        }
    }


?>