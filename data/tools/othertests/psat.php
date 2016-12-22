<h2>PSAT<img src="<?php echo url(); ?>/images/menu/test.png" alt="SAT"></h2>


<h3>Version:
<select id="version" onchange="changediv();">
<option value="Pos2012">New (Post 2014)</option>
<option value="Pre2012">Old</option>
</select>
</h3>


<div id="calculate" class="calculate">


    <h3>Enter your raw scores below</h3>
    <p><label>Reading</label></p>
      <p><input type="range" id="MC" min="-7" step="1" max="48" onmouseup="slidervalue('MC','MC2'), calculate();" ontouchend="slidervalue('MC','MC2'), calculate();"/><input type="number" min="-7" max="48" step="1" id="MC2" value="28"  onchange="slidervalue('MC2','MC'), calculate();"/>/48</p>
    <p><label>Math</label></p>
      <p><input type="range" id="DBQ" min="-7" step="1" max="38" onmouseup="slidervalue('DBQ','DBQ2'), calculate();" ontouchend="slidervalue('DBQ','DBQ2'), calculate();"/><input type="number" min="-7" max="38" step="1" id="DBQ2" value="22"  onchange="slidervalue('DBQ2','DBQ'), calculate();"/>/38</p>
    <p><label>Writing</label></p>
      <p><input type="range" id="FRQ1" min="-7" step="1" max="39"onmouseup="slidervalue('FRQ1','FRQ12'), calculate();" ontouchend="slidervalue('FRQ1','FRQ12'), calculate();"/><input type="number" min="-7" max="39" step="1" id="FRQ12" value="23"  onchange="slidervalue('FRQ12','FRQ1'), calculate();"/>/39</p>
    <p>Choose a score curve</p>
      <p><input type="radio" name="curve" id="curve1" onclick="calculate()" checked/>2014 curve<input type="radio" name="curve" id="curve2" onclick="calculate()"/>2010 curve</p>





</div>


<div id="calculate2" class="calculate" style="display:none;">
    <h3>Enter your raw scores below</h3>
    <p><label>Reading</label></p>
      <p><input type="range" id="MCN" min="0" step="1" max="47" onmouseup="slidervalue('MCN','MC2N'), calculate2();" ontouchend="slidervalue('MCN','MC2N'), calculate2();"/><input type="number" min="0" max="47" step="1" id="MC2N" value="23"  onchange="slidervalue('MC2N','MCN'), calculate2();"/>/47</p>
    <p><label>Math</label></p>
      <p><input type="range" id="DBQN" min="0" step="1" max="48" onmouseup="slidervalue('DBQN','DBQ2N'), calculate2();" ontouchend="slidervalue('DBQN','DBQ2N'), calculate2();"/><input type="number" min="0" max="48" step="1" id="DBQ2N" value="24"  onchange="slidervalue('DBQ2N','DBQN'), calculate2();"/>/48</p>
    <p><label>Writing</label></p>
      <p><input type="range" id="FRQ1N" min="0" step="1" max="44"onmouseup="slidervalue('FRQ1N','FRQ12N'), calculate2();" ontouchend="slidervalue('FRQ1N','FRQ12N'), calculate2();"/><input type="number" min="0" max="44" step="1" id="FRQ12N" value="22"  onchange="slidervalue('FRQ12N','FRQ1N'), calculate2();"/>/44</p>
    <p>Choose a score curve</p>
      <p><input  type="radio" name="curve" id="curve2012" onclick="calculate2()" checked/>2015 curve</p>



</div>


<div id="results">
  <h3>Results</h3>
  <p id="p1">Reading Score</p><p id="p2">Reading + Writing Score</p>
    <output id="score1"></output>
  <p>Math Score</p>
    <p><output id="score2"></output></p>

  <p id="score3p">Writing Score</p>
    <p><output id="score3"></output></p>
  <p>Total Score</p>
    <p><output id="score4"></output></p>

</div>
