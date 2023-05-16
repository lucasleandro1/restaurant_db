<?php
require_once "abstract.php";
 class food extends abs_food{

    public function setFoodAtrs($name,$desc,$price,$cat,$rate){
        $this->name_food = $name;
        $this->desc_food = $desc;
        $this->price_food = $price;
        $this->catg_food = $cat;
        $this->rate_food = $rate;
      }

    public function getFoodAtrs(){
        return "\n|Pedido: ".$this->name_food."\n|Igredientes: ".$this->desc_food."\n|Preço: R$:".$this->price_food." Reais\n|Categoria: ".$this->catg_food."\n|Avaliação: ".$this->rate_food." Estrelas"."\n ----------------------------------\n\n";
      }
    public function getFoodName(){
        return "\n|Pedido: ".$this->name_food;
      }
    public function getFoodPrice(){
        return "\n|Valor total: ".$this->price_food;
      }
}



?>