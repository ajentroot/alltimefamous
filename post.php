<html>
<head>

</head>

<h1>POSTS....</h1>
<?php

$servername = "us-cdbr-azure-southcentral-f.cloudapp.net";
	$username = "b3d95ba825189b";
	$password = "01db2a4f";
	$dbname = "alltimefamous_db";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	$sql="select * from post order by id DESC";
	$result=mysqli_query($conn,$sql);
	
	while($row = mysqli_fetch_assoc($result)) 
	{
        echo "Message :- " ." ".$row["message"]."<br>";
		echo "Posted by :- "." ".$row["name"];
		echo "<hr>";
	}
	
    ?>


</html>