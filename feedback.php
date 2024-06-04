<?php
$servername="localhost";
$username="root";
$password="";
$dbname="tourism";
$db=new mysqli($servername,$username,$password,$dbname);
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name= $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $query = "SELECT * FROM feed WHERE name='$name' AND email = '$email' AND message = '$message'";
    $result = $db->query($query);

    if ($result->num_rows>0) {
	 $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
		 $_SESSION['message'] = $message;
        header("Location:fb1.html"); 
        exit();
    }
}
?>
