<?php
include('connection.php');
include("header.php");
$mat=$_SESSION['matric'];
if(isset($_POST['submit']))
{
  $pw=mysqli_real_escape_string($conn,$_POST['newPw']);
  $pw1=mysqli_real_escape_string($conn,$_POST['newPw1']);

  $query = "UPDATE user SET passWord='$pw' WHERE matricNo='$mat'";
  if(mysqli_query($conn, $query))
  {
    session_destroy();
    echo "<script>window.location.href='loginpage.php';
    alert('Password changed. Login to continue.')</script>";
  }
  else
  {
    echo "<script>alert('Password change failed.');</script>";
  }
}

  ?>

<center>
  <section>
    <article class="newpassword">
    <form action="setnewpassword.php" method="post" onsubmit="chkPassWord();">
      <h3>Reset password</h3>
      <p>New password: </p>
      <input type="password" name="newPw">
      <p>Confirm new password:</p>
      <input type="password" name="newPw1">
      <p></p>
      <input type="submit" name="submit"></input>
      <input type="reset" name="reset"></input>
    </form>
    </article>
  </section>
</center>

<?php include("footer.php"); ?>

</body>
</html>
