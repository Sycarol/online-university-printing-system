<?php
$matt = $_SESSION["matt"];
        $sql = "SELECT * FROM printer WHERE matricNo = '$matt'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            $paper2 = explode(",",$row['paper']);
            $other2 = explode(",",$row['other']);
?>
<form action="useraccountprinter.php" name="usereditdetails" method="post">
  <h2>Printer Details</h2>
  <table class="usereditdetailstable">
    <col width="10%">
    <col width="70%">
    <tr>
      <input type="text" name="printerid" hidden value="<?php echo $row['printerID'];?>">
      <td>Printer Name </td>
      <td><input type="text" name="username" required size="50" value="<?php echo $row['name'] ?>"></td>
    </tr>

    <tr>
      <td>Matrics Number </td>
      <td><input type="text" name="usermatrics" size="50" value="<?php echo $row['matricNo'] ?>" readonly></td>
    </tr>

    <tr>
      <td>Location </td>
      <td>
        Hostel:
        <select name="hostel">
          <option value="lestari" <?php if($row["hostel"]=="lestari"){ echo "selected"; }  ?>>Lestari</option>
          <option value="satria" <?php if($row["hostel"]=="satria"){ echo "selected"; }  ?>>Satria</option>
        </select>

        Block:
        <select name="block">
          <option value="a1" <?php if($row["block"]=="a1"){ echo "selected"; }  ?>>A1</option>
          <option value="a2" <?php if($row["block"]=="a2"){ echo "selected"; }  ?>>A2</option>
          <option value="b1" <?php if($row["block"]=="b1"){ echo "selected"; }  ?>>B1</option>
          <option value="b2" <?php if($row["block"]=="b2"){ echo "selected"; }  ?>>B2</option>
          <option value="jebat" <?php if($row["block"]=="jebat"){ echo "selected"; }  ?>>Jebat</option>
          <option value="tuah" <?php if($row["block"]=="tuah"){ echo "selected"; }  ?>>Tuah</option>
          <option value="lekir" <?php if($row["block"]=="lekir"){ echo "selected"; }  ?>>Lekir</option>
          <option value="lekiu" <?php if($row["block"]=="lekiu"){ echo "selected"; }  ?>>Lekiu</option>
          <option value="kasturi" <?php if($row["block"]=="kasturi"){ echo "selected"; }  ?>>Kasturi</option>
        </select>

        Floor:
        <select name="floor">
          <option value="1" <?php if($row["floors"]=="1"){ echo "selected"; }  ?>>1</option>
          <option value="2" <?php if($row["floors"]=="2"){ echo "selected"; }  ?>>2</option>
          <option value="3" <?php if($row["floors"]=="3"){ echo "selected"; }  ?>>3</option>
          <option value="4" <?php if($row["floors"]=="4"){ echo "selected"; }  ?>>4</option>
          <option value="5" <?php if($row["floors"]=="5"){ echo "selected"; }  ?>>5</option>
          <option value="6" <?php if($row["floors"]=="6"){ echo "selected"; }  ?>>6</option>
          <option value="7" <?php if($row["floors"]=="7"){ echo "selected"; }  ?>>7</option>
          <option value="8" <?php if($row["floors"]=="8"){ echo "selected"; }  ?>>8</option>
          <option value="9" <?php if($row["floors"]=="9"){ echo "selected"; }  ?>>9</option>
        </select>

        <br>
        Room Number:
        <input type="text" name="roomnumber" size="1" value="<?php echo $row['roomnumber'] ?>">
    </td>
    </tr>

    <tr>
      <td>Status </td>
      <td><input type="radio" name="status" value="available" <?php if($row["status"]=="available"){ echo "checked"; }  ?>>Available
        <input type="radio" name="status" value="busy" <?php if($row["status"]=="busy"){ echo "checked"; }  ?>>Busy
        <input type="radio" name="status" value="idle" <?php if($row["status"]=="idle"){ echo "checked"; }  ?>>Idle</td>
    </tr>

    <tr>
      <td>Printer Type</td>
      <td><input type="radio" name="printer" value="personal" <?php if($row["printertype"]=="personal"){ echo "checked"; }  ?>>Personal/Home
        <input type="radio" name="printer" value="business" <?php if($row["printertype"]=="business"){ echo "checked"; }  ?>>Business</td>
    </tr>

    <tr>
      <td>Paper</td>
      <td><input type="checkbox" name="paper[]" value="a4" <?php if (in_array("a4", $paper2)){echo "checked";}  ?>>A4
        <input type="checkbox" name="paper[]" value="a4colours" <?php if(in_array("a4colours", $paper2)){ echo "checked"; }  ?>>Coloured A4
        <input type="checkbox" name="paper[]" value="card" <?php if(in_array("card", $paper2)){ echo "checked"; }  ?>>Card Stock
        <input type="checkbox" name="paper[]" value="cover" <?php if(in_array("cover", $paper2)){ echo "checked"; }  ?>>Plastic Cover</td>
    </tr>

    <tr>
      <td>Other Services</td>
      <td><input type="checkbox" name="service[]" value="bind" <?php if(in_array("bind", $other2)){ echo "checked"; }  ?>>Bind
        <input type="checkbox" name="service[]" value="tapebind" <?php if(in_array("tapebind", $other2)){ echo "checked"; }  ?>>Tape Bind
        <input type="checkbox" name="service[]" value="stapler" <?php if(in_array("stapler", $other2)){ echo "checked"; }  ?>>Stapler</td>
    </tr>

    <tr>
      <td colspan="2"><input type="submit" name="updateprofile" value="Update">
      <input type="submit" name="deleteprofile" value="Delete"></td>
    </tr>


    <!-- printer management -->

  </table>
</form>
<?php }}else{
  echo "<h3>No printer registered yet. Register a printer to provide printing service now!</h3>";
} ?>
