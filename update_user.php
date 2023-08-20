<?php
include "db_connect.php";
session_start();

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else {
    $id = $_POST["id"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    
    if (!empty($_POST["password"])) {
        
        $pwd = password_hash($_POST["password"], PASSWORD_DEFAULT);
        
        
        $query = "UPDATE users SET fname = '".$fname."', lname = '".$lname."', email = '".$email."', address = '".$address."', pwd = '".$pwd."' WHERE userID = '".$id."';";
    }
    else {
        
        $query = "UPDATE users SET fname = '".$fname."', lname = '".$lname."', email = '".$email."', address = '".$address."' WHERE userID = '".$id."';";
        
    }

    $result = mysqli_query($conn,$query);
    if(!$result){
        echo "<p>something went wrong: </p>", $query;
    }
    else{
        echo "<p>record inserted successfully</p>";
        
        $_SESSION["userName"] = $fname . $lname;
    
    }
    header('Location: edituser.php?id='.$id.'&update=1');
}