<?php

if(isset($_POST['signUp']))
{
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $getmat=explode("@",$_POST['email'],2);
  $matricNo=$getmat[0];
  $ic=mysqli_real_escape_string($conn,$_POST['ic']);
  $pW =mysqli_real_escape_string($conn,$_POST['passWord']);
  $phone=mysqli_real_escape_string($conn,$_POST['phone']);
  $userName=mysqli_real_escape_string($conn,$_POST['userName']);
  $hostel=mysqli_real_escape_string($conn,$_POST['hostel']);
  $query = "SELECT * FROM user WHERE email='$email'";
  $results = mysqli_query($conn, $query);
	$count = mysqli_num_rows($results);

  if ($count > 0)
	{
    echo "<script>alert('This email has been successfully registered. Please log in to continue.');</script>";
  }
  else
  {
    $query = "INSERT INTO user (matricNo,icNo,passWord,name,email,contactNo,hostel)
    VALUES('$matricNo','$ic','$pW','$userName','$email','$phone','$hostel')";
    if(mysqli_query($conn, $query))
    {
      $_SESSION["matt"]=$matricNo;
      header('location: userhome.php');
    }

  }
}

if(isset($_POST['loginUser']))
{

  $matNo = strtolower(mysqli_real_escape_string($conn, $_POST['matricNo']));
  $pW =mysqli_real_escape_string($conn,$_POST['loginPW']);

  $query = "SELECT * FROM user WHERE matricNo='$matNo' AND passWord='$pW'";
  $results = mysqli_query($conn, $query);
	$count = mysqli_num_rows($results);

  if ($count == 1)
	{
    $_SESSION["matt"]=$matNo;
    header('location: userhome.php');

  }
  else
  {
    $query = "SELECT * FROM user WHERE matricNo='$matNo'";
    $results = mysqli_query($conn, $query);
  	$count = mysqli_num_rows($results);
    if($count==0)
    {
      echo "<script>alert('This matric no is not registered yet. Please sign up to continue.');</script>";
    }
    else
    {
      echo "<script>alert('Incorrect password. Please try again.');</script>";
    }
  }
}
 ?>
