<?php

function db_cnx() {
	$host = '127.0.0.1';
    $user = 'root';
    $password = '';
    $database = 'sample_db';

	$link = mysqli_connect($host, $user, $password, $database);
	mysqli_set_charset($link, 'utf8');
	return $link;
}

function select_all($link) {
    $query = "select * from prefs";
	$result = mysqli_query($link, $query);
	return $result;
}
