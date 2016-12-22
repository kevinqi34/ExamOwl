<h2>ACT<img src="<?php echo url(); ?>/images/menu/test.png" alt="ACT"></h2>

<div class="calculate" id="calculate">
		<h3>Enter your scores below</h3>
		<p><label>English</label></p>
			<p><input type="range" id="MC" min="0" step="1" max="75" onmouseup="slidervalue('MC','MC2'), calculate();" ontouchend="slidervalue('MC','MC2'), calculate();"/><input type="number" min="0" max="75" step="1" id="MC2" value="38"  onchange="slidervalue('MC2','MC'), calculate();"/>/75</p>
		<p><label>Math</label></p>
			<p><input type="range" id="DBQ" min="0" step="1" max="60" onmouseup="slidervalue('DBQ','DBQ2'), calculate();" ontouchend="slidervalue('DBQ','DBQ2'), calculate();"/><input type="number" min="0" max="60" step="1" id="DBQ2" value="30"  onchange="slidervalue('DBQ2','DBQ'), calculate();"/>/60</p>
		<p><label>Reading</label></p>
			<p><input type="range" id="FRQ1" min="0" step="1" max="40"onmouseup="slidervalue('FRQ1','FRQ12'), calculate();" ontouchend="slidervalue('FRQ1','FRQ12'), calculate();"/><input type="number" min="0" max="40" step="1" id="FRQ12" value="20"  onchange="slidervalue('FRQ12','FRQ1'), calculate();"/>/40</p>
		<p><label>Science</label></p>
			<p><input type="range" id="FRQ2" min="0" step="1" max="40"  onmouseup="slidervalue('FRQ2','FRQ22'), calculate();" ontouchend="slidervalue('FRQ2','FRQ22'), calculate();"/><input type="number" min="0" max="40" step="1" id="FRQ22" value="20"  onchange="slidervalue('FRQ22','FRQ2'), calculate();"/>/40</p>
		<p>Choose a score curve</p>
			<p><input type="radio" name="curve" id="curve1" onclick="calculate()" checked/>June 2015 curve<input type="radio" name="curve" id="curve2" onclick="calculate()"/>December 2012 curve</p>
</div>
<div id="results">
    <h3>Results</h3>
		<p>English Score</p>
			<output id="score1"></output>
		<p>Math Score</p>
			<p><output id="score2"></output></p>
		<p>Reading Score</p>
			<p><output id="score3"></output></p>
		<p>Science Score</p>
			<p><output id="score4"></output></p>
		<p>Composite Score</p>
			<p><output id="score5"></output></p>

</div>
