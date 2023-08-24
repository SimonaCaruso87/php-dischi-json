Descrizione
Dobbiamo creare una web-app che permetta di leggere una lista di dischi presente nel nostro server.
Stack
Html, CSS, VueJS (importato tramite CDN), axios, PHP
Consigli
Nello svolgere l'esercizio seguite un approccio graduale.
Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a comunicare correttamente con il vostro script PHP (le vostre "API").
Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.
Bonus
Al click su un disco, recuperare e mostrare i dati del disco selezionato.
2 file

<!-- SERVE PER FARE IL FILTRAGGIO -->

<!-- //1°cosa : fare far leggere il contenuto del file e farcelo restituire come stringa
$string = file_get_contents('database/api.json');

//3°mettere una condizione per farci restituire i dati in pagina
//se nome artista è settato filtro altrimenti me li restituisce tutti 
if (isset($_GET['nome_artista'])){
     //Filtro i dati , non posso filtrare in un array associativo quindi lo trasformo in stringa
     $apis = json_decode($string, true);
     //creiamo un array vuoto
     $responseData = []; 

     //4° e per ogni api 
     foreach($apis as $api){
        if($api['nome_artista'] == $S_GET['nome_artista']) {
            //pushami dentro responseData (con []) api
            $responseData[] = $api;
        }
     }
     //5° per far funzionare l'api devo restituire la versione codificata di responseData.json
     header('Content-Type : application/json');
     //6° dopo averlo trasformato lo restituiamo
     echo json_encode($responseData);
}
else{
    //2° cosa da fare : restituisco il contenuto del file, setto l'header e lo restituisco
    header('Content-Type : application/json');

    echo $string;
} -->


<!-- SPIEGAZIONE PASSAGGIO PER PASSAGGIO CON A SEGUIRE ARRAY JSON ASSOCIATIVA -->

<!-- //1°file_get_content() legge il contenuto di un file e ce lo restituisce come stringa 
// $string = file_get_contents('database/api.json');
//2°json_decode traduce una stringa da formato json in una variabile PHP 
//lo useremo però solo quando dobbiamo elaborare l'array non ha senso
//usare il decode per poi ricodificarlo con header('Content-Type : application/json');
// $api = json_decode($string, true);

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
  -->


<!-- COME AGGIUNGERE UNA CHIAVE AD UN ARRAY ASSOCIATIVA JSON DA PHP-->

<!-- //1°cosa :la funzione file_put_contents ci fa modificare qualsiasi file al suo interno
$string = file_get_contents('database/api.json');

//2° codifichiamo il file per tradurre il nostro array associativo in formato json
$apis = json_decode($string, true);

     //3° per aggiungere a tutti gli studenti una chiave
     foreach($apis as $index => $api){
        $apis[$index]['minuti'] = '1.05';
     }
     
     //per salvare questi dati in persistenza che fare?
     //non posso modificare il file json da questo file php
     //quindi prima trasformo l'array in json con json_encode
     $apiJson = json_encode($apis);
     
     //questa funzione sostituisce 
    file_put_contents('database/api.json', $apiJson);

    //cosi' lo abbiamo salvato in persistenza
-->  