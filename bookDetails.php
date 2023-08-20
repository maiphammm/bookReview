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
  <script src="myscript.js"></script>  
   <script>
        $(document).ready(function() {
            
            // Submit review code
            $("body").on("submit",".book-review-form", function(event){
                //event.preventDefault();
                
                // Get the book id and review that is stored in pid
                var pid = $(this).children('button').attr('pid');
                var review = $(this).find("textarea#review").val().replace(/\n/g, '<br />').trim();
                
                $.ajax({
                    url:"action.php", 
                    method : "POST", 
                    data : {submit_review:1,book_id:pid, review:review}, 
                    success : function(result1){
                        alert('Review Submitted!');
                   }
                });
            
            
            });
            
            
            //Get book reviews
            
            //get bookid
            var pid = $(".book-details").data('book-id');
            $.ajax({
                    url:"action.php", 
                    method : "POST", 
                    data : {get_book_reviews:1,book_id:pid}, 
                    success : function(result1){
                        console.log(result1);
                        $(".review-section").html(result1);
                   }
                });
            

             
            
        });  

      </script>
</head>
<body>

<!-- Navbar -->
<header>
     <?php include 'header.php'; ?>
</header>

<div class="container mt-5">
  <div class="row" id="mybooks">
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
    <div data-book-id="."${bookID}"." class='book-details col-sm-4'>
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
       <?php
          if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
              echo '<h4> Please login to leave a review</h4>';             
          }
          else{
              echo '<h4>Leave a review </h4>';
              echo <<<FORM
              <form class="book-review-form" method="post" action="">
                        <div class="form-group">
                            <textarea id="review" name="review" class="form-control" rows="3" required></textarea>
                        </div>
                        <button type="submit" pid=${bookID} class="btn btn-default">Submit</button>
                    </form>
            FORM;
          }
        ?>
      <p>
          <span class="badge"></span> Reviews:</p>
      
      <div class="review-section">
        
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