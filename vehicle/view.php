<?php

// Include config file
require_once "config.php";


$sql = "SELECT * FROM complaints";
$result = $conn->query($sql);

if ($result->num_rows > 0) {?>
  
 

<center>
<button  name="home"><a href="home.html">home</a></button><br><br>

	<table border=1 width=60%>
		<tr>
				
				<td align="center"  colspan="8" >
				<b>WEIGHT OF VEHICLE<b>
				</td>

			</tr>
                <tr>
                <th><i>RC Number</i></th>
                <th><i>name</i></th>
                <th><i>address</i></th>
                <th><i>Ph number</i></th>
                <th><i>Max load</i></th>
                <th><i>current load</i></th> 
                <th  colspan="2"><i>fine</i></th>

            </tr>
    
            <?php
            $i=0;
  while($row = $result->fetch_assoc()) {
   
    
   ?>

                <tr>
                <td><?php echo $row["rc"]?></td>
                <td><?php echo $row["name"]?></td>
                <td><?php echo $row["address"]?></td>
                <td><?php echo $row["phnumber"] ?></td>
                <td><?php echo $row["maxload"] ?></td>
                <td><?php echo $row["currentload"] ?></td>
                <td width=60><?php echo $row["fine"] ?></td>
                <td><a href="delete.php?rc=<?php echo $row["rc"]?>">pay</a></td>
                
               
            </tr>
            <?php
          	$i++;
	            } ?>
              

			</table>
	

</center>
<?php  
}
 else {
  echo "paid successfully";
  echo "<button><a href='logout.php'>home</a></button><br><br>";
}
$conn->close();
?>