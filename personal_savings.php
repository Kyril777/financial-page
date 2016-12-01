<html>
<body>
	<?php 
		require('objects.php');
		$personalSavings = new personalSavings(); 
	?>
	
	<h3>US Personal Savings Rate</h3>
	<b>Current: </b>
		<?php echo $personalSavings->displaySavingsCurrent(); ?>%
	<br/>
	<b>Previous: </b>
		<?php echo $personalSavings->displaySavingsPrevious(); ?>%
	<br/>
	<b>Last Year: </b>
		<?php echo $personalSavings->displaySavingsPastYear(); ?>%
	<br/>
	<b>Long-term Average: </b>
		<?php echo $personalSavings->displaySavingsLongTermAvg(); ?>%
	<br/>

</body>
</html>