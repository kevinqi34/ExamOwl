<h2>Human Geography<img src="<?php echo url(); ?>images/menu/Globe.png" alt="Globe"></h2>


<div class="calculate" id="calculate">
    <h3>Enter your scores below</h3>
    <p><label>Multiple Choice Score</label></p>
      <p><input type="range" id="MC" min="0" step="1" max="75"  onmouseup="slidervalue('MC','MC2'), calculate();" ontouchend="slidervalue('MC','MC2'), calculate();"/><input type="number" min="0" max="75" step="1" id="MC2" value="38"  onchange="slidervalue('MC2','MC'), calculate();"/>/75</p>
    <p><label>Total FRQ Score (%)</label></p>
      <p><input type="range" id="FRQ1" min="0" step="1" max="100" onmouseup="slidervalue('FRQ1','FRQ2'), calculate();" ontouchend="slidervalue('FRQ1','FRQ2'), calculate();"/><input type="number" min="0" max="100" step="1" id="FRQ2" value="50"  onchange="slidervalue('FRQ2','FRQ1'), calculate();"/>/100</p>
    <p>Choose a score curve</p>
      <p><input type="radio" name="curve" id="curve1" onclick="calculate()" checked/>2006 curve<input type="radio" name="curve" id="curve2" onclick="calculate()"/>2001 curve</p>
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
