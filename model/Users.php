<?php
namespace Database;

require '../db/Db.php';

  $db = new Db();


  $email = $_POST['email'];
  $name = $_POST['name'];
  $nick = $_POST['nick'];
  $sex = $_POST['sex'];
  $date = $_POST['date'];


  $result = $db->execute("INSERT INTO users(email,name,nickname,sex,birthdate)
  values('$email','$name','$nick','$sex','$date')
  ");

  header('Location: ../controller/users.php');




?>
