<?php
include('connection.php');
include("headerUser.php");
$matt = $_SESSION["matt"];
 ?>

<header>
  <h1>PRINT FOR US</h1>
</header>
<div id="usernav">
  <button class="tablink" onclick="openPage('printingrequest',this, '#555')">REQUESTS</button>
  <button class="tablink" onclick="openPage('userdetails', this, '#555')">EDIT DETAILS</button>
  <button class="tablink" onclick="openPage('register', this, '#555')">REGISTER PRINTER</button>
  <button class="tablink" onclick="openPage('userhistory',this, '#555')">HISTORY</button>
</div>

<center>
  <section>
    <article>
      <?php
        if(isset($_POST["register"]))
        {
          $name = $_POST['username'];
          $matricNo = $_POST['usermatrics'];
          $hostel = $_POST['hostel'];
          $block = $_POST['block'];
          $floors = $_POST['floor'];
          $roomnumber = $_POST['roomnumber'];
          $status = $_POST['status'];
          $printer = $_POST['printer'];
          $paper = $_POST['paper'];
          $chk="";
      foreach($paper as $chk1)
         {
            $chk .= $chk1.",";
         }
          $service = $_POST['service'];
          $chk2="";
      foreach($service as $chk3)
         {
            $chk2 .= $chk3.",";
         }

          $sql = "INSERT INTO printer (matricNo,name,hostel,status,printertype,paper,other,block,floors,roomnumber)
          VALUES('$matt','$name','$hostel','$status','$printer','$chk','$chk2','$block','$floors','$roomnumber')";

          if ($conn->query($sql) === TRUE) {
             echo "<script type='text/javascript'>alert('Data $name Had Been Register!');</script>";
          } else {
            echo "<script type='text/javascript'>alert('Error :  $sql <br> $conn->error');</script>";
          }
        }
          if(isset($_POST["updateprofile"]))
          {
            $printerid = $_POST['printerid'];
            $name = $_POST['username'];
            $matricNo = $_POST['usermatrics'];
            $hostel = $_POST['hostel'];
            $block = $_POST['block'];
            $floors = $_POST['floor'];
            $roomnumber = $_POST['roomnumber'];
            $status = $_POST['status'];
            $printer = $_POST['printer'];
            $paper = $_POST['paper'];
            $chk="";
        foreach($paper as $chk1)
           {
              $chk .= $chk1.",";
           }
            $service = $_POST['service'];
            $chk2="";
        foreach($service as $chk3)
           {
              $chk2 .= $chk3.",";
           }
            $sql = "UPDATE printer SET name='$name',matricNo = '$matricNo', hostel='$hostel',
            status='$status',printertype='$printer',paper = '$chk',other = '$chk2',block = '$block',roomnumber = '$roomnumber', floors = '$floors'
             WHERE printerID = '$printerid'";

            if ($conn->query($sql) === TRUE) {
               echo "<script type='text/javascript'>alert('Data $name Had Been Updated!');</script>";
            } else {
              echo "<script type='text/javascript'>alert('Error :  $sql <br> $conn->error');</script>";
            }
          }
          ?>
      <?php
      if(isset($_POST["deleteprofile"]))
      {
        $printerid = $_POST['printerid'];
        $name = $_POST['username'];

        $sql = "DELETE from printer  WHERE printerID = '$printerid'";
        $result = $conn->query($sql);


        if ($conn->query($sql) === TRUE) {
          echo "<script type='text/javascript'>alert('Data $name Had Been Deleted!');</script>";
          echo "<p>";
        }
        else {
          echo "<p>";
          echo "<p style='text-align:center'>Error : " .$sql."<br>".$conn->error;
          echo "<p>";
        }
      }
      ?>


        <div id="printingrequest" class="tabcontent">
          <?php include("userCurrentRequestPrinter.php");?>
        </div>

      <div id="userhistory" class="tabcontent">
          <?php include("userHistoryPrinter.php");?>
      </div>

      <div id="userdetails" class="tabcontent">
        <?php include("printerdetails.php");?>
      </div>

      <div id="register" class="tabcontent">
        <?php include("printerregister.php");?>
      </div>
    </article>
  </section>
</center>

<?php include("footer.php"); ?>
