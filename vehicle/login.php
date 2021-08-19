<!doctype html>  
<html>  
<head>  
<title>Login</title>  
    
</head>  
<body>  
     <center><h1>Admin login</h1>
   <p><a href="register.php">Register</a> | <a href="login.php"> admin Login</a></p>  
<h3>Login Form</h3>  
<form action="" method="POST">  
Username: <input type="text" name="user"><br />  <br>
Password: <input type="password" name="pass"><br />   <br>
<input type="submit" value="Login" name="submit" />  

</form>  
<br><a href="userlogin.php">userlogin</a>  </a>
<?php  
if(isset($_POST["submit"]))
{  
  
    if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
          $user=$_POST['user'];  
          $pass=$_POST['pass'];  

    
          require_once "config.php";
          $sql = "SELECT * FROM users WHERE username='$user' AND password='$pass' ";
          $result = $conn->query($sql);
    
                if ($result->num_rows > 0) {
                // output data of each row
                            while($row = $result->fetch_assoc()) {
              
                                        if(($user == $row['username']) AND ($pass == $row['password']))  
                                                  {  
                                                  
                                                
                                                  /* Redirect browser */  
                                                  header("Location: home.html");  
                                                  }  
                                                   else
                                                   {  
                                                    echo "Invalid username or password!";  
                                                   } 
     
  
                                } 
                                }
                   
                                

                                
        }  
        else 
        {  
        echo "All fields are required!";  
        } 
}
?>  </center>
</body>  
</html>   