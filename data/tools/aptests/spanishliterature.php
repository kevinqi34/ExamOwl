<h2>Spanish Literature<img src="<?php echo url(); ?>images/menu/Spain.jpeg" alt="Spanish"></h2>
<div id="calculate" class="calculate">
    <h3>Enter your scores below</h3>
    <p><label>Multiple Choice Score</label></p>
      <p><input type="range" id="MC" min="0" step="1" max="65" onmouseup="slidervalue('MC','MC2'), calculate();" ontouchend="slidervalue('MC','MC2'), calculate();"/><input type="number" min="0" max="65" step="1" id="MC2" value="32"  onchange="slidervalue('MC2','MC'), calculate();"/>/65</p>
    <p><label>Q1 Content Score</label></p>
      <p><input type="range" id="QC1" min="0" step="1" max="9"  onmouseup="slidervalue('QC1','QC11'), calculate();" ontouchend="slidervalue('QC1','QC11'), calculate();"/><input type="number" min="0" max="9" step="1" id="QC11" value="5"  onchange="slidervalue('QC11','QC1'), calculate();"/>/9</p>
    <p><label>Q1 Language Score</label></p>
      <p><input type="range" id="QL1" min="0" step="1" max="5" onmouseup="slidervalue('QL1','QL11'), calculate();" ontouchend="slidervalue('QL1','QL11'), calculate();"/><input type="number" min="0" max="5" step="1" id="QL11" value="3"  onchange="slidervalue('QL11','QL1'), calculate();"/>/5</p>
    <p><label>Q2 Content Score</label></p>
      <p><input type="range" id="QC2" min="0" step="1" max="9"  onmouseup="slidervalue('QC2','QC22'), calculate();" ontouchend="slidervalue('QC2','QC22'), calculate();"/><input type="number" min="0" max="9" step="1" id="QC22" value="5"  onchange="slidervalue('QC22','QC2'), calculate();"/>/9</p>
    <p><label>Q2 Language Score</label></p>
      <p><input type="range" id="QL2" min="0" step="1" max="5" onmouseup="slidervalue('QL2','QL22'), calculate();" ontouchend="slidervalue('QL2','QL22'), calculate();"/><input type="number" min="0" max="5" step="1" id="QL22" value="3"  onchange="slidervalue('QL22','QL2'), calculate();"/>/5</p>
    <p><label>Q3 Content Total Score</label></p>
      <p><input type="range" id="QC3" min="0" step="1" max="10"  onmouseup="slidervalue('QC3','QC33'), calculate();" ontouchend="slidervalue('QC3','QC33'), calculate();"/><input type="number" min="0" max="10" step="1" id="QC33" value="5"  onchange="slidervalue('QC33','QC3'), calculate();"/>/10</p>
    <p><label>Q3 Language Score</label></p>
      <p><input type="range" id="QL3" min="0" step="1" max="5" onmouseup="slidervalue('QL3','QL33'), calculate();" ontouchend="slidervalue('QL3','QL33'), calculate();"/><input type="number" min="0" max="5" step="1" id="QL33" value="3"  onchange="slidervalue('QL33','QL3'), calculate();"/>/5</p>
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
