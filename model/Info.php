<?php

namespace Database;

require '../db/Db.php';

$db = new Db();
//$result = $db->execute('CREATE TABLE foo (id SERIAL)');
$data = $db->query('SELECT * FROM users');


?>
