<h2>Final Grade Calculator<img src="<?php echo url(); ?>images/menu/Final.png" alt="Final"></h2>

		<h3>Version:
			<select id="selection" onchange="switchdivs();">
			<option value="std">Standard</option>
			<option value="oa">Overall</option>
			<option value="mp">Multi-Part</option>
			<option value="per">Final Weighted as Test</option>
			<option value="ptsys">Weighting</option>
			</select>
		</h3>

		<div id="form" style="display: block;" class="calculate">
  		<form id="formform">
  		<p><label>Current Grade:</label> <input type="text" id="CG" placeholder="(ex.92.5)"/>%</p>
  		<p><label>Desired Grade:</label> <input type="text" id="FG" placeholder= "(ex.94.2)"/>%</p>
  		<p><label>Final Worth:</label> <input type="text" id="PW" placeholder= "(ex.22)"/>%</p>
  		</form>
  		<p><button onclick="calculate1();">Determine what I need on the final...</button><button onclick="resetform('formform');">Reset</button></p>
	 </div>
	<div id="overall" style="display: none;" class="calculate">
			<form id="formoverall">
			<p><label>Initial Grade:</label> <input type="text" id="BF" placeholder="(ex.85)"/>%</p>
			<p><label>Final Score:</label> <input type="text" id="FG2" placeholder="(ex.90.2)"/>%</p>
			<p><label>Final Worth:</label> <input type="text" id="FP" placeholder="(ex.25.4)"/>%</p>
			</form>
			<p><button onclick="calculate2();">Determine my course grade...</button><button onclick="resetform('formoverall');">Reset</button></p>
	</div>
	<div id="twoparts" style="display: none;" class="calculate">
		<form id="formtwoparts">
		<p><label>Current Grade:</label> <input type="text" id="BF2" placeholder="(ex.90.4)"/>%</p>
		<p><label>Desired Grade:</label> <input type="text" id="FG3" placeholder="(ex.92.4)"/>%</p>
		<p><label>Final Worth:</label> <input type="text" id="FP2" placeholder="(ex.25)"/>%</p>
		<p><label># of Parts:</label><input onkeyup="displayinputs();" type="text" id="parts" placeholder="(ex.4)"></p>
		<p><label># of Parts Taken:</label> <input onkeyup="displaytestscores();" type="text" placeholder="(ex.3)" id="tparts"/></p>
		<p style="display:none;8" id="P1"><label>Part 1 Worth(pts):</label> <input type="text" id="L1" placeholder="(ex.90)"/></p>
		<p style="display:none;" id="P2"><label>Part 2 Worth(pts):</label> <input type="text" id = "L2" placeholder="(ex.100)"/></p>
		<p style="display:none;" id="P3"><label>Part 3 Worth(pts):</label> <input type="text" id="L3" placeholder="(ex.95)"/></p>
		<p style="display:none;" id="P4"><label>Part 4 Worth(pts):</label> <input type="text" id="L4" placeholder="(ex.96)"/></p>
		<p style="display:none;" id="P5"><label>Part 5 Worth(pts):</label> <input type="text" id="L5" placeholder="(ex.90)"/></p>
		<p style="display:none;" id="P6"><label>Part 6 Worth(pts):</label> <input type="text" id="L6" placeholder="(ex.90)"/></p>
		<p style="display:none;" id="P7"><label>Part 7 Worth(pts):</label> <input type="text" id="L7" placeholder="(ex.90)"/></p>
		<p style="display:none;" id="P8"><label>Part 8 Worth(pts):</label> <input type="text" id ="L8" placeholder="(ex.90)"/></p>
		<p style="display:none;" id="P9"><label>Part 9 Worth(pts):</label> <input type="text" id="L9"/ placeholder="(ex.90)"></p>
		<p style="display:none;" id="P10"><label>Part 10 Worth(pts):</label> <input type="text" id="L10" placeholder="(ex.90)"/></p>
		<p style="display:none;" id="G1"><label>Part 1 Score:</label> <input type="text" id= "J1" placeholder="(ex.80)"/></p>
		<p style="display:none;" id="G2"><label>Part 2 Score:</label> <input type="text" id="J2" placeholder="(ex.87)"/></p>
		<p style="display:none;" id="G3"><label>Part 3 Score:</label> <input type="text" id="J3" placeholder="(ex.67)"/></p>
		<p style="display:none;" id="G4"><label>Part 4 Score:</label> <input type="text" id="J4" placeholder="(ex.80)"/></p>
		<p style="display:none;" id="G5"><label>Part 5 Score:</label> <input type="text" id="J5" placeholder="(ex.80)"/></p>
		<p style="display:none;" id="G6"><label>Part 6 Score:</label> <input type="text" id="J6" placeholder="(ex.80)"/></p>
		<p style="display:none;" id="G7"><label>Part 7 Score:</label> <input type="text" id="J7" placeholder="(ex.80)"/></p>
		<p style="display:none;" id="G8"><label>Part 8 Score:</label> <input type="text" id="J8" placeholder="(ex.80)"/></p>
		<p style="display:none;" id="G9"><label>Part 9 Score:</label> <input type="text" id="J9" placeholder="(ex.80)"/></p>
		<p style="display:none;" id="G10"><label>Part 10 Score:</label> <input type="text" id="J10" placeholder="(ex.80)"/></p>
		</form>
		<p><button onclick="validatetwoparts(); calculate3();">Determine what I need on the final...</button><button onclick="resettwoparts();">Reset</button></p>
	</div>

	<div id="testweight" style="display: none;" class="calculate">
			<form id="formtestweight">
			<p><label>Current Grade:</label> <input type="text" id="BF4" placeholder="(ex.87.5)"/>%</p>
			<p><label>Desired Grade:</label> <input type="text" id="FG4" placeholder="(ex.89)"/>%</p>
			<p><label>Tests Worth:</label> <input type="text" id="TP" placeholder="(ex.20)"/>%</p>
			<p><label># of Tests Taken:</label> <input type="text" id="tests" placeholder="(ex.4)"/></p>
			<p><label>Test Average:</label> <input type="text" id="TA" placeholder="(ex.96.5)"/>%</p>
			<p><label>Final Worth(#):</label> <input type="text" id="NT" placeholder="(ex.3)"/>tests</p>
		</form>
			<p><button onclick="calculate4();">Determine what I need on the final...</button><button onclick="resetform('formtestweight');">Reset</button></p>
	</div>
	<div id="pointsys" style="display: none;" class="calculate">
		<form id="formpointsys">
			<p><label>Total Points:</label> <input type="text" id="TT" placeholder="(ex.900)"/></p>
			<p><label>Final Worth(pts):</label> <input type="text" id="FFF" placeholder="(ex.567)"/></p>
			</form>
			<p><button onclick="calculate5();">Determine final worth...</button><button onclick="resetform('formpointsys');">Reset</button></p>
	</div>
