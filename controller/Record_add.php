<?php
require '../model/Records_model.php';

class Record_add
{
    public function add_records()
    {
      $gg = new Records_model;
      return $gg->add_record();
    }
}

$go = new Record_add();
$go->add_records();
