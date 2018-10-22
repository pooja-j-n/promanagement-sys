
	<?php

include "db.php";
session_start();


	$query1="select count(*) from project,roles where project.PID=roles.PID and roles.FID='456' and roles.ROLE='evaluator' and project.STATUS='submitted' " ;
		$res1=mysql_query($query1);

	$query2="select count(*) from project,roles where project.PID=roles.PID and roles.FID='456' and roles.ROLE='evaluator' and project.STATUS='evaluated' " ;
		$res2=mysql_query($query2);

	$query3="select count(*) from project,roles where project.PID=roles.PID and roles.FID='456' and roles.ROLE='evaluator' and project.STATUS='to be submitted' " ;
		$res3=mysql_query($query3);

	
	
	


?>



 <html>
  <head>
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
	   var var1 = "<?php echo $res1; ?>";
	   	   var var2 = "<?php echo $res2; ?>";

		   	   var var3 = "<?php echo $res3; ?>";

      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'State');
        data.addRows([
          ['Submitted', 3],
          ['Evaluated', 2],
          ['To be submitted',2],
          
        ]);

        // Set chart options
        var options = {'title':'Project Submissions',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>

  <body>
    <!--Div that will hold the pie chart-->
    <div id="chart_div"></div>
  </body>
</html>





