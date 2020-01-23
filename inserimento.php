<?php

required_once("dbacess.php");

use DB\DBAccess;

function checkInput($nom , $col, $pes,$des){
  if(is_integer($nom) || is_integer($col) || !is_integer($pes) || strlen($des) < 2){
    return false;
  }
  return true;
}

if(isset($_POST['submit']) && $_POST['submit'] == 'submit'){
  $nome = trim($_POST['nome']);
  $colore = trim($_POST['colore']);
  $peso = trim($_POST['peso']);
  $potenza = trim($_POST['potenza']);
  $descrizione = $_POST['descrizione'];

  $errore = checkInput($nome, $colore, $peso, $descrizione);

  if(!errore){
    //insert

    $nome = "";
    $colore = "";
  }
  else{
    //messaggio d'errore;
  }
}






 ?>
