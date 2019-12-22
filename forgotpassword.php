<?php
include('connection.php');
include("header.php");

if(isset($_POST['submit']))
{
  $mat=mysqli_real_escape_string($conn,$_POST['forgotMatric']);
  $ic=mysqli_real_escape_string($conn,$_POST['forgotIc']);
  $query = "SELECT * FROM user WHERE matricNo='$mat' AND icNo='$ic'";
  $results = mysqli_query($conn, $query);
  $count = mysqli_num_rows($results);

  if($count==0)
  {
    echo "<script>alert('Wrong matric number or IC number.');</script>";
  }
  else
  {
    session_start();
    $_SESSION['matric']=$mat;
    header('location:setnewpassword.php');
  }
}

  ?>

<center>
<section>
  <article class="forgotpassword">
    <form action="forgotpassword.php" method="post">
      <p>Enter your Matric No: </p>
      <input type="text" name="forgotMatric" required pattern="[\bB0-9|\bD0-9|\bb0-9|\bd0-9]{10}">
      <p>Enter your IC number: </p>
      <input type="text" name="forgotIc" placeholder="Numbers only" required pattern="[0-9]{12}">
      <p></p>
      <button type="submit" name="submit">Submit</button>
      <button type="reset" name="reset">Reset</button>
    </form>
  </article>
</section>
</center>

<?php include("footer.php"); ?>

</body>
</html>
