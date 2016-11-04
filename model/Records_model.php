<?php
require '../db/Db.php';

class Records_model
{
    public function valid($post)
    {
      $value = strip_tags($post);
      $value = htmlspecialchars($value);
      $value = trim($value);
      $value = substr($value, 0, 200);
      $value = mysql_escape_string($value);

      return $value;
    }

    public function add_record()
    {
      $db = new Db\Db();

      $id_user = $_POST['id_user'];
      $name_record = $this->valid($_POST['name_record']);
      $record = $this->valid($_POST['record']);

      $errors = [];

       if(empty($name_record)) {

          $errors[] = "Enter name record";
       }

       if(empty($record)) {
          $errors[] = "Enter record";
       }

       if(isset($errors[0])) {

          foreach($errors as $msg){
             echo "<li>".$msg."</li>";

          }
       } else {
         $result = $db->execute("INSERT INTO records(id_user, name_record, record)
         values('$id_user', '$name_record', '$record')
         ");

         header('Location: ../controller/info.php');

       }
    }
}
