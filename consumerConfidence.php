<html>
<body>
	<?php 
		require('objects.php');
		$consumerConfidence = new consumerConfidence(); 
	?>
	
	<h3>Consumer Confidence</h3>
	<h4>2016 Consumer Spending</h4>
	<b>1st Quarter: </b>
		<?php echo $consumerConfidence->displayFirstQtSpending(); ?>
	<br/>
	<b>2nd Quarter: </b>
		<?php echo $consumerConfidence->displaySecondQtSpending(); ?>
	<br/>
	<h4>2016 Consumer Confidence Index</h4>
	<b>09/2016: </b>
		<?php echo $consumerConfidence->displayCurrentConsumerConfidence(); ?> Index Points
	<br/>
	<b>08/2016: </b>
		<?php echo $consumerConfidence->displayConsumerConfidence(); ?> Index Points
	<br/>
	<b>07/2016: </b>
		<?php echo $consumerConfidence->displayPrevMoConsumerConfidence(); ?> Index Points
	<br/>
</body>
</html>