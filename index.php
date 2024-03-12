<?php
$nomesite = "Lista de Produtos";
$descricaosite = "Página para Listagem de Produtos";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title><?= $nomesite ?></title>
</head>
<body>

<div class="m-5">

<?php include"navBar.php";
      include "Dados.php";
?>

<h1 class="p-3"><?= $nomesite ?></h1>
<h2 class="p-3"><?= $descricaosite ?></h2>


<img src="" alt="">

<div class = "d-flex row gap-3">

<?php 
foreach($produtos as $produtoatual){?>
    <div class="card">
  <div class="card-body">
    
  <?= $produtoatual ?>

  </div>
</div>
<?php } ?>

</div>

<h2 class="p-3">Cadastre Seus Produtos</h2>

<form class="row g-3" method="post">
  <div class="col-auto">
    <label for="NomeProduto" class="visually-hidden">Nome do Produto:</label>
    <input type="text" class="form-control" id="NomeProduto" name="NomeProduto" placeholder="Banana">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Cadastrar</button>
  </div>
</form>
</div>

<!--Botao Post-->

<?php

include "Dados.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nomeProduto = $_POST['NomeProduto'];
    $produtos[] = $nomeProduto;
}

?>

<!--Console.log
<?php
$js_code = "<script>console.log('Adicionado');</script>";
echo $js_code;
?>

<div class="d-flex row gap-3">
<?php foreach ($produtos as $produto): ?>
        <div class="card">
            <div class="card-body">
                <?= $produto ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>

///////////////////////////////////-->



<?php include "Rodape.html";?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>