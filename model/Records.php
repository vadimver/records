<?php
namespace Database;

require '../db/Db.php';

  $db = new Db();


  $id_user = $_POST['id_user'];
  $name_record = $_POST['name_record'];
  $record = $_POST['record'];


  $result = $db->execute("INSERT INTO records(id_user, name_record, record)
  values('$id_user', '$name_record', '$record')
  ");

  header('Location: ../controller/records.php');




?>
