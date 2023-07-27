<?php
include "db_connect.php";

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $pwd = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $query = "INSERT INTO users (fname,lname,email,address,password) VALUES ('".$fname."','".$lname."','".$email."', '".$address."','".$pwd."')";

    $result = mysqli_query($conn,$query);
    if(!$result){echo "<p>something went wrong: </p>", $query;}
    else{echo "<p>record inserted successfully</p>";}
    header('Location: index.php');
}

$query1 = "SELECT * FROM users";
$result1 = mysqli_query($conn,$query1);
if(mysqli_num_rows ($result1) > 0){
    while($row =mysqli_fetch_array($result1)){
        $first = $row["fname"];
        $last = $row["lname"];
        echo "<p>Submitted data : </p>";
        echo  "<p>".$first." ".$last."</p>";
    }
}
?>