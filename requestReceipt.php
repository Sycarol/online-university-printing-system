<?php
  include("connection.php");
?>
<head>
  <title>Printing Receipt</title>
</head>
  <div id="receipt">

    <center>
    <table id="filterHistoryTable" style="border:1px solid black">

      <img src="utemlogo.png" width="10%" height="10%">
      <h3>Thanks for printing with E-Printing UTEM</h3>
      <p>Here is your printing receipt


<?php
  $printingID = $_GET["id"];
  $sql = "SELECT * FROM printing WHERE printingID = '$printingID'";
  $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
          ?>
          <tr><td>Printing ID:</td><td><?php echo "$printingID";   ?></td></tr>
          <tr><td>Submission Date:</td><td><?php echo "".$row['dateRequest']."";   ?></td></tr>
          <tr><td>Document:</td><td><?php echo "" .$row['file']. "";   ?></td></tr>
          <tr><td>Pages Per Sheet:</td><td><?php echo "" .$row['pagesPerSheet']. "";   ?></td></tr>
          <tr><td>Orientation:</td><td><?php echo "" .$row['orientation']. "";   ?></td></tr>
          <tr><td>Copies:</td><td><?php echo "" .$row['copies']. "";   ?></td></tr>
          <tr><td>Colour:</td><td><?php echo "" .$row['color']. "";   ?></td></tr>
          <tr><td>Paper:</td><td><?php echo "" .$row['paper']. "";   ?></td></tr>
          <tr><td>Services:</td><td><?php echo "" .substr($row['services'], 0, -1). "";   ?></td></tr>
          <tr><td>Binding Method:</td><td><?php echo "" .$row['combine']. "";   ?></td></tr>
          <tr><td>Collection Place:</td><td><?php echo "" .$row['collectionPlace']. "";   ?></td></tr>
          <tr><td>Collection Date:</td><td><?php echo "" .$row['collectionDate']. "";   ?></td></tr>
<?php
        }
    }
    else {
      echo "Failed. ".mysqli_error($conn);
    }
?>
        </table>
      </center>
  </div>
