<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Book Club</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="myscript.js">      
    </script>
    <script>
        $(document).ready(function() {
            book_list();
            cat_list();
            
            function book_list() { 
              $.ajax({
               url : "action.php",
               method : "POST",
               data : {mybooks:1},
               success : function(result){
                  $("#myproducts").html(result);
               }
              })
            }
            
            function cat_list() { 
                $("body").on("click",".category",function(event){
    	       var cid = $(this).attr('cid');
               $.ajax({url:"action.php", method : "POST", data : {categories:1,cat_id:cid}, success : function(result1){
                $("#myproducts").html(result1);
        
     }
    })
	})	
	 	
     }
            
        });
      </script>

</head>
<body>

<!-- Navbar -->
<header>
     <?php include 'header.php'; ?>
</header>
    
<div class="jumbotron">
    <div class="collapse navbar-collapse" id="myNavbar" >
      <ul class="nav navbar-nav">
        <li><a href="#" class="category" cid="fiction" onclick="cat_list();" >Fiction</a></li>
        <li><a href="#" class="category" cid="fantasy" onclick="cat_list();" >Fantasy</a></li>
        <li><a href="#" class="category" cid="horror" onclick="cat_list();" >Horror</a></li>
        <li><a href="#" class="category" cid="childrens" onclick="cat_list();" >Childrens</a></li>
        <li><a href="#" class="category" cid="historical" onclick="cat_list();" >Historical</a></li>
        <li><a href="#" class="category" cid="romance" onclick="cat_list();" >Romance</a></li>
        <li><a href="#" class="category" cid="science" onclick="cat_list();" >Science</a></li>
        <li><a href="#" class="category" cid="mystery" onclick="cat_list();" >Mystery</a></li>
        
      </ul>
      </div>
</div>
    
<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <h3 class="margin">Welcome to Book Club</h3>
  <img src="images/cat.jpeg" class="img-responsive img-circle margin" style="display:inline" alt="Cat" width="350" height="350">
  <h3>I'm an adventurer</h3>
</div>


<!-- Second Container (Grid) -->
<div class="container-fluid bg-3 text-center">    
    <div class="row" id="myproducts">
        
        <!--Random books display here -->
         
   </div><br><br>
</div>

<!-- Footer -->
<footer>
     <?php include 'footer.php'; ?>
</footer>

</body>
</html>