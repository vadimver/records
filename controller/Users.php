<?php
class Users
{
    public function users()
    {
      include '../view/head.php';
      include '../view/navbar/navbar.php';
      include '../view/users/users_body.php';
      include '../view/footer.php';
    }
}

$go = new Users();
$go->users();
