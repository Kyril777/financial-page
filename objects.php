<?php

class standardAndPoors{
	private $currentValue = 2127.81;
	private $previousValue = 2181.30;
	private $openingDayValue = 2169.08;
	private $dayHigh = 2169.08;
	private $dayLow = 2127.81;
	private $currentVol = 733227000;
	private $avgDailyVol = 580485692;
	private $avgPE = 22.7;
	private $oneYearChange = 9.57;
	
	private $djia = 18240;
	private $global_givi = 226.92;
	private $global_bmi = 207.48;
	private $djci = 265.56;
	private $gsci = 2328.2;
	
	public $positiveChange = '+';
	public $negativeChange = '-';
	
	
	public function displayCurrentValue(){
		echo $this->currentValue;
	}
	
	public function displayPreviousValue(){
		echo $this->previousValue;
	}
	
	public function displayOpeningDayValue(){
		echo $this->openingDayValue;
	}
	
	public function displayDayHigh(){
		echo $this->dayHigh;
	}
	
	public function displayDayLow(){
		echo $this->dayLow;
	}
	
	public function displayCurrentLow(){
		echo $this->currentLow;
	}
	
	public function displayCurrentVol(){
		echo $this->currentVol;
	}
	
	public function displayAvgDailyVol(){
		echo $this->avgDailyVol;
	}
	
	public function displayAvgPE(){
		echo $this->avgPE;
	}
	
	public function displayOneYearChange(){
		echo $this->positiveChange;
		echo $this->oneYearChange;
	}
	
	public function displayDjia(){
		echo $this->djia;
	}
}

class gdp{
	private $gdp = 17947;
	private $gnp = 16734;
	private $gdp_ann_grow_rate = 1.1;
	private $gdp_per_cap = 51486;
	private $gdp_per_cap_prev = 50622;
	
	public function displayGDP(){
		echo $this->gdp;
	}
	
	public function displayGNP(){
		echo $this->gnp;
	}
	
	public function displayGDPAnnGrowRate(){
		echo $this->gdp_ann_grow_rate;
	}
	
	public function displayGDPPerCap(){
		echo $this->gdp_per_cap;
	}
	
	public function displayGDPPerCapPrv(){
		echo $this->gdp_per_cap_prev;
	}
}

class rates{
	private $empRateRecent = 4.9;
	private $empRatePrev = 4.9;
	private $empRateReal = 9.8;
	private $inflationRate = 0.8;
	private $inflationRateForecast = 0.9;
	
	public function displayEmpRate(){
		echo $this->empRateRecent;
	}

	public function displayPrevEmpRate(){
		echo $this->empRatePrev;
	}

	public function displayRealEmpRate(){
		echo $this->empRateReal;
	}

	public function displayInflRate(){
		echo $this->inflationRate;
	}

	public function displayInflRateFore(){
		echo $this->inflationRateForecast;
	}	
}

class consumerConfidence{
	private $firstQtSpnd = 11365.2;
	private $secondQtSpnd = 11457.4;
	private $prevConsConf = 100.27;
	private $prevConsConfMinusOne = 100.32;
	private $currConsConf = 100.39;
	
	public function displayFirstQtSpending(){
		echo $this->firstQtSpnd;
	}	
	
	public function displaySecondQtSpending(){
		echo $this->secondQtSpnd;
	}	
	
	public function displayConsumerConfidence(){
		echo $this->prevConsConf;
	}	
	
	public function displayPrevMoConsumerConfidence(){
		echo $this->prevConsConfMinusOne;
	}	
	
	public function displayCurrentConsumerConfidence(){
		echo $this->currConsConf;
	}	
}

class cpi{
	private $prevCPI = 240.647;
	private $prevCPIminusOne = 239.828;
	private $thirdQuarter = 240.00;
	private $fourthQuarter = 241.00;
	
	public function displayPrevCPI(){
		echo $this->prevCPI;
	}
	
	public function displayCPIminusOne(){
		echo $this->prevCPIminusOne;
	}
	
	public function displayThirdQt(){
		echo $this->thirdQuarter;
	}
	
	public function displayFourthQt(){
		echo $this->fourthQuarter;
	}

}


class personalSavings{
	private $savingsCurrent = 5.70;
	private $savingsPrevious = 5.50;
	private $savingsPastYear = 5.80;
	private $savingsLongTermAvg = 8.36;

	public function displaySavingsCurrent(){
		echo $this->savingsCurrent;
	}

	public function displaySavingsPrevious(){
		echo $this->savingsPrevious;
	}

	public function displaySavingsPastYear(){
		echo $this->savingsPastYear;
	}

	public function displaySavingsLongTermAvg(){
		echo $this->savingsLongTermAvg;
	}	
}
	


?>


