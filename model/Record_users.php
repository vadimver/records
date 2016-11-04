<?php

namespace Db;

require '../db/Db.php';

$db = new Db();

/**
 * DB query
 *
 */
 
$data = $db->query('SELECT id,name FROM users');


?>
