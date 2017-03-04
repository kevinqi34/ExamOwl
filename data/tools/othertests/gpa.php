
<h2>GPA Calculator<img src="<?php echo url(); ?>images/menu/GPA.png" alt="GPA"></h2>
		<h3>Scale:
			<select id="selection" onchange="switchdivs();">
			<option value="4pt">4 Point</option>
			<option value="5pt">5 Point</option>
			<option value="plusminus">4 Point with Plus/Minus</option>
			<option value="college">College</option>
			</select>
		</h3>


		<div id="college" style="display: none;" class="calculate">
			<form id="ptgpa4">
				<p>Number of A+'s (Credit Hours): <input type="text" id="GPA12" placeholder="(ex.10)"/></p>

				<p>&nbsp;Number of A's (Credit Hours): <input type="text" id="GPA13" placeholder="(ex.10)"/></p>

				<p>Number of A-'s (Credit Hours): <input type="text" id="GPA14" placeholder="(ex.10)"/></p>

				<p>Number of B+'s (Credit Hours): <input type="text" id="GPA15" placeholder="(ex.10)"/></p>

				<p>&nbsp;Number of B's (Credit Hours): <input type="text" id="GPA16" placeholder="(ex.10)"/></p>

				<p>Number of B-'s (Credit Hours): <input type="text" id="GPA17" placeholder="(ex.10)"/></p>

				<p>Number of C+'s (Credit Hours): <input type="text" id="GPA18" placeholder="(ex.10)"/></p>

				<p>&nbsp;Number of C's (Credit Hours): <input type="text" id="GPA19" placeholder="(ex.10)"/></p>

				<p>Number of C-'s (Credit Hours): <input type="text" id="GPA20" placeholder="(ex.10)"/></p>

				<p>Number of D+'s (Credit Hours): <input type="text" id="GPA21" placeholder="(ex.10)"/></p>

				<p>&nbsp;Number of D's (Credit Hours): <input type="text" id="GPA22" placeholder="(ex.10)"/></p>

				<p>Number of D-'s (Credit Hours): <input type="text" id="GPA23" placeholder="(ex.10)"/></p>

				<p>&nbsp;Number of F's (Credit Hours): <input type="text" id="GPA24" placeholder="(ex.10)"/></p>

			</form>
		</div>


		<div id="4pt" style="display: block;" class="calculate">
						<form id="ptgpa">
					<p>Number of A's: <input type="text" id="GPA1" placeholder="(ex.10)"/></p>

					<p>Number of B's: <input type="text" id="GPA2" placeholder="(ex.10)"/></p>

					<p>Number of C's: <input type="text" id="GPA3" placeholder="(ex.10)"/></p>

					<p>Number of D's: <input type="text" id="GPA4" placeholder="(ex.10)"/></p>

					<p>Number of F's: <input type="text" id="GPA5" placeholder="(ex.10)"/></p>

						</form>



				<p><button onclick="gpa1();">Determine My GPA</button><button onclick="resetform('ptgpa');">Reset</button></p>

			</div>

		<div id="5pt" style="display:none;" class="calculate">

					<form id="ptgpa2">
					<p>Number of 5's: <input type="text" id="GPA6" placeholder="(ex.10)"/></p>

					<p>Number of 4's: <input type="text" id="GPA7" placeholder="(ex.10)"/></p>

					<p>Number of 3's: <input type="text" id="GPA8" placeholder="(ex.10)"/></p>

					<p>Number of 2's: <input type="text" id="GPA9" placeholder="(ex.10)"/></p>

					<p>Number of 1's: <input type="text" id="GPA10" placeholder="(ex.10)"/></p>

					<p>Number of 0's: <input type="text" id="GPA11" placeholder="(ex.10)"/></p>

						</form>



				<p><button onclick="gpa2();">Determine My GPA</button><button onclick="resetform('ptgpa2')">Reset</button></p>
		</div>

		<div id="4ptplumin" style="display: none;" class="calculate">

					<form id="ptgpa3">
					<p>Number of A+'s: <input type="text" id="GPA12" placeholder="(ex.10)"/></p>

					<p>&nbsp;Number of A's: <input type="text" id="GPA13" placeholder="(ex.10)"/></p>

					<p>Number of A-'s: <input type="text" id="GPA14" placeholder="(ex.10)"/></p>

					<p>Number of B+'s: <input type="text" id="GPA15" placeholder="(ex.10)"/></p>

					<p>&nbsp;Number of B's: <input type="text" id="GPA16" placeholder="(ex.10)"/></p>

					<p>Number of B-'s: <input type="text" id="GPA17" placeholder="(ex.10)"/></p>

					<p>Number of C+'s: <input type="text" id="GPA18" placeholder="(ex.10)"/></p>

					<p>&nbsp;Number of C's: <input type="text" id="GPA19" placeholder="(ex.10)"/></p>

					<p>Number of C-'s: <input type="text" id="GPA20" placeholder="(ex.10)"/></p>

					<p>Number of D+'s: <input type="text" id="GPA21" placeholder="(ex.10)"/></p>

					<p>&nbsp;Number of D's: <input type="text" id="GPA22" placeholder="(ex.10)"/></p>

					<p>Number of D-'s: <input type="text" id="GPA23" placeholder="(ex.10)"/></p>

					<p>&nbsp;Number of F's: <input type="text" id="GPA24" placeholder="(ex.10)"/></p>


					</form>

				<p><button onclick="gpa3();">Determine My GPA</button><button onclick="resetform('ptgpa3')">Reset</button></p>

		</div>


	<div id="results">
    <h3>Results</h3>
		<p>Grade Point Average</p>
			<output id="score1">N/A</output>


	</div>
