<?php 
	include_once('AdminClassHandler.php');

	$id = $_GET['id'];
	$obj = new AdminClassHandler();

	$result = $obj->testDeleteExaminee($id);

	if($result !== false) {
		echo "<script type = 'text/javascript'>
				alert('Successfully Delete');
				document.location.href = 'examineeTable.php';
			  </script>";
	} else {
		echo "<script type = 'text/javascript'>
				alert('Unsuccessfully Delete');
				document.location.href = 'examineeTable.php';
			  </script>";
	}
?>