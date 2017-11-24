<?php require(QCUBED_CONFIG_DIR . '/header.inc.php'); ?>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>

	<style>
        /* For only a temporary example */
        .counter div {
            font-family: 'Open Sans', sans-serif;
			-webkit-transition: all 400ms ease;
			-moz-transition: all 400ms ease;
			-o-transition: all 400ms ease;
			transition: all 400ms ease;
			text-align: center;
        }
        .counter div {
            display: block;
        }
		.counter span {
			font-size: 66px;
			color: #555;
			margin-bottom: 200px;
			display: inline-block;
			font-weight: 400;
			text-align: center;
			width: 30%;
		}
		h3 {
			margin-bottom: 50px;
			text-align: center;
			color: #999;
		}
	</style>

	<?php $this->RenderBegin(); ?>

	<div class="instructions" style="margin-bottom: 50px;">
		<h1 class="instruction_title">QCounterUp: Counter-Up is a lightweight jQuery plugin
            that counts up to a targeted number when the number becomes visible)</h1>
		<p>
            <b>QCounterUp</b> uses the plugin  <a href="http://bfintal.github.io/Counter-Up/demo/demo.html">Counter-Up</a>.
            Counter-Up is a jQuery plugin that animates a number from zero (counting up towards it).
		</p>
	</div>

	<h3>(Scroll down)</h3>

	<div class="counter">
		<?php $this->strCounterUp1->render(); ?>
		<?php $this->strCounterUp2->render(); ?>
		<?php $this->strCounterUp3->render(); ?>
	</div>

	<div class="counter">
		<?php $this->strCounterUp4->render(); ?>
		<?php $this->strCounterUp5->render(); ?>
		<?php $this->strCounterUp6->render(); ?>
	</div>

	<div class="counter">
		<?php $this->strCounterUp7->render(); ?>
		<?php $this->strCounterUp8->render(); ?>
		<?php $this->strCounterUp9->render(); ?>
	</div>

	<div class="counter">
		<?php $this->strCounterUp10->render(); ?>
		<?php $this->strCounterUp11->render(); ?>
		<?php $this->strCounterUp12->render(); ?>
	</div>

<?php $this->RenderEnd(); ?>
<?php require(QCUBED_CONFIG_DIR . '/footer.inc.php'); ?>