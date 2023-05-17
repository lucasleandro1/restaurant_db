<?php
require_once "abstract.php";
 class food extends abs_food{

    public function setFoodname($name){
        $this->name_food = $name;

      }
      public function setFooddesc($desc){
        $this->desc_food = $desc;

      }    
      public function setFoodprice($price){
        $this->price_food = $price;

      }   
      public function setFoodcat($cat){
        $this->catg_food = $cat;

      }    
      public function setFoodrate($rate){
        $this->rate_food = $rate;

      }

    public function getFooddesc(){
        return $this->desc_food;
      }
    public function getFoodName(){
        return $this->name_food;
      }
    public function getFoodPrice(){
        return $this->price_food;
      }
    public function getFoodcat(){
      return $this->catg_food;
    }
    public function getFoodrate(){
      return $this->rate_food;
    }
}


?>