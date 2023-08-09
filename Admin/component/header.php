<!DOCTYPE html>
<html lang="en">

 <?php
if (!isset($_SESSION)) {
  session_start();
}


if (isset($_SESSION['login'])) {
  $email = $_SESSION['email'];
} else {
  echo '<script>location.href="../index.php"</script>';
}

?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <title>ADMIN</title>
  <style>
    .sidebar .fas {
      margin-right: 16px;
    }
  </style>
</head>

<body>

  <div class="sidebar">
    <header>Admin Dashboard</header>
    <ul>
      <li><a href="./hero.php">Hero section</a></li>
      <li><a href="./section2.php">section-2 seller</a></li>
      <li><a href="./section3.php">section 3</a></li>
      <li><a href="./section4.php">section 4</a></li>
     
      <li><a href="./logout.php" class="out">Sign Out</a></li>
    </ul>
  </div>
