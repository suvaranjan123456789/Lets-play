<?php
include("navber.php");
global $conn;
$query = $_POST['search'];

$sql = "SELECT * FROM product WHERE pname LIKE '%$query%'";
$result = mysqli_query($conn, $sql);
$alldata = mysqli_num_rows($result);

$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<div class="container">
<div class="row">

<?php
if (!empty($row)) {
    // print_r($row);
    foreach ($row as $data) {
        ?>
        <div class="col-md-3 mb-4 d-flex">
            <div class="card shadow py-2">
                <a href="details.php?dpid=<?php echo base64_encode($data['id']); ?>" style="text-decoration: none;"
                    class="text-dark">
                    <img src="Assets/p_img/<?php echo $data['image'] ? $data['image'] : 'no-image.jpg'; ?>"
                        style="height: 150px; width: 150px;" alt="<?php echo $data['pname']; ?>"
                        class="mx-auto mb-2 d-flex justify-content-center " />
                </a>

                <hr>
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-7">
                            <a href="details.php?dpid=<?php echo base64_encode($data['id']); ?>" style="text-decoration: none;"
                                class="text-dark">
                                <h5 class="text-lg text-foreground"><?php echo $data['pname']; ?></h5>
                                <p class="text-info"><span><?php echo $data['s_description']; ?></span></p>
                                <p class="text-danger"><span>30% off: ₹<?php echo $data['seling_price']; ?></span></p>
                                <p class="text-success"><span>M.R.P: ₹<?php echo $data['original_price']; ?></span></p>
                                <p class="text-warning"><span>★★★★☆</span></p>
                            </a>
                        </div>
                        <div class="col-md-5">
                            <span>
                                <a href="add_wishlist_action.php?dpid=<?php echo base64_encode($data['id']); ?>"
                                    style="text-decoration: none;" class="text-dark">
                                    <button class="border"><i class="fa fa-heart"></i></button>
                                </a>
                                <button class="border"><i class="fa-sharp fa-solid fa-share"></i></button>
                            </span><br><br>
                            <span><a href="order.php?poid=<?php echo base64_encode($data['id']); ?>"><button
                                        class="bg-warning border text-white">Buy Now</button></a></span>
                        </div>


                    </div>
                </div>
            </div>

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
include("footer.php");
?>