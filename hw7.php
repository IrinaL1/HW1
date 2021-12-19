<?php
	$say = htmlspecialchars($_POST["say"]);
	$lesson = htmlspecialchars($_POST["lesson"]);
	echo $say;
	echo $lesson;

	$json = file_get_contents('php://input');
	$data = json_decode($json);
	$data->Smth_new = "Где-то";
	$data = json_encode($data);
	echo $data;
?>
