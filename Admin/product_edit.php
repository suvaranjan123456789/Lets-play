<?php

include('navber.php');
include('admin_function.php');
$user_id = base64_decode($_GET['uid']);
$data = getProductdetails($user_id);


?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Product</h4>
                </div>
                <div class="card-body">
                    <form action="edit_product_action.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="mb-1">catagory id</label>
                                <input type="number" name="cid" value="<?php echo $data['catagory_id']; ?>" class="form-control mb-3" >
                            </div>
                            <div class="col-md-6">
                                <label for=""  class="mb-1">Select Catagory</label>
                                <select class="form-select" name="catagory">
                                    <option selected>Select Catagory</option>
                                    <option >one</option>
                                    <option >two</option>
                                    <option >three</option>
                                    <option >four</option>
                                    <option >five</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="mb-1">Product Name</label>
                                <input type="text" name="pname" value="<?php echo $data['pname']; ?>" class="form-control mb-3" >
                            </div>
                            <div class="col-md-6">
                                <label for="" class="mb-1">Slup</label>
                                <input type="text" name="slap" value="<?php echo $data['slup']; ?>" class="form-control mb-3" >
                            </div>
                            <div class="col-md-6">
                                <label for="" class="mb-1">small description</label>
                                <input type="text" name="sdes" value="<?php echo $data['s_description']; ?>" class="form-control mb-3" >
                            </div>
                            <div class="col-md-6">
                                <label for="" class="mb-1">Description</label>
                                <input type="text" name="des" value="<?php echo $data['description']; ?>" class="form-control mb-3" >
                            </div>
                            <div class="col-md-6">
                                <label for="" class="mb-1">original Price</label>
                                <input type="number" name="op" value="<?php echo $data['original_price']; ?>" class="form-control mb-3" >
                                </div>
                            <div class="col-md-6">
                                <label for="" class="mb-1">seling Price</label>
                                <input type="number" name="sp" value="<?php echo $data['seling_price']; ?>" class="form-control mb-3" >
                            </div>
                            <div class="col-md-6">
                                <label for="" class="mb-1">Image</label>
                                <input type="hidden" name="old_img" value="<?php echo $data['image']; ?>" />
                                <input type="file" class="form-control" id="pic" name="pic" accept="image/*" onchange="viewImage(this)">
                            </div>
                            <div class="col-md-6">
                                <img src="../Assets/p_img/<?php echo $data['image']!=''?$data['image']:'no-image.jpg'; ?>" alt=""  style="height:100px;width:200px" id="view_profile_pic"/>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="mb-1">Quantity</label>
                                <input type="number" name="qua" value="<?php echo $data['qty']; ?>" class="form-control mb-3" >
                            </div>
                            <div class="col-md-6" style="padding-top: 30px;">
                                <input type="checkbox" name="status">status
                                <input type="checkbox" name="trending">Treanding
                            </div>
                            <div class="col-md-6">
                                <label for="" class="mb-1">Meta title</label>
                                <input type="text" name="mt" value="<?php echo $data['meta_title']; ?>" class="form-control mb-3" >
                            </div>
                            <div class="col-md-6">
                                <label for="" class="mb-1">Mete description</label>
                                <input type="text" name="md" value="<?php echo $data['meta_description']; ?>" class="form-control mb-3" >
                            </div>
                            <div class="col-md-6">
                                <label for="" class="mb-1">Meta Keywords</label>
                                <input type="text" name="mk" value="<?php echo $data['meta_kywords']; ?>" class="form-control mb-3" >
                            </div>
                            
                            <button type="submit" name="editproduct" class="btn btn-primary">Save</button>
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