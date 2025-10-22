<?php
include 'includes/db.php';
$data = json_decode(file_get_contents("php://input"), true);
$name = $conn->real_escape_string($data['name']);
$email = $conn->real_escape_string($data['email']);
$address = $conn->real_escape_string($data['address']);
$total = $data['total'];

$sql = "INSERT INTO orders (customer_name,email,address,total) VALUES ('$name','$email','$address','$total')";
if($conn->query($sql) === TRUE){
    echo "Order saved";
} else {
    echo "Error: ".$conn->error;
}
?>
