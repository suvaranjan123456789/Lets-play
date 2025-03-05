<?php
$con=mysqli_connect("localhost","root","","e-com");
if(!$con){
    die("Connection Unsuccessful.".mysqli_connect_error());
	
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $token = $_POST['token'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $pdo->prepare("SELECT * FROM registration_data WHERE reset_token = ? AND reset_expires > NOW()");
    $stmt->execute([$token]);
    $user = $stmt->fetch();

    if ($user) {
        $stmt = $pdo->prepare("UPDATE registration_data SET password = ?, reset_token = NULL, reset_expires = NULL WHERE id = ?");
        $stmt->execute([$password, $user['id']]);
        echo "Password has been reset successfully!";
    } else {
        echo "Invalid or expired token.";
    }
}
?>
