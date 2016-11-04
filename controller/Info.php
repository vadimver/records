<?php
require '../model/Info_model.php';

class Info
{
    public function info()
    {
      $users = Info_model::users();
      $data = Info_model::records();

      include '../view/head.php';
      include '../view/navbar/navbar.php';
      include '../view/info/info_body.php';
      include '../view/footer.php';
    }
}

$go = new Info();
