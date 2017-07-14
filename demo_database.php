<?php
/*
$connectionInfo = array("UID" => "admin15@alltimefamous", "pwd" => "Mydefeance@10", "Database" => "alltimefamous", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:alltimefamous.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);*/

$servername = "us-cdbr-azure-southcentral-f.cloudapp.net";
$username = "b3d95ba825189b";
$password = "01db2a4f";
$dbname = "alltimefamous_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
else{
echo "Connected successfully";}



$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if ($conn->query($sql) == TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
mysqli_select_db($conn, 'alltimefamous_db');

$sql1 = "CREATE TABLE  MyGuests1 (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if ($conn->query($sql1) == TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

?>
