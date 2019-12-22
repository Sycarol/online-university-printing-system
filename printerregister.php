<?php
        $sql = "SELECT * FROM user WHERE matricNo = '$matt'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
?>
<form action="useraccountprinter.php" name="usereditdetails" method="post">
  <h2>Register Printer</h2>
  <table class="usereditdetailstable">
    <col width="10%">
    <col width="70%">
    <tr>
      <td>Printer Name </td>
      <td><input type="text" name="username" size="50" required></td>
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
          <option value="lestari">Lestari</option>
          <option value="satria">Satria</option>
        </select>

        Block:
        <select name="block">
          <option value="a1">A1</option>
          <option value="a2">A2</option>
          <option value="b1">B1</option>
          <option value="b2">B2</option>
          <option value="jebat">Jebat</option>
          <option value="tuah">Tuah</option>
          <option value="lekir">Lekir</option>
          <option value="lekiu">Lekiu</option>
          <option value="kasturi">Kasturi</option>
        </select>

        Floor:
        <select name="floor">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
        </select>

        <br>
        Room Number:
        <input type="text" name="roomnumber" size="1">

    </td>
    </tr>

    <tr>
      <td>Status </td>
      <td><input type="radio" name="status" value="available">Available
        <input type="radio" name="status" value="busy">Busy
        <input type="radio" name="status" value="idle">Idle</td>
    </tr>

    <tr>
      <td>Printer Type</td>
      <td><input type="radio" name="printer" value="personal">Personal/Home
        <input type="radio" name="printer" value="business">Business</td>
    </tr>

    <tr>
      <td>Paper</td>
      <td><input type="checkbox" name="paper[]" value="a4">A4
        <input type="checkbox" name="paper[]" value="a4colours">Coloured A4
        <input type="checkbox" name="paper[]" value="card">Card Stock
        <input type="checkbox" name="paper[]" value="cover">Plastic Cover</td>
    </tr>

    <tr>
      <td>Other Services</td>
      <td><input type="checkbox" name="service[]" value="bind">Bind
        <input type="checkbox" name="service[]" value="tapebind">Tape Bind
        <input type="checkbox" name="service[]" value="stapler">Stapler</td>
    </tr>

    <tr>
      <td colspan="2"><input type="submit" value="Register" name="register"></td>

    </tr>


    <!-- printer management -->

  </table>
</form>
<?php }}?>
