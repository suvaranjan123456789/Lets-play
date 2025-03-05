<?php

include('navber.php');
include('admin_function.php');

$user_id = base64_decode($_GET['uid']);
$data = getCatagorydetails($user_id);


?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Catagory</h4>
                </div>
                <div class="card-body">
                    <form action="edit_catagory_action.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                        <div class="col-md-6">
                                <label for="" class="mb-1">Id</label>
                                <input type="text" name="id" value="<?php echo $data['id']; ?>"  class="form-control mb-3">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="mb-1">Name</label>
                                <input type="text" name="cname" value="<?php echo $data['name']; ?>"  class="form-control mb-3">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="mb-1">Description</label>
                                <input type="text" name="des" value="<?php echo $data['description']; ?>"  class="form-control mb-3">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="mb-1">Image</label>
                                <input type="hidden" name="old_img" value="<?php echo $data['image']; ?>" />
                                <input type="file" class="form-control" id="pic" name="pic" accept="image/*" onchange="viewImage(this)">
                            </div>
                            <div class="col-md-6">
                                <img src="../Assets/c_img/<?php echo $data['image']!=''?$data['image']:'no-image.jpg'; ?>" alt=""  style="height:100px;width:200px" id="view_profile_pic"/>
                            </div>
                            <button type="submit" name="editcatagory" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
      function viewImage(input) {
        if (input.files && input.files[0]) {
            let reader = new FileReader();
            reader.onload = function(e) {
                $("#view_profile_pic")
                    .attr("src", e.target.result)
                    .height(100)
                    .width(200);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>