	<h2>Art History<img src="<?php echo url(); ?>images/menu/Art.jpg" alt="Art"></h2>
	<div id="calculate" class="calculate">
			<h3>Enter your scores below</h3>
			<p><label>Multiple Choice Score</label></p>
				<p><input type="range" id="MC" min="0" step="1" max="115" onmouseup="slidervalue('MC','MC2'), calculate();" ontouchend="slidervalue('MC','MC2'), calculate();"/><input type="number" min="0" max="115" step="1" id="MC2" value="58"  onchange="slidervalue('MC2','MC'), calculate();"/>/115</p>
			<p><label>Short FRQ1 Score</label></p>
				<p><input type="range" id="SRQ1" min="0" step="1" max="4" onmouseup="slidervalue('SRQ1','SRQ11'), calculate();" ontouchend="slidervalue('SRQ1','SRQ11'), calculate();"/><input type="number" min="0" max="4" step="1" id="SRQ11" value="2"  onchange="slidervalue('SRQ11','SRQ1'), calculate();"/>/4</p>
			<p><label>Short FRQ2 Score</label></p>
				<p><input type="range" id="SRQ2" min="0" step="1" max="4"  onmouseup="slidervalue('SRQ2','SRQ22'), calculate();" ontouchend="slidervalue('SRQ2','SRQ22'), calculate();"/><input type="number" min="0" max="4" step="1" id="SRQ22" value="2"  onchange="slidervalue('SRQ22','SRQ2'), calculate();"/>/4</p>
			<p><label>Short FRQ3 Score</label></p>
				<p><input type="range" id="SRQ3" min="0" step="1" max="4"   onmouseup="slidervalue('SRQ3','SRQ33'), calculate();" ontouchend="slidervalue('SRQ3','SRQ33'), calculate();"/><input type="number" min="0" max="4" step="1" id="SRQ33" value="2"  onchange="slidervalue('SRQ33','SRQ3'), calculate();"/>/4</p>
			<p><label>Short FRQ4 Score</label></p>
				<p><input type="range" id="SRQ4" min="0" step="1" max="4"  onmouseup="slidervalue('SRQ4','SRQ44'), calculate();" ontouchend="slidervalue('SRQ4','SRQ44'), calculate();"/><input type="number" min="0" max="4" step="1" id="SRQ44" value="2"  onchange="slidervalue('SRQ44','SRQ4'), calculate();"/>/4</p>
			<p><label>Short FRQ5 Score</label></p>
				<p><input type="range" id="SRQ5" min="0" step="1" max="4"  onmouseup="slidervalue('SRQ5','SRQ55'), calculate();" ontouchend="slidervalue('SRQ5','SRQ55'), calculate();"/><input type="number" min="0" max="4" step="1" id="SRQ55" value="2"  onchange="slidervalue('SRQ55','SRQ5'), calculate();"/>/4</p>
			<p><label>Short FRQ6 Score</label></p>
				<p><input type="range" id="SRQ6" min="0" step="1" max="4" onmouseup="slidervalue('SRQ6','SRQ66'), calculate();" ontouchend="slidervalue('SRQ6','SRQ66'), calculate();"/><input type="number" min="0" max="4" step="1" id="SRQ66" value="2"  onchange="slidervalue('SRQ66','SRQ6'), calculate();"/>/4</p>
			<p><label>Short FRQ7 Score</label></p>
				<p><input type="range" id="SRQ7" min="0" step="1" max="4" onmouseup="slidervalue('SRQ7','SRQ77'), calculate();" ontouchend="slidervalue('SRQ7','SRQ77'), calculate();"/><input type="number" min="0" max="4" step="1" id="SRQ77" value="2"  onchange="slidervalue('SRQ77','SRQ7'), calculate();"/>/4</p>
			<p><label>Long FRQ1 Score</label></p>
				<p><input type="range" id="FRQ1" min="0" step="1" max="9" onmouseup="slidervalue('FRQ1','FRQ11'), calculate();" ontouchend="slidervalue('FRQ1','FRQ11'), calculate();"/><input type="number" min="0" max="9" step="1" id="FRQ11" value="5"  onchange="slidervalue('FRQ11','FRQ1'), calculate();"/>/9</p>
			<p><label>Long FRQ2 Score</label></p>
				<p><input type="range" id="FRQ2" min="0" step="1" max="9" onmouseup="slidervalue('FRQ2','FRQ22'), calculate();" ontouchend="slidervalue('FRQ2','FRQ22'), calculate();"/><input type="number" min="0" max="9" step="1" id="FRQ22" value="5"  onchange="slidervalue('FRQ22','FRQ2'), calculate();"/>/9</p>
			<p>Choose a score curve</p>
			<p><input type="radio" name="curve" id="curve1" onclick="calculate()" checked/>2009 curve<input type="radio" name="curve" id="curve2" onclick="calculate()"/>2004 curve</p>
	</div>


	<div id="results">
    <h3>Results</h3>
		<p>Weighted Section I Score</p>
			<output id="score1"></output>
		<p>Weighted Section II Score</p>
			<p><output id="score2"></output></p>
		<p>Composite Score</p>
			<p><output id="score3"></output></p>
		<p>Predicted AP Score</p>
			<p><output id="score4"></output></p>
	</div>
