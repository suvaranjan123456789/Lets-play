<?php
include("admin_function.php");
$user_id = $_GET['uid'];
$data = getMessagedetails($user_id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Reply Page</title>
  <!-- Bootstrap CSS -->
  <link
      rel="stylesheet"
      type="text/css" href="../Assets/bootstrap/css/bootstrap.min.css"/>
</head>
<body>
  <div class="container mt-5">
    <h2 class="text-center">Reply to User</h2>
    <form action="send_email_action.php" method="POST">
    <input type="hidden" name="userid" class="form-control" id="userEmail" value="<?php echo $data['id']; ?>" required>
        
      <div class="mb-3">
        <label for="userEmail" class="form-label">User Email</label>
        <input type="email" name="userEmail" class="form-control" id="userEmail" value="<?php echo $data['email']; ?>" required>
      </div>
      <div class="mb-3">
        <label for="message" class="form-label">Your Message</label>
        <textarea name="message" class="form-control" id="message" rows="5" placeholder="Type your message here" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Send Reply</button>
    </form>
  </div>
</body>
</html>
