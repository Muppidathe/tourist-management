<?php
// Establish a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booking";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Retrieve data from the form
$name = $_POST['name'];
$email = $_POST['email'];
$tour = $_POST['tour'];
$date = $_POST['date'];
$cno=$_POST['cno'];
// Insert data into the database
$sql = "INSERT INTO booked(name, email, tour, date,cno) VALUES ('$name', '$email', '$tour', '$date','$cno')";

if ($conn->query($sql) === TRUE) {
    echo "Booking successful!";
	 header("Location:suc.html"); // Redirect to a dashboard or welcome page
      exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>