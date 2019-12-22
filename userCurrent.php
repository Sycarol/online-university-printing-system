<?php
  $matt = $_SESSION["matt"]. '';
  $sql = "SELECT * FROM printing WHERE (matricNo = '$matt' AND status !='completed' AND status != 'cancelled')";
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

            <td><button><a target="_blank" style="text-decoration: none" href="requestReceipt.php?id=<?php echo $row['printingID']; ?> ">View Summary</a></button>
                <button><a onclick="return confirm('Confirm cancel this printing?')" style="text-decoration: none" href="requestCancel.php?id=<?php echo $row['printingID']; ?>   ">Cancel Request</a></button></td>
          </tr>
<?php
          }
      }

    else{
      echo "<h3>No current document. Go to REQUEST tab to upload your document.</h3> ". mysqli_error($conn);
    }?>
      </table>
</div>
