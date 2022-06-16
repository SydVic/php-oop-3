<?php
class Product {
  public $name;
  public $price;
  public $description;

  function __construct($_name, $_price, $_description) {
    $this->name = $_name;
    $this->price = $_price;
    $this->description = $_description;
  }

  public function printProductInfo() {
    return 
    "
    <div class='card'>
      <h3>$this->name</h3> 
      <p>$this->description</p>
      <h4>$this->price &euro;</h4>
    </div>
    ";
  }
}
?>