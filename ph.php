<?php 
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="searchdb";
$conn=new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['search'])){
$tour = $_POST['tour'];
$sql = "SELECT path FROM searchks where tour like '%$tour%' ";
$result = $conn->query($sql) or die($conn->error);
if(mysqli_num_rows($result)==1){
$rows=$result->fetch_assoc();
$path=$rows['path'];
header("location:$path");
}
elseif(mysqli_num_rows($result)==1){
header("location:$path");
}
else{
echo "The Places is not found";
}
}
$conn->close();    
?>