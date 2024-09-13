<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "foam";


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if(isset($_POST['register'])) {
    
    if(isset($_POST['fullname'], $_POST['address'], $_POST['mnumber'], $_POST['email'], $_POST['collegeid'], $_POST['depart'])) {
        // Get form data
        $fullname = $_POST['fullname'];
        $address = $_POST['address'];
        $mnumber = $_POST['mnumber'];
        $email = $_POST['email'];
        $collegeid = $_POST['collegeid'];
        $depart = $_POST['depart'];

        
        $stmt = $conn->prepare("INSERT INTO `data` (fullname, address, mnumber, email, collegeid, depart) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $fullname, $address, $mnumber, $email, $collegeid, $depart);

        
        if ($stmt->execute()) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        
        $stmt->close();
    } else {
        echo "Please fill in all the required fields.";
    }
}


$conn->close();
?>
