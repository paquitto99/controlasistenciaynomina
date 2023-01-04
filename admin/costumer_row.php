<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT *, costumers.id as cosid FROM costumers LEFT JOIN position ON position.id=costumers.position_id LEFT JOIN schedules ON schedules.id=costumers.schedule_id WHERE costumers.id = '$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>