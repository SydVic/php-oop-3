<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Food.php";
require_once __DIR__ . "/Accessory.php";
require_once __DIR__ . "/User.php";
require_once __DIR__ . "/Identifier.php";

$dog_food = new Food("Crocchette Purina", 22.99, "Crocchette Cane Adulto con Manzo, Cereali e Verdure", "cane", 12);
$dog_food->avilable = false;
// var_dump($dog_food);

$cat_food = new Food("Cibo umido Felix", 1.99, "Buste cibo in gelatina con tonno e salmone", "gatto", 0.085);
// var_dump($cat_food);

$brush = new Accessory("Spazzola pelo", 10.99, "Spazzola per pelo autopulente", "cura degli animali", "ACE2ACE");
// var_dump($brush);

$leash = new Accessory("Guinzaglio", 8.99, "Guinzaglio allungabile con pulsanti blocco", "guinzagli", "AVAZAN");
// var_dump($leash);

$products = [];
$products[] = $dog_food;
$products[] = $cat_food;
$products[] = $brush;
$products[] = $leash;
// var_dump($products);

$new_user = new User("Gino", "gino@gmail.com", true, false);
$new_user->setDiscount();
// var_dump($new_user);

try {
  $new_user->addProductToCart($dog_food);
} catch (Exception $e) {
  echo "!!!Errore, prodotto non disponibile!!!";
}

try {
  $new_user->addProductToCart($brush);
} catch (Exception $e) {
  echo "!!!Errore, prodotto non disponibile!!!";
}
// $new_user->addProductToCart($leash);
// var_dump($new_user->cart);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>e-Commerce</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container">
    <h2>Prodotti</h2>
    <div class="product-container">   
      <?php foreach($products as $product) {
        echo $product->printProductInfo();
      } ?>
    </div>
    <h3>Carrello</h3>
    <div class="cart-container">
      <?php foreach($new_user->cart as $product) {
          echo $new_user->printCart($product);
        } ?>
    </div>
    <h3>Totale: <?php echo $new_user->getFinalPrice(); ?> &euro;</h3>
    <p><?php echo $new_user->validatePayment(); ?></p>
  </div>
</body>
</html>