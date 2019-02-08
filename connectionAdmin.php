
//Permet de rajouter un evenement

<?php
$dbServername= "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "guardian";

$con = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
 
mysqli_select_db($con, "guardian");

$sql="INSERT INTO evenement (id_event, nom, date, prix)

VALUES

('$_POST[id_event]','$_POST[fname]','$_POST[ldate]','$_POST[lprix]')";

if (!mysqli_query($con,$sql))
  {
  printf("Errormessage: %s\n", mysqli_error($con));
  }

?>
<script type="text/javascript">
			window.location.href="index.html";
	</script>
</body>
</html>