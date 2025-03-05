<?php

include('navber.php');

?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Catagory</h4>
                </div>
                <div class="card-body">
                    <form action="add_catagory_action.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="mb-1">Name</label>
                                <input type="text" name="cname" placeholder="Enter catagory Name" class="form-control mb-3">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="mb-1">Description</label>
                                <input type="text" name="des" placeholder="Enter Desctiption" class="form-control mb-3">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="mb-1">Image</label>
                                <input type="file" name="image_file" placeholder="Enter Desctiption" accept=".jpg,.jpeg,.png,.gif,.webp" class="form-control mb-3">
                            </div>
                            <button type="submit" name="addcatagory" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>