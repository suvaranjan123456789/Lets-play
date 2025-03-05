<?php

include('navber.php');
// include('user_function.php');


?>



<!------   Add to Cart start   ------>

<div class="py-3 py-md-5 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
          <div class="col-md-12">
            <div class="shopping-cart">
              <div class="cart-header d-none d-sm-none d-mb-block d-lg-block">
                <div class="row">
                  <div class="col-md-5">
                    <h4>Products</h4>
                  </div>
                  <div class="col-md-2">
                    <h4>Price</h4>
                  </div>
                  <div class="col-md-3">
                    <h4>Quantity</h4>
                  </div>
                  <div class="col-md-2">
                    <h4>Remove</h4>
                  </div>
                </div>
              </div>
              <?php
              $totalprice = 0;
              $discount = 0;
              $dcharge = 0;
              $alldata = DisplayCartpid();
              if (!empty($alldata)) {
                foreach ($alldata as $data) {
                  $totalprice += $data['seling_price'];
                  $discount += $data['discount'];
                  $dcharge += $data['dcharge'];
              ?>
                  <div class="cart-item shadow bg-white p-3">
                    <div class="row">
                      <div class="col-md-5 my-auto">
                        <label class="product-name">
                          <img src="Assets/p_img/<?php echo $data['image']; ?>" style="width: 50px; height: 50px" alt="" />
                          <p><?php echo $data['pname']; ?></p>
                        </label>
                      </div>
                      <div class="col-md-2 my-auto">
                        <label class="price"><?php echo $data['seling_price']; ?> </label>
                      </div>
                      <div class="col-md-3 col-7 my-auto">
                        <div class="quantity">
                          <div class="input-group" style="width: 130px;">
                            <button class="input-group-text decrement-btn" id="decreaseBtn">-</button>
                            <input type="text" class="form-control text-center bg-white input-qty" value="1" id="quantityInput">
                            <button class="input-group-text increment-btn" id="increaseBtn">+</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2 col-5 my-auto">
                        <div class="remove">
                          <a href="remove_cart.php?rpid=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i> Remove
                          </a>
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
        </div>
      </div>
      <div class="col-md-3">
        <div class="card shadow">
          <div class="card-body">
            <h3 class="text-center text-danger">Price Details</h3><br>
            <hr>
            <div class="row">
              <div class="col-md-8">
                <p>Price :</p>
              </div>
              <div class="col-md-4">
                <p><?php echo $totalprice; ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <p>Discount:</p>
              </div>
              <div class="col-md-4">
                <p><?php echo $discount; ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <p>Delivary Charge:</p>
              </div>
              <div class="col-md-4">
                <p><?php echo $dcharge; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-md-8">
                <p>Total Amount:</p>
              </div>
              <div class="col-md-4">
                <p><?php echo $totalprice=$totalprice-$discount+$dcharge; ?></p>
              </div>
            </div>
            <a href="order.php"><button class="bg-info border">Order</button></a>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>


<!------    Add to Cart End    ------->


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

include('footer_link.php');

?>