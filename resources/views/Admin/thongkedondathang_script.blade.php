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
        data.addColumn('string', 'Tình trạng');
        data.addColumn('number', 'Số lượng');
        data.addRows([
        	<?php 
        		foreach ($donhang as $value) {
              if($value->trangthai==1) 
                $trangthai = "Đã đặt hàng";
              else if($value->trangthai==-1) 
                $trangthai = "Đã hủy";
                    else if($value->trangthai==0)
                      $trangthai = "Đang trong giỏ hàng";
                    else $trangthai = "Đã thanh toán";
        			echo "['".$trangthai."',".$value->soluong."],";
        		}
        	?>
        	]);
        

        // Set chart options
        var options = {'title':'THỐNG KÊ TÌNH TRẠNG ĐƠN HÀNG',
                       'width':1000,
                       'height':700};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart'));
        chart.draw(data, options);
      }
    </script>