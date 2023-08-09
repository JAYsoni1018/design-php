<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-com </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="Css/style.css">
</head>

<body>
    <!-- header start -->
    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-splotch"></i> design </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#services">services</a>
            <a href="#features">features</a>
           

            <!-- <a href="./Admin/index.php" class="btn">Admin</a> -->
            <?php
                    session_start();
                   
                   if(isset($_SESSION['login']))
                   {
                     echo '<a href="./Admin/index.php" class="btn">Admin</a>';
                     echo '<a href="./logout.php" class="btn">LogOut</a>';
                   }
                   else{
                       echo '   <a href="./login.php" class="btn">Login</a>';
                   }
                   
                   ?> 
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
         
       

    </header>
    <!-- header end -->