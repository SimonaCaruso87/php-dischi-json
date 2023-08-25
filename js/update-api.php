
<?php

//1°cosa :la funzione file_put_contents ci fa modificare qualsiasi file al suo interno
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
  

?>