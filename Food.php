<?php
require_once __DIR__ . "/Product.php";

class Food extends Product {
  public $animal;
  public $weight;

  function __construct($_name, $_price, $_description, $_animal, $_weight) {
    parent::__construct($_name, $_price, $_description);
    $this->animal = $_animal;
    $this->weight = $_weight;
  }

  public function printProductInfo() {
    return 
    "
    <div class='card'>
      <h3>$this->name</h3> 
      <p>$this->description</p> 
      <p>Prodotto per: $this->animal</p> 
      <h6>Peso: $this->weight kg</h6>
      <h4>$this->price &euro;</h4>
    </div>
    ";
  }
}
?>