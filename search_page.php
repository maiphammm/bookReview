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
        $(document).ready(function() {
            book_list();
            //cat_list();
            
            function book_list() { 
              $.ajax({
               url : "action.php",
               method : "POST",
               data : {mybooks2:1},
               success : function(result){
                  $("#myRecomend").html(result);
               }
              })
            }
            
            function cat_list() { 
                $("body").on("click",".category",function(event){
    	       var cid = $(this).attr('cid');
               $.ajax({
                url:"action.php", 
                method : "POST", 
                data : {categories:1,cat_id:cid}, 
                success : function(result1){
                    $("#myRecomend").html(result1);
        
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

<div class="container-fluid bg-3 text-center">  
  <div class="row" id="mySearch">
      <!--Search books display here -->
<?php 

      
///////////////////Search//////////////////////
if(isset($_POST["search"])){
        $search_wd = $_POST["search"];
        $sql="SELECT * FROM books WHERE keywords LIKE '%$search_wd%'";
        $result2= mysqli_query($conn,$sql);
        if(mysqli_num_rows($result2) > 0){
            while($row = mysqli_fetch_array($result2)){ 
                $bookID = $row["bookID"];
                $bookName = $row["bookName"];
                $bookAuthor = $row["bookAuthor"];
                $bookImg = $row["bookImg"];
                $bookDetail = $row["bookDetail"]; 
                $bookType = $row["bookType"];
                
                echo "
                    <div class='col-md-4' >
                        <div class='panel-body'> <a href='bookDetails.php?id=$bookID'><img src='images/$bookImg' class='img-responsive' style='width:80%' alt='Image'></a></div>                     
                        <div class='panel-heading'>$bookName</div>
                    </div>                      
             ";   
                  
          }
          echo "<br><br><br>";
        }
    }      

           
?>


    </div>
</div>
    
<!-- Second Container (Grid) -->
<div class="container-fluid bg-3 text-center">    
    <div class="row" id="myRecomend">
        <h3>Recommend book</h3>
        <br>
        <!--Random Recommend books display here -->
         
   </div><br><br>
</div>


    
<!-- Footer -->
<footer>
     <?php include 'footer.php'; ?>
</footer>

</body>
</html>