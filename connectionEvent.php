<?php
$dbServername= "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "guardian";

$con = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
 
mysqli_select_db($con, "guardian");

$sql="INSERT INTO facture (prenom, nom, email, id_event)

VALUES

('$_POST[fname]','$_POST[lname]','$_POST[lemail]','$_POST[id_event]')";

if (!mysqli_query($con,$sql))
  {

  }

?>
<script type="text/javascript">
			window.location.href="index.html";
	</script>
</body>

</html>