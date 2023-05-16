<?php
class classconexao{
// conexão com o banco de dados
  public function conectaDB(){
    try{
      $con= new mysqli("localhost","root","","test");
      return $con;
    }catch (Exception $Erro){
      return $Erro->getMessage();
    }

  }

}
?>