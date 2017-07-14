<?php    
$servername = "us-cdbr-azure-southcentral-f.cloudapp.net";
$username = "b3d95ba825189b";
$password = "01db2a4f";
$dbname = "alltimefamous_db";
$conn = mysqli_connect($servername, $username, $password, $dbname);

$fname=$_POST["fname"];
 $mesg=$_POST["msg"];




$sql="insert into post (name,message) values ('$fname','$mesg')";
  
  if (mysqli_query($conn,$sql)) {
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

echo '<script language="javascript">alert"Thanks for Posting"</script>';
echo '<script language="javascript">window.location = "index.html"</script>';
?>
