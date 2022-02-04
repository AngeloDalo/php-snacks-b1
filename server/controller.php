<?php
include __DIR__ . '/db.php';
header('Content-type: application/json');

if (isset($_GET['carburante']) !== false) {
    $carburante = $_GET['carburante'];
    if ($carburante === 'all') {
      $carsFiltered = $cars;
    } else {
      $carsFiltered = [];
      foreach ($cars as $car) {
        if ($car['carburante'] === $carburante) {
          $carsFiltered[] = $car;
        }
      }
    }
    echo json_encode([
      'results' =>  $carsFiltered,
      'length' => count($cars)
    ]);
  } else {
    echo json_encode([
      'error' =>  'genere non selezionato'
    ]);
  }
?>