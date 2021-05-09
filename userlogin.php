<?php
$name = $_GET['username'];
$pass = $_GET['password'];
$link = mysqli_connect("localhost", "root", "avinashhere", "userlogin");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "SELECT username  FROM `persons` password=`$pass`";

$result = mysqli_query($link,$sql);
if(mysqli_num_rows($result) > 0) {
        echo "the username already exists";
} else {
        echo "welcome";
}

while ($rows = mysqli_fetch_assoc($result)) {
    echo $rows;
}

?>


