<?php
include("connection.php");
$matt = $_SESSION["matt"]. '';
$printingID = $_GET["id"];
$sql = "UPDATE printing SET status='Completed' WHERE (printingID = '$printingID' AND status = 'Pending')";
$result = mysqli_query($conn, $sql);

if($result)
{
  echo '<script>window.location.href="useraccountprinter.php";
  alert ("Successfully printed the document")</script>';
  //echo '<script>window.location.href="useraccount.php";
  //alert ("Successfully cancelled document with printing ID: " .$printingID. ".")</script>';
}

else {
  echo '<script>window.location.href="useraccount.php";
  alert ("Failed " .mysqli_error($conn). ".")</script>';
}



?>
