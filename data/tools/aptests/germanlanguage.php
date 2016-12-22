<h2>German Language<img src="<?php echo url(); ?>images/menu/Germany.jpeg" alt="German"></h2>
<div id="calculate" class="calculate">
    <h3>Enter your scores below</h3>
    <p><label>Listening Multiple Choice Score</label></p>
      <p><input type="range" id="MC" min="0" step="1" max="39" onmouseup="slidervalue('MC','MC2'), calculate();" ontouchend="slidervalue('MC','MC2'), calculate();"/><input type="number" min="0" max="39" step="1" id="MC2" value="19"  onchange="slidervalue('MC2','MC'), calculate();"/>/39</p>
    <p><label>Reading Multiple Choice Score</label></p>
      <p><input type="range" id="MC3" min="0" step="1" max="31" onmouseup="slidervalue('MC3','MC4'), calculate();" ontouchend="slidervalue('MC3','MC4'), calculate();"/><input type="number" min="0" max="31" step="1" id="MC4" value="16"  onchange="slidervalue('MC2','MC'), calculate();"/>/31</p>
    <p><label>Paragraph Completion</label></p>
      <p><input type="range" id="PC" min="0" step="1" max="20"  onmouseup="slidervalue('PC','PC2'), calculate();" ontouchend="slidervalue('PC','PC2'), calculate();"/><input type="number" min="0" max="20" step="1" id="PC2" value="10"  onchange="slidervalue('PC2','PC'), calculate();"/>/20</p>
    <p><label>Completion</label></p>
      <p><input type="range" id="C" min="0" step="1" max="9" onmouseup="slidervalue('C','C2'), calculate();" ontouchend="slidervalue('C','C2'), calculate();"/><input type="number" min="0" max="9" step="1" id="C2" value="5"  onchange="slidervalue('C2','C'), calculate();"/>/9</p>
    <p><label>Directed Responses</label></p>
      <p><input type="range" id="DR" min="0" step="1" max="36" onmouseup="slidervalue('DR','DR2'), calculate();" ontouchend="slidervalue('DR','DR2'), calculate();"/><input type="number" min="0" max="36" step="1" id="DR2" value="18"  onchange="slidervalue('DR2','DR'), calculate();"/>/36</p>
    <p><label>Picture Sequence</label></p>
      <p><input type="range" id="PS" min="0" step="1" max="6" onmouseup="slidervalue('PS','PS2'), calculate();" ontouchend="slidervalue('PS','PS2'), calculate();"/><input type="number" min="0" max="6" step="1" id="PS2" value="3"  onchange="slidervalue('PS2','PS'), calculate();"/>/6</p>
    <p>Choose a score curve</p>
    <p><input type="radio" name="curve" id="curve1" onclick="calculate()" checked/>2008 curve<input type="radio" name="curve" id="curve2" onclick="calculate()"/>2002 curve</p>

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
