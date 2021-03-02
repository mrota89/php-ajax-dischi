<?php
  //per milestone-2
  require_once __DIR__ . '/../database/database.php';

  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  echo json_encode($dischi);
