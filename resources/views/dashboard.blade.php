
<!DOCTYPE html>
<html lang="en">
<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <title>Sensor Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../../css/bootstrap.css" rel="stylesheet">
    <link href="../../css/controlfrog.css" rel="stylesheet" media="screen">   
	<link href="../../favicon.ico" rel="shortcut icon" type="image/x-icon" />
	
	<script src="../../js/jquery-1.9.1.min.js"></script>    
	<script src="../../js/moment.js"></script>	
	<script src="../../js/easypiechart.js"></script>
	<script src="../../js/gauge.js"></script>	
	<script src="../../js/chart.js"></script>
	<script src="../../js/jquery.sparklines.js"></script>			
    <script src="../../js/bootstrap.js"></script>
    <script src="../../js/controlfrog-plugins.js"></script>
    
    <!--[if lt IE 9]>
		<script src="../../js/respond.min.js"></script>
		<script src="../../js/excanvas.min.js"></script>
	<![endif]-->
    
    
	<script>
		var themeColour = 'black';
	</script>
	<style type="text/css">
		#temp, #humidity {
			font-size: 6.5em;
		}
	</style>
    <script src="../../js/controlfrog.js"></script>
</head>
<body class="black">
	
	<div class="cf-container">

		<div class="row">
			<div class="col-sm-3 cf-item">
				<!--
				Display the time and date
				For 12hr clock add class 'cf-td-12' to the 'cf-td' div
			-->
			<header>
				<p><span></span>Time &amp; date</p>
			</header>
			<div class="content">
				<div class="cf-td">
				<!-- <div class="cf-td cf-td-12">-->
					<div class="cf-td-time metric">12:00</div>
					<div class="cf-td-dd">
						<p class="cf-td-day metric-small">Monday</p>
						<p class="cf-td-date metric-small">1st October, 2013</p>
					</div>
				</div>
			</div>
			</div> <!-- //end cf-item -->

			<div class="col-sm-3 cf-item">
				<header>
					<p><span></span>Gauge</p>
				</header>
				<div class="content cf-gauge" id="cf-gauge-1">
					<div class="val-current">
						<div class="metric" id="cf-gauge-1-m">0</div>
					</div>
					<div class="canvas">
						<canvas id="cf-gauge-1-g"></canvas>
					</div>
					<div class="val-min">
						<div class="metric-small">0</div>
					</div>
					<div class="val-max">
						<div class="metric-small">0</div>						
					</div>
				</div>
			</div> <!-- //end cf-item -->

			<div class="col-sm-3 cf-item">
				<header>
					<p><span></span>Temperature &amp; Humidity</p>
				</header>
				<div class="content">
					<div class="cf-svmc">
						<div class="cf-svmc">
							<div id="temp" class="metric">23℃</div>
							<div class="change m-green metric-small">
								<div class="arrow-up"></div>
								<span>1.45%</span>
							</div>
						</div>
						<br>
						<div class="cf-svmc">
							<div id="humidity" class="metric">0 %</div>
							<div class="change m-green metric-small">
								<div class="arrow-up"></div>
								<span>0%</span>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- //end cf-item -->

			

			
			
			
			<div class="col-sm-3 cf-item">
				<header>
					<p><span></span>Ambient Temperature</p>
				</header>
				<div class="content">
					<div class="cf-svmc">
						<div class="metric">23℃</div>
						<div class="change m-red metric-small">
							<div class="arrow-down"></div>
							<span class="large">32<span class="small">.45%</span></span>
						</div>
					</div>
				</div>
			</div> <!-- //end cf-item -->
		</div> <!-- //end row -->
	
		<div class="row">
			<div class="col-sm-3 cf-item">
				<header>
					<p><span></span>Pie chart</p>
				</header>
				<div class="content cf-pie" id="cf-pie-1">
					<canvas id="cf-pie-1-c" width="0" height="0"></canvas>
				</div>
			</div> <!-- //end cf-item -->
			<div class="col-sm-3 cf-item">
				<header>
					<p><span></span>RAG Bars</p>
				</header>
				<div class="content">
					<div id="cf-rag-1" class="cf-rag"></div>
				</div>
			</div> <!-- //end cf-item -->
			<div class="col-sm-3 cf-item">
				<header>
					<p><span></span>Funnel Chart</p>
				</header>
				<div class="content">
					<div id="cf-funnel-1" class="cf-funnel"></div>
				</div>
			</div> <!-- //end cf-item -->
			<div class="col-sm-3 cf-item">
				<header>
					<p><span></span>Water Level</p>
				</header>
				<div class="content cf-svp clearfix" id="svp-1">
					<div class="chart" data-percent="72" data-layout="l-3"></div>
					<div class="metrics">
						<span class="metric">72</span>
						<span class="metric-small">%</span>
					</div>
				</div>
			</div> <!-- //end cf-item -->
		</div> <!-- //end row -->

	</div> <!-- //end container -->

</body>
</html>