<?php 

	include('connection.php');
	//delete
	$id = $_GET['id'];
	$sql = 'delete from messages where id = :id';

	$statement = $conn->prepare($sql);
	$statement->bindParam(':id',$id,PDO::PARAM_INT);
	
	if ($statement->execute()) {
		$message = "Vous avez supprimee avec success";
		//redirect to home
		header("location: messages.php");
	}

	



?>