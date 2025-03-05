<?php

include('admin_function.php');
include('navber.php');
//include('../db_connection.php');

?>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <div class="head" style="display:flex; justify-content: space-between;">
                <h4 class="mb-4 text-primary fs-5 fw-5">All Catagory</h4>
                <a href="add_catagory.php"><button class="btn btn-primary">Add Catagory</button></a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover w-100" id="example">
                        <thead>
                            <tr class="table-primary">
                                <th>SL</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                           $alldata= getAllCatagory();
                           if(isset($alldata)){
                                foreach ($alldata as $key => $data) { 
                            ?>
                                    <tr>
                                        <td><?php echo ($key+1); ?></td>
                                        <td><?php echo $data['name']; ?></td>
                                        <td><?php echo $data['description']; ?></td>
                                       
                                        <td><img src="../Assets/c_img/<?php echo $data['image'] ? $data['image'] : 'no-image.jpg'; ?>" alt="<?php echo $data['name']; ?>" style="height:50px;"></td>
                                       
                                        <td>
                                            <a href="catagory_edit.php?uid=<?php echo base64_encode($data['id']); ?> " class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                            <a href="delete_catagory.php?uid=<?php echo $data['id']; ?>" class="btn btn-sm btn-danger delete_btn" ><i class="fa fa-trash"></i></a>
                                        </td>
                                        <!-- delete_user.php?uid=<?php echo $data['id']; ?> -->
                                    </tr>
                            <?php
                                }
                            } else {
                                echo "<tr><td colspan='4' class='text-center'>No Record Found...</td></tr>";
                            }

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">
    $(".delete_btn").click(function(){
        let a=confirm("Are You Sure to Delete this Record?");
        return a;
    })
</script>