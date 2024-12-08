<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ContactFormDB";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize and validate input data
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $dob = $conn->real_escape_string($_POST['dob']);
    $address1 = $conn->real_escape_string($_POST['address1']);
    $address2 = $conn->real_escape_string($_POST['address2']);
    $house = $conn->real_escape_string($_POST['house']);
    $block = $conn->real_escape_string($_POST['block']);
    $road = $conn->real_escape_string($_POST['road']);
    $area = $conn->real_escape_string($_POST['area']);
    $country = $conn->real_escape_string($_POST['country']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $mobile = $conn->real_escape_string($_POST['mobile']);
    $fax = $conn->real_escape_string($_POST['fax']);

    // Use prepared statements to avoid SQL injection
    $stmt = $conn->prepare("INSERT INTO Contacts (name, email, dob, address1, address2, house, block, road, area, country, phone, mobile, fax) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssssss", $name, $email, $dob, $address1, $address2, $house, $block, $road, $area, $country, $phone, $mobile, $fax);

    if ($stmt->execute()) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
