<?php

  $matt = $_SESSION["matt"]. '';
  $sql2 = "SELECT * FROM printer where matricNo = '$matt'";
  $result2 = mysqli_query($conn,$sql2);
  if(mysqli_num_rows($result2) > 0)
  {
    while($row2=mysqli_fetch_assoc($result2))
    {
      $printerid = $row2['printerID'];
  $sql = "SELECT * FROM printing WHERE (printerID = '$printerid' AND status !='completed' AND status != 'cancelled')";
  $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0)
    {?>
    <div id="currentTable">
      <table id="filterHistoryTable">
        <col width="5%">
        <col width="50%">
        <col width="25%">
        <col width="15%">

        <tr>
          <th>Printing ID</th>
          <th>Document</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
    <?php

        while($row=mysqli_fetch_assoc($result))
        {
          ?>
          <tr>
            <td><?php echo "" .$row['printingID'] . "" ?></td>
            <td><?php echo "" .$row['file'] . "" ?></td>
            <td><?php echo "" .$row['status'] . "" ?></td>

            <td><button><a target="_blank" style="text-decoration: none" href="PrintAction.php?id=<?php echo $row['printingID']; ?> ">Print</a></button>
                <!--<button type="button" onclick="window.open('file:///C:/NewPDF.pdf');">View</button>-->
                <button><a onclick="return confirm('Confirm cancel this printing?')" style="text-decoration: none" href="PrintCancel.php?id=<?php echo $row['printingID']; ?>   ">Cancel</a></button>
				<button><a href="<?php echo ''.$row['file']. ''; ?>">Download</a></td></button></td>
          </tr>
<?php
          }
      }
    }
  }

    else{
      echo "<h3>No document to be printed. </h3>". mysqli_error($conn);
    }?>
      </table>
</div>
