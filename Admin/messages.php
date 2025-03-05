<?php

include('admin_function.php');
include('navber.php');

?>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h4 class="mb-4 text-primary fs-5 fw-5">All Users</h4>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover w-100" id="example">
                        <thead>
                            <tr class="table-primary">
                                <th>List</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Messages</th>
                                <th>Reply to user Query</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                           $alldata= getAllMessages();
                           if(isset($alldata)){
                            
                                foreach ($alldata as $key => $data) { 
                            ?>
                                    <tr>
                                        <td><?php echo ($key+1); ?></td>
                                        <td><?php echo $data['name']; ?></td>
                                        <td><?php echo $data['email']; ?></td>
                                        <td><?php echo $data['subject']; ?></td>
                                        <td><?php echo $data['message']; ?></td>
                                        

                                        <td>
                                        <a href="admin_reply.php?uid=<?php echo $data['id']; ?>">
                                           <div class="container text-center ">
                                                <button type="button" class="btn btn-outline-success">
                                                <i class="bi bi-reply"></i> Admin Reply
                                                </button>
                                            </div></a>
                                            <!-- <a href="user_edit.php?uid=<?php //echo base64_encode($data['id']); ?> " class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a> -->
                                            <!-- <a href="delete_user.php?uid=<?php //echo $data['id']; ?>" class="btn btn-sm btn-danger delete_btn" ><i class="fa fa-trash"></i></a> -->
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