<script type="text/javascript" src="java.js">

  function myFunction() {
    var x = document.getElementById("myFile");
  }

</script>

</head>
<body>
  <nav>
    <div class="dropdown">
    <ul>

    <li><a href="loginpage.php">Log Out</a></li>

    <li><button onclick="myFunction()" class="dropbtn">Dropdown</button></li>
    <div id="myDropdown" class="dropdown-content">
      <a href="userhome.php">Home</a>
      <a href="useraccountprinter.php">Printer Account</a>
      <a href="useraccount.php">User Account</a>
      <a href="contactus.php">About Us</a>
    </div>
    </ul>
  </div>
  </nav>

  <header>
      <h1>E - Printing Services</h1>
  </header>

  <div id="usernav">
      <button class="tablink" id="defaultOpen" onclick="openPage('upload', this, '#9f455d')" >UPLOAD</button>
      <button class="tablink" onclick="openPage('requeststatus',this, '#9f455d')">REQUEST STATUS</button>
  </div>


  <div id="upload" class="tabcontent">
    <h2>Submit Printing Request</h2>
    <table>
      <col width="5%">
      <col width="50%">
      <col width="30%">

      <tr>
        <th>NO.</th>
        <th>Choose File/Document</th>
        <th>Select Printer</th>
        <th>Status</th>
        <th>Submit Request</th>
      </tr>

      <tr>
        <td>1</td>
        <td><center><input type="file" id="myFile"></center></td>
        <td><center><select>
                <option value="Printer 1">Printer 1</option>
                <option value="Printer 2">Printer 2</option>
                <option value="Printer 3">Printer 3</option>
            </select></center>
        </td>
        <td><center>Available</center></td>
        <td><form name="myform">
              <input type="button" id="submit" value="Submit">
        </td>
      </tr>


    </table>
  </div>

  <div id="requeststatus" class="tabcontent">
    <h2>Request Status</h2>
    <table>
      <col width="5%">
      <col width="50%">
      <col width="30%">

      <tr>
        <th>NO.</th>
        <th>Document</th>
        <th>Printer</th>
        <th>Status</th>
      </tr>

      <tr>
        <td>1</td>
        <td><center>Assignment_1.docx</center></td>
        <td><center>Printer 1</center></td>
        <td><center>Done</center></td>
      </tr>

      <tr>
        <td>1</td>
        <td><center>Lagu_UTeM.docx</center></td>
        <td><center>Printer 3</center></td>
        <td><center>In Progress</center></td>
      </tr>

<?php include("footer.php"); ?>
