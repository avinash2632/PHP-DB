<?php
$username = $_POST['username'];
$password = $_POST['pwd'];
$link = mysqli_connect("localhost", "root", "avinashhere", "userlogin");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt insert query execution
$sql = "INSERT INTO persons (username, password) VALUES ('$username', '$password')";
if(mysqli_query($link, $sql)){
	echo "Records inserted successfully. Please login below";
	echo "<button onclick=\"location.href='login.html'\">Back to Home</button>";
} else{
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

// Close connection
mysqli_close($link);
?>
