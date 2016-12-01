<html>
<body>
	<?php 
		require('objects.php');
		$cpi = new CPI(); 
	?>
	
	<h3>Consumer Price Index (2016)</h3>
	<b>08/2016: </b>
		<?php echo $cpi->displayPrevCPI(); ?>
	<br/>
	<b>07/2016: </b>
		<?php echo $cpi->displayCPIminusOne(); ?>
	<br/>
	<b>Third Quarter (Projection): </b>
		<?php echo $cpi->displayThirdQt(); ?>
	<br/>
	<b>Fourth Quarter (Projection): </b>
		<?php echo $cpi->displayFourthQt(); ?>
	<br/>

</body>
</html>