<?php

include('admin_header_link.php');
//include('navbar.php');
include('admin_function.php');
$user_uid=base64_decode($_GET['uid']);
$data=getuserdetails($user_uid);
// echo $user_uid;


?>


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
        <header>USER EDIT</header>
        <form action="edit_user_action.php" class="form" method="post" enctype="multipart/form-data">
            <input type="text" name="user_id" value="<?php echo $data['id']; ?>">
            <div class="input-box">
                <label>Full Name</label>
                <input type="text" placeholder="Enter full name" name="name" value="<?php echo $data['name']; ?>" />
            </div>
            <div class="input-box">
                <label>Email Address</label>
                <input type="text" placeholder="Enter email address" name="email" value="<?php echo $data['email']; ?>"
                    readonly />
            </div>
            <div class="column">
                <div class="input-box">
                    <label>Phone Number</label>
                    <input type="number" placeholder="Enter phone number" name="phone"
                        value="<?php echo $data['phone']; ?>" />
                </div>
                <!-- <div class="input-box">
            <label>Birth Date</label>
            <input type="date" placeholder="Enter birth date" name="" value="<?php echo $data['dob']; ?>" />
          </div> -->
            </div>
            <div class="gender-box">
                <h3>Gender</h3>
                <div class="gender-option">
                    <div class="gender">
                        <input type="radio" id="check-male" name="gender" value="Male"
                            value="<?php echo $data['gender']=='Male'?'checked':''; ?> " />
                        <label for="check-male">male</label>
                    </div>
                    <div class="gender">
                        <input type="radio" id="check-female" name="gender" value="Female"
                            value="<?php echo $data['gender']=='Female'?'checked':''; ?>" />
                        <label for="check-female">Female</label>
                    </div>
                    <div class="gender">
                        <input type="radio" id="check-other" name="gender" value="Other"
                            value="<?php echo $data['gender']=='Other'?'checked':''; ?>" />
                        <label for="check-other">prefer not to say</label>
                    </div>
                </div>
            </div>class
            <div class="input-box address">
                <label>Address</label>
                <input type="text" placeholder="Enter street address" name="address1"
                    value="<?php echo $data['address1']; ?>" />
                <input type="text" placeholder="Enter street address line 2" name="address2"
                    value="<?php echo $data['address2']; ?>" />
                <div class="column">
                    <!-- <div class="select-box">
              <select>
                <option hidden>Country</option>
                <option>America</option>
                <option>Japan</option>
                <option>India</option>
                <option>Nepal</option>
              </select>
            </div> -->
                    <input type="text" placeholder="Enter your city" name="city" value="<?php echo $data['city']; ?>" />
                </div>
                <div class="column">
                    <input type="text" placeholder="Enter your region" name="region"
                        value="<?php echo $data['region']; ?>" />
                    <input type="number" placeholder="Enter postal code" name="pin"
                        value="<?php echo $data['pin']; ?>" />
                </div>
            </div>


            <div class="col-md-5">
                <label for="dob" class="form-label">Profile Picture </label><span class="text-danger 
              ms1">(Optional)</span>
                <input type="hidden" name="old_img" value="<?php echo $data['image']; ?>" />
                <input type="file" class="form-control" id="pic" name="pic" accept="image/*" onchange="viewImage(this)">
            </div>

            <div class="mb-2 mt-2 row">
                <div class="col-md-5">
                    <img src="../assest/user_img/<?php echo $data['image']!=''?$data['image']:'no-image.jpg'; 
              ?>" alt="" style="height:100px;width:100px" id="view_profile_pic" />
                </div>
            </div>




            <button type="submit" name="updateuser">confirm user data</button>
        </form>
    </section>

    <?php
include('admin_footer_link.php');

?>