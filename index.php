<html>
  <head>
      <meta charset='utf-8'>
      <meta http-equiv='X-UA-Compatible' content='IE=edge'>
      <title>Dashboard</title>
      <meta name='viewport' content='width=device-width, initial-scale=1'>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
      <link rel='stylesheet' type='text/css' media='screen' href='./css/legend-burguer.css'>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
  </head>

  <body>

    <main role="main">
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Hello Wordo</h1>
          <p>
             Este é um template para um simples marketing ou website informacional.
             Ele inclui um callout grande (denominado jumbotron) e três conteúdos 
             adicionais. Use-o como um ponto de partida para algo mais peculiar.
          </p>
        </div>
      </div>

      <div class="col-md-10">
        <div class="row">
          <div class="col-md-3">
              <img src="./Components/link4.png" alt="" >            
            <h2>@conn->GET</h2>
            <p>
             Este é um template para um simples marketing ou website informacional.
             Ele inclui um callout grande (denominado jumbotron) e três conteúdos 
             adicionais. Use-o como um ponto de partida para algo mais peculiar.
            </p>
            <p><a href="./legend-burguer.php" class="btn btn-primary btn-lg" role="button">Compre Aqui</a></p>
          </div>

          <div class="col-md-3">
            <img src="./Components/cosmic.png" alt="">   
            <h2>Constelações</h2>
            <p>
             Este é um template para um simples marketing ou website informacional.
             Ele inclui um callout grande (denominado jumbotron) e três conteúdos 
             adicionais. Use-o como um ponto de partida para algo mais peculiar.
            </p>
            <p><a href="./constalacoes.php" class="btn btn-primary btn-lg" role="button">Compre Aqui</a></p>
          </div>

          <div class="col-md-3">
            <img src="./Components/churas.png" alt="">   
            <h2>Churrascaria Donleoni</h2>
            <p>
             Este é um template para um simples marketing ou website informacional.
             Ele inclui um callout grande (denominado jumbotron) e três conteúdos 
             adicionais. Use-o como um ponto de partida para algo mais peculiar.
            </p>
            <p><a href="./churrascariaDonleoni.php" class="btn btn-primary btn-lg" role="button">Compre Aqui</a></p>
          </div>
        </div>
      </div>
    </main>



  <?php
// require_once "abstract.php";
// require_once "restaurant.php";
// require_once "food.php";
// require_once "receipt.php";



// echo "\n _______________________________\n|  Qual Restaurante deseja ir   |\n|\t\t\t\t\t\t\t    |\n|1 - The Legend of Sanduíches △ |\n|2 - Constelações ☾ \t\t    |\n|3 - Churrascaria Donleoni ◦ \t|\n|4 - Sair\t\t\t\t\t    |\n|_______________________________|\n\n";

// $i = readline("--> ");

// switch ($i) {
//     case 1:
//         $a = new rest();
//         $b = new food();
//         $c = new receipt();

//         $a->setRestAtrs("The Legend of Sanduíches", "Hamburgueria","$$$",9,"Rua Francisco Bezerra, 77","17:00 - 02:00");
//         echo "\n|\tRestaurante Selecionado:","\n|",$a->getRestAtrs();



//         echo "\n _______________________________\n|  Qual Prato deseja escolher   |\n|\t\t\t\t\t\t\t    |\n|1 - Ocarina Burguer ◦\t\t\t|\n|2 - Majoras Burguer ☾ \t\t    |\n|3 - Twilight Burguer △ \t\t|\n|4 - Sair\t\t\t\t\t    |\n|_______________________________|\n\n";
//         $x = readline("\n\n--> ");
        
//         switch ($x) {
//             case 1:
//                 $y = rand(2234123456,9892349320);
          
//                 $b->setFoodAtrs("Ocarina Burguer", "Pão da Casa, Molho de Tomate Le Pinguê, Hambúrguer\n|com queijos Mussarela, Provolone, Catupiry e Gorgonzola.",14.50,"Prato Principal",5);
//                 $c->setReceiptAtrs($y, "Debito","Jhonatta Pietro de Oliveira","123.456.678.99");
          
//                 echo "\n|\tPrato Selecionado:","\n|",$b->getFoodAtrs();
//                 echo "\n|\t\tRecibo:","\n|",$a->getRestName(),$b->getFoodName(),$b->getFoodPrice(),$c->getReceiptAtrs(),"\n";
                
                
//                 break;
            
//             case 2:
//           $y = rand(2234123456,9892349320);
//                 $b->setFoodAtrs("Majoras Burguer", "Pão da Casa, Maionese de Bacon, Hambúrguer, Queijo Muçarela, Cebola Roxa, Alface e Tomate.",20.00,"Prato Principal",5);
//                 $c->setReceiptAtrs($y, "Debito","Jhonatta Pietro de Oliveira","123.456.678.99");
          
//                 echo "\n|\tPrato Selecionado:","\n|",$b->getFoodAtrs();
//                 echo "\n|\t\tRecibo:","\n|",$a->getRestName(),$b->getFoodName(),$b->getFoodPrice(),$c->getReceiptAtrs(),"\n";
            
//                 break;

          
//             case 3:
//           $y = rand(2234123456,9892349320);
//                 $b->setFoodAtrs("Twilight Burguer", "Pão Especial, Maionese da Casa, Hambúrguer prensado, Queijo Cheddar, Ovo frito e Bacon em tiras",18.50,"Prato Principal",5);
//                 $c->setReceiptAtrs($y, "Debito","Jhonatta Pietro de Oliveira","123.456.678.99");
          
//                 echo "\n|\tPrato Selecionado:","\n|",$b->getFoodAtrs();
//                 echo "\n|\t\tRecibo:","\n|",$a->getRestName(),$b->getFoodName(),$b->getFoodPrice(),$c->getReceiptAtrs(),"\n";
//                 break;
          
//             case 4:
//               break;
//         }
//         echo "\nfim do programa";
//         break;



  
//     case 2:
        
//         $a = new rest();
//         $b = new food();
//         $c = new receipt();

//         $a->setRestAtrs("Constelações", "Pastelaria","$$",7,"rua São Paulo, Centro 77","17:00 - 02:00");
//         echo "\n|\tRestaurante Selecionado:","\n|",$a->getRestAtrs();



//         echo "\n _______________________________\n|  Qual Prato deseja escolher   |\n|\t\t\t\t\t\t\t    |\n|1 - Júpiter ◦\t\t\t\t\t|\n|2 - Terra ☾ \t\t\t\t    |\n|3 - Marte △ \t\t\t\t\t|\n|4 - Sair\t\t\t\t\t    |\n|_______________________________|\n\n";
//         $x = readline("\n\n--> ");
        
//         switch ($x) {
//             case 1:
//           $y = rand(2234123456,9892349320);
//                 $b->setFoodAtrs("Júpiter", "pastel com mussarela, presunto, tomate, orégano, ovo, frango, catupiry, bacon e calabresa com cebola",19.50,"Prato Principal",5);
//                 $c->setReceiptAtrs($y, "Pix","Jhonatta Pietro de Oliveira","123.456.678.99");
          
//                 echo "\n|\tPrato Selecionado:","\n|",$b->getFoodAtrs();
//                 echo "\n|\t\tRecibo:","\n|",$a->getRestName(),$b->getFoodName(),$b->getFoodPrice(),$c->getReceiptAtrs(),"\n";
                
//                 break;
            
//             case 2:
//           $y = rand(2234123456,9892349320);
//                 $b->setFoodAtrs("Terra", "carne moída com pedaços de ovo cozido",8.00,"Prato Principal",2);
//                 $c->setReceiptAtrs($y, "Pix","Jhonatta Pietro de Oliveira","123.456.678.99");
          
//                 echo "\n|\tPrato Selecionado:","\n|",$b->getFoodAtrs();
//                 echo "\n|\t\tRecibo:","\n|",$a->getRestName(),$b->getFoodName(),$b->getFoodPrice(),$c->getReceiptAtrs(),"\n";
            
//                 break;

          
//             case 3:
//           $y = rand(2234123456,9892349320);
//                 $b->setFoodAtrs("Marte", "Banana com pedaços de chocolate branco ou preto.",12.50,"Prato Principal",5);
//                 $c->setReceiptAtrs($y, "Pix","Jhonatta Pietro de Oliveira","123.456.678.99");
          
//                 echo "\n|\tPrato Selecionado:","\n|",$b->getFoodAtrs();
//                 echo "\n|\t\tRecibo:","\n|",$a->getRestName(),$b->getFoodName(),$b->getFoodPrice(),$c->getReceiptAtrs(),"\n";
//                 break;
          
//             case 4:
//               break;
//         }
//         echo "\nfim do programa";
        
//         break;
//   case 3:
  
//         $a = new rest();
//         $b = new food();
//         $c = new receipt();

//         $a->setRestAtrs("Churrascaria Donleoni", "Churrascaria","$$",25,"Rua do logadouro, 242","8:00 - 00:00");
//         echo "\n|\tRestaurante Selecionado:","\n|",$a->getRestAtrs();



//         echo "\n _______________________________\n|  Qual Prato deseja escolher   |\n|\t\t\t\t\t\t\t    |\n|1 - Batata Frita com Maminha ◦\t|\n|2 - Filé de costela c/ Queijo ☾|\n|3 - Picanha a moda da casa △   |\n|4 - Sair\t\t\t\t\t    |\n|_______________________________|\n\n";
//         $x = readline("\n\n--> ");
        
//         switch ($x) {
//             case 1:
//           $y = rand(2234123456,9892349320);
//                 $b->setFoodAtrs("Batata Frita com Maminha", "Batata Frita com porçoes de maminha e cebola",40.99,"Petisco",4.8);
//                 $c->setReceiptAtrs($y, "Pix","Jhonatta Pietro de Oliveira","123.456.678.99");
          
//                 echo "\n|\tPrato Selecionado:","\n|",$b->getFoodAtrs();
//                 echo "\n|\t\tRecibo:","\n|",$a->getRestName(),$b->getFoodName(),$b->getFoodPrice(),$c->getReceiptAtrs(),"\n";
                
//                 break;
            
//             case 2:
//           $y = rand(2234123456,9892349320);
//                 $b->setFoodAtrs("Filé de costela com Queijo", "Maminha, queijo, tempero da casa",54.99,"Petisco",4.5);
//                 $c->setReceiptAtrs($y, "Pix","Jhonatta Pietro de Oliveira","123.456.678.99");
          
//                 echo "\n|\tPrato Selecionado:","\n|",$b->getFoodAtrs();
//                 echo "\n|\t\tRecibo:","\n|",$a->getRestName(),$b->getFoodName(),$b->getFoodPrice(),$c->getReceiptAtrs(),"\n";
            
//                 break;

          
//             case 3:
//           $y = rand(2234123456,9892349320);
//                 $b->setFoodAtrs("Picanha a moda da casa", "Picanha(ao ponto do cliente) e tempero da casa",100.00,"Prato Principal",5);
//                 $c->setReceiptAtrs($y, "Pix","Jhonatta Pietro de Oliveira","123.456.678.99");
          
//                 echo "\n|\tPrato Selecionado:","\n|",$b->getFoodAtrs();
//                 echo "\n|\t\tRecibo:","\n|",$a->getRestName(),$b->getFoodName(),$b->getFoodPrice(),$c->getReceiptAtrs(),"\n";
//                 break;
          
//             case 4:
//               break;
//         }
//         echo "\nfim do programa";
        
//         break;
  
// }

// 
?>

  </body>
</html>
