 <?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "adv_web";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

if(!$conn) {
    die("connection error : ".mysqli_connect_error());
}

?> 
