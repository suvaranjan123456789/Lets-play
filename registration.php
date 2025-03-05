<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>registration</title>

  <link rel="stylesheet" type="text/css" href="Assets/css/all.min.css" />
  <link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css" />
  <link type="text/css" href="Assets/css/registration.css">
  <style>
    /* @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"); */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
      background: rgb(130, 106, 251);
    }

    .container {
      position: relative;
      max-width: 700px;
      width: 100%;
      background: #fff;
      padding: 25px;
      border-radius: 8px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .container header {
      font-size: 1.5rem;
      color: #333;
      font-weight: 500;
      text-align: center;
    }

    .container .form {
      margin-top: 30px;
    }

    .form .input-box {
      width: 100%;
      margin-top: 20px;
    }

    .input-box label {
      color: #333;
    }

    .form :where(.input-box input, .select-box) {
      position: relative;
      height: 50px;
      width: 100%;
      outline: none;
      font-size: 1rem;
      color: #707070;
      margin-top: 8px;
      border: 1px solid #ddd;
      border-radius: 6px;
      padding: 0 15px;
    }

    .input-box input:focus {
      box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
    }

    .form .column {
      display: flex;
      column-gap: 15px;
    }

    .form .gender-box {
      margin-top: 20px;
    }

    .gender-box h3 {
      color: #333;
      font-size: 1rem;
      font-weight: 400;
      margin-bottom: 8px;
    }

    .form :where(.gender-option, .gender) {
      display: flex;
      align-items: center;
      column-gap: 50px;
      flex-wrap: wrap;
    }

    .form .gender {
      column-gap: 5px;
    }

    .gender input {
      accent-color: rgb(130, 106, 251);
    }

    .form :where(.gender input, .gender label) {
      cursor: pointer;
    }

    .gender label {
      color: #707070;
    }

    .address :where(input, .select-box) {
      margin-top: 15px;
    }

    .select-box select {
      height: 100%;
      width: 100%;
      outline: none;
      border: none;
      color: #707070;
      font-size: 1rem;
    }

    .form button {
      height: 55px;
      width: 100%;
      color: #fff;
      font-size: 1rem;
      font-weight: 400;
      margin-top: 30px;
      border: none;
      cursor: pointer;
      transition: all 0.2s ease;
      background: rgb(130, 106, 251);
    }

    .form button:hover {
      background: rgb(88, 56, 250);
    }

    /*Responsive*/
    @media screen and (max-width: 500px) {
      .form .column {
        flex-wrap: wrap;
      }

      .form :where(.gender-option, .gender) {
        row-gap: 15px;
      }
    }
  </style>

</head>

<body>


  <section class="container">
    <header>Registration Form</header>
    <form action="registration_action.php" class="form" method="post" enctype="multipart/form-data">
      <div class="input-box">
        <label>Full Name</label>
        <input type="text" placeholder="Enter full name" name="name" required />
      </div>
      <div class="input-box">
        <label>Email Address</label>
        <input type="text" placeholder="Enter email address" name="email" required />
      </div>
      <div class="input-box">
        <label>Password</label>
        <input type="password" placeholder="Password" name="password" id="password" onkeyup='check();' required />
      </div>
      <div class="input-box">
        <label>Conform Password</label>
        <input type="password" placeholder="Password" name="cpassword" id="cpassword" onkeyup='check();' required />
      </div>
      <div class="column">
        <div class="input-box">
          <label>Phone Number</label>
          <input type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" placeholder="phone no" name="phone"
            required />
        </div>
        <div class="input-box">
          <label>Birth Date</label>
          <input type="date" placeholder="Enter birth date" name="dob" required />
        </div>
      </div>
      <div class="gender-box">
        <h3>Gender</h3>
        <div class="gender-option">
          <div class="gender">
            <input type="radio" id="check-male" name="gender" checked />
            <label for="check-male">male</label>
          </div>
          <div class="gender">
            <input type="radio" id="check-female" name="gender" />
            <label for="check-female">Female</label>
          </div>
          <div class="gender">
            <input type="radio" id="check-other" name="gender" />
            <label for="check-other">prefer not to say</label>
          </div>
        </div>
      </div>
      <div class="input-box address">
        <label>Address</label>
        <input type="text" placeholder="Enter street address" name="add1" required />
        <input type="text" placeholder="Enter street address line 2" name="add2" required />
        <div class="column">
          <div class="select-box">
            <select>
              <option hidden>Country</option>
              <option>America</option>
              <option>Japan</option>
              <option>India</option>
              <option>Nepal</option>
            </select>
          </div>
          <input type="text" placeholder="Enter your city" name="city" required />
        </div>
        <div class="column">
          <input type="text" placeholder="Enter your region" name="region" required />
          <input type="number" placeholder="Enter postal code" name="code" required />
        </div>
      </div>
      <div>
        <input type="file" class="from-control" id="file" name="image_file" accept=".jpg,.jpeg,.png,.gif,.webp" />
      </div>
      <button>Submit</button>
      <div class="mt-3">
        <h5 class="text-center">

          If you alredy register than click it..
          <div>
            <img src="Assets/img/emoji.jpg"style="height: 115px;">
          </div>

        </h5>
      </div>
    </form>
    <button class="cente" style="border-radius :50px;height: 50px;width: 125px;margin-left: 275px;background-color: #6f6fff;"><a href="login.php"style="text-decoration:none; width: 100px; color:white;">Login</a></button>
  </section>


  <script type="text/javascript">
    var check = function () {
      if (document.getElementById('password').value ==
        document.getElementById('cpassword').value) {
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = 'matching';
      } else {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'not matching';
      }
    }
  </script>

  <script type="text/javascript" src="Assets/js/code.jquery.com_jquery-3.7.0.min.js"></script>
  <script type="text/javascript" src="Assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>