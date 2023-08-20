<?php
// Start the session
session_start();
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
        function remove_from_fav_list()
        {
             // JavaScript code to execute when the button is clicked         
            $("body").on("click",".delete-book",function(event){
    	       var pid = $(this).attr('pid');
               $.ajax({
                url:"action.php", 
                method : "POST", 
                data : {deletefavbook:1,fav_book_id:pid}, 
                success : function(result1){
                    //alert("The book has been removed from your favorite list");
            }
            })
	       })
           // After the delete operation is done, refresh the page
           location.reload();
        }  
    </script>

</head>
<body>

<!-- Navbar -->
<header>
     <?php include 'header.php'; ?>
</header>
  
<div class="container-fluid">
<div class="row" id="mybooks">
    <div class="panel-heading col-sm-12" style="text-align:center;">My Favorite List</div>
</div>
<div lass="row" id="list_display">
<?php 

      
///////////////////My list//////////////////////
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
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
                        $bookType = $row["bookType"];
                          echo"                                           
                          <div class='col-sm-3' >
                            <div class='panel-body'> <a href='bookDetails.php?id=$bookID'><img src='images/$bookImg' class='img-responsive' style='width:80%' alt='Image'></a></div>

                            <div class='panel-heading'>$bookName</div>
                            <button type='button' class='btn btn-default btn-sm delete-book' pid='$bookID' id='$bookID' onclick='remove_from_fav_list();'>
                                <span class='glyphicon glyphicon-remove'></span> 
                            </button>
                          </div>
                          ";
                  }
                  }
                }
                        

           
?>    

</div>
</div>

    
<!-- Footer -->
<footer>
     <?php include 'footer.php'; ?>
</footer>

</body>
</html>