<h2>Physics<img src="<?php echo url(); ?>images/menu/Mechanics.png" alt="Mech"></h2>
	<div id="calculate" class="calculate">
     	<h3>Enter your scores below</h3>
			<p><label>Multiple Choice Incorrect</label></p>
				<p><input type="range" id="MC" min="0" step="1" value = "37" max="75" onmouseup="slidervalue('MC','MC2'), calculate();" ontouchend="slidervalue('MC','MC2'), calculate();"/><input type="number" min="0" max="75" step="1" id="MC2" value="37"  onchange="slidervalue('MC2','MC'), calculate();"/>/75</p>
			<p><label>Multiple Choice Skipped</label></p>
				<p><input type="range" id="MC3" min="0" step="1" value = "37" max="75" onmouseup="slidervalue('MC3','MC4'), calculate();" ontouchend="slidervalue('MC3','MC4'), calculate();"/><input type="number" min="0" max="75" step="1" id="MC4" value="37"  onchange="slidervalue('MC4','MC3'), calculate();"/>/75</p>
			<p>Choose a score curve</p>
			<p><input type="radio" name="curve" id="curve1" onclick="calculate()" checked/>2015 curve</p>


	</div>

	<div id="results">
    <h3>Results</h3>
		<p>Raw Score</p>
			<output id="score1"></output>
		<p>Scaled Score</p>
			<p><output id="score2"></output></p>

	</div>
