<?php 
  global $templates, $db, $auth;
  # Preassign data to the layout
  $templates->addData(['company' => 'Име на компанията'], 'layout');

  #  Render a template
  echo $templates->render('index', ['name' => '404 не е намерено ниииищо...']);

 ?>
