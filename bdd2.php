<?php
require_once 'conexao.php';
require_once 'cabecalho.php';


$cep = mysqli_real_escape_string($_CONEXAO, $_GET['cep2']);
$sql = 'SELECT * FROM dados_dep WHERE cep={$cep}';
$resultado = mysqli_query($_CONEXAO, $sql);

$total = mysqli_num_rows($resultado);

      if($total == 0){
        echo '<p class="lead">
        {
         "code": 404, 
         "message": "CEP not found", 
         "result": [] 
        } </p>';
      }elseif (filter_var($cep, FILTER_VALIDATE_INT)) {
        echo '<p class="lead">{
              "code": 401,
              "message": "Invalid CEP provided",
              "result": {
              "cep_provided": "",
              "cep_found": ""
            }
          }';
      } else{
            while ($dados = mysqli_fetch_assoc($resultado)) {
              $logradouro = $dados['endereco'];
              $bairro = $dados['bairro'];
              $localidade = $dados['cidade'];
              $uf = $dados['estado'];
              $cep = $dados['cep'];
              echo '<p class="lead">
                 {
                "code": 200,
                 "message": "CEP found",
                "result": { 
                "logradouro":', $logradouro,
                '" bairro":', $bairro,
                '" localidade":',  $localidade,
                '" uf":',  $uf,
                '" cep":',  $cep,'
                 } </p>';
            }
          }
      ?>