<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign up</title>
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
  <h2>Sign up</h2>
  <form method = "POST" action="form_process.php">
    <div class="form-group">
      <label for="fname">First name:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname">
    </div>
    <div class="form-group">
      <label for="lname">Last name:</label>
      <input type="text" class="form-control" id="lname" placeholder="Enter your last name" name="lname">
    </div>
    
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
    </div>

        
    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
   </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
   </div>      

    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<br><br>
    
<footer>
     <?php include 'footer.php'; ?>
</footer>
</body>
</html>


