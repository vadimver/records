<?php
require '../model/Users_model.php';

class Users_add
{
    public function add_users()
    {
      $gg = new Users_model;
      return $gg->add_users();
    }
}

$go = new Users_add();
$go->add_users();
