
<?php

include('admin_function.php');
include('navber.php');

?>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h4 class="mb-4 text-primary fs-5 fw-5">Order Details</h4>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover w-100" id="example">
                        <thead>
                            <tr class="table-primary">
                                <th>SL</th>
                                <th>Name</th>
                                <th>address</th>
                                <th>payment</th>
                                
                                <!-- <th>order_date</th>
                                <th>pname</th>
                                <th>Description</th>
                                <th>Seling_price</th> -->
                                <th>image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                           $alldata= DisplayOrder();
                           if(isset($alldata)){
                            
                                foreach ($alldata as $key => $data) { 
                            ?>
                                    <tr>
                                        <td><?php echo ($key+1); ?></td>
                                        <td><?php echo $data['pname']; ?></td>
                                        <td><?php echo $data['address']; ?></td>
                                        <td><?php echo $data['payment']; ?></td>
                                        
                                        <!-- <td><?php //echo $data['order_date']; ?></td>
                                        <td><?php //echo $data['pname']; ?></td>
                                        <td><?php //echo $data['description']; ?></td>
                                        <td><?php //echo $data['seling_price']; ?></td> -->
                                        <!-- <td><?php //echo $data['image']; ?></td> -->

                                        <td><img src="../Assets/p_img/<?php echo $data['image'] ? $data['image'] : 'no-image.jpg'; ?>" alt="<?php echo $data['pname']; ?>" style="height:50px;"></td>

                                        <td>
                                            <!-- <a href="# " class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a> -->
                                            <a href="#" class="btn btn-sm btn-danger delete_btn" ><i class="fa fa-trash"></i></a>
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


