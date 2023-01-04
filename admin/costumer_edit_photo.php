<?php
	include 'includes/session.php';

	if(isset($_POST['upload'])){
		$cosid = $_POST['id'];
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}
		
		$sql = "UPDATE costumers SET photo = '$filename' WHERE id = '$cosid'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Costumer photo updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Select costumer to update photo first';
	}

	header('location: costumer.php');
?>