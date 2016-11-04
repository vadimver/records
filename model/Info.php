<?php

namespace Db;

require '../db/Db.php';

$db = new Db();

/**
 * DB query
 *
 */
$data = $db->query('SELECT name_record,record,nickname,sex FROM records
LEFT JOIN users
ON records.id_user = users.id
ORDER BY records.id DESC
');

$users = $db->query('SELECT name,nickname,sex FROM users ORDER BY id DESC');
?>
