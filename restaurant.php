<?php
require_once "abstract.php";
 class rest extends abs_rest{

    public function setname($name) {
        $this->name_rest = $name;
     }
     public function settype($type) {
      $this->type_rest = $type;
   }
   public function setprice($price) {
      $this->price_rest = $price;
   }   
   public function setvaga($vaga) {
      $this->vaga_rest = $vaga;
   }    
   public function setaddr($addr) {
      $this->addr_rest = $addr;
   }    
   public function settime($time) {
      $this->time_rest = $time;
   }

    public function gettype(){
        return "\n|Categoria: ".$this->type_rest;
     }
    public function getName(){
        return "\n|Restaurante: ".$this->name_rest;
     }
     public function getprice(){
      return "\n|Preço: ".$this->price_rest;
   }
   public function getvaga(){
      return "\n|Possui: ".$this->vaga_rest;
   }
   public function gettime(){
      return " Vagas\n|Horário de funcionamento: ".$this->time_rest;
   }
   public function getaddr(){
      return "\n|Endereço: ".$this->addr_rest."\n|_________________________________________\n"; 
   }
}

?>
        
        
        
        
        