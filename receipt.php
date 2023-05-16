<?php
require_once "abstract.php";
 class receipt extends abs_receipt{

    public function setReceiptAtrs($id,$pay,$cli,$cpf){
        $this->id_receipt = $id;
        $this->pay_receipt = $pay;
        $this->client_receipt = $cli;
        $this->cpf_receipt = $cpf;
      }

    public function getReceiptAtrs(){
        return "\n|\n|ID: #".$this->id_receipt."\n|Forma de Pagamento: ".$this->pay_receipt."\n|\n|Cliente: ".$this->client_receipt."\n|CPF: ".$this->cpf_receipt."\n ----------------------------------";
      }
}




?>