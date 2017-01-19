<h2>LSAT</h2>
<div class="calculate">
  <p><b>LSAT Scaled Score Calculator</b></p>
  <h3>Enter your scores below</h3>
  <p><label>Raw Score</label></p>
    <p><input type="range" id="R1" min="0" step="1" max="101" onmouseup="slidervalue('R1','R11'), calculate();" ontouchend="slidervalue('R1','R11'), calculate();"/><input type="number" min="0" max="101" step="1" id="R11" value="50"  onchange="slidervalue('R11','R1'), calculate();"/>/101</p>
</div>
<div id="results">
  <h3>Results</h3>
  <p>Raw Score</p>
    <output id="score1"></output>
  <p>Scaled Score</p>
    <output id="score2"></output>
    <output id="score3"></output>
</div>
