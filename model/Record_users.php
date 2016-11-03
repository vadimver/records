<?php

namespace Database;

require '../db/Db.php';

$db = new Db();

$data = $db->query('SELECT id,name FROM users');


?>
