<?php
class Product {
  public $name;
  public $price;
  public $description;
  public $avilable;

  function __construct($_name, $_price, $_description, $_available = true) {
    $this->name = $_name;
    $this->price = $_price;
    $this->description = $_description;
    $this->avilable = $_available;
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