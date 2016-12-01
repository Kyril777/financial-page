<html>
<body>
	<?php 
		require('objects.php');
		$gdp = new gdp(); 
	?>
	
	<h3>GDP</h3>
	<b>Gross Domestic Product: </b>
		<?php echo $gdp->displayGDP(); ?>
	<br/>
	<b>Gross National Product: </b>
		<?php echo $gdp->displayGNP(); ?>
	<br/>
	<b>GDP Annual Growth Rate: </b>
		<?php echo $gdp->displayGDPAnnGrowRate(); ?>%
	<br/>
	<b>GDP per Capita: </b>
		<?php echo $gdp->displayGDPPerCap(); ?>
	<br/>
	<b>Previous GDP per Capita: </b>
		<?php echo $gdp->displayGDPPerCapPrv(); ?>
	<br/>
</body>
</html>