<html>
<head>
<style> 
body{
height:200px;
background-position:center;
font-family:sans-serif;
text-align:center;
background-size:cover;
background-image:url("img9.jpg");
}
#containerlog{
width:500px;
margin:350px auto;
color:white;
padding:10px20px30px;
border-radius:25px;
box-shadow:15px;
text-align:center;
}
#containerlog h1{
text-align:center;
position:relative;
left:-30px;
color:#faeeff;
}
.input{
width:100px;
font-size:1.5em;
border-shadow:2px;
border-radius:8px;
padding:5px 10px;
box-sizing:border-box;
margin:5px 0px 10px;
}
#containerlog table{
text-align:center;
margin:10px;
}
#containerlog a{
color:black;
margin:50px auto;
}
#containerlog input{
height:40px;
border:none;
outline:none;
margin-top:8px;
margin-left:100px;
text-align:center;
font-size:15px;
border-radius:5px;
}
#containerlog input[type=submit]{
height:40px;
border:none;
outline:none;
margin-top:8px;
width:100px;
margin-left:100px;
text-align:center;
font-size:15px;
border-radius:5px;
}
#containerlog p{
text-align:center;
padding-left:100px;
padding-top:0px;
color:white;
}
</style>
<title>login</title>
</head>
<body>

<div id='containerlog' class="bg-container">
<h1>LOGIN</h1>
<form method="POST" action="login.php">
<table>
<tr><td><input type="text" name="email" placeholder="Enter Email Id"
required/></td></tr>
<tr><td><input type="password" name="password" placeholder="Enter password"
required/></td></tr>
<tr><td><input type="submit" name="submit" value="Login" required/><br><br>
<p>Don't have an account?<a href="signpro.html">Signup</p></a>
</table>
<br>
</div>
</form>
</body>
</html>
