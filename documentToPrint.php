<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header>

    </header>
    <title>Travaux Pratiques : l'interface radio GSM </title>
    <p>Il est inutile de recopier les traces ! Il est demandé de rédiger des réponses qui expliquent ou commentent de façon <br>
      synthétique ce qui est constaté. </p>
      <p>1. Analyse d’un scénario de mobilité </p>

      <?php

      include "connection.php";
      $matt = $_SESSION["matt"]. '';
      $sql = "SELECT * FROM printing WHERE (matricNo = '$matt' AND status !='completed' AND status != 'cancelled')";
      $result = mysqli_query($conn, $sql);

          while($row=mysqli_fetch_assoc($result))

      ?>
          {

              <button><a target="_blank" style="text-decoration: none" href="PrintAction.php?id=<?php echo $row['printingID']; ?> ">View</a></button>
          }


      <?php

          //else{
          //  echo "No document to be printed. ". mysqli_error($conn);
        //  }
      ?>

  </body>
</html>
