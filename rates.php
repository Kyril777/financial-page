<html>
<body>
	<?php 
		require('objects.php');
		$rates = new rates(); 
	?>
	
	<h3>Emloyment and Inflation Rates</h3>
	<b>Current Employment Rate: </b>
		<?php echo $rates->displayEmpRate(); ?>
	<br/>
	<b>Last Month's Employment Rate (08/16): </b>
		<?php echo $rates->displayPrevEmpRate(); ?>
	<br/>
	<b>Real Employment Rate: </b>
		<?php echo $rates->displayRealEmpRate(); ?>%
	<br/>
	<b>Inflation Rate: </b>
		<?php echo $rates->displayInflRate(); ?>
	<br/>
	<b>Inflation Rate Forecast: </b>
		<?php echo $rates->displayInflRateFore(); ?>
	<br/>
</body>
</html>