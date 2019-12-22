<?php
include("connection.php");
$printingID = $_GET["id"];
$sql = "UPDATE printing SET status='Cancelled' WHERE (printingID = '$printingID' AND status = 'Pending')";
$result = mysqli_query($conn, $sql);

if($result)
{
  echo '<script>window.location.href="useraccount.php";
  alert ("Successfully cancelled document")</script>';
  //echo '<script>window.location.href="useraccount.php";
  //alert ("Successfully cancelled document with printing ID: " .$printingID. ".")</script>';
}

else {
  echo '<script>window.location.href="useraccount.php";
  alert ("Failed " .mysqli_error($conn). ".")</script>';
}
?>
