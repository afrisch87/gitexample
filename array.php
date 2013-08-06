<?php

  $record = array('first_name' => 'avrumi','last_name' => 'frischman');

  print_r ($record); 

  $records = array();

  $records[] = $record;
  $record['first_name'] = 'noam';
  $record['last_name'] = 'lustiger';
  $records[] = $record;
  $record['first_name'] = 'steve';
  $record['last_name'] = 'josephs';
  $records[] = $record;

  print_r ($records);
  
?>
