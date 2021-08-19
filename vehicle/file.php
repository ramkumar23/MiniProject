<?php

$rc = $_POST['rc'];
$currentload  = $_POST['currentload'];

// Include config file
require_once "config.php";


$sql = "SELECT * FROM vehicle WHERE rc='$rc'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   ?>
        <html>
          <body>
        <form action="insert.php" method="POST">
        <h1>weight of vehicle</h1>
        <label for="rc">enter rc number</label>
        <input type="text" value="<?php echo $row["rc"]?>" name="rc"><br><br>  
        <label for="name">name</label>
        <input type="text" value="<?php echo $row["name"]?>" name="name" ><br><br>
        <label for="address">address</label>
        <input type="text" value="<?php echo $row["address"]?>" name="address" ><br><br>
        <label for="phnumber">phnumber</label>
        <input type="text" value="<?php echo $row["phnumber"]?>" name="phnumber" ><br><br>
        <label for="maxload">maxload</label>
        <input type="text" value="<?php echo $row["maxload"]?>" name="maxload" ><br><br>
        <label for="currentload">currentload</label>
        <input type="text" value="<?php echo $currentload;?>" name="currentload" ><br><br>
        <label for="status">status</label>
        <input type="text" value="<?php $a=$currentload;$b=$row["maxload"];$c=$a-$b;if ($b < $a) {echo "high";} else {echo "normal";}?>" name="status" ><br><br>
        <label for="fine">fine</label>
        <input type="text" value="<?php if ($c > 0) {echo $c*3;} else {echo "0";}?>" name="fine" ><br><br>
        <button id="file-complaint" name="file-complaint"  >file complaint</button>   
        <button><a href="adminview.php?rc=<?php echo $row["rc"]?>">view complaints</a></button>
        <button id="home" name="home" formaction="home.html">home</button>
        </form>
        
  </body>
         </html>
<?php
    }
    
 


} else {
  echo "<BR><TABLE BORDER=3><TH><B>ENTER VALID RC NUMBER</B></TH></TABLE><br><a href='home.html'><button>back</a></button>";
}
$conn->close();
?>