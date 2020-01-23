<?php
class DBAcess {
  const HOST_DB = 'localhost';
  const USERNAME = 'tecweb';
  const PASSWORD = 'tecweb';
  const DATABASE_NAME = 'tecweb2019';

  public $connection = null;

  public function openDBConnection(){
    $this->connection = mysqli_connect(static::HOST_DB, static::USERNAME,static::PASSWORD,static::DATABASE_NAME);
    if($this->connection){
      return false;
    } else {
      return true;
    }
  }

  public function getPersonaggi(){
    $query = "SELECT* FROM personaggi";
    $queryResult = mysqli_query($this->connection,$query);

    if(mysqli_num_rows($queryResult) == 0){
      return null;
    } else {
      $result = array();
      while($row = mysqli_fetch_assoc($queryResult)){
        $arrraySingoloPersonaggio = array(
          'Nome' => $row['nome'],
          'Colore' => $row['colore'],
          'Peso' => $row['peso'],
          'Potenza' => $row['potenza'],
          'Descrizione' => $row['descrizione'],
          'AG' => $row['angry_birds'],
          'AGR' => $row['angry_birds_rio'],
          'ABSW' => $row['angry_birds_star_wars'],
          'ABS' => $row['angry_birds_space'],
          'Immagine' => $row['immagine']
        );
        array_push($result,$arrraySingoloPersonaggio);
      }

      return $result;
    }
  }

}




 ?>
