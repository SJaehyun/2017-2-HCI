<?php
	header('Content-Type: text/html; charset=utf-8');
	$db = new mysqli('localhost', 'halzit', '09321', 'halzit');

	if($db->connect_error) {
		die('error');
	}

	$db->set_charset('utf8');
?>