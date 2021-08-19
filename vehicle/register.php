<html>
<body>
<center>
<h3>admin Register Form</h3> 
<form action="" method="POST">  
Username: <input type="text" name="user"><br />  <br>
Password: <input type="password" name="pass"><br />   <br>
re-typePassword: <input type="password" name="retype"><br />   <br>
<input type="submit" value="Login" name="submit" />  

</form> 

<?php
if(isset($_POST["submit"]))
{  

if(!empty($_POST['user']) && !empty($_POST['pass']) && !empty($_POST['retype'])) {
  if(($_POST['pass'] == $_POST['retype']) ){

$user = $_POST['user'];
$pass  = $_POST['pass'];
$retype  = $_POST['retype'];


// Include config file
require_once "config.php";



  

$sql = "INSERT INTO users (username,password)VALUES ('$user','$pass')";

if ($conn->query($sql) === TRUE) {echo "<script>alert('registered user   ".$user."  sucessfully');window.location.href='login.php?success';</script>";} 
 





}
}else{echo "all fields required";}
}
?>
</center>
</body>
</html>

