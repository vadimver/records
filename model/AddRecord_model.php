<?php
require '../db/Db.php';

class AddRecord_model
{
    public static function rec_users()
    {
      $db = new Db\Db();
      $data = $db->query('SELECT id,name FROM users');
      return $data;
    }

}
