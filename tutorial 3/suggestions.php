<?php

/* Sample data in database */
$existingNames = array('Arvee', 'Yuna', 'Carmi', 'Ana');

if (isset($_POST['suggestion'])) {
  $name = $_POST['suggestion'];

  if (!empty($name)) {
    foreach ($existingNames as $existingName) {
      if (strpos($existingName, $name) !== false) {
        echo $existingName . '<br>' ;
      }
    }
  }
} 