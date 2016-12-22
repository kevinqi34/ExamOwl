<h2>Calculus BC <img src="<?php echo url(); ?>images/menu/Calc.png" alt="calc"></h2>
<div id="calculate" class="calculate">
    <h3>Enter your scores below</h3>
    <p><label>Multiple Choice (no Calculator) Score</label></p>
      <p><input type="range" id="MC" min="0" step="1" max="28" onmouseup="slidervalue('MC','MC2'), calculate();" ontouchend="slidervalue('MC','MC2'), calculate();"/><input type="number" min="0" max="28" step="1" id="MC2" value="14"  onchange="slidervalue('MC2','MC'), calculate();"/>/28</p>
    <p><label>Multiple Choice (with Calculator) Score</label></p>
      <p><input type="range" id="MC3" min="0" step="1" max="17" onmouseup="slidervalue('MC3','MC4'), calculate();"  ontouchend="slidervalue('MC3','MC4'), calculate();"/><input type="number" min="0" max="17" step="1" id="MC4" value="9"  onchange="slidervalue('MC4','MC3'), calculate();"/>/17</p>
    <p><label>FRQ1 Score</label></p>
      <p><input type="range" id="FRQ1" min="0" step="1" max="9" onmouseup="slidervalue('FRQ1','FRQ11'), calculate();" ontouchend="slidervalue('FRQ1','FRQ11'), calculate();"/><input type="number" min="0" max="9" step="1" id="FRQ11" value="5"  onchange="slidervalue('FRQ11','FRQ1'), calculate();"/>/9</p>
    <p><label>FRQ2 Score</label></p>
      <p><input type="range" id="FRQ2" min="0" step="1" max="9" onmouseup="slidervalue('FRQ2','FRQ22'), calculate();" ontouchend="slidervalue('FRQ2','FRQ22'), calculate();"/><input type="number" min="0" max="9" step="1" id="FRQ22" value="5"  onchange="slidervalue('FRQ22','FRQ2'), calculate();"/>/9</p>
    <p><label>FRQ3 Score</label></p>
      <p><input type="range" id="FRQ3" min="0" step="1" max="9" onmouseup="slidervalue('FRQ3','FRQ33'), calculate();" ontouchend="slidervalue('FRQ3','FRQ33'), calculate();"/><input type="number" min="0" max="9" step="1" id="FRQ33" value="5"  onchange="slidervalue('FRQ33','FRQ3'), calculate();"/>/9</p>
    <p><label>FRQ4 Score</label></p>
      <p><input type="range" id="FRQ4" min="0" step="1" max="9" onmouseup="slidervalue('FRQ4','FRQ44'), calculate();" ontouchend="slidervalue('FRQ4','FRQ44'), calculate();"/><input type="number" min="0" max="9" step="1" id="FRQ44" value="5"  onchange="slidervalue('FRQ44','FRQ4'), calculate();"/>/9</p>
    <p><label>FRQ5 Score</label></p>
      <p><input type="range" id="FRQ5" min="0" step="1" max="9" onmouseup="slidervalue('FRQ5','FRQ55'), calculate();" ontouchend="slidervalue('FRQ5','FRQ55'), calculate();"/><input type="number" min="0" max="9" step="1" id="FRQ55" value="5"  onchange="slidervalue('FRQ55','FRQ5'), calculate();"/>/9</p>
    <p><label>FRQ6 Score</label></p>
      <p><input type="range" id="FRQ6" min="0" step="1" max="9"  onmouseup="slidervalue('FRQ6','FRQ66'), calculate();" ontouchend="slidervalue('FRQ6','FRQ66'), calculate();"/><input type="number" min="0" max="9" step="1" id="FRQ66" value="5"  onchange="slidervalue('FRQ66','FRQ6'), calculate();"/>/9</p>
    <p>Choose a score curve</p>
    <p><input type="radio" name="curve" id="curve1" onclick="calculate()" checked/>2008 curve<input type="radio" name="curve" id="curve2" onclick="calculate()"/>2003 curve</p>
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
