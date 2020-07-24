
<?php
 //print_r($_POST);

$channel = $_POST['source'];

if($channel == ''){
 $channel = "m3m";
}

else if($channel == 'google'){
   
    $channel = "Google m3m LP"; 
    
}

else if($channel == 'Website'){
   
    $channel = "Website m3m LP"; 
    
}

else if($channel == 'social_organic'){
   
    $channel = "Social Organic LP"; 
    
}


else {
 $channel = "Microsite m3m LP";
}



$source_utm = isset($_POST['source'])?$_POST['source']:'';

if($source_utm == ''){
 $source_utm = "Microsite m3m web";
}
else {
 $source_utm = $_POST['source'];
}



$brandName = $_POST['brandName'];
$catName = $_POST['catName'];
$firstName = $_POST['firstName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$time = $_POST['time'];
$source = $source_utm;
$medium = isset($_POST['medium'])?$_POST['medium']:'';
$campaign = isset($_POST['campaign'])?$_POST['campaign']:'';
$term = isset($_POST['term'])?$_POST['term']:'';

$servername = "localhost";
$username = "root";
$password = "Pass@987";
$dbname = "m3mprope_campaign";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO m3m-website(`full_name`, `email_id`, `phone`, `visit_date`, `visit_time`, `brand`, `category`, `utm_source`, `utm_medium`, `utm_campaign`, `utm_term`) 
VALUES ('$firstName','$email','$phone','$date','$time','$brandName','$catName','$source','$medium','$campaign','$term')";

if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}$conn->close();

?>