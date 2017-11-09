
<?php 
 include '../php/connection.php'; 

$IssueNo = $_POST['IssueNo'];
$VolumeNo = $_POST['VolumeNo'];
$Year = $_POST['Year'];
$File1 = isset($_POST['File1']);
$filetype = $_FILES["File1"]["type"];
$target_path="../Newsletterimages/";
$target_path = $target_path . basename( $_FILES['File1']['name'] ); 
$randString = md5(time()); //encode the timestamp - returns a 32 chars long string
if ( move_uploaded_file( $_FILES['File1']['tmp_name'], $target_path)) {
			 echo '<p>The file was uploaded</p>';
			} else {
				echo '<p>There was an error uploading your file. Please try again.</p>';
			}
// attempt insert query execution
$sql = "INSERT ignore INTO newsletterdata (IssueNo,VolumeNo,DateTime,Year,File1) VALUES ('$IssueNo','$VolumeNo',NOW(),'$Year','$target_path')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);

?>