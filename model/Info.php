<?php

namespace Database;

require '../db/Db.php';

$db = new Db();

$data = $db->query('SELECT name_record,record,nickname,sex FROM records
LEFT JOIN users
ON records.id_user = users.id
');

$users = $db->query('SELECT name,nickname,sex FROM users');
?>
