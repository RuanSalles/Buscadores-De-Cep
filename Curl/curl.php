<?php

/**
 * @return array|null
 */
function getResponse(): ?array
{
    $curl = curl_init();

    $cep = filter_var($_POST['cep'], FILTER_SANITIZE_SPECIAL_CHARS);

    if ($cep === '') {
        $erro = "<p class='text-danger'>Informe um cep para poder realizar uma pesquisa</p>";
    }
    $url = "https://viacep.com.br/ws/{$cep}/json/";

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($curl);

    curl_close($curl);
    return json_decode($response, true);
}

