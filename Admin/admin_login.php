
<?php
include("admin_header_link.php");
include("navber.php");
?> 



<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link rel="stylesheet" href="../Assets/css/login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!doctype html>

<html lang="en"> 

 <head> 

  <meta charset="UTF-8"> 

  <title> Login Form</title> 

  <link rel="stylesheet" href="./style.css"> 

 </head> 

 <body> <!-- partial:index.partial.html --> 

  <div class="container">
    <div class="login-box">

        <div class="login-name">
            <h1>Admin Login</h1>
            
        </div>

        <form action="admin_login_action.php" method="post">

            <div class="input-box">
                <div class="inputs">
                    <input type="email" placeholder="Enter your Email" name="email"required>
                    <div class="underline-input"></div>
                </div>

                <div class="inputs">
                    <input type="password" placeholder="Enter your Password" name="password" required>
                    <div class="underline-input"></div>
                </div>

                <div class="submit-button">
                    <input type="submit" value="Continue" name="admin_login">
                </div>
            </div>
            
        </form>

        <!-- <div class="text">
            or connect with Social Media
        </div>

        <div class="twitter-btn">
            <button class="btn"><i class='bx bxl-twitter' ></i>
                Sign in with Twitter</button>
        </div>

        <div class="facebook-btn">
            <button class="btn"><i class='bx bxl-facebook'></i>
                Sign in with Facebook</button>
        </div> -->
    </div>
</div> <!-- partial --> 

 </body>

</html>





 <?php
include("admin_footer_link.php");

?> 
