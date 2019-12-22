<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>E-Printing System</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/css.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="java.js"></script>
</head>

<body>
  <div class="container">
    <img src="images/home-image-new1.png" alt="E-Printing Service" style="width:100%">
    <button class="btn"><a href="userhome.php">Home</a></button>
    <button class="btn1"><a href="aboutusUser.php">About Us</a></button>
    <div class="dropbtn">
      <button >Printing Services</button>
      <div class="dropdown-content">
        <button><a href="useraccount.php">Print With Us</a></button>
        <button><a href="useraccountprinter.php">Print For Us</a></button>
      </div>
    </div>
    <button class="btn3"><a href="MainPage.php"><img src="images/logout.png" alt="Log Out"></a></button>
    <form class="logoutform" action="logout.php" method="post">
      <button class="btn3" name="logout"><img src="images/logout.png" alt="Log Out"></button>
    </form>
  </div>
