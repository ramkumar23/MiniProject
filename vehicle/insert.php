<?php

$rc = $_POST['rc'];
$name  = $_POST['name'];
$address  = $_POST['address'];
$phnumber  = $_POST['phnumber'];
$maxload  = $_POST['maxload'];
$currentload  = $_POST['currentload'];
$fine  = $_POST['fine'];

// Include config file
require_once "config.php";


if ($fine==0) {echo "cannot file NORMAL LOAD";} else {
  

$sql = "INSERT INTO complaints (rc,name,address,phnumber,maxload,currentload,fine)VALUES ('$rc','$name','$address',$phnumber,$maxload,$currentload,$fine)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  
  echo "<br><br><form><button id='view-complaint' name='view-complaint' formaction='view.php'>view complaint</button><form>";
  
} else {
  echo "<script>alert('already fine ".$fine."  pending');window.location.href='view.php?success';</script>";
}
}

$conn->close();
?>







  