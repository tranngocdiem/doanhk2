<script  type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
     
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Tháng');
        data.addColumn('number', 'Doanh thu');
        data.addRows([
        	<?php 
        		foreach ($doanhthu as $value) {
        			echo "['Tháng ".$value->thang."',".$value->doanhthu."],";
        		}
        	?>
        	]);
        

        // Set chart options
        var options = {'title':'THỐNG KÊ DOANH THU',
                       'width':1000,
                       'height':500};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.ColumnChart(document.getElementById('chart'));
        chart.draw(data, options);
      }
    </script>