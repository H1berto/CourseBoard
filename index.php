<?php	
	require_once './DB.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>	CourseBoard</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	 <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
        	<?php 
               $sexo = array();
               $quantidade = array();
             
               $i=0;
               $sql = DB::getConn()->prepare("SELECT DISTINCT resposta.descricao AS sexo,COUNT(resposta.descricao) AS quantidade FROM `resposta` INNER jOIN `pergunta`ON resposta.Pergunta_id = pergunta.id WHERE Pergunta_id =1 AND pergunta.Questionario_id=1 GROUP BY resposta.descricao");
               $sql->execute();
             
               while($row = $sql->fetch(PDO::FETCH_ASSOC)){
                 $sexo[$i] =$row['sexo']; 
                 $quantidade[$i]= $row['quantidade'];
             
                 $i = $i + 1; 
                }
            ?>
            ['Sexo','Quantidade'],
            <?php 
                $k =$i;

                for ($i =0; $i < $k; $i++){
                  if($i<$k-1){
          ?> 
              ['<?php echo $sexo[$i];?>',<?php echo $quantidade[$i];  ?>],        
          <?php 

                  }else{
          ?>
                ['<?php echo $sexo[$i]; ?>',<?php echo $quantidade[$i];  ?>]
          <?php           
                  }
                }       		
        	?>
        	
       
        ]);

        // Set chart options
        var options = {'title':'1. Por favor, informe seu genêro.'
                       };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
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
         <div id="chart_div" style="width: 600px; height: 300px"></div>
      </div>
    </div>
  </div>
</div>
	
    

     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>