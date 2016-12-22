<h2>World History<img src="<?php echo url(); ?>/images/menu/Globe.png" alt="Globe"></h2>

<div id="calculate" class="calculate">
    <h3>Enter your scores below</h3>
    <p><label>Multiple Choice Score</label></p>
      <p><input type="range" id="MC" min="0" step="1" max="70"  onmouseup="slidervalue('MC','MC2'), calculate();" ontouchend="slidervalue('MC','MC2'), calculate();"/><input type="number" min="0" max="70" step="1" id="MC2" value="35"  onchange="slidervalue('MC2','MC'), calculate();"/>/70</p>
    <p><label>DBQ Score</label></p>
      <p><input type="range" id="DBQ" min="0" step="1" max="9"  onmouseup="slidervalue('DBQ','DBQ2'), calculate();" ontouchend="slidervalue('DBQ','DBQ2'), calculate();"/><input type="number" min="0" max="9" step="1" id="DBQ2" value="5"  onchange="slidervalue('DBQ2','DBQ'), calculate();"/>/9</p>
    <p><label>FRQ1 Score</label></p>
      <p><input type="range" id="FRQ1" min="0" step="1" max="9" onmouseup="slidervalue('FRQ1','FRQ12'), calculate();" ontouchend="slidervalue('FRQ1','FRQ12'), calculate();"/><input type="number" min="0" max="9" step="1" id="FRQ12" value="5"  onchange="slidervalue('FRQ12','FRQ1'), calculate();"/>/9</p>
    <p><label>FRQ2 Score</label></p>
      <p><input type="range" id="FRQ2" min="0" step="1" max="9" onmouseup="slidervalue('FRQ2','FRQ22'), calculate();" ontouchend="slidervalue('FRQ2','FRQ22'), calculate();"/><input type="number" min="0" max="9" step="1" id="FRQ22" value="5"  onchange="slidervalue('FRQ22','FRQ2'), calculate();"/>/9</p>
    <p>Choose a score curve</p>
      <p><input type="radio" name="curve" id="curve1" onclick="calculate()" checked/>2007 curve<input type="radio" name="curve" id="curve2" onclick="calculate()"/>2002 curve</p>
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
