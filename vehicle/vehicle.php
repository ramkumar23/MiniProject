<html>
<body>
<center>
<h3>vehicle details</h3> 
<form action="" method="POST">
        
        <label for="rc">enter rc number</label>
        <input type="text"  name="rc" required=""><br><br>  
        <label for="name">name</label>
        <input type="text" name="name" ><br><br>
        <label for="address">address</label>
        <input type="text"  name="address" ><br><br>
        <label for="phnumber">phnumber</label>
        <input type="text"  name="phnumber" ><br><br>
        <label for="maxload">maxload</label>
        <input type="text"  name="maxload" ><br><br>
        <input type="submit" value="register" name="submit" /> 
        </form>
<?php
if(isset($_POST["submit"]))
{  

    $rc = $_POST['rc'];
    $name  = $_POST['name'];
    $address  = $_POST['address'];
    $phnumber  = $_POST['phnumber'];
    $maxload  = $_POST['maxload'];

// Include config file
require_once "config.php";



  

$sql = "INSERT INTO vehicle (rc,name,address,phnumber,maxload)VALUES ('$rc','$name','$address',$phnumber,$maxload)";

if ($conn->query($sql) === TRUE) {echo "<script>alert('vehicle added  sucessfully');window.location.href='home.html?success';</script>";} 
 





}


?>
</center>
</body>
</html>

