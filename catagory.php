<?php

include('navber.php');

// include('user_function.php');
?>
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold text-center mb-4">All Catagory</h1>
    <hr>
    <div class="row">
            <?php
            $alldata = getAllCatagory();
            if (isset($alldata)) {
                foreach ($alldata as $data) {
            ?>
                <div class="col-md-3 mb-4">
                    <a href="sub-catagory.php?catagory=<?php echo base64_encode($data['id']); ?>" style="text-decoration: none;" >
                        <div class="card shadow py-2">
                            <img src="Assets/c_img/<?php echo $data['image'] ? $data['image'] : 'no-image.jpg'; ?>" style="height: 150px; width: 150px;" alt="<?php echo $data['name']; ?>" class="mx-auto mb-2" />
                            <div class="card-body text-center">
                                <h3 ><?php echo $data['name']; ?></h3>
                                <p><?php echo $data['description']; ?></p>
                            </div>
                        </div>
                    </a>
                </div> 
            <?php
                }
            } else {
                echo "<tr><td colspan='4' class='text-center'>No Record Found...</td></tr>";
            }
            ?>
        </div>
    </div>



<?php
include('footer.php');

?>