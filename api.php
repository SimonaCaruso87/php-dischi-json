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
if (isset($_GET['canzone'])){
     //Filtro i dati , non posso filtrare in un array associativo quindi lo trasformo in stringa
     $apis = json_decode($string, true);
     //creiamo un array vuoto
     $responseData = []; 

     //4° e per ogni api 
     foreach($apis as $key => $api){
        if($key['canzone'] == $S_GET['canzone']) {
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
}




