<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Reg</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
		google.charts.load('current', {
			'packages': ['corechart']
		});
		google.charts.setOnLoadCallback(drawChart);

		function drawChart() {

			var data = google.visualization.arrayToDataTable([
				['Task', 'Hours per Day'],
				['Work', 11],
				['Eat', 2],
				['Commute', 2],
				['Watch TV', 2],
				['Sleep', 7]
			]);

			var options = {
				title: 'Pie Chart'
			};

			var chart = new google.visualization.PieChart(document.getElementById('piechart'));

			chart.draw(data, options);
		}
	</script>
	<script type="text/javascript">
		google.charts.load('current', {
			'packages': ['bar']
		});
		google.charts.setOnLoadCallback(drawChart);

		function drawChart() {
			var data = google.visualization.arrayToDataTable([
				['Year', 'Sales', 'Expenses', 'Profit'],
				['2014', 1000, 400, 200],
				['2015', 1170, 460, 250],
				['2016', 660, 1120, 300],
				['2017', 1030, 540, 350]
			]);

			var options = {
				chart: {
					title: 'Bar Graph'

				},
				bars: 'vertical' // Required for Material Bar Charts.
			};

			var chart = new google.charts.Bar(document.getElementById('barchart_material'));

			chart.draw(data, google.charts.Bar.convertOptions(options));
		}
	</script>  
</head>
</html>