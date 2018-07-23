<?php

$pwd = dirname(__FILE__);

require_once($pwd.'/../models/prefts.php');

$prefts = new Prefts();
$cnt = $prefts->select_all()->num_rows;

include_once($pwd.'/../views/index.html');
