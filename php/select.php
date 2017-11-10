<?php 
  include '../php/connection.php'; 

$sql = "select * from newsletterdata where volume='' ";
$result = mysql_query($link,$sql);

$image = $row['File1'];
echo "<img src='".$image."'>";
?>