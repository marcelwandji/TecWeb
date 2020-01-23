<?php
required_once("dbacess.php");

$oggettoConnessione = new DBAcess();

$connessioneOk = $oggettoConnessione->openDBConnection();

$paginaHTML = file_get_contents('protagonisti_php.html');

if($connessioneOk){
  $personaggi = $oggettoConnessione->getPersonaggi();
  if($personaggi!= null){
    $stringaPersonaggi = '<dl id="charactersStory"/>';

    for_each($personaggi as $character){
      $stringaPersonaggi .= "<dt>" . $character['Nome'], "</dt>",
      '<dd><img src="images/' . $character['Immagine'] . '" alt="Immagine di '. $character['Nome'].'"/>'.
      '<p>'. $character['Descrizione']. '</p></dd>';
    }

    $stringaPersonaggi .= '</dl';

    echo str_replace("<listaPersonaggi />", $stringaPersonaggi, $paginaHTML);
  } else {
    // Stampa no personaggi
  }

} else {
  //echo "ERRORE CONNESSIONE"
}


 ?>
