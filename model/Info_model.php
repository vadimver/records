<?php
require '../db/Db.php';

class Info_model
{
    public static function users()
    {
      $db = new Db\Db();
      $users = $db->query('SELECT name,nickname,sex FROM users ORDER BY id DESC');
      return $users;
    }

    public static function records()
    {
      $db = new Db\Db();
      $record = $db->query('SELECT name_record,record,nickname,sex FROM records
        LEFT JOIN users
        ON records.id_user = users.id
        ORDER BY records.id DESC
      ');
      return $record;
    }
}
