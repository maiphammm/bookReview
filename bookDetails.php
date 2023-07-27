<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Book Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
</head>
<body>

<!-- Navbar -->
<header>
     <?php include 'header.php'; ?>
</header>

<div class="container mt-5">
  <div class="row" id="myproducts">
      <!--Book details display here -->
<?php 
include 'db_connect.php';
$id = $_GET['id'];
$sql = "SELECT * FROM books WHERE bookID = '$id'";

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
        $bookID = $row["bookID"];
        $bookName = $row["bookName"];
        $bookAuthor = $row["bookAuthor"];
        $bookImg = $row["bookImg"];
        $bookDetail = $row["bookDetail"]; 
        $bookType = $row["bookType"];
echo "
    <div class='col-sm-4'>
      <h2>$bookName<h2>
      <br>
      <img src='Images/$bookImg' class='img-responsive' style='width:70%' alt='Image'>
      <br>
      <p>$bookType</p>
      
      <hr class='d-sm-none'>
    </div>
    "; 
echo "
    <div class='col-sm-8'>
      <h3>$bookAuthor</h3>
      
      <p>Rating score..</p>
      <p>$bookDetail</p>

      <hr>

    </div>
";
           
      ?>
      <div class="col-sm-8">
      
      <h4>Leave a review:</h4>
      <form role="form">
        <div class="form-group">
          <textarea class="form-control" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
      <br><br>
      
      <p><span class="badge">2</span> Reviews:</p><br>
      
      <div class="row">
        <div class="col-sm-2 text-center">
          <img src="bandmember.jpg" class="img-circle" height="65" width="65" alt="Avatar">
        </div>
        <div class="col-sm-10">
          <h4>Anja <small>Sep 29, 2015, 9:12 PM</small></h4>
          <p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <br>
        </div>
        <div class="col-sm-2 text-center">
          <img src="bird.jpg" class="img-circle" height="65" width="65" alt="Avatar">
        </div>
        <div class="col-sm-10">
          <h4>John Row <small>Sep 25, 2015, 8:25 PM</small></h4>
          <p>I am so happy for you man! Finally. I am looking forward to read about your trendy life. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <br>
		</div>
    </div>
    </div>

    </div>
</div>

<!-- Footer -->
<footer>
     <?php include 'footer.php'; ?>
</footer>

</body>
</html>