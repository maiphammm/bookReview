<?php
session_start();

include "db_connect.php";

////////////////Display random books///////////////////
    if(isset($_POST["mybooks"])){
        $sql="SELECT * FROM books ORDER BY RAND() LIMIT 0,8";
        $result= mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){ 
                $bookID = $row["bookID"];
                $bookName = $row["bookName"];
                $bookAuthor = $row["bookAuthor"];
                $bookImg = $row["bookImg"];
                $bookDetail = $row["bookDetail"]; 
                $bookType = $row["bookType"];
                
                
                
                if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
                       echo "
                        <div class='col-sm-3' >
                            <div class='panel-body'> <a href='bookDetails.php?id=$bookID'><img src='images/$bookImg' class='img-responsive' style='width:80%' alt='Image'></a></div>

                            <div class='panel-heading'>$bookName</div>
                          </div>

                 "; 
                  }
                  else{
                      echo "
                        <div class='col-sm-3' >
                            <div class='panel-body'> <a href='bookDetails.php?id=$bookID'><img src='images/$bookImg' class='img-responsive' style='width:80%' alt='Image'></a></div>

                            <div class='panel-heading'>$bookName</div>
                            <button type='button' class='btn btn-default btn-sm add-to-fav' pid='$bookID' id='$bookID' onclick='add_to_fav_list();'>
                                <span class='glyphicon glyphicon-heart'></span> 
                            </button>
                          </div>

                 "; 

                  }
                  
          }
        }
    }


////////////////Display random Recommened books///////////////////
    if(isset($_POST["mybooks2"])){
        $sql="SELECT * FROM books ORDER BY RAND() LIMIT 0,4";
        $result4= mysqli_query($conn,$sql);
        if(mysqli_num_rows($result4) > 0){
            
            echo "<br><br><br><h3>Recommened</h3><br>";
                
            while($row = mysqli_fetch_array($result4)){ 
                $bookID = $row["bookID"];
                $bookName = $row["bookName"];
                $bookAuthor = $row["bookAuthor"];
                $bookImg = $row["bookImg"];
                $bookDetail = $row["bookDetail"]; 
                $bookType = $row["bookType"];
               
                
                if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
                       echo "
                            <div class='col-sm-3' >
                                <div class='panel-body'> <a href='bookDetails.php?id=$bookID'><img src='images/$bookImg' class='img-responsive' style='width:60%' alt='Image'></a></div>
                            </div>
                            <br><br><br>
                     ";   
                  }
                  else{
                      echo "
                            <div class='col-sm-3' >
                                <div class='panel-body'> <a href='bookDetails.php?id=$bookID'><img src='images/$bookImg' class='img-responsive' style='width:60%' alt='Image'></a></div>
                                <button type='button' class='btn btn-default btn-sm add-to-fav' pid='$bookID' id='$bookID' onclick='add_to_fav_list();'>
                                    <span class='glyphicon glyphicon-heart'></span> 
                                </button>
                            </div>
                            <br><br><br>
                     ";   
                  }
          }
        }
    }



///////////////////Category//////////////////////

 if(isset($_POST["categories"])){
        $cid = $_POST["cat_id"];
        $type_sql="SELECT * FROM books WHERE bookType LIKE '%$cid%'";
        $result1= mysqli_query($conn,$type_sql);
        if(mysqli_num_rows($result1) > 0){
            while($row = mysqli_fetch_array($result1)){
                $bookID = $row["bookID"];
                $bookName = $row["bookName"];
                $bookAuthor = $row["bookAuthor"];
                $bookImg = $row["bookImg"];
                $bookDetail = $row["bookDetail"]; 
                $bookType = $row["bookType"];
                
                echo "
                    <div class='panel panel-default' style='width:400px;'>
                        <div class='panel-heading'>$bookName</div>
                        <div class='panel-body'> <a href='bookDetails.php?id=$bookID'><img src='Images/$bookImg' class='img-responsive' style='width:100%' alt='Image'></a></div>
                        <p>$bookType</p>
                      </div>
                                     
             
             ";          
                  
          }
        }
    }

///////////////////Add to fav list//////////////////////

 if(isset($_POST["addfavbook"])){
     $b_id=$_POST["fav_book_id"];
     if (isset($_SESSION["userID"])) {
         $user_id=$_SESSION["userID"];

         $sql="SELECT * FROM mylist WHERE bookID = '$b_id' AND userID='$user_id'";
         $result= mysqli_query($conn,$sql);
         $count = mysqli_num_rows($result);
         if($count>0){
             echo"Book added already!!!";
         } else {
             $sql= "SELECT * FROM books WHERE bookID = '$b_id'";

             $result1= mysqli_query($conn,$sql);

             if(mysqli_num_rows($result1) > 0){
                $row = mysqli_fetch_array($result1);     
                $bookID = $row["bookID"];
                $bookName = $row["bookName"];
                $bookAuthor = $row["bookAuthor"];
                $bookImg = $row["bookImg"];
                $bookDetail = $row["bookDetail"]; 
                $bookType = $row["bookType"];

                $sql_insert= "INSERT INTO mylist (favID,bookID,bookName,bookAuthor,bookImg,bookType,userID) VALUES (NULL,'".$bookID."', '".$bookName."', '".$bookAuthor."', '".$bookImg."', '".$bookType."', '".$user_id."')";

                $newResult = mysqli_query($conn,$sql_insert);
                if(!$newResult){
                    echo $newResult;
                    echo "something went wrong";
                }else {
                    echo"Book added to My List!!!";
                }
             }
             else
                 echo "No Books found with the id" .$bookID;
         }
     }
     else
       echo "Please login to save books to your favorite";     
 }



///////////////////Remove from fav list//////////////////////

 if(isset($_POST["deletefavbook"])){
     $b_id=$_POST["fav_book_id"];
     echo $b_id;
     if (isset($_SESSION["userID"])) {
        $user_id=$_SESSION["userID"];        
        $sql = "DELETE FROM mylist WHERE bookID = '$b_id' AND userID='$user_id'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            // Deletion was successful
            $count = mysqli_affected_rows($conn); // Get the number of affected rows (deleted rows)
            echo "Deleted $count row(s).";
        } else {
            // Deletion failed
            echo "Error deleting record: " . mysqli_error($conn);
        }
     }
     else
       echo "Please login to remove books from your favorite";     
 }


//////////////// Get reviews ///////////////////

/*
    if(isset($_POST["get_reviews"])){
        $sql="SELECT * FROM books ORDER BY RAND() LIMIT 0,8";
        $result= mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){ 
                $bookID = $row["bookID"];
                $bookName = $row["bookName"];
                $bookAuthor = $row["bookAuthor"];
                $bookImg = $row["bookImg"];
                $bookDetail = $row["bookDetail"]; 
                $bookType = $row["bookType"];
                
                
                
                if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
                       echo "
                        <div class='col-sm-3' >
                            <div class='panel-body'> <a href='bookDetails.php?id=$bookID'><img src='images/$bookImg' class='img-responsive' style='width:80%' alt='Image'></a></div>

                            <div class='panel-heading'>$bookName</div>
                          </div>

                 "; 
                  }
                  else{
                      echo "
                        <div class='col-sm-3' >
                            <div class='panel-body'> <a href='bookDetails.php?id=$bookID'><img src='images/$bookImg' class='img-responsive' style='width:80%' alt='Image'></a></div>

                            <div class='panel-heading'>$bookName</div>
                            <button type='button' class='btn btn-default btn-sm add-to-fav' pid='$bookID' id='$bookID' onclick='add_to_fav_list();'>
                                <span class='glyphicon glyphicon-heart'></span> 
                            </button>
                          </div>

                 "; 

                  }
                  
          }
        }
    }

*/


/////////////////// Submit review //////////////////////

 if(isset($_POST["submit_review"])){
     $b_id=$_POST["book_id"];
     $review=$_POST["review"];
     
     if (isset($_SESSION["userID"])) {
         $user_id=$_SESSION["userID"];


            $sql_insert = "INSERT INTO usercomments (userID, reviewDetails, bookID) VALUES ('".$user_id."','".$review."','".$b_id."')";

            $newResult = mysqli_query($conn,$sql_insert);
            
            print_r($_POST);
            
     }
     else
       echo "To submit a book review you must be logged in.";     
 }


/////////////////// get book reviews //////////////////////
if(isset($_POST["get_book_reviews"])){
    
    $b_id=$_POST["book_id"];
    
    $sql = "SELECT * FROM usercomments INNER JOIN users ON users.userID = usercomments.userID WHERE usercomments.bookID = '".$b_id."'";
         $result = mysqli_query($conn,$sql);
         $count = mysqli_num_rows($result);
         if($count < 1){
             echo"<div><p>No reviews.</p>";
         } else {
             
              while($row = mysqli_fetch_array($result)){
                $review_id = $row["reviewID"];
                $user_fname = $row["fname"];
                $user_lname = $row["lname"];
                $reviewDetails = $row["reviewDetails"];
                
                echo <<<REVIEW
                <div data-review-id="${review_id}" class="review">
                    <h3>${user_fname} ${user_lname}</h3>
                    <p>${reviewDetails}</p>
                </div>
                
                REVIEW;
             
            }
         }
}