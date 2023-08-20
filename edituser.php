<?php
include "db_connect.php";
session_start(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<header>
     <?php include 'header.php'; ?>
</header>


<div class="container">
<?php if(!empty($_GET["update"]) ) { ?>
<div style="margin-top:20px" class="alert alert-success" role="alert">
  User updated!
</div>
<?php } ?>

  <h2>Edit User</h2>
<?php
$id=$_GET["id"];

$sql = "SELECT * FROM users WHERE userID = '".$id."'";

$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);
$row = mysqli_fetch_array($result)

?>
  <form method="POST" action="update_user.php">
    <div class="form-group">
      <label for="fname">First name:</label>
      <input type="text" class="form-control" value="<?php echo $row["fname"] ?>" id="fname" placeholder="Enter your first name" name="fname">
    </div>
    <div class="form-group">
      <label for="lname">Last name:</label>
      <input type="text" class="form-control" value="<?php echo $row["lname"] ?>" id="lname" placeholder="Enter your last name" name="lname">
    </div>
    
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" value="<?php echo $row["email"] ?>" id="email" placeholder="Enter Email" name="email">
    </div>

        
    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" value="<?php echo $row["address"] ?>" id="address" placeholder="Enter address" name="address">
   </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
   </div>      
     <input type="hidden" name="id" value="<?php echo $id ?>">
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<br><br>
    
<footer>
     <?php include 'footer.php'; ?>
</footer>
</body>
</html>


