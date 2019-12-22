<?php
include("connection.php");
if(isset($_POST['requestSubmit']))
{
    $target_dir = "Uploaded_Files/";
    $target_file = $target_dir . date("dmYhis") . basename($_FILES["fileToPrint"]["name"]);
    $filetype = pathinfo($target_file, PATHINFO_EXTENSION);

    if($filetype = "pdf" || $filetype = "txt" || $filetype = "doc" || $filetype = "docx")
    {

      if(move_uploaded_file($_FILES['fileToPrint']['tmp_name'], $target_file))
      {
        $files = date("dmYhis").basename($_FILES['fileToPrint']['name']);
      }
      else {
        echo '<script>window.location.href="useraccount.php";
        alert ("Failed to submit request. Please try again")</script>';
        exit;
      }
    }
    else {
      echo '<script>window.location.href="useraccount.php";
      alert ("Invalid File Type")</script>';
      exit;
    }

      $location = "Uploaded_Files/" .$files;
      $pagesPerSheet = $_POST['pagesPerSheet'];
      $orientation = $_POST['orientation'];
      $copies = $_POST['copies'];
      $printingColor = $_POST['printingColor'];
      $paperColor = $_POST['paperColor'];
      $otherService = $_POST['otherService'];
      $otherServiceCHK = "";
      $combine = $_POST['combine'];
      $collectionPlace = $_POST['collectionPlace'];
      $collectDate = $_POST['collectDate'];
      $remarks = $_POST['remarks'];
      $username = $_SESSION["matt"];
      $status = 'Pending';
      $dateRequest = date("Y-m-d");
      $printerid = $_POST['printer'];

      foreach($otherService as $otherServiceCHK1)
      {
        $otherServiceCHK .=$otherServiceCHK1. ",";
      }

          $mysql = "INSERT INTO printing (matricNo, file, pagesPerSheet, orientation, copies, color, paper, services, combine, collectionPlace, collectionDate, remarks, status, dateRequest, printerID)
          VALUES ('$username', '$location', '$pagesPerSheet', '$orientation', '$copies', '$printingColor', '$paperColor', '$otherServiceCHK', '$combine', '$collectionPlace', '$collectDate', '$remarks', '$status', '$dateRequest','$printerid')";


          if(mysqli_query($conn, $mysql))
          {

            echo '<script>window.location.href="useraccount.php";
            alert ("Request submit successfully.")</script>';
            //echo "done";
          }

          else {
            echo '<script>window.location.href="useraccount.php";
            alert ("Failed to submit request. Please try again")</script>';
          //  echo "Failed to insert data: ". mysqli_error($conn);
          }
  }

      mysqli_close($conn);
?>
