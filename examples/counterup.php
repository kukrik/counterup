<?php
require('qcubed.inc.php');
    
use QCubed\Control\FormBase as QForm;
use Kukrik\CounterUp as KC;
    
	class SampleForm extends QForm {
		protected $strCounterUp1;
		protected $strCounterUp2;
		protected $strCounterUp3;
		protected $strCounterUp4;
		protected $strCounterUp5;
		protected $strCounterUp6;
		protected $strCounterUp7;
		protected $strCounterUp8;
		protected $strCounterUp9;
		protected $strCounterUp10;
		protected $strCounterUp11;
		protected $strCounterUp12;


		protected function formCreate() {
			$this->strCounterUp1 = new KC\CounterUp($this);
			$this->strCounterUp2 = new KC\CounterUp($this);
			$this->strCounterUp3 = new KC\CounterUp($this);

			$this->strCounterUp4 = new KC\CounterUp($this);
			$this->strCounterUp5 = new KC\CounterUp($this);
			$this->strCounterUp6 = new KC\CounterUp($this);

			$this->strCounterUp7 = new KC\CounterUp($this);
			$this->strCounterUp8 = new KC\CounterUp($this);
			$this->strCounterUp9 = new KC\CounterUp($this);

			$this->strCounterUp10 = new KC\CounterUp($this);
			$this->strCounterUp11 = new KC\CounterUp($this);
			$this->strCounterUp12 = new KC\CounterUp($this);

			$this->strCounterUp1->Data = '52,147';
			$this->strCounterUp2->Data = '1.9583';
			$this->strCounterUp3->Data = '12345';

			$this->strCounterUp4->Data = '43,753';
			$this->strCounterUp5->Data = '1,734,195.10';
			$this->strCounterUp6->Data = '849203';

			$this->strCounterUp7->Data = '0.8412';
			$this->strCounterUp8->Data = '958393.10';
			$this->strCounterUp9->Data = '5,123,348';

			$this->strCounterUp10->Data = '43,753';
			$this->strCounterUp11->Data = '1,734,195.10';
			$this->strCounterUp12->Data = '56,29';
		}

	}

	SampleForm::run('SampleForm');
