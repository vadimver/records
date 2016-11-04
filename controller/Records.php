<?php
require '../model/AddRecord_model.php';

class Records
{
    public function record()
    {
      $data = AddRecord_model::rec_users();

      include '../view/head.php';
      include '../view/navbar/navbar.php';
      include '../view/records/records_body.php';
      include '../view/footer.php';
    }
}

$go = new Records();
$go->record();
