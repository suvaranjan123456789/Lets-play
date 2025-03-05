<?php

include('navber.php');
$login = getnameorder();
$address = getaddressorder();

$pid =base64_decode( $_GET['poid']);
$alldata = DisplayOrderProduct($pid);
// print_r($alldata);

// $data = DisplayOrderProduct($pid);
// print_r($data);

?>
<?php
if (isset($_SESSION['username'])) {
?>
  <div class="container">
    <div class="row pt-3 mb-3">
      <div class="col-md-12">
        <form action="corder.php" method="post">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <span><i class="fa-solid fa-right-to-bracket"></i> LOGIN OR SIGNUP <i class="fa-solid fa-circle-check mx-3"></i></span>
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row">
                    <div class="col-md-12">
                      <h4><?php echo strtoupper($login['name']); ?> </h4>
                      <h5><?php echo $login['email']; ?></h5>
                      <h6><?php echo $login['phone']; ?></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <span><i class="fa-solid fa-truck"></i> DELIVARY ADDRESS <i class="fa-solid fa-circle-check mx-3"></i></span>
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row">
                    <div class="col-md-6">
                      <h4><?php echo strtoupper($login['name']); ?></h4><br>
                      <div class="form-check">
                        <label>
                          <input type="radio" name="address_type" value="home" id="home" onclick="toggleAddressDisplay()" checked>
                          Home Address
                        </label>
                      </div>
                      <div class="form-check">
                        <label>
                          <input type="radio" name="address_type" value="office" id="office" onclick="toggleAddressDisplay()">
                          Office Address
                        </label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h5>Your Address: </h5>
                      
                      <h6>Home/Office Address :</h6>
                      <!-- <p>Jalalpur,Bahitrakunda,721401</p> -->
                      <div id="homeAddress" style="display:block;">
                        <label for="home_address"><?php echo $address['address1']; ?></label>
                        <!-- <textarea name="address" id="home_address" rows="4" cols="50" placeholder="Enter home address here"></textarea> -->
                      </div>

                      <div id="officeAddress" style="display:none;">
                        <label for="office_address"><?php echo $address['address2']; ?></label>
                        <!-- <textarea name="address" id="office_address" rows="4" cols="50" placeholder="Enter office address here"></textarea> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <span><i class="fa-solid fa-cart-shopping"></i> ORDER SUMMARY <i class="fa-solid fa-circle-check mx-3"></i></span>
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row">
                    <div class="col-md-9">
                    <input type="hidden" name="opid" value="<?php echo $alldata['id']; ?>">
                    
                      <div class="row">
                        <div class="col-md-4">
                        
                          <img src="Assets/p_img/<?php echo $alldata['image']; ?>" style="height: 150px; width:180px;">
                          <div class="input-group mt-3" style="width: 120px;">
                            <button class="input-group-text decrement-btn">-</button>
                            <input type="text" class="form-control text-center bg-white input-qty" value="1" disabled>
                            <button class="input-group-text increment-btn">+</button>
                          </div>

                        </div>
                        
                        <div class="col-md-8">
                          <input type="hidden" name="opid" value="<?php echo $alldata['id']; ?>">
                          <h6><?php echo $alldata['pname']; ?></h6>
                          <p><?php echo $alldata['s_description']; ?></p>
                          <p><?php echo $alldata['seling_price']; ?></p>
                     

                        </div>
                      

                      </div>
                    </div>
                    <div class="col-md-3">
                      <h6>Delivary Details: </h6><br>
                      <p>Delivary by mon oct 15.</p>
                      <p>Delivary Change: Free </p>
                      <h6>Open box Delivary is eligible for this item. you will recive a Confirmation post Payment.</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                  <span><i class="fa-solid fa-money-check-dollar"></i> PAYMENT OPTION <i class="fa-solid fa-circle-check mx-3"></i></span>
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <div class="form-check">
                        <label>
                          <input type="radio" name="address_type" value="upi" id="upi" onclick="paymentoption()">
                          UPI
                        </label>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="form-check">
                        <label>
                          <input type="radio" name="address_type" value="card" id="card" onclick="paymentoption()">
                          Creadit / Debit / ATM Catd
                        </label>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="form-check">
                        <label>
                          <input type="radio" name="address_type" value="net" id="net" onclick="paymentoption()">
                          Net Banking
                        </label>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="form-check">
                        <label>
                          <input type="radio" name="address_type" value="emi" id="emi" onclick="paymentoption()">
                          EMI (Easy Pay Installments)
                        </label>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="form-check">
                        <label>
                          <input type="radio" name="address_type" value="cash" id="cash" onclick="paymentoption()">
                          Cash on Delivary
                        </label>
                      </div>
                    </li>
                  </ul>
                  <div id="upiadd" style="display:none;">
                    <label for="upi_add"><img src="Assets/img/pranab_qr.jpg" style="width: 100px; height:100px;"></label></label>
                  </div>
                  <div id="cardadd" style="display:none;">
                    <label for="card_add"><img src="Assets/img/pranab_qr.jpg" style="width: 100px; height:100px;"></label></label>
                  </div>
                  <div id="netadd" style="display:none;">
                    <label for="net_add"><img src="Assets/img/pranab_qr.jpg" style="width: 100px; height:100px;"></label></label>
                  </div>
                  <div id="emiadd" style="display:none;">
                    <label for="emi_add"><img src="Assets/img/pranab_qr.jpg" style="width: 100px; height:100px;"></label></label>
                  </div>
                  <!-- <div id="cashadd" style="display:none;">
                  <label for="cash_add"><img src="Assets/img/WhatsApp Image 2024-11-14 at 3.05.46 PM.jpeg" style="width: 100px; height:100px;"></label></label>
                </div> -->
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">

                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                  <span> <i class="fa-solid fa-thumbs-up"></i> CONFIRM ORDER <i class="fa-solid fa-circle-check mx-3"></i></span>
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <!-- <label for="captcha">Please enter the Captcha shown below:</label> -->
                  <!-- <br><br> -->
                  <!-- <form action="order_details.php" method="post"> -->
                    <!-- <input type="hidden" name="opid" value="<?php echo $data['id']; ?>">
                    <input type="hidden" name="email" value="<?php echo $login['email']; ?>">
                    <input type="hidden" name="name" value="<?php echo $login['name']; ?>"> -->
                    <button type="submit" name="confirmorder" class="btn btn-primary">order</button>

                    <!-- <div class="row d-flex">
                    <div class="col-md-12 d-flex justify-content-center">
                      <button type="button" name="confirmorder">confirm</button>
                    </div>
                  </div> -->
                  <!-- </form> -->

                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- <div class="col-md-3">
        <div class="card shadow">
          <div class="card-body">
            <h3 class="text-center text-danger">Price Details</h3><br>
            <hr>
            <div class="row">
              <div class="col-md-8">
                <p>Price (1 item):</p>
              </div>
              <div class="col-md-4">
                <p>500</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <p>Discount:</p>
              </div>
              <div class="col-md-4">
                <p>-50</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <p>Delivary Charge:</p>
              </div>
              <div class="col-md-4">
                <p>40</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-md-8">
                <p>Total Amount:</p>
              </div>
              <div class="col-md-4">
                <p>490</p>
              </div>
            </div>
          </div>
        </div>
      </div> -->
  </div>
  </div>
<?php
} else {
  echo "
  <script>
    alert ('Please First Login.');window.location.href='login.php';
    </script>
  ";
}
?>
<script>
  function toggleAddressDisplay() {
    var homeAddressInput = document.getElementById('homeAddress');
    var officeAddressInput = document.getElementById('officeAddress');

    if (document.getElementById('home').checked) {
      homeAddressInput.style.display = 'block';
      officeAddressInput.style.display = 'none';
    } else if (document.getElementById('office').checked) {
      officeAddressInput.style.display = 'block';
      homeAddressInput.style.display = 'none';
    }

  }
</script>
<script>
  function paymentoption() {
    var upipayment = document.getElementById('upiadd');
    var cardpayment = document.getElementById('cardadd');
    var netpayment = document.getElementById('netadd');
    var emipayment = document.getElementById('emiadd');
    var cashpayment = document.getElementById('cashadd');
    if (document.getElementById('upi').checked) {
      upipayment.style.display = 'block';
      cardpayment.style.display = 'none';
      netpayment.style.display = 'none';
      emipayment.style.display = 'none';
      cashpayment.style.display = 'none';
    } else if (document.getElementById('card').checked) {
      cardpayment.style.display = 'block';
      upipayment.style.display = 'none';
      netpayment.style.display = 'none';
      emipayment.style.display = 'none';
      cashpayment.style.display = 'none';
    } else if (document.getElementById('net').checked) {
      netpayment.style.display = 'block';
      cardpayment.style.display = 'none';
      upipayment.style.display = 'none';
      emipayment.style.display = 'none';
      cashpayment.style.display = 'none';
    } else if (document.getElementById('emi').checked) {
      emipayment.style.display = 'block';
      cardpayment.style.display = 'none';
      upipayment.style.display = 'none';
      netpayment.style.display = 'none';
      cashpayment.style.display = 'none';
    } else if (document.getElementById('cash').checked) {
      cashpayment.style.display = 'block';
      cardpayment.style.display = 'none';
      upipayment.style.display = 'none';
      netpayment.style.display = 'none';
      emipayment.style.display = 'none';
    }
  }
</script>
<!-- <script>
  const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
  const captchaLength = 6;
  let generatedCaptcha = '';

  function generateCaptcha() {
    generatedCaptcha = '';
    for (let i = 0; i < captchaLength; i++) {
      generatedCaptcha += characters.charAt(Math.floor(Math.random() * characters.length));
    }
    document.getElementById('captcha').textContent = generatedCaptcha;
  }

  document.getElementById('submit').addEventListener('click', function() {
    const userInput = document.getElementById('captchaInput').value;
    const messageElement = document.getElementById('message');


    if (userInput === generatedCaptcha) {
      messageElement.textContent = 'CAPTCHA is correct!';
      messageElement.style.color = 'green';

    } else {
      messageElement.textContent = 'CAPTCHA is incorrect. Please try again.';
      messageElement.style.color = 'red';
      document.getElementById('captchaInput').value = '';
      generateCaptcha();
    }
  });

  // Generate the initial CAPTCHA
  generateCaptcha();
</script> -->

<?php
include('footer_link.php');
?>