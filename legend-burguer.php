<?php 
  session_start();
?>
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
          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
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
      <?php
        $items = array(
            ['nome' => 'REST1', 'imagem'=> './Components/zelda1.jpg', 'preco' => '15'],
            ['nome' => 'REST2', 'imagem'=> './Components/zelda2.jpg', 'preco' => '100'],
            ['nome' => 'REST3', 'imagem'=> './Components/zelda3.jfif', 'preco' => '230']
        );

          foreach($items as $key => $value) {
        ?>
      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                  <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" src="<?php echo $value['imagem'] ?>" alt="Opção 1" style="height: 225px; width: 100%; display: block;" data-holder-rendered="true">
                  <div class="card-body">
                    <p class="card-text">Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional.</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <a href="?adicionar=<?php echo $key ?>">Adicionar</a>
                        <small class="text-muted"><?php echo $value['preco']?></small>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

<?php
 }
 ?>
<?php 

if(isset($_GET['adicionar'])) {
  $idProduto = (int) $_GET['adicionar'];
  if(isset($items[$idProduto])){
    if(isset($_SESSION['carrinho'][$idProduto])){
      $_SESSION['carrinho'][$idProduto]['quantidade']++;
    }else {
      $_SESSION['carrinho'][$idProduto] = array('quantidade' => 1, 'nome' => $items[$idProduto]['nome'],
      'preco' => $items[$idProduto]['preco']);
    }
    echo '<script>alert("Item adicionado");</script>';
  }else {
    die('Você não pode adicionar um item que não existe');
  }
}
?>



<?php
  foreach ($_SESSION['carrinho'] as $key => $value) {
    echo '<p>Nome: '.$value['nome'].' | Quantidade: '.$value['quantidade'].' | Preço: '.($value['quantidade']*$value['preco']).'</p>';

  }
?>
</body>
</html>