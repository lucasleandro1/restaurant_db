<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $items = array(
        ['nome' => 'REST1', 'imagem'=> '../Components/zelda1.jpg', 'preco' => '15'],
        ['nome' => 'REST2', 'imagem'=> '../Components/zelda2.jpg', 'preco' => '100'],
        ['nome' => 'REST3', 'imagem'=> '../Components/zelda3.jfif', 'preco' => '230']
    );

    foreach($items as $key => $value) {
?>
    <div class="produto">
        <img src="<?php echo $value['imagem'] ?>" alt="">
        <a href="?adicionar=<?php echo $key ?>">Adicionar</a>
    </div>
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