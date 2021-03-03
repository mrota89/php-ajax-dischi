<?php
  require_once __DIR__ . '/../database/database.php';

  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  // funzione per filtrare dischi per genere
  function filterByGenre(array $inputArray, string $queryValue): array {
    $listToEncode = [];
    /*se nella query string il valore è "Tutti i generi",
    allora sarà eseguito l'encode di tutto l'array originale*/
    if($queryValue === "Tutti i generi") {
      $listToEncode = $inputArray;
    } else {
      /*altrimenti eseguo l'encode di un array di elementi il cui
      genere corrisponde al valore della query string*/
      foreach ($inputArray as $innerElement) {
        if($innerElement['genere'] === $queryValue) {
          $listToEncode[] = $innerElement;
        }
      }
    }
    return $listToEncode;
  }

  //se in GET esiste la chiave "genere" e non è vuota
  if (array_key_exists('genere', $_GET) && !empty($_GET['genere'])) {
    $query = $_GET["genere"];
    echo json_encode(filterByGenre($dischi, $query));
  } else {
     echo json_encode($dischi);
  }
