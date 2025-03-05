
<?php


$conn;
function connection(){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database="e-com";

   
  global $conn;
  $conn = mysqli_connect($servername, $username, $password, $database);
  // echo"<pre>";
  // print_r($conn);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  // else{
  //   echo "Connected successfully";
  // }
   
}
connection();
// Create connection

?>