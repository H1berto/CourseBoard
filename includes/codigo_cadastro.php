
    
  <h3>Informe aqui o codigo de acesso, para pode se cadastrar em nosso sistema</h3>
<form style="margin-top: 80px;" method="POST" action="./controllers.php" >
  <div class="form-group">
    <h2 style="margin-bottom: 20px;">Codigo:</h2>
    <input name="codigo" type="text" class="form-control form-control-lg" id="inputAddress" placeholder="A4B1C3D9E7X0">
     <input type="hidden" name="controller" value="codigo">
      <input type="hidden" name="action" value="buscar">
  </div>
  <button type="submit" class="btn btn-primary">Buscar</button>
</form>