<?php

include('navber.php');
// include('user_function.php');

$product_id = base64_decode($_GET['dpid']);
$product = getproductid($product_id);
$pid = $product['id'];
$pname = $product['pname'];

?>

<div class="container-fluid">
  <div class="py-1">
    <h6 class="text-dark">
      <a class="text-dark" href="index.php" style="text-decoration: none;">
        Home >
      </a>
      <a class="text-dark" href="catagory.php" style="text-decoration: none;">
        Catagory >
      </a>
      <?php echo $pname; ?>
    </h6>
  </div>
</div>


<div class="container product_data">
  <div class="row mt-3 mb-3">
    <?php
    $alldata = Displayproduct($pid);
    if (!empty($alldata)) {
      foreach ($alldata as $data) {
    ?>

        <div class="col-md-5">
          <div class="image d-flex justify-content-center">
            <img src="Assets/p_img/<?php echo $data['image'] ? $data['image'] : 'no-image.jpg'; ?>" alt="<?php echo $data['image']; ?>" style="height: 300px; border:1px solid; padding:20px; border-radius:15px;" />
          </div>
        </div>
        <div class="col-md-7">
          <h2 class="text-lg font-semibold"><?php echo $data['pname']; ?></h2>
          <span><?php echo $data['s_description']; ?></span>
          <div class="flex items-center mt-2">
            <span class="text-warning">★★★★☆</span>
            <span class="text-sm text-muted-foreground ml-2">(1,73,253 Ratings & 5,719 Reviews)</span>
          </div>
          <p class="text-xl font-bold mt-2">₹<?php echo $data['seling_price']; ?> <span class="text-succeess ">17% off</span></p>
          <p><span class="text-sm line-through text-muted-foreground">₹<?php echo $data['original_price']; ?></span></p>

          <div class="input-group mt-2" style="width: 130px;">
            <button class="input-group-text decrement-btn" id="decreaseBtn">-</button>
            <input type="number" class="form-control text-center bg-white input-qty" name="quentity" id="quantityInput" value="0" min="0" readonly>
            <button class="input-group-text increment-btn" id="increaseBtn">+</button>
          </div>

          <div class="mt-4">
            <h3 class="text-md font-semibold">Available offers</h3>
            <ul class="list-disc list-inside text-sm text-muted-foreground">
              <li>Bank Offer: 5% Unlimited Cashback on SBI Bank Credit Card</li>
              <li>Bank Offer: ₹1000 off on UPI</li>
              <li>Bank Offer: ₹1000 off on UPI Transactions</li>
            </ul>
          </div>
          <div class="mt-4">
            <h3 class="text-md font-semibold">Coupons for you</h3>
            <p class="text-sm text-muted-foreground">Special Price Get extra ₹3000 off on 1 item(s) (price inclusive of cashback/coupon)</p>
          </div>
          <div class="mt-6 flex mr-2">
            <div class="row">
              <div class="col-md-6">
              <button class="bg-secondary border rounded py-2 px-4" name="add_to_cart"><a href="add_cart_action.php?pcid=<?php echo base64_encode($data['id']); ?>"style="text-decoration: none;color: white;">ADD TO CART</a></button>
              </div>
              <div class="col-md-6">
                <a href="order.php?poid=<?php echo $data['id']; ?>"><button class="bg-primary border rounded py-2 px-4">BUY NOW</button></a>
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

<script>

const decreaseBtn = document.getElementById('decreaseBtn');
const increaseBtn = document.getElementById('increaseBtn');
const quantityInput = document.getElementById('quantityInput');

increaseBtn.addEventListener('click', () => {
  let currentQuantity = parseInt(quantityInput.value, 10); 
  currentQuantity += 1; 
  quantityInput.value = currentQuantity;
});


decreaseBtn.addEventListener('click', () => {
  let currentQuantity = parseInt(quantityInput.value, 10);
  if (currentQuantity > 0) {
    currentQuantity -= 1; 
    quantityInput.value = currentQuantity;
  }
});


</script>

<?php

include('footer.php');

?>