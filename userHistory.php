<?php
  $matt = $_SESSION["matt"];

  ?>
  <html>
  <body>
    <h2>Printing History</h2>

    <center>
      <form action="" method="POST">
        <p>From: <input type="date" id="userhistoryfrom" name="userhistoryfrom" >&nbsp;
           To: <input type="date" id="userhistoryto" name="userhistoryto" >

        <p>Status:  <input type="radio" name="statusRequest" value="Completed" >Completed&nbsp;
                    <input type="radio" name="statusRequest" value="Cancelled">Cancelled&nbsp;
                    <input type="radio" name="statusRequest" value="Pending">Pending

        <p><input type="submit" name="submitHistoryFilter" onclick="fltHistTable()" value="Display All">

      </form>

      <p id="historyTable">
    </center>
  </body>
  </html>

<div id="historyTableFilter">
  <?php

  if(isset($_POST['submitHistoryFilter']))
  {

    $userhistoryfrom = $_POST['userhistoryfrom'];
    $userhistoryto = $_POST['userhistoryto'];
    if(isset($_POST['statusRequest'])){
      $statusRequest = $_POST['statusRequest'];
    }

    if(isset($_POST['statusRequest']))
    {
        if(isset($userhistoryto) && isset($userhistoryfrom))
        {
          $sql = "SELECT * FROM printing WHERE (matricNo = '$matt' AND status = '$statusRequest' AND dateRequest BETWEEN '$userhistoryfrom' AND '$userhistoryto' )";
        }
        else
        {
          $sql = "SELECT * FROM printing WHERE (matricNo = '$matt' AND status = '$statusRequest')";
        }
    }
    else
    {
      if(isset($userhistoryto) && isset($userhistoryfrom))
      {
        $sql = "SELECT * FROM printing WHERE (matricNo = '$matt' AND dateRequest BETWEEN '$userhistoryfrom' AND '$userhistoryto' )";
      }
      else
      {
        $sql = "SELECT * FROM printing WHERE (matricNo = '$matt')";
      }
      // code...
    }

    if((!empty($_POST['statusRequest']) || empty($_POST['statusRequest'])) && (empty($_POST['userhistoryfrom']) || empty($_POST['userhistoryto'])))
    {
      echo '<script>window.location.href ="useraccount.php";
      alert ("Please insert a valid date period.")</script>';
      exit;
    }


    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0)
    {
      ?>

          <table>
            <col width="5%">
            <col width="50%">
            <col width="30%">
            <col width="10%">

            <tr>
              <th>Printing ID</th>
              <th>Document</th>
              <th>Status</th>
            </tr>
        <?php
        while($row=mysqli_fetch_assoc($result))
        {
        ?>
            <tr>
              <td><?php echo "" .$row['printingID'] . "" ?></td>
              <td><?php echo "" .$row['file'] . "" ?></td>
              <td><?php echo "" .$row['status'] . "" ?></td>
            </tr>
      <?php
        }
        }
        else {
        /*  echo '<script>window.location.href="useraccount.php";
          alert ("No history found.")</script>';*/

        }

          ?>
      </table>

  <?php
    mysqli_close($conn);
  }
  ?>
</div>
