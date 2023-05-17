<?php

require 'Cart.php';
require 'Product.php';
include("conexao.php"); 
  $q = "SELECT * FROM abs_food WHERE abs_rest_id=2";
  $con = $mysqli->query($q) or die($mysqli->error);
session_start();

$products = [
  1 => ['id' => 1, 'name' => 'geladeira', 'price' => 1000, 'quantity' => 1],
  2 => ['id' => 2, 'name' => 'mouse', 'price' => 100, 'quantity' => 1],
  3 => ['id' => 3, 'name' => 'teclado', 'price' => 10, 'quantity' => 1]
];


if (isset($_GET['id'])) {
  $id = strip_tags($_GET['id']);
  $productInfo = $products[$id];
  $product = new Product;
  $product->setId($productInfo['id']);
  $product->setName($productInfo['name']);
  $product->setPrice($productInfo['price']);
  $product->setQuantity($productInfo['quantity']);

  $cart = new Cart;
  $cart->add($product);
}

var_dump($_SESSION['cart'] ?? []);

?>
<style> 
.button2 a{
  border-bottom-style: none;
}

button a {
  list-style-type: none;
  text-decoration: none;
  color: black;
}
button a:hover {
  color: black;
  text-decoration: none;
}

.button2 a {
  color:white;
  font-weight: bold;
}

.button2 a:hover {
  color: white;
  font-weight: bold;
} 
</style>
<!DOCTYPE html>
<!-- saved from url=(0053)https://getbootstrap.com.br/docs/4.1/examples/album/# -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com.br/favicon.ico">

    <title>The legend Burger</title>

    <!-- Principal CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>

  <body>

    <header>
      
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
          <a href="./index.php" class="navbar-brand d-flex align-items-center">
            <strong>Voltar</strong>
          </a>
          <button class="button2 navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <a href="/TDE3-main/mycart.php">Carrinho</a>
          </button>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Cardápio Constelações</h1>
          <p class="lead text-muted">Algo curto e direto, sobre a coleção abaixo (conteúdo, criador e etc). Faça com que seja curto e legal, mas não tão curto ao ponto de as pessoas pularem ele.</p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            <?php while($dado = $con->fetch_array()) { ?>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="./Components/<?php echo $dado['name_food']; ?>.jpg" data-holder-rendered="true">
                <div class="card-body">
                <h5 class="card-title"><?php echo $dado['name_food']; ?></h5>
                <p class="card-subtitle mb-2 text-muted"><?php echo $dado['catg_food']; ?></p>
                <p class="card-text"><?php echo $dado['desc_food']; ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <a href="?id=1">Adicionar</a>
                      </button>
                      </div>
                    <small class="text-muted">R$ <?php echo $dado['price_food']; ?></small>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
        </div>
      </div>
    </main>
  </body>
</html>