<div class="table-data">
<ul class="box-info">
				<li>
        <i class='bx bxl-product-hunt'></i>
					<span class="text">
						<h3><?php echo $amountProduct?></h3>
						<p>Total product</p>
					</span>
				</li>
				<li>
					<!-- <i class="bx bxs-group"></i> -->
          <i class='bx bxs-category' ></i>
					<span class="text">
						<h3><?php echo $amountCate?></h3>
						<p>Total category</p>
					</span>
				</li>
				<li>
					<i class="bx bxs-dollar-circle"></i>
					<span class="text">
						<h3>$2543</h3>
						<p>Total Sales</p>
					</span>
				</li>
			</ul>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['categoryName', 'number_cate'],
          <?php
          foreach($chartCate as $key){
            echo "['" . $key['categoryName'] . "', " . $key['number_cate'] . "],";
          }
          ?>
        ]);

        var options = {
          title: 'Statistical',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>
</div>
