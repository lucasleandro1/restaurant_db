<?php
require_once "abstract.php";
 class rest extends abs_rest{

    public function setRestAtrs($name,$type,$price,$vaga,$addr,$time) {
        $this->name_rest = $name;
        $this->type_rest = $type;
        $this->price_rest = $price;
        $this->vaga_rest = $vaga;
        $this->addr_rest = $addr;
        $this->time_rest = $time;
     }
    public function getRestAtrs(){
        return "\n|Restaurante: ".$this->name_rest."\n|Categoria: ".$this->type_rest."\n|Preço: ".$this->price_rest."\n|Possui: ".$this->vaga_rest." Vagas\n|Horário de funcionamento: ".$this->time_rest."\n|Endereço: ".$this->addr_rest."\n|_________________________________________\n"; 
     }
    public function getRestName(){
        return "\n|Restaurante: ".$this->name_rest;
     }
}



?>