<?php

require_once("pessoa.class.php");

$pessoa = new Pessoa();
$pessoa->setNome("Raissa Santos Ramos");
$pessoa->setEndereco("AV Aguia de Haia");
$pessoa->setBairro("AE Carvalho");
$pessoa->setCep("080030");
$pessoa->setCidade("São Paulo");
$pessoa->setEstado("SP");

?>

<html>
    <head>
        <title>PHP</title>
    </head>
    <body>
        <table style="border: 1px solid;">
            <tr>
                <td style="border: 1px solid; background-color: #b18ade"><?php echo $pessoa->getNome(); ?></td>
            </tr>
            <tr>
                <td style="border: 1px solid; background-color: #b6de8a"><?php echo $pessoa->getEndereco(); ?></td>
            </tr>
            <tr>
                <td style="border: 1px solid; background-color: #b18ade"><?php echo $pessoa->getBairro(); ?></td>
            </tr>
            <tr>
                <td style="border: 1px solid; background-color: #b6de8a"><?php echo $pessoa->getCep(); ?></td>
            </tr>
            <tr>
                <td style="border: 1px solid; background-color: #b18ade"><?php echo $pessoa->getCidade(); ?></td>
            </tr>
            <tr>
                <td style="border: 1px solid; background-color: #b6de8a"><?php echo $pessoa->getEstado(); ?></td>
            </tr>