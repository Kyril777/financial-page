<html>
<body>
	<?php 
		require('objects.php');
		$standardAndPoors = new standardAndPoors(); 
	?>
	
	<h3>Standard and Poors</h3>
	<b>Current Value: </b>
		<?php echo $standardAndPoors->displayCurrentValue(); ?>
	<br/>
	<b>Previous Value: </b>
		<?php echo $standardAndPoors->displayPreviousValue(); ?>
	<br/>
	<b>Opening Day: </b>
		<?php echo $standardAndPoors->displayOpeningDayValue(); ?>
	<br/>
	<b>Day High: </b>
		<?php echo $standardAndPoors->displayDayHigh(); ?>
	<br/>
	<b>Current Low: </b>
		<?php echo $standardAndPoors->displayDayLow(); ?>
	<br/>
	<b>Current Volume: </b>
		<?php echo $standardAndPoors->displayCurrentVol(); ?>
	<br/>
	<b>Average Daily Volume (3 mo.): </b>
		<?php echo $standardAndPoors->displayAvgDailyVol(); ?>
	<br/>
	<b>Average P/E: </b>
		<?php echo $standardAndPoors->displayAvgPE(); ?>
	<br/>
	<b>One Year Change: </b>
		<?php echo $standardAndPoors->displayOneYearChange(); ?>%
	<br/>
	<b>DJIA: </b>
		<?php echo $standardAndPoors->displayDjia(); ?>
	<br/>
	
</body>
</html>