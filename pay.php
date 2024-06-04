<?php
// Assuming you have a database connection established
$conn = new mysqli("localhost", "username", "password", "your_database");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$amount = $_POST['amount'];
$cardNumber = $_POST['card_number'];
$cardExpiry = $_POST['card_expiry'];
$cardCvv = $_POST['card_cvv'];

// Insert the payment details into the database
$sql = "INSERT INTO transactions (amount, card_number, card_expiry, card_cvv) 
        VALUES ('$amount', '$cardNumber', '$cardExpiry', '$cardCvv')";

if ($conn->query($sql) === TRUE) {
    echo "Payment successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
