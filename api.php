<?php

//queste due righe all'inizio del nostro script PHP autorizzano il 
//nostro server ad accettare richieste provenienti anche 
//dal nostro progetto vue
header("Access-Control-Allow-Origin: *" );
// header("Access-Control-Allow-Headers : X-Requested");

//1°cosa : fare far leggere il contenuto del file e farcelo restituire come stringa
$string = file_get_contents('./database/api.json');

//3°mettere una condizione per farci restituire i dati in pagina
//se nome artista è settato filtro altrimenti me li restituisce tutti 
if (isset($_GET['id_song'])){
     //Filtro i dati , non posso filtrare in un array associativo quindi lo trasformo in stringa
     $dataArrayApi = json_decode($string, true);
     //creiamo un array vuoto
     $responseSingleSong = []; 

     //4° e per ogni api 
     foreach($dataArrayApi as $key => $singleSong){
        if($key == intval ($S_GET['id_song'])) {
            //pushami dentro $responseSingleSong (con []) singleSong
            $responseSingleSong[] = $singleSong;
        }
     }
     //5° per far funzionare l'api devo restituire la versione codificata di responseData.json
     header('Content-Type:application/json');
     //6° dopo averlo trasformato lo restituiamo
     echo json_encode($responseSingleSong);
}
else{
    //2° cosa da fare : restituisco il contenuto del file, setto l'header e lo restituisco
    header('Content-Type:application/json');

    echo $string;
}




