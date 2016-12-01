<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<script src="http://cdn.zingchart.com/zingchart.min.js"></script>

	</head>
	<body>
		<div id='stockDiv'></div>
		<script>
			var chartData={
				"type": "line",
				"series":[
					{"values":[27, 50, 32, 55, 33, 60, 42, 63]},

				]
			};
		
			zingchart.render({
				id: 'stockDiv',
				data: chartData,
				height: 300,
				width: 460
			});
		</script>
	</body>
</html>

