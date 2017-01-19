<h2>MCAT</h2>
<div class="calculate">
  <p><b>Medical School Admissions Calculator</b></p>
  <p>Compare your statistics with the US national average for accepted (i.e. matriculating) students.</p>
  <h3>Enter your scores below</h3>
  <p><label>GPA</label></p>
    <p><input type="range" id="GPA" min="0" step="0.1" max="4" onmouseup="slidervalue('GPA','GPA2'), calculate();" ontouchend="slidervalue('GPA','GPA2'), calculate();"/><input type="number" min="0" max="4" step="0.1" id="GPA2" value="2"  onchange="slidervalue('GPA2','GPA'), calculate();"/>/4.0</p>
  <p><label>MCAT Biological Score</label></p>
    <p><input type="range" id="SEC1" min="118" step="1" max="132" onmouseup="slidervalue('SEC1','SEC11'), calculate();" ontouchend="slidervalue('SEC1','SEC11'), calculate();"/><input type="number" min="118" max="132" step="1" id="SEC11" value="125"  onchange="slidervalue('SEC11','SEC1'), calculate();"/>/132</p>
  <p><label>MCAT Critical Analysis Score</label></p>
    <p><input type="range" id="SEC2" min="118" step="1" max="132" onmouseup="slidervalue('SEC2','SEC22'), calculate();" ontouchend="slidervalue('SEC2','SEC22'), calculate();"/><input type="number" min="118" max="132" step="1" id="SEC22" value="125"  onchange="slidervalue('SEC22','SEC2'), calculate();"/>/132</p>
  <p><label>MCAT Chemical and Physical Foundations Score</label></p>
    <p><input type="range" id="SEC3" min="118" step="1" max="132" onmouseup="slidervalue('SEC3','SEC33'), calculate();" ontouchend="slidervalue('SEC3','SEC33'), calculate();"/><input type="number" min="118" max="132" step="1" id="SEC33" value="125"  onchange="slidervalue('SEC33','SEC3'), calculate();"/>/132</p>
  <p><label>MCAT Behaviour Foundations Score</label></p>
    <p><input type="range" id="SEC4" min="118" step="1" max="132" onmouseup="slidervalue('SEC4','SEC44'), calculate();" ontouchend="slidervalue('SEC4','SEC44'), calculate();"/><input type="number" min="118" max="132" step="1" id="SEC44" value="125"  onchange="slidervalue('SEC44','SEC4'), calculate();"/>/132</p>
</div>
<div id="results">
  <h3>Results</h3>
  <p>Admissions Index</p>
    <output id="score1"></output>
  <p>Chance of Admission</p>
    <output id="score2"></output>
    <output id="score3"></output>
</div>
