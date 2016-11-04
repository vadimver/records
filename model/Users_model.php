<?php
require '../db/Db.php';

 class Users_model
 {
     public function valid($post)
     {
       $value = strip_tags($post);
       $value = htmlspecialchars($post);
       $value = trim($value);
       $value = substr($value, 0, 200);
       $value = mysql_escape_string($value);

       return $value;
     }

     public function t($a, $b)
     {
        $c = $a + $b;
        return $c;
     }

     public function add_users()
     {
         $db = new Db\Db();

         $email = $_POST['email'];

         $name = $this->valid($_POST['name']);
         $nick = $this->valid($_POST['nick']);
         $sex = $_POST['sex'];
         $date = $_POST['date'];


         if(empty($name)) {
            $errors[] = "Enter Name";
         }

         if(empty($nick)) {
            $errors[] = "Enter Nick";
         }

         if(empty($email)) {
            $errors[] = "Enter Email";
         }

         if(isset($errors[0])) {
            foreach($errors as $msg){
               echo "<li>".$msg."</li>";
            }
         } else {
         $result = $db->execute("INSERT INTO users(email,name,nickname,sex,birthdate)
         values('$email','$name','$nick','$sex','$date')
         ");


         header('Location: ../controller/info.php');
        }
     }
 }
