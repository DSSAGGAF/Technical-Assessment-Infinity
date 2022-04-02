<?php
	require_once 'config.php';
	require 'welcome.php';
	if(ISSET($_POST['add'])){
		if($_POST['task'] != ""){
			$task = $_POST['task'];
			$user_id = $_SESSION["id"];
			$link->query("INSERT INTO `task` (task, status, user_id) VALUES('$task', 'Not Done', '$user_id')");
			header('location:welcome.php');
		}
	}
?>