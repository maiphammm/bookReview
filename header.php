
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
  <style>
    body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: #555555;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
    background-color: #1abc9c; /* Green */
    color: #ffffff;
  }
  .bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
  }
  .bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
  }
  .bg-4 { 
    background-color: #2f2f2f; /* Black Gray */
    color: #fff;
  }
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
  }
  .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 20px;
    letter-spacing: 5px;
  }  
  .navbar-nav  li a:hover {
    color: #1abc9c !important;
  }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Book Club</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Category
        <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#" class="category" cid="fiction" onclick="cat_list();" >Fiction</a></li>
                <li><a href="#" class="category" cid="fantasy" onclick="cat_list();" >Fantasy</a></li>
                <li><a href="#" class="category" cid="horror" onclick="cat_list();" >Horror</a></li>
                <li><a href="#" class="category" cid="childrens" onclick="cat_list();" >Childrens</a></li>
                <li><a href="#" class="category" cid="historical" onclick="cat_list();" >Historical</a></li>
                <li><a href="#" class="category" cid="romance" onclick="cat_list();" >Romance</a></li>
                <li><a href="#" class="category" cid="science" onclick="cat_list();" >Science</a></li>
                <li><a href="#" class="category" cid="mystery" onclick="cat_list();" >Mystery</a></li>
            </ul>
        </li>
        <li><a href="favList.php">My List</a></li>
      </ul>
      <form class="navbar-form navbar-left" action="search_page.php" method="post">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search.." name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
       </form>
    
        
        
      <ul class="nav navbar-nav navbar-right">
        <?php
          if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
              echo '
              <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              <li><a href="formnew.php"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>';
          }
          else{
              echo sprintf('<li><a href="edituser.php?id=%d"><span class="glyphicon glyphicon-user"></span> ', $_SESSION["userID"]);
              echo $_SESSION["userName"];
              echo '</a></li>';
              echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>';
          }
        ?>
      </ul>
    </div>
  </div>
</nav>
  
</body>
</html>
