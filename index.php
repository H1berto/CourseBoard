<?php	
  //Fazendo a requisição do arquivo DB.php 
	require_once './DB.php';
  require_once './questionario.php'
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>	CourseBoard</title>

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	 <!--Carregando o AJAX API do Charts-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Carregando a Visualization API e o pacote do corechart .
      google.charts.load('current', {'packages':['corechart']});

      //Definimos um retorno para ser executado quando a API de visualização do Google for carregada, retornando uma função.
      google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawChart2);
      // Criamos uma função para gerar os graficos que seram retornadas pela API
      function drawChart() {
          //Criamos uma requisição 
          var jsonData = $.ajax({
            url: "controllers.php",
            type: "POST",
            data: "controller=resposta&action=grafico1" ,
            dataType:"json",
            async: false  
          }).responseText;


          var data = new google.visualization.DataTable(jsonData);
    
          var options = {'title':'1. Por favor, informe seu genêro.'
                         };

          //Instanciamos o nosso grafico para que seja desenhado de acordo com os nossos dados e opções
          var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
          chart.draw(data, options);
      }

        function drawChart2() {
          //Criamos uma requisição 
          var jsonData = $.ajax({
            url: "controllers.php",
            type: "POST",
            data: "controller=resposta&action=grafico1" ,
            dataType:"json",
            async: false  
          }).responseText;


          var data = new google.visualization.DataTable(jsonData);
    
          var options = {'title':'1. Por favor, informe seu genêro.'
                         };

          //Instanciamos o nosso grafico para que seja desenhado de acordo com os nossos dados e opções
          var chart = new google.visualization.PieChart(document.getElementById('chart_div2'));
          chart.draw(data, options);
      }
      
    </script>
</head>

<body>
  <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
         <div id="chart_div" style="width: 600px; height: 300px"></div>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
         <div id="chart_div2" style="width: 600px; height: 300px"></div>
      </div>
    </div>
  </div>
</div>
	
    

     <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>