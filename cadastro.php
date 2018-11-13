
<!DOCTYPE html>
<!-- saved from url=(0049)https://getbootstrap.com/docs/4.1/examples/cover/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/logo6.png">

    <title>Cadastro - CourseBoard</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/cover.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand"><a href="index.php">CourseBoard</a></h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="?p=home_cadastro">Home</a>
            <a class="nav-link active" href="?p=codigo_cadastro">Codigo de Acesso</a>
            <a class="nav-link " >Cadastro</a>
            
          </nav>
        </div>
      </header>
         <main role="main" class="inner cover">
     <?php
           require (isset($_GET['p'])) ? 'includes/'.$_GET['p'].'.php':'includes/home_cadastro.php';
      ?>
        </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>CourseBoard - 2018</a>.</p>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./js/jquery-3.3.1.slim.min.js.download" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./js/popper.min.js.download"></script>
    <script src="./js/bootstrap.min.js.download"></script>
  

</body></html>