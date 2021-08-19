<!doctype html>  
<html>  
<head>  
<title> user Login</title>  
    
</head>  
<body>  
     <center><h1>user login</h1>
   <p> <a href="login.php">admin Login</a></p>  
<h3>Login Form</h3>  
<form action="userview.php" method="POST">  
RC Number: <input type="text" name="rc"><br />  <br>
PH number: <input type="text" name="phnumber"><br />   <br>
<input type="submit" value="Login" name="submit" />  
</form>  
<?php  
if(isset($_POST["submit"]))
{  
  
    if(!empty($_POST['rc']) && !empty($_POST['phnumber'])) {  
          $user=$_POST['rc'];  
          $pass=$_POST['phnumber'];  

    
          require_once "config.php";
          $sql = "SELECT * FROM complaints WHERE rc='$user' AND phnumber='$pass' ";
          $result = $conn->query($sql);
    
                if ($result->num_rows > 0) {
                // output data of each row
                            while($row = $result->fetch_assoc()) {
              
                                        if(($user == $row['rc']) AND ($pass == $row['phnumber']))  
                                                  {  
                                                  
                                                
                                                  /* Redirect browser */  
                                                  header("Location: userview.php");  
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