<?php
try{
    $conn = new PDO(
		"mysql:host=localhost;port=3306;dbname=guardian",
		"root",
		""
	);

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	if($_SERVER["REQUEST_METHOD"] == "GET"){
		$stmt = $conn->prepare("SELECT id_event AS id, nom FROM evenement");
		$stmt->execute();

		$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
		header("Content-Type: application/json");
		echo json_encode($categories);
	}
}
catch(PDOException $e){
	echo "Erreur: ".$e->getMessage();
}

$conn = null;
?>