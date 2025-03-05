<?php
include('navber.php');
include('admin_function.php');
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Product</h4>
                </div>
                <div class="card-body">
                    <form action="add_product_action.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <label for=""  class="mb-1">Select Catagory</label>
                                <select class="form-select" name="catagory_id">
                                    <option selected>Select Catagory</option>
                                    <?php
                                        $catagory = getAllCatagory();
                                        if(isset($catagory)){
                                            foreach ($catagory as $data) {
                                                ?>
                                                    <option value="<?php echo $data['id']; ?>"><?php echo $data['name']; ?></option>
                                                <?php
                                            }
                                        }
                                        else {
                                            echo "<tr><td colspan='4' class='text-center'>No Record Found...</td></tr>";
                                        }
                                        
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="mb-1">Product Name</label>
                                <input type="text" name="pname" placeholder="product Name" class="form-control mb-3" required>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="mb-1">Slug</label>
                                <input type="text" name="slap" placeholder="Slug" class="form-control mb-3" required>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="mb-1">small description</label>
                                <input type="text" name="sdes" placeholder="Enter small description" class="form-control mb-3" required>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="mb-1">Description</label>
                                <input type="text" name="des" placeholder="Enter Description" class="form-control mb-3" required>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="mb-1">original Price</label>
                                <input type="number" name="op" placeholder="original Price" class="form-control mb-3" required>
                                </div>
                            <div class="col-md-6">
                                <label for="" class="mb-1">seling Price</label>
                                <input type="number" name="sp" placeholder="seling Price" class="form-control mb-3" required>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="mb-1">Image</label>
                                <input type="file" name="image_file" class="form-control mb-3" accept=".jpg,.jpeg,.png,.gif,.webp" required>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="mb-1">Quantity</label>
                                <input type="number" name="qua" placeholder="Quantity" class="form-control mb-3" required>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" name="status" value="1">status
                                <input type="checkbox" name="trending"value="1">Treanding
                            </div>
                            <div class="col-md-6">
                                <label for="" class="mb-1">Meta title</label>
                                <input type="text" name="mt" placeholder="Meta title" class="form-control mb-3" >
                            </div>
                            <div class="col-md-6">
                                <label for="" class="mb-1">Mete description</label>
                                <input type="text" name="md" placeholder="Mete description" class="form-control mb-3" >
                            </div>
                            <div class="col-md-6">
                                <label for="" class="mb-1">Meta Keywords</label>
                                <input type="text" name="mk" placeholder="Meta Keywords" class="form-control mb-3" >
                            </div>
                            <button type="submit" name="addproduct" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

