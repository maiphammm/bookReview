<?php
// Start the session
session_start();
$_SESSION["userID"] = "";
include 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Search Book</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="myscript.js"></script>
        <script>
$("body").on("click",".add_book",function(event){
    event.preventDefault();
    var bookID = $(this).attr('bid');
    $.ajax({url:"action.php", method : "POST", 
                data : {addbook:1,BookID:bookID},
                success : function(data){alert(data)}}
           )
});
    </script>

</head>
<body>

<!-- Navbar -->
<header>
     <?php include 'header.php'; ?>
</header>

  
<div class="container-fluid">
  <div class="row" id="mybooks">
      <div class="col-md-2"></div>
      <div class="col-md-8">
          <div class="panel-heading">My Favorite List</div>
          <div class="panel-body">
             <div class="row">
                <div class="col-md-2">Delete</div>
                <div class="col-md-2"></div>
                <div class="col-md-2">Name</div>
                <div class="col-md-2">Author</div>
                <div class="col-md-2">Type</div>
             </div>
              <div id="list_display"><br><br><br>
<?php 

      
///////////////////My list//////////////////////

                  $userID = $_SESSION["userID"];
                  $sql="SELECT * FROM mylist WHERE userID = '$userID'"; 
                  
                  $result= mysqli_query($conn,$sql);
                  $count = mysqli_num_rows($result);
                  
                  if($count>0){
                      while($row = mysqli_fetch_array($result)){ 
                        $bookID = $row["bookID"];
                        $bookName = $row["bookName"];
                        $bookAuthor = $row["bookAuthor"];
                        $bookImg = $row["bookImg"];
                        $bookDetail = $row["bookDetail"]; 
                        $bookType = $row["bookType"];
                          echo"
                          <div class='row>
                          <div class='col-md-2><a=href='#' class='delete_book' id='$bookID'>
                          <span class='glyphicon glyphicon-remove'></span></a></div>
                          <div class='col-md-2><a href='bookDetails.php?id=$bookID'><img src='images/$bookImg' class='img-responsive' style='width:80%' alt='Image'></a></div>
                          <div class='col-md-2>$bookName</div>
                          <div class='col-md-2>$bookAuthor</div>
                          <div class='col-md-2>$bookType</div>
                          
                          </div>
                          ";
                  }
                  }
                        

           
?>    
              </div>
          </div>
      </div>
      <!--My list display here -->



    </div>
</div>

    
<!-- Footer -->
<footer>
     <?php include 'footer.php'; ?>
</footer>

</body>
</html>