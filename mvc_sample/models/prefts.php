<?php

class Prefts extends mysqli {

    public function __construct() {
        require_once(dirname(__FILE__).'/../config/db_conf.php');
        parent::__construct($host, $user, $password, $database);
    }

    public function __destruct() {
        parent::__destruct();
    }

    public function select_all() {
        $query = "select * from prefs";
        $result = $this->query($query);
        return $result;
    }

}
