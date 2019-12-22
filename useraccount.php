<?php
include('connection.php');
include("headerUser.php");
$matt = $_SESSION["matt"];
?>

<header>
  <h1>PRINT WITH US</h1>
</header>

<div id="usernav">
  <button class="tablink" onclick="openPage('usercurrent', this, '#555')" >CURRENT</button>
  <button class="tablink" onclick="openPage('request', this, '#555')">REQUEST</button>
  <button class="tablink" onclick="openPage('userhistory',this, '#555')">HISTORY</button>
  <button class="tablink" onclick="openPage('userdetails', this, '#555')">EDIT DETAILS</button>

</div>

<center>
  <section>
    <article>
      <?php
        if(isset($_POST["updateprofile"]))
        {
          $name = $_POST['username'];
          $matricNo = $_POST['usermatrics'];
          $email = $_POST['useremail'];
          $usercontact = $_POST['usercontact'];
          $hostel = $_POST['hostel'];
          $sql = "UPDATE user SET name='$name',matricNo = '$matricNo',email = '$email', contactNo = '$usercontact', hostel='$hostel' WHERE matricNo = '$matt'";

          if ($conn->query($sql) === TRUE) {
             echo "<script type='text/javascript'>alert('Data $name Had Been Updated!');</script>";
          } else {
            echo "<script type='text/javascript'>alert('Error :  $sql <br> $conn->error');</script>";
          }
        }?>

      <div id="userdetails" class="tabcontent">
        <?php include("userDetail.php");?>
      </div>

      <div id="usercurrent" class="tabcontent">
        <?php include("userCurrent.php"); ?>
      </div>

      <div id="userhistory" class="tabcontent">
        <?php include("userHistory.php"); ?>
      </div>

      <div id="request" class="tabcontent">
        <?php include("requestToPrint.php"); ?>
      </div>

    </article>
  </section>
</center>
<?php include("footer.php"); ?>

</body>
</html>
