<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/css.css">
</head>
<body>
<?php

echo "<center><section style='background-color:#1b2952; padding:50px;'>";
echo "<article><h2>Logging you out</h2>";
echo "<h3>Thanks for printing with us!</h3>";
echo "<p>Redirecting to home page...</p>";
echo "</center></section></article>";
session_start();
if(isset($_POST['logout']))
{
  	session_destroy();
  	echo "<meta http-equiv=\"refresh\" content=\"3;URL=MainPage.php\">";
}
 include("footer.php");
?>
</body>
</html>
