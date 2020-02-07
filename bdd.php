<?php
/*$_SERVIDOR = 'staging.cweudo5c98bn.sa-east-1.rds.amazonaws.com';
$_USUARIO = 'pyqa';
$_SENHA = 'sUQu1gH7gl9#uBoKnB';
$_BASE = 'phpmyadmin';
*/
require_once 'cabecalho.php';
require_once 'conexao.php';


$_CONEXAO = mysqli_connect($_SERVIDOR, $_USUARIO, $_SENHA, $_phpmyadmin);

if(!$_CONEXAO){
	exit('Erro ao conectar ao banco de dados!');
}

  $id = mysqli_real_escape_string($_CONEXAO, $_GET['id']);
  $cep = mysqli_real_escape_string($_CONEXAO, $_GET['cep']);
  $nome = mysqli_real_escape_string($_CONEXAO, $_GET['nome']);
  $endereco = mysqli_real_escape_string($_CONEXAO, $_GET['endereco']);
  $bairro = mysqli_real_escape_string($_CONEXAO, $_GET['bairro']);
  $estado = mysqli_real_escape_string($_CONEXAO, $_GET['estado']);
  $cidade = mysqli_real_escape_string($_CONEXAO, $_GET['cidade']);


  
    $sql = "INSERT INTO dados_dep (id, cep, nome, endereco, bairro, estado, cidade) values ('{$id}','{$cep}', '{$nome}', '{$endereco}', '{$bairro}', '{$estado}', '{$cidade}')";
    $resultado = mysqli_query($_CONEXAO, $sql);
    if($resultado){?> 
          <div class="alert alert-success" role="alert">
            <h4>Dados gravados com sucesso!</h4>
          </div>
          <?php }else{ ?>
        
          <div class="alert alert-danger" role="alert">
            <h4>Falha ao efetuar o cadastro.</h4>
            <p><?php echo mysqli_error($_CONEXAO); ?></p>
            <p>SQL executado: <?php echo $sql; ?></p>
          </div>

     <?php } 

   ?>
        