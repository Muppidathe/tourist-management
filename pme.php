<!DOCTYPE html>
<html>
<head>
 <title>Table with database</title>
 <style type="text/css">
table
 {
	font-family: monospace;
	width: 100%;
	text-align: left;
	font-size: 20px;
 }
 th
 {
	 background-color:grey;
	 color: black;
 }
 </style>
</head>
<body>
<table>
<tr>
 <th>Name</th>
 <th>Email</th>
 <th>Tour</th>
 <th>Date</th>
 <th>Phone no</th
 
</tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booking";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error)
{
 die("connection failed:".$conn->connect_error);
}
$sql="SELECT name,email,tour,date,cno from booked";
$result=$conn->query($sql);
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
 echo "<tr><td>". $row["name"]. "</td><td>". $row["email"]. "</td><td>". $row["tour"]. "</td><td>". $row["date"]. "</td><td>" .$row['cno'] ."</td></tr>";
}
echo "</table>";
}
else
{
 echo "0 result";
}
 $conn->close();
?>  
	<a href="homepro.html" class="btn">Back To Home</a>
</body>
</html>
