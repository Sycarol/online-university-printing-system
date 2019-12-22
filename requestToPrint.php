
<html>
<body>


<h2>Submit Printing Request</h2>

<form action="uploadRequest.php" method="POST" enctype="multipart/form-data">
  <table style="border: 1px solid black;">
    <tr><th colspan ="2">Upload File</th></tr>
    <tr><td>Printer Selection</td><td>
      <select name="printer">
        <?php
                $sql = "SELECT * FROM printer WHERE status = 'available'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
        ?>
        <option value="<?php echo $row['printerID'];?>"><?php echo $row['name'];?></option>
      <?php }}?>
      </select>
    </td></tr>
    <tr><td>Upload Your File Here</td><td><input type="file" name="fileToPrint" required></td></tr>
    <tr><td>Pages per sheet</td> <td><input type="number" name = "pagesPerSheet" min="1" max="16" value="1"></td></tr>

    <tr><td>Orientation</td>     <td><input type="radio" name="orientation" value="Horizontal" checked required>Horizontal
                                <input type="radio" name="orientation" value="Vertical">Vertical</td></tr>

    <tr><td>Copies</td> <td><input type="number" name = "copies" min="1" max="10" value="1"></td></tr>

    <tr><td>Color</td>  <td><input type="radio" name="printingColor" value="Black and White" checked required>Black and White
                            <input type="radio" name="printingColor" value="Coloured">Coloured
                        </td></tr>

    <tr><td>Paper</td>  <td><input type="radio" name="paperColor" value="Normal Paper" checked>Normal
                            <input type="radio" name="paperColor" value="Coloured Paper">Colour Paper
                          </td></tr>

    <tr><td>Binding Method</td>  <td><input type="radio" name="combine" value="None" checked>None
                            <input type="radio" name="combine" value="Ring binding">Ring binding
                            <input type="radio" name="combine" value="Tape binding">Tape binding
                            <input type="radio" name="combine" value="Staple">Staple
                          </td></tr>

    <tr><td>Other Services</td> <td><input type="checkbox" name="otherService[]" value="Plastic cover" checked>Plastic Cover
                                </td></tr>

    <tr><td>Collection</td>     <td><input type="radio" name="collectionPlace" value="Satria" checked required>Satria
                                <input type="radio" name="collectionPlace" value="Lestari">Lestari</td></tr>

    <tr><td>Date Collection</td>  <td><input type="date" min=<?php echo '' .date("Y-m-d"). ''?> name="collectDate" required></td></tr>
    <tr><td>Remarks</td><td><textarea name="remarks" rows="3" cols="19"></textarea></td></tr>
      </table><br>
    <input type="submit" name="requestSubmit">
    <input type="reset">
</form>


</body>
</html>
