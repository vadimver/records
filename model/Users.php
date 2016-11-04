<?php
namespace Db;

require '../db/Db.php';

  $db = new Db();

  /**
   * DB query
   *
   */

  function valid($post) {
    $value = strip_tags($post);
    $value = htmlspecialchars($value);
    $value = trim($value);
    $value = substr($value, 0, 200);
    $value = mysql_escape_string($value);

    return $value;
  }

  $email = $_POST['email'];
  $name = valid($_POST['name']);
  $nick = valid($_POST['nick']);
  $sex = $_POST['sex'];
  $date = $_POST['date'];


  $errors = [];

  if(empty($name)) {
     $errors[] = "Enter Name";
  }

  if(empty($nick)) {
     $errors[] = "Enter Nick";
  }

  if(empty($email)) {
     $errors[] = "Enter Email";
  }

  if(isset($errors)) {
     foreach($errors as $msg){
        echo "<li>".$msg."</li>";
     }
  } else {
  $result = $db->execute("INSERT INTO users(email,name,nickname,sex,birthdate)
  values('$email','$name','$nick','$sex','$date')
  ");


  header('Location: ../controller/info.php');
 }



?>
