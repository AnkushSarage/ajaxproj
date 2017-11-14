<!DOCTYPE html>
<html>
<head>
  
</head>
<body>
<?php include 'config.php' ?>  



<?php 

$search = $_POST['search_term'];

$sql = "SELECT * FROM newsletterdata where VolumeNo ='$search' ";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["File1"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();?>
</body>
</html>