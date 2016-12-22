<h2>English A1 HL/SL<img src="<?php echo url(); ?>images/menu/English.png" alt="English"></h2>

	<div class="calculate" id="calculate">
			<h3>Enter your scores below</h3>
			<p>Choose a strand</p>
				<p><input type="radio" name="strand" id="sl" onclick="calculate()" checked/>SL<input style="margin-left: 30px;" type="radio" name="strand" id="hl" onclick="calculate()">HL</p>
			<p><label>WLA Score</label></p>
				<p><input type="range" id="WLA" min="0" step="1" max="20" onmouseup="slidervalue('WLA','WLA2'), calculate();" ontouchend="slidervalue('WLA','WLA2'), calculate();"/><input type="number" min="0" max="20" step="1" id="WLA2" value="10"  onchange="slidervalue('WLA2','WLA'), calculate();"/>/20</p>
			<p><label>Paper 1 Score</label></p>
				<p><input type="range" id="P1" min="0" step="1" max="25" onmouseup="slidervalue('P1','P11'), calculate();" ontouchend="slidervalue('P1','P11'), calculate();"/><input type="number" min="0" max="25" step="1" id="P11" value="12"  onchange="slidervalue('P11','P1'), calculate();"/>/25</p>
			<p><label>Paper 2 Score</label></p>
				<p><input type="range" id="P2" min="0" step="1" max="25" onmouseup="slidervalue('P2','P22'), calculate();" ontouchend="slidervalue('P2','P22'), calculate();"/><input type="number" min="0" max="25" step="1" id="P22" value="12"  onchange="slidervalue('P22','P2'), calculate();"/>/25</p>
			<p><label>Internal Score</label></p>
				<p><input type="range" id="IS" min="0" step="1" max="60"onmouseup="slidervalue('IS','IS2'), calculate();" ontouchend="slidervalue('IS','IS2'), calculate();"/><input type="number" min="0" max="60" step="1" id="IS2" value="30"  onchange="slidervalue('IS2','IS'), calculate();"/>/60</p>

			<p>Choose a score curve</p>
				<p><input type="radio" name="curve" id="curve1" onclick="calculate()" checked/>2008 curve</p>
	</div>
	<div id="results">
    <h3>Results</h3>
		<p>Total Score</p>
			<output id="score1"></output>
		<p>Estimated Grade</p>
			<p><output id="score2"></output></p>
	</div>

</div>
