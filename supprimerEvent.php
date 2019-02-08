
//Permet de suprimer un evenement
<?php
$dbServername= "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "guardian";
$id = $_POST["categorie"];

$con = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
 
mysqli_select_db($con, "guardian");

$sql="DELETE FROM evenement WHERE id_event = ".$id;


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