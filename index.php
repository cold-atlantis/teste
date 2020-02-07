<?php
require_once 'cabecalho.php'; 
?>
    
		<h1>Bem-vindo ao cadastro de endereços!</h1>
<div class="row mb-5">
      <div class="col">
        <form  method="get" action="bdd.php" class="col-12 col-sm-12 col-md-4">
          <div class="form-group">
            <label for="id">ID:</label>
            <input required="" type="number" class="form-control" id="id" placeholder="Digite o id" maxlength="11" >
          </div>
          <div class="form-group">
            <label for="cep">CEP:</label>
            <input required="" type="number" class="form-control" id="cep" placeholder="Digite o CEP" maxlength="11">
          </div>
          <div class="form-group">
            <label for="nome">Nome:</label>
            <input required="" type="text" class="form-control" id="nome" placeholder="Digite o nome" maxlength="45">
          </div>
          <div class="form-group">
            <label for="endereco">Digite o endereço:</label>
            <input required="" type="text" class="form-control" id="endereco" placeholder="Digite o endereço" maxlength="255">
          </div>
          <div class="form-group">
            <label for="estado">Digite o bairro:</label>
            <input required=""  type="text" class="form-control" id="bairro" placeholder="Digite o bairro">
          </div>
          <div class="form-group">
            <label for="estado">Digite o estado:</label>
            <input required="" maxlength="2" type="text" class="form-control" id="estado" placeholder="Digite o estado">
          </div>
          <div class="form-group">
            <label for="cidade">Digite a cidade:</label>
            <input required="" type="text" class="form-control" id="cidade" placeholder="Digite a cidade">
          </div>
    
         <button type="submit" class="btn btn-primary">Salvar</button>
         <button type="reset" class="btn btn-outline-secondary">Limpar</button>
        </form>
        </div>
    </div>
    <h1>Procurar CEP!</h1>
    <div class="row mb-5">
      <div class="col">
        <form  method="get" action="bdd2.php" class="col-12 col-sm-12 col-md-4">
          <div class="form-group">
            <label for="cep">CEP:</label>
            <input required="" type="text" class="form-control" id="cep2" placeholder="Digite o CEP a procurar" maxlength="11" >
          </div>
         <button type="submit" class="btn btn-primary">Procurar</button>
         <button type="reset" class="btn btn-outline-secondary">Limpar</button>
        </form>
        </div>
    </div>
		
			<br    />
			<br    />
		


    
<?php
  
  require_once "rodape.php"
  



?>