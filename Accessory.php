<?php
require_once __DIR__ . "/Product.php";

class Accessory extends Product {
  public $category;
  public $brand;

  function __construct($_name, $_price, $_description, $_category, $_brand) {
    parent::__construct($_name, $_price, $_description);
    $this->category = $_category;
    $this->brand = $_brand;
  }

  public function printProductInfo() {
    return 
    "
    <div class='card'>
      <h3>$this->name</h3>
      <p>$this->description</p>
      <p>Categoria: $this->category</p>
      <h6>$this->brand</h6>
      <h4>$this->price &euro;</h4>
    </div>
    ";
  }
}
?>