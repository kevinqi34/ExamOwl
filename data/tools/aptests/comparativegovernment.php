<h2>Comparative Government<img src="<?php echo url(); ?>images/menu/Government.jpg" alt="Gov"></h2>

<div id="calculate" class="calculate">
  <h3>Enter your scores below</h3>
    <p><label>Multiple Choice Score</label></p>
      <p><input type="range" id="MC" min="0" step="1" max="55"  onmouseup="slidervalue('MC','MC2'), calculate();" ontouchend="slidervalue('MC','MC2'), calculate();"/><input type="number" min="0" max="55" step="1" id="MC2" value="28"  onchange="slidervalue('MC2','MC'), calculate();"/>/55</p>
    <p><label>Short Answer 1 Score</label></p>
      <p><input type="range" id="FRQ1" min="0" step="1" max="3" onmouseup="slidervalue('FRQ1','FRQ11'), calculate();" ontouchend="slidervalue('FRQ1','FRQ11'), calculate();"/><input type="number" min="0" max="3" step="1" id="FRQ11" value="2"  onchange="slidervalue('FRQ11','FRQ1'), calculate();"/>/3</p>
    <p><label>Short Answer 2 Score</label></p>
      <p><input type="range" id="FRQ2" min="0" step="1" max="3" onmouseup="slidervalue('FRQ2','FRQ22'), calculate();" ontouchend="slidervalue('FRQ2','FRQ22'), calculate();"/><input type="number" min="0" max="3" step="1" id="FRQ22" value="2"  onchange="slidervalue('FRQ22','FRQ2'), calculate();"/>/3</p>
    <p><label>Short Answer 3 Score</label></p>
      <p><input type="range" id="FRQ3" min="0" step="1" max="3" onmouseup="slidervalue('FRQ3','FRQ33'), calculate();" ontouchend="slidervalue('FRQ3','FRQ33'), calculate();"/><input type="number" min="0" max="3" step="1" id="FRQ33" value="2"  onchange="slidervalue('FRQ33','FRQ3'), calculate();"/>/3</p>
    <p><label>Short Answer 4 Score</label></p>
      <p><input type="range" id="FRQ4" min="0" step="1" max="3" onmouseup="slidervalue('FRQ4','FRQ44'), calculate();" ontouchend="slidervalue('FRQ4','FRQ44'), calculate();"/><input type="number" min="0" max="3" step="1" id="FRQ44" value="2"  onchange="slidervalue('FRQ44','FRQ4'), calculate();"/>/3</p>
    <p><label>Short Answer 5 Score</label></p>
      <p><input type="range" id="FRQ5" min="0" step="1" max="3" onmouseup="slidervalue('FRQ5','FRQ55'), calculate();" ontouchend="slidervalue('FRQ5','FRQ55'), calculate();"/><input type="number" min="0" max="3" step="1" id="FRQ55" value="2"  onchange="slidervalue('FRQ55','FRQ5'), calculate();"/>/3</p>
    <p><label>Conceptual Question Score</label></p>
      <p><input type="range" id="CRQ1" min="0" step="1" max="5" onmouseup="slidervalue('CRQ1','CRQ11'), calculate();" ontouchend="slidervalue('CRQ1','CRQ11'), calculate();"/><input type="number" min="0" max="5" step="1" id="CRQ11" value="2"  onchange="slidervalue('CRQ11','CRQ1'), calculate();"/>/5</p>
    <p><label>Country Specific Question 1</label></p>
      <p><input type="range" id="CORQ1" min="0" step="1" max="7" onmouseup="slidervalue('CORQ1','CORQ11'), calculate();"  ontouchend="slidervalue('CORQ1','CORQ11'), calculate();"/><input type="number" min="0" max="7" step="1" id="CORQ11" value="3"  onchange="slidervalue('CORQ11','CORQ1'), calculate();"/>/7</p>
    <p><label>Country Specific Question 2</label></p>
      <p><input type="range" id="CORQ2" min="0" step="1" max="7"  onmouseup="slidervalue('CORQ2','CORQ22'), calculate();" ontouchend="slidervalue('CORQ2','CORQ22'), calculate();"/><input type="number" min="0" max="7" step="1" id="CORQ22" value="3"  onchange="slidervalue('CORQ22','CORQ2'), calculate();"/>/7</p>
    <p>Choose a score curve</p>
    <p><input type="radio" name="curve" id="curve1" onclick="calculate()" checked/>2006 curve<input type="radio" name="curve" id="curve2" onclick="calculate()"/>1999 curve</p>
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
