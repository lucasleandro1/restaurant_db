<?php
// conexão com o banco de dados
    $host = "localhost";
    $pass = "";
    $user = "root";
    $db = "restaurante";

    $mysqli = new mysqli($host, $user, $pass, $db);
    if($mysqli->connect_errno) {
      echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    } else {
      
    }

    //$q = "SELECT * FROM abs_food";
    //$mysqli->query($q) or die($mysqli->error);