
<?php
 //print_r($_POST);


$brandName = $_POST['brandName'];
$catName = $_POST['catName'];
$firstName = $_POST['firstName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dept = $_POST['dept'];
$comm = $_POST['comm'];
$source = $_POST['source'];
$medium = $_POST['medium'];
$campaign = $_POST['campaign'];
$term = $_POST['term'];

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "website-m3m";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO `m3m-contact` (`full_name`, `email_id`, `phone`, `department`, `comment`, `brand`, `category`, `utm_source`, `utm_medium`, `utm_campaign`, `utm_term`) 
VALUES ('$firstName','$email','$phone','$dept','$comm','$brandName','$catName','$source','$medium','$campaign','$term')";

if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}$conn->close();

?>