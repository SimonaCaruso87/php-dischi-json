<?php

//1°file_get_content() legge il contenuto di un file e ce lo restituisce come stringa 
$string = file_get_contents('database/api.json');

//2°json_decode traduce una stringa da formato json in una variabile PHP 
//lo useremo però solo quando dobbiamo elaborare l'array
$api = json_decode($string, true);

var_dump($api);

// var_dump($string);

//1°usiamo json_encode per tradurre il nostro array associativo in formato json
//2°file_put_content() ci permette di scrivere i nostri dati all'interno del nostro file api.json

//      $dischi = [

//         [
//             'nome_artista' => 'Colapesce' ,
//             'titolo_canzone' => 'Restiamo a casa' ,
//             'img' => 'https://images.genius.com/d2c41736bebbf132befd28a17136bca9.1000x1000x1.jpg'
//         ],
//         [
//             'nome_artista' => 'Colapesce' ,
//             'titolo_canzone' => 'Restiamo a casa' ,
//             'img' => 'https://images.genius.com/d2c41736bebbf132befd28a17136bca9.1000x1000x1.jpg'
//         ],
//         [
//             'nome_artista' => 'Colapesce' ,
//             'titolo_canzone' => 'Restiamo a casa' ,
//             'img' => 'https://images.genius.com/d2c41736bebbf132befd28a17136bca9.1000x1000x1.jpg'
//         ],
//         [
//             'nome_artista' => 'Colapesce' ,
//             'titolo_canzone' => 'Restiamo a casa' ,
//             'img' => 'https://images.genius.com/d2c41736bebbf132befd28a17136bca9.1000x1000x1.jpg'
//         ],
//         [
//             'nome_artista' => 'Colapesce' ,
//             'titolo_canzone' => 'Restiamo a casa' ,
//             'img' => 'https://images.genius.com/d2c41736bebbf132befd28a17136bca9.1000x1000x1.jpg'
//         ],

        
//     ] ;

// header('Content-Type : application/json');
//json_enchode traduce qualsiasi tipo di dato in formato json
//noi la useremo per trasformare gli array php in oggetto json
// echo json_encode($dischi);

?>