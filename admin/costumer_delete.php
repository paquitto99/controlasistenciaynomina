<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM costumers WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Cliente eliminado con éxito';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Seleccione el elemento para eliminar primero';
	}

	header('location: costumer.php');
	
?>