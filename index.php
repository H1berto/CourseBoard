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
      google.charts.load('current', {'packages':['table']});
      //Definimos um retorno para ser executado quando a API de visualização do Google for carregada, retornando uma função.
      google.charts.setOnLoadCallback(drawChart);
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
    
          var pieoptions = {title:'1. Por favor, informe seu genêro.',is3D: true
                         };
          var baroptions = {title:'1. Por favor, informe seu genêro.',legend:'none',width:'50%',height:'50%'
                         };
          var coloptions = {title:'1. Por favor, informe seu genêro.',bar: {groupWidth: "55%"},legend: { position: "none" }
      };
          var donutoptions = {title:'1. Por favor, informe seu genêro.',pieHole: 0.4
      };
      

          //Instanciamos o nosso grafico para que seja desenhado de acordo com os nossos dados e opções
          var piechart = new google.visualization.PieChart(document.getElementById('chart_div'));
          piechart.draw(data, pieoptions);

          var barchart = new google.visualization.BarChart(document.getElementById('chart_div2'));
          barchart.draw(data, baroptions);
          
          var colchart = new google.visualization.ColumnChart(document.getElementById('chart_div3'));
          colchart.draw(data, coloptions);

           var donutchart = new google.visualization.PieChart(document.getElementById('chart_div4'));
          donutchart.draw(data, donutoptions);

          var table = new google.visualization.Table(document.getElementById('chart_div5'));
          table.draw(data,{showRowNumber: true, width: '70%', height: '70%'});
      }

      
    </script>
</head>

<body>

<div class="card-group">
  
    <div class="card">
      <div class="card-body">
         <div id="chart_div" style="width: 560px; height: 280px"></div>
      </div>
    </div>
  
  
    <div class="card">
      <div class="card-body">
         <div id="chart_div2" style="width: 560px; height: 280px"></div>
      </div>
    </div>
  
</div>

<div class="card-group">
  
    <div class="card">
      <div class="card-body">
         <div id="chart_div3" style="width: 560px; height: 280px"></div>
      </div>
    </div>
 
  
    <div class="card">
      <div class="card-body">
         <div id="chart_div4" style="width: 560px; height: 280px"></div>
      </div>
    </div>
  
    <div class="card">
      <div class="card-body">
         <div id="chart_div5" style="width: 560px; height: 280px"></div>
      </div>
    </div>
 
</div>

<div class="card-group">
  
    <div class="card">
      <div class="card-body">
         <div id="chart_div6" style="width: 600px; height: 300px"></div>
      </div>
    </div>
  
    <div class="card">
      <div class="card-body">
         <div id="chart_div6_text" style="width: 600px; height: 300px"></div>
      </div>
    </div>
  
</div>

<div class="card-group">
 
    <div class="card">
      <div class="card-body">
         <div id="chart_div7" style="width: 600px; height: 300px"></div>
      </div>
    </div>
 
    <div class="card">
      <div class="card-body">
         <div id="chart_div8" style="width: 600px; height: 300px"></div>
      </div>
    </div>
  
</div>

<div class="card-group">
 
    <div class="card">
      <div class="card-body">
         <div id="chart_div9_text" style="width: 600px; height: 300px"></div>
      </div>
    </div>
  
    <div class="card">
      <div class="card-body">
         <div id="chart_div9" style="width: 600px; height: 300px"></div>
      </div>
    </div>
  
</div>

<div class="card-group">
  
    <div class="card">
      <div class="card-body">
         <div id="chart_div10" style="width: 600px; height: 300px"></div>
      </div>
    </div>
  
    <div class="card">
      <div class="card-body">
         <div id="chart_div11" style="width: 600px; height: 300px"></div>
      </div>
    </div>
  
</div>
     <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>