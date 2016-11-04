<?php
  $view = new \App\View();
  $view->title = 'test site title';
  $view->users = \App\Models\User::findAll();
  $view->display(__DIR__ . '/App/templates/index.php');
?>
