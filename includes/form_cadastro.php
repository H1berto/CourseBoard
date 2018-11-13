
<h4>Codigo encontrado! Já pode se cadastrar em nosso sistema.</h4>
<form style="margin-top: 60px;" action="controllers.php" method="POST">
  
  <div class="form-group">
    <label for="inputAddress">Nome:</label>
    <input name="nome" type="text" class="form-control" id="inputAddress" placeholder="Nome">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Email:</label>
    <input name="email" type="text" class="form-control" id="inputAddress2" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Senha:</label>
    <input name="senha" type="text" class="form-control" id="inputAddress2" placeholder="Senha">
  </div>
   <input type="hidden" name="controller" value="usuario">
      <input type="hidden" name="action" value="cadastro">
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>