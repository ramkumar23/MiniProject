

<?php

// Include config file
require_once "config.php";


echo "<script>alert ('paid successfully')</script>";

echo "<br><br><script>window.location.href='login.php?success';</script>";



// sql to delete a record

$sql = "DELETE FROM complaints WHERE rc='" . $_GET["rc"] . "'";

if ($conn->query($sql) === TRUE) {

} else {
  echo "Error in payment: " . $conn->error;
}

$conn->close();
?> l