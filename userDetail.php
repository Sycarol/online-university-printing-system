<?php
        $sql = "SELECT * FROM user WHERE matricNo = '$matt'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
?>
<form action="useraccount.php" name="usereditdetails" method="post">
  <h2>Personal Details</h2>
  <table class="usereditdetailstable">
    <col width="20%">
    <col width="60%">

    <tr>
      <td>Matrics Number </td>
      <td><input type="text" name="usermatrics" size="50" required value="<?php echo $row['matricNo'] ?>" readonly style="background-color:gray;cursor:default"></td>
    </tr>

    <tr>
    <td>Email </td>
    <td><input type="email" name="useremail" size="50" required value="<?php echo $row['email'] ?>" readonly style="background-color:gray;cursor:default"></td>
    </tr>

    <tr>
      <td>Name </td>
      <td><input type="text" name="username" size="50" required value="<?php echo $row['name'] ?>"></td>
    </tr>

    <tr>
      <td>Contact Number </td>
      <td><input type="text" name="usercontact" size="50" required value="<?php echo $row['contactNo'] ?>"></td>
    </tr>

    <tr>
      <td>Hostel </td>
      <td><input type="radio" name="hostel" value="satria" <?php if($row["hostel"]=="satria"){ echo "checked"; }  ?>>Satria
        <input type="radio" name="hostel" value="lestari" <?php  if($row["hostel"]=="lestari"){ echo "checked"; }  ?>>Lestari</td>
    </tr>
  </table>
  <input type="submit" name="updateprofile">
</form>
  <?php } } ?>
