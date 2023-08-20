<?php
session_start();

include "db_connect.php";

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else {
    $email = $_POST["email"];
    //$pwd = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $query = "SELECT * FROM users WHERE email = '".$email."' LIMIT 1";
    $pwd = $_POST["password"];
    $passwordMatch = false;
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows ($result) > 0){
        $row =mysqli_fetch_array($result);
        if(password_verify($pwd, $row["password"])){
            $first = $row["fname"];
            $last = $row["lname"];
            $userID = $row["userID"];
            //echo "<p> Password is valid for the user : ".$first." ".$last."</p>";
            // Redirect to a different page
            $_SESSION['loggedin'] = true;
            $_SESSION["userName"] = $first . $last;
            $_SESSION["userID"]= $userID;
            $passwordMatch = true;          
        }
        /*
        else {
            //echo "<p> Password is invalid !!!</p>";
            // Redirect to a different page
            $_SESSION['loggedin'] = false;
            $_SESSION["userName"] = "";           
        }
        */
    }
    
    if($passwordMatch == true)
    {
        header("Location: index.php");
        exit;
    }
    else
    {
        $_SESSION['loggedin'] = false;
        $_SESSION["userName"] = "";   
        $_SESSION["loginError"] = "Login credentials are incorrect!";
        header("Location: login.php");
        exit;
    }
}
?>
