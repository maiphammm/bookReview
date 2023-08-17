<?php
session_start();
//$_SESSION["uid"] ="123";

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
                
                echo "
                    <div class='col-sm-3' >
                        <div class='panel-body'> <a href='bookDetails.php?id=$bookID'><img src='images/$bookImg' class='img-responsive' style='width:80%' alt='Image'></a></div>
                        
                        <div class='panel-heading'>$bookName</div>
                      </div>
             
             ";   
                  
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
               
                echo "
                    <div class='col-sm-3' >
                        <div class='panel-body'> <a href='bookDetails.php?id=$bookID'><img src='images/$bookImg' class='img-responsive' style='width:60%' alt='Image'></a></div>
                      </div>
             <br><br><br>
             ";   
                  
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

///////////////////List//////////////////////

 if(isset($_POST["addbook"])){
     $b_id=$_POST["BookID"];
     $user_id=$_SESSION["userID"];
     
     $sql="SELECT * FROM mylist WHERE bookID = '$b_id' AND userID='$user_id'";
     $result= mysqli_query($conn,$sql);
     $count = mysqli_num_rows($result);
     if($count>0){
         echo"Book added already!!!";
     } else {
         $sql= "SELECT * FROM mylist WHERE bookID = '$b_id'";
        
         $results= mysqli_query($conn,$sql);
         $row = mysqli_fetch_array($results);
         
         $bookID = $row["bookID"];
         $bookName = $row["bookName"];
         $bookAuthor = $row["bookAuthor"];
         $bookImg = $row["bookImg"];
         $bookDetail = $row["bookDetail"]; 
         $bookType = $row["bookType"];
         
         
         
         $sql_insert= "INSERT INTO mylist (favID,bookID,bookName,bookAuthor,bookImg,bookType,userID) VALUES (NULL,'".$bookID."', '".$bookName."', '".$bookAuthor."', '".$bookImg."', '".$bookType."', '".$userID."')";
         
         $newResult = myspli_query($conn,$sql_insert);
         if(!$newResult){
             echo "<p>something went wrong: </p>";
         }else {
             echo"Book added to My List!!!";
         }
     }
 }






?>