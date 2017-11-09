<?php 
  include '../php/connection.php'; 

$sql = "select File1, * from newsletterdata";

while ($row=mysqli_fetch_assoc($result))
?>