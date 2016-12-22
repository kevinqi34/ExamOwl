<h2>English Language<img src="<?php echo url(); ?>images/menu/English.png" alt="English"></h2>
<div id="calculate" class="calculate">
    <h3>Enter your scores below</h3>
    <p><label>Multiple Choice Score (%)</label></p>
      <p><input type="range" id="MC" min="0" step="1" max="100" onmouseup="slidervalue('MC','MC2'), calculate();" ontouchend="slidervalue('MC','MC2'), calculate();"/><input type="number" min="0" max="100" step="1" id="MC2" value="50"  onchange="slidervalue('MC2','MC'), calculate();"/>/100</p>
    <p><label>Essay 1 Score</label></p>
      <p><input type="range" id="FRQ1" min="0" step="1" max="9"  onmouseup="slidervalue('FRQ1','FRQ11'), calculate();" ontouchend="slidervalue('FRQ1','FRQ11'), calculate();"/><input type="number" min="0" max="9" step="1" id="FRQ11" value="5"  onchange="slidervalue('FRQ11','FRQ1'), calculate();"/>/9</p>
    <p><label>Essay 2 Score</label></p>
      <p><input type="range" id="FRQ2" min="0" step="1" max="9" onmouseup="slidervalue('FRQ2','FRQ22'), calculate();" ontouchend="slidervalue('FRQ2','FRQ22'), calculate();"/><input type="number" min="0" max="9" step="1" id="FRQ22" value="5"  onchange="slidervalue('FRQ22','FRQ2'), calculate();"/>/9</p>
    <p><label>Essay 3 Score</label></p>
      <p><input type="range" id="FRQ3" min="0" step="1" max="9" onmouseup="slidervalue('FRQ3','FRQ33'), calculate();" ontouchend="slidervalue('FRQ3','FRQ33'), calculate();"/><input type="number" min="0" max="9" step="1" id="FRQ33" value="5"  onchange="slidervalue('FRQ33','FRQ3'), calculate();"/>/9</p>
    <p>Choose a score curve</p>
    <p><input type="radio" name="curve" id="curve1" onclick="calculate()" checked/>2007 curve<input type="radio" name="curve" id="curve2" onclick="calculate()"/>2001 curve</p>
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
