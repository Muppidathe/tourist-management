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
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM sign WHERE email = '$email' AND password = '$password'";
    $result = $db->query($query);

    if ($result->num_rows>0) {
        $_SESSION['email'] = $email;
		 $_SESSION['password'] = $password;
        header("Location:homepro.html"); 
        exit();
    } else {
        echo "Invalid username or password.";
    }
}
?>
