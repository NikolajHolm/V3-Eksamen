<?php
	$formUsername = $_POST['formUsername'];
	$formPassword = $_POST['formPassword'];
echo $formPassword;
echo $formUsername;

	require_once "connect.php";
	$statement =$DBH->prepare("SELECT * FROM users WHERE dbUsername= ?");
	$statement->bindParam(1, $formUsername);
	$statement->execute();
	
	$row = $statement->fetch(PDO::FETCH_ASSOC);
	
	if (empty($row)){
		echo "Kan ikke finde bruger!";
		header("Refresh:3; url=index.php");
	} else{
			if($row['dbPassword'] == $formPassword){		
				echo "SUCCESS!";
				session_start();
				$_SESSION['username'] = $formUsername;
				header("location: index.php");
			}
		echo "Ikke korrekt password!";
		header("Refresh:3; url=index.php");
	}

	$DBH = null;
?>