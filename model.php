<?php
// Establish a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tourism";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM sign WHERE email = '$email' AND password = '$password'";
    $result = $db->query($query);

    if ($result->num_rows>0) {
	$rows=$result->fetch_assoc();
       $email=$row['email']
// Insert data into the database
$sql = "INSERT INTO booked(name, email, tour, date,cno) VALUES ('$name', '$email', '$tour', '$date','$cno')";
       $result=$con->query($sql);
       if($result){
	   echo "Booking successful!";
	 header("Location:suc.html"); 
	   }
     else {
        echo "Please create an account.";
    }
	}

}



// Close the database connection
$conn->close();
?>
