<?php
require_once 'Vinho.php';
require_once 'Suco.php';
require_once 'Refrigerante.php';

$vinho1 = new Vinho();
$suco1 = new Suco();
$refri1 = new Refrigerante();

$mostraVinho = "";
$mostraSuco = "";
$mostraRefri = "";

$verificaVinho = 0;
$verificaSuco = 0;
$verificaRefri = 0;

$msgVinho = "";
$msgSuco = "";
$msgRefri = "";


if(isset($_POST['vinho'])){

    $vinho1->setNome($_POST['nome']);
    $vinho1->setTipo($_POST['tipo']);
    $vinho1->setPreco($_POST['preco']);
    $vinho1->setSafra($_POST['safra']);
    $mostraVinho = $vinho1->mostrarBebida();
    $verificaVinho = $vinho1->verificarPreco($_POST['preco']);
    
}

if(isset($_POST['suco'])){

    $suco1->setNome($_POST['nome']);
    $suco1->setPreco($_POST['preco']);
    $suco1->setSabor($_POST['sabor']);
    $mostraSuco = $suco1->mostrarBebida();
    $verificaSuco = $suco1->verificarPreco($_POST['preco']);
}

if(isset($_POST['refri'])){

    $refri1->setNome($_POST['nome']);
    $refri1->setPreco($_POST['preco']);
    $refri1->setRetornavel($_POST['retornavel']);
    $mostraRefri = $refri1->mostrarBebida();
    $verificaRefri = $refri1->verificarPreco($_POST['preco']);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Bebidas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Cadastro de Bebidas</h1>
    <div>
        <form action="" method="post">
            <fieldset>
                <legend>Vinho</legend>
                <input type="text" name="nome" placeholder="Nome do Vinho">
                <input type="text" name="tipo" placeholder="Tipo">
                <input type="number" name="preco" placeholder="Preço" step="0.01">
                <input type="text" name="safra" placeholder="Safra">
                <b><?php echo $mostraVinho; ?></b>
                <b><?php echo $verificaVinho;?></b>
                <input type="submit" name="vinho" value="Cadastrar Vinho">
            </fieldset>
            <fieldset>
                <legend>Suco</legend>
                <input type="text" name="nome" placeholder="Nome do Suco">
                <input type="number" name="preco" placeholder="Preço" step="0.01">
                <input type="text" name="sabor" placeholder="Sabor">
                <b><?php echo $mostraSuco; ?></b>
                <b><?php echo $verificaSuco;?></b>
                <input type="submit" name="suco" value="Cadastrar Suco">
            </fieldset>
            <fieldset>
                <legend>Refrigerante</legend>
                <input type="text" name="nome" placeholder="Nome do Refrigerante">
                <input type="number" name="preco" placeholder="Preço" step="0.01">
                <input type="text" name="retornavel" placeholder="Retornável (sim/não)">
                <b><?php echo $mostraRefri; ?></b>
                <b><?php echo $verificaRefri;?></b>
                <input type="submit" name="refri" value="Cadastrar Refrigerante">
            </fieldset>
        </form>
    </div>
</body>
</html>
