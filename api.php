<?php

//queste due righe all'inizio del nostro script PHP autorizzano il 
//nostro server ad accettare richieste provenienti anche 
//dal nostro progetto vue
header("Access-Control-Allow-Origin: *" );
// header("Access-Control-Allow-Headers : X-Requested");

//1°cosa : fare far leggere il contenuto del file e farcelo restituire come stringa
$dischi = file_get_contents('./database/api.json');

$dischi = json_decode($dischi, true);

//EVENTUALE FILTRAGGIO 


header('Content-Type: application/json');

echo json_encode($dischi);

// $filteredArtist = [];
// foreach ($dischi as $disco) {
//     if (isset($dischi["nome_artista"])) {
//         $filtereArtist[] = $disco;
//     }
// }

// echo $filteredArtist;

// $jsonData = file_get_contents('data.json');
// $data = json_decode($jsonData, true);

// $searchName = $_GET($searchName);
// $filteredData = array_filter($data, function($item) use ($searchName) {
//     return $item['name'] === $searchName;
// });

// header('Content-Type: application/json');
// echo json_encode($filteredData);

// echo ($searchName);






