<h2>GMAT</h2>
<div class="calculate">
  <p><b>Graduate Management Admission Test Score Calculator</b></p>
  <h3>Enter your scores below</h3>
  <p><label>Quant Section</label></p>
    <p><input type="range" id="Q1" min="30" step="1" max="51" onmouseup="slidervalue('Q1','Q11'), calculate();" ontouchend="slidervalue('Q1','Q11'), calculate();"/><input type="number" min="30" max="51" step="1" id="Q11" value="41"  onchange="slidervalue('Q11','Q1'), calculate();"/>/51</p>
  <p><label>Verbal Section</label></p>
    <p><input type="range" id="V1" min="25" step="1" max="51" onmouseup="slidervalue('V1','V11'), calculate();" ontouchend="slidervalue('V1','V11'), calculate();"/><input type="number" min="30" max="51" step="1" id="V11" value="41"  onchange="slidervalue('V11','V1'), calculate();"/>/51</p>
  <p><input checked="true" type="radio" name="curve" id="curve1" onclick="calculate()">2015 Results</p>
</div>
<div id="results">
  <h3>Results</h3>
  <p>Estimated Final Score</p>
    <output id="score1"></output>
  <p>Percentile</p>
    <output id="score2"></output>
    <output id="score3"></output>
</div>
