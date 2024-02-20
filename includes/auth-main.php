<?php

require_once './classes/db.php';

$db = new MySQLDatabase();

echo $db->connect();
