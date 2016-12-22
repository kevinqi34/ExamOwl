<h2>Spanish Language<img src="<?php echo url(); ?>images/menu/Spain.jpeg" alt="Spain"></h2>
<div id="calculate" class="calculate">
    <h3>Enter your scores below</h3>
    <p><label>Listening Multiple Choice Score</label></p>
      <p><input type="range" id="MC" min="0" step="1" max="34" onmouseup="slidervalue('MC','MC2'), calculate();" ontouchend="slidervalue('MC','MC2'), calculate();"/><input type="number" min="0" max="34" step="1" id="MC2" value="17"  onchange="slidervalue('MC2','MC'), calculate();"/>/34</p>
    <p><label>Reading Multiple Choice Score</label></p>
      <p><input type="range" id="MC3" min="0" step="1" max="41" onmouseup="slidervalue('MC3','MC4'), calculate();" ontouchend="slidervalue('MC3','MC4'), calculate();"/><input type="number" min="0" max="41" step="1" id="MC4" value="20"  onchange="slidervalue('MC4','MC3'), calculate();"/>/41</p>
    <p><label>Paragraph Completion</label></p>
      <p><input type="range" id="PC" min="0" step="1" max="20" onmouseup="slidervalue('PC','PC2'), calculate();" ontouchend="slidervalue('PC','PC2'), calculate();"/><input type="number" min="0" max="20" step="1" id="PC2" value="10"  onchange="slidervalue('PC2','PC'), calculate();"/>/20</p>
    <p><label>Writing Interpersonal</label></p>
      <p><input type="range" id="WI" min="0" step="1" max="5"  onmouseup="slidervalue('WI','WI2'), calculate();" ontouchend="slidervalue('WI','WI2'), calculate();"/><input type="number" min="0" max="5" step="1" id="WI2" value="3"  onchange="slidervalue('WI2','WI'), calculate();"/>/5</p>
    <p><label>Writing Presentational</label></p>
      <p><input type="range" id="WP" min="0" step="1" max="5" onmouseup="slidervalue('WP','WP2'), calculate();" ontouchend="slidervalue('WP','WP2'), calculate();"/><input type="number" min="0" max="5" step="1" id="WP2" value="3"  onchange="slidervalue('WP2','WP'), calculate();"/>/5</p>
    <p><label>Speaking Interpersonal</label></p>
      <p><input type="range" id="SI" min="0" step="1" max="5"  onmouseup="slidervalue('SI','SI2'), calculate();" ontouchend="slidervalue('SI','SI2'), calculate();"/><input type="number" min="0" max="5" step="1" id="SI2" value="3"  onchange="slidervalue('SI2','SI'), calculate();"/>/5</p>
    <p><label>Speaking Presentational</label></p>
      <p><input type="range" id="SP" min="0" step="1" max="5" onmouseup="slidervalue('SP','SP2'), calculate();" ontouchend="slidervalue('SP','SP2'), calculate();"/><input type="number" min="0" max="5" step="1" id="SP2" value="3"  onchange="slidervalue('SP2','SP'), calculate();"/>/5</p>
    <p>Choose a score curve</p>
    <p><input type="radio" name="curve" id="curve1" onclick="calculate()" checked/>2007 curve<input type="radio" name="curve" id="curve2" onclick="calculate()"/>2003 curve</p>

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
