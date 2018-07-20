<?php

require_once('database.php');

$cnx = db_cnx();
$result = select_all($cnx);
$cnt = mysqli_num_rows($result);

include_once('./templates/index.html');
