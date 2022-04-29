<?php

session_start();

// check if the user is already logged in
if (isset($_SESSION['email'])) 
{
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Side</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"
    />

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

</head>

<script src="validation.js"></script>

<style>

    *{

        margin: 0;
        padding: 0;
        box-sizing: border-box;
        list-style: none;
        text-decoration: none;
        

    }

    body{

        background: #f3f5f9;

    }

    .wrapper{

        display: flex;
        position: relative;

    }

    .wrapper .sidebar{

        position: fixed;
        width: 250px;
        height: 100%;
        background: #4b4276;
        padding: 30px 0;

    }

    .wrapper .sidebar h2{
    
        color: #fff;
        text-transform: uppercase;
        text-align: center;
        margin-bottom: 30px;
    
    }

    .wrapper .sidebar ul li{

        padding: 15px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        border-top: 1px solid rgba(255, 255, 255, 0.05);

    }

    .wrapper .sidebar ul li a{

         
        color: #bdb8d7;
        display: block;

    }

    .wrapper .sidebar ul li a .fas{

        width: 25px;


    }

    .wrapper .sidebar ul li:hover{

        background: #594f8d;

    }

    .wrapper .sidebar ul li:hover a{


        color: #fff;

    }

    .wrapper .main_content{

        width: 100%;
        margin-left: 250px;

    }

    .wrapper .main_content .header{

        padding: 20px;
        background: #fff;
        color: #717171;
        border-bottom: 1px solid #e0e4e8;

    }

    .wrapper .main_content .info{

        margin: 20px;
        color: #717171;
        line-height: 25px;

    }

    .wrapper .main_content .info div{

        margin-bottom: 20px;

    }

</style>


<body>
    

    <div class="wrapper">


        <div class="sidebar">

            <h2>
                User Profile
            </h2>

            <ul>

                <li>
                    <a href="#"><i class="fas fa-solid fa-user"></i>My Profile</a>
                </li>

                <li>
                    <a href="#"><i class="fas fa-light fa-book-open"></i>View Books</a>
                </li>

                <li>
                    <a href="search_books.php"><i class="fas fa-solid fa-search"></i>Search Books</a>
                </li>

                <li>
                    <a href="#"><i class="fas fa-solid fa-list"></i>View Categories</a>
                </li>

            </ul>

            

        </div>



        <div class="main_content">

            <!-- <div class="header"> -->

                

                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                <a class="navbar-brand" href="#">Danish</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <!-- <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="books.php">Books</a>
            </li> -->
          <li class="nav-item">

          <li class="nav-item">
            <a href="logout.php" class="nav-link">Sign-Out</a>
          </li>
          

        
            
              
            
          


        </ul>

      </div>
    </div>
  </nav>


            <!-- </div> -->

            <div class="info" id="section1">

                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum assumenda tenetur sed suscipit! Perferendis distinctio ratione debitis atque temporibus. Maxime magni fugiat aliquam possimus vero, id sint. Officia, distinctio magni!</div>

            </div>

        </div>



    </div>

    <script src="./script.js"></script>
</body>
</html>