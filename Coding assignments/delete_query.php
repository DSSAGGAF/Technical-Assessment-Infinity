<?php
	require_once 'config.php';
	
	if($_GET['task_id']){
		$task_id = $_GET['task_id'];
		
		$link->query("DELETE FROM `task` WHERE `task_id` = $task_id");
		header("location: welcome.php");
	}	
?>