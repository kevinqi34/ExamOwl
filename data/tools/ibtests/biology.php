<h2>Biology HL<img src="<?php echo url(); ?>images/menu/DNA.jpg" alt="DNA"></h2>


		<h3>Choose a strand</h3>
		<p><input type="radio" name="strand" id="hl" onclick="calculate()" /checked>HL</p>
	<div class="calculate" id="calculate">
	   <h3>Enter your scores below</h3>
			<p><label>Paper 1 Score</label></p>
				<p><input type="range" id="P1" min="0" step="1" max="40" onmouseup="slidervalue('P1','P11'), calculate();" ontouchend="slidervalue('P1','P11'), calculate();"/><input type="number" min="0" max="40" step="1" id="P11" value="20"  onchange="slidervalue('P11','P1'), calculate();"/>/40</p>
			<p><label>Paper 2 Score</label></p>
				<p><input type="range" id="P2" min="0" step="1" max="72" onmouseup="slidervalue('P2','P22'), calculate();" ontouchend="slidervalue('P2','P22'), calculate();"/><input type="number" min="0" max="72" step="1" id="P22" value="36"  onchange="slidervalue('P22','P2'), calculate();"/>/72</p>
			<p><label>Paper 3 Score</label></p>
				<p><input type="range" id="P3" min="0" step="1" max="40" onmouseup="slidervalue('P3','P33'), calculate();" ontouchend="slidervalue('P3','P33'), calculate();"/><input type="number" min="0" max="40" step="1" id="P33" value="20"  onchange="slidervalue('P33','P3'), calculate();"/>/40</p>
			<p><label>Internal Score</label></p>
				<p><input type="range" id="IS" min="0" step="1" max="48"onmouseup="slidervalue('IS','IS2'), calculate();" ontouchend="slidervalue('IS','IS2'), calculate();"/><input type="number" min="0" max="48" step="1" id="IS2" value="24"  onchange="slidervalue('IS2','IS'), calculate();"/>/48</p>

			<p>Choose a score curve</p>
				<p><input type="radio" name="curve" id="curve1" onclick="calculate()" /checked>2008 curve</p>

	</div>

	<div id="results">
    <h3>Results</h3>
		<p>Total Score</p>
			<output id="score1"></output>
		<p>Estimated Grade</p>
			<p><output id="score2"></output></p>
	</div>
