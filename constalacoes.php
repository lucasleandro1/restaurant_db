<?php 
include 'Cart.php';
include 'Product.php';
include("conexao.php");
  $q = "SELECT * FROM abs_food WHERE abs_rest_id = 2";
  $con = $mysqli->query($q) or die($mysqli->error);
  session_start();

//$products = [
// ['id' => 1, 'name' => 'geladeira', 'price' => 1000, 'quantity' => 1],
// ['id' => 2, 'name' => 'mouse', 'price' => 100, 'quantity' => 1],
//['id' => 3, 'name' => 'teclado', 'price' => 10, 'quantity' => 1],
//];
$products = array();
while($p = $con->fetch_array()) {
  array_push($products,[
    'id2' => $p['id'], 
    'name2' => $p['name_food'], 
    'price2' => $p['price_food'], 
    'quantity2' => 1,
    'desc2' => $p['desc_food'], 
    'cat2' => $p['catg_food'], 
  ]);
}

if (isset($_GET['id'])) {
  $id = strip_tags($_GET['id']);
  
  $productInfo = $products[$id-4];
  $product = new Product;
  $product->setId($productInfo['id2']);
  $product->setName($productInfo['name2']);
  $product->setPrice($productInfo['price2']);
  $product->setQuantity($productInfo['quantity2']);

  $cart = new Cart;
  $cart->add($product);
}

// var_dump($_SESSION['cart'] ?? []);

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
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
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
          <button class="button2 navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <a class="text-decoration-none" href="/TDE3-main/mycart.php">Carrinho</a>
          </button>
        </div>
      </div>
    </header>

    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Cardápio The Legend of Sanduíches</h1>
          <p class="lead text-muted">Algo curto e direto, sobre a coleção abaixo (conteúdo, criador e etc). Faça com que seja curto e legal, mas não tão curto ao ponto de as pessoas pularem ele.</p>
        </div>
      </section>
      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            <?php foreach($products as $dado){?>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="./Components/<?php echo $dado['name2']; ?>.jpg" data-holder-rendered="true">
                <div class="card-body">
                <h5 class="card-title"><?php echo $dado['name2']; ?></h5>
                <p class="card-subtitle mb-2 text-muted"><?php echo $dado['cat2']; ?></p>
                <p class="card-text"><?php echo $dado['desc2']; ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class=" btn btn-sm btn-outline-secondary">
                        <a href="?id=<?php echo $dado['id2']; ?>">Adicionar</a>
                      </button>
                      </div>
                    <small class="text-muted">R$ <?php echo $dado['price2']; ?></small>
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

