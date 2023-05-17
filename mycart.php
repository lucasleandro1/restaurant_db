<?php

require 'Product.php';
require 'Cart.php';

session_start();

$cart = new Cart;
$productsInCart = $cart->getCart();

// var_dump($productsInCart);

if (isset($_GET['id'])) {
  $id = strip_tags($_GET['id']);
  $cart->remove($id);
  header('Location: mycart.php');
}

?>
<style>
.display {
  display: table-row;
  justify-content: center;
  align-items: center;
}

li{
  list-style-type: none;
  padding-left: 15px;
}
</style>

  

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    
    <header>

      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
          <a href="./index.php" class="navbar-brand d-flex align-items-center">
            <strong>Voltar</strong>
          </a>
          <!-- <button class="button2 navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation"> -->
          <!-- <a class="text-decoration-none" href="/TDE3-main/mycart.php">Carrinho</a> -->
          <!-- </button> -->
        </div>
      </div>
    </header>

    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Carrinho de compras</h1>
        </div>
      </section>
  <ul>

  <div class="album py-5 bg-light">
        <div class="container">

          <?php if (count($productsInCart) <= 0) : ?>
            Nenhum produto no carrinho
          <?php endif; ?>
          <?php foreach ($productsInCart as $product) : ?>
            <div class="col-md-4">
            
            <?php echo $product->getName(); ?>
            <div class="display">
              Quantidade: <?php echo $product->getQuantity() ?>"
                <div>
              Price: R$ <?php echo number_format($product->getPrice(), 2, ',', '.') ?>
              Subtotal: R$ <?php echo number_format($product->getPrice() * $product->getQuantity(), 2, ',', '.') ?>
              <div class="btn-group">
              <a href="?id=<?php echo $product->getId(); ?>"><button class="btn btn-danger">remove</button></a>
            
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
    <li>Total: R$ <?php echo number_format($cart->getTotal(), 2, ',', '.'); ?></li>
    <button>
      
    </button>
</div>
</body>

</html>
