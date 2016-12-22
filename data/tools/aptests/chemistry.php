<h2>Chemistry<img src="<?php echo url(); ?>images/menu/Science.png" alt="Science"></h2>

<h3>Version:
<select id="version" onchange="changediv();">
<option value="Pos2012">Post 2014</option>
<option value="Pre2012">Pre 2014</option>
</select>
</h3>

<div id="calculate" class="calculate">
      <h3>Enter your scores below</h3>
    <p><label>Multiple Choice Score</label></p>
      <p><input type="range" id="MC" min="0" step="1" max="75" onmouseup="slidervalue('MC','MC2'), calculate();" ontouchend="slidervalue('MC','MC2'), calculate();"/><input type="number" min="0" max="75" step="1" id="MC2" value="38"  onchange="slidervalue('MC2','MC'), calculate();"/>/75</p>
    <p><label>Total FRQ Score (%)</label></p>
      <p><input type="range" id="FRQ1" min="0" step="1" max="100" onmouseup="slidervalue('FRQ1','FRQ11'), calculate();" ontouchend="slidervalue('FRQ1','FRQ11'), calculate();"/><input type="number" min="0" max="100" step="1" id="FRQ11" value="50"  onchange="slidervalue('FRQ11','FRQ1'), calculate();"/>/100</p>
    <p>Choose a score curve</p>
    <p><input type="radio" name="curve" id="curve1" onclick="calculate()" checked/>2009 curve</p>

</div>
<div id="calculate2" class="calculate" style="display:none;">
<h3>Enter your scores below</h3>
  <p><label>Multiple Choice Score</label></p>
      <p><input type="range" id="MC2012" min="0" step="1" max="60" onmouseup="slidervalue('MC2012','MC22012'), calculate2();" ontouchend="slidervalue('MC2012','MC22012'), calculate2();"/><input type="number" min="0" max="60" step="1" id="MC22012" value="25"  onchange="slidervalue('MC22012','MC2012'), calculate2();"/>/60</p>
  <p><label>Long Free Response Score</label></p>
      <p><input type="range" id="LFRQ" min="0" step="1" max="30" onmouseup="slidervalue('LFRQ','LFRQ2'), calculate2();" ontouchend="slidervalue('LFRQ','LFRQ2'), calculate2();"/><input type="number" min="0" max="30" step="1" id="LFRQ2" value="15"  onchange="slidervalue('LFRQ2','LFRQ'), calculate2();"/>/30</p>
  <p><label>Short Free Response Score</label></p>
      <p><input type="range" id="SFRQ" min="0" step="1" max="16" onmouseup="slidervalue('SFRQ','SFRQ2'), calculate2();" ontouchend="slidervalue('SFRQ','SFRQ2'), calculate2();"/><input type="number" min="0" max="16" step="1" id="SFRQ2" value="8"  onchange="slidervalue('SFRQ2','SFRQ'), calculate2();"/>/16</p>
  <p>Choose a score curve</p>
    <p><input style="margin-left: 30px;" type="radio" name="curve" id="curve2012" onclick="calculate()" /checked>2014 curve</p>
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
