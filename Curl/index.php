<?php

include_once 'curl.php';
$response = getResponse();
if (!$response) {
    $erro = "<p class='text-danger'>Não foi possível carregar o cep</p>";
}
?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Buscador de CEP</title>
</head>
<body>
<div class="container">
    <h1>Buscador de CEP's</h1>
    <form method="post" class="form">
        <?php if($erro) {
            echo $erro;
        }
        ?>
        <div class="row">
            <input class="form-control col-6" type="text" name="cep" placeholder="Digite seu CEP" required>
            <button type="submit">Buscar CEP</button>
        </div>
    </form>
    <br>

    <table class="table">
        <thead>
        <th>CEP</th>
        <th>Logradouro</th>
        <th>Complemento</th>
        <th>Bairro</th>
        <th>Localidade</th>
        <th>UF</th>
        <th>IBGE</th>
        <th>GIA</th>
        <th>DDD</th>
        <th>Siafi</th>
        </thead>
        <tbody>
        <tr>
            <td><?php
                echo $response['cep']; ?></td>
            <td><?php
                echo $response['logradouro']; ?></td>
            <td><?php
                echo $response['complemento']; ?></td>
            <td><?php
                echo $response['bairro']; ?></td>
            <td><?php
                echo $response['localidade']; ?></td>
            <td><?php
                echo $response['uf']; ?></td>
            <td><?php
                echo $response['ibge']; ?></td>
            <td><?php
                echo $response['gia']; ?></td>
            <td><?php
                echo $response['ddd']; ?></td>
            <td><?php
                echo $response['siafi']; ?></td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>