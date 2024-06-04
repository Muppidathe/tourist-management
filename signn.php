<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="tour";
$db=new mysqli($servername,$username,$password,$dbname);
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Retrieve user input
$email = $_POST['email'];
$uname= $_POST['uname'];
$pno=$_POST['pno'];
$password = $_POST['password'];
$confirm=$_POST['confirm'];
$query = "INSERT INTO sign (email,uname,pno,password,confirm) VALUES('$email', '$uname', '$pno','$password','$confirm')";

if ($db->query($query) === TRUE) {
    // Successful registration
    echo "Registration successful!";
	 $_SESSION['email'] = $email;
	  $_SESSION['uname'] = $uname;
       $_SESSION['pno'] = $pno;
	   $_SESSION['password'] = $password;
	   $_SESSION['confirm']=$confirm;	   
        header("Location:loginpro.html"); 
        exit();
} else {
    // Failed registration
    echo "Registration failed. Please try again later.";
}
}

// Close the database connection
$db->close();


?>