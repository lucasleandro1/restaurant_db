<?php
require_once "abstract.php";
 class receipt extends abs_receipt{

    public function setid($id){
        $this->id_receipt = $id;
      }
      public function setpay($pay){
        $this->pay_receipt = $pay;
      }
      public function setcli($cli){
        $this->client_receipt = $cli;
      }
      public function setcpf($cpf){
        $this->cpf_receipt = $cpf;
      }

    public function getid(){
        return $this->id_receipt;
      }
      public function getpay(){
        return $this->pay_receipt;
      }
      public function getclient(){
        return $this->client_receipt;
      }
      public function getcpf(){
        return $this->cpf_receipt;
      }
}






?>