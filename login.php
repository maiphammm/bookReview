<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Log in</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<!-- Header -->
<header>
    <?php include 'header.php'; ?>
</header>
<!-- Main -->    
<div class="container">
  <h2>Information form</h2>
  <form method = "POST" action="login_process.php">

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
    </div>

    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
   </div>      

    <button type="submit" class="btn btn-default">Submit</button>
    
    <?php
      if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== true) {
          echo $_SESSION["loginError"];
          $_SESSION["loginError"] = "";
      }
    ?>
  </form>
</div>
<br><br>
<!-- Footer -->
<footer>
     <?php include 'footer.php'; ?>
</footer>
</body>
</html>