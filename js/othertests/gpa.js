
function switchdivs() {
	var a = document.getElementById('selection').value;
	var b = document.getElementById('4pt');
	var c = document.getElementById('5pt');
	var d = document.getElementById('4ptplumin');
	var e = document.getElementById('college');

	if (a == "4pt" ) {
		b.style.display = "block";
		c.style.display = "none";
		d.style.display = "none";
		e.style.display = "none";
		}
	if (a == "5pt") {
		b.style.display ="none";
		c.style.display = "block";
		d.style.display = "none";
		e.style.display = "none";
		}
	if (a == "plusminus") {
		b.style.display = "none";
		c.style.display = "none";
		d.style.display = "block";
		e.style.display = "none";

		}
	if (a == "college") {
		b.style.display = "none";
		c.style.display = "none";
		d.style.display = "none";
		e.style.display = "block";
	}


}


function gpa1() {
		var a = document.getElementById('GPA1').value;
		var b = document.getElementById('GPA2').value;
		var c = document.getElementById('GPA3').value;
		var d = document.getElementById('GPA4').value;
		var e = document.getElementById('GPA5').value;
		//var f = document.getElementById('STD').value;

//validate inputs

		if (a.length <= 0) {
			alert("A number must be entered!");
			return;
		}
		if (isNaN(a) == true) {
			alert("Only numbers are accepted!");
			return;
		}
		if (b.length <= 0) {
			alert("A number must be entered!");
			return;
		}
		if (isNaN(b) == true) {
			alert("Only numbers are accepted!");
			return;
		}
		if (c.length <= 0) {
			alert("A number must be entered!");
			return;
		}
		if (isNaN(c) == true) {
			alert("Only numbers are accepted!");
			return;
		}
		if (d.length <= 0) {
			alert("A number must be entered!");
			return;
		}
		if (isNaN(d) == true) {
			alert("Only numbers are accepted!");
			return;
		}
		if (e.length <= 0) {
			alert("A number must be entered!");
			return;
		}
		if (isNaN(e) == true) {
			alert("Only numbers are accepted!");
			return;
		}

			 var a = parseInt(a);
	       		b = parseInt(b);
	       		c = parseInt(c);
	       		d = parseInt(d);
	       		e = parseInt(e);
	       	//	f = parseInt(f);

	        //calculate GPA

				var gpa1 =Math.round((( a*4 + b*3 + c*2 + d*1)/(a + b + c + d + e))*100)/100;
				//alert("Your GPA is " + gpa1 + ".");
		document.getElementById("score1").innerHTML = gpa1;


			var a = document.getElementById("score1");



	if (a.value <= 1 && a.value >= 0) {
		a.style.color = "red";
		}
	if (a.value <= 2 && a.value > 1) {
		a.style.color = "orange";
		}
	if (a.value <= 3 && a.value > 2) {
		a.style.color = "#33CC00";
		}
	if (a.value <= 4 && a.value > 3) {
		a.style.color = "green";
		}
	if (a.value <= 5 && a.value > 4) {
		a.style.color = "black";
		}



		/*
		else {

			if (isNaN(f) == true) {
				alert("Only numbers are accepted!");
				return;
			}
			else {
				var a = parseInt(a);
	       			b = parseInt(b);
	       			c = parseInt(c);
	       			d = parseInt(d);
	       			e = parseInt(e);
	       		//	f = parseInt(f);

	       //calculate GPA
	      			var gpa1 =Math.round((( a*4 + b*3 + c*2 + d*1)/(a + b + c + d + e))*100)/100;
						/*
						if (f <= 0) {
							alert("Please enter a proper score.");
							}
						if ( f > 0 && f <= 18) {
							alert("Your GPA is " + gpa1 + ". You should apply to a good community college.");
							}
						if (f > 18 && f <= 27) {
							alert("Your GPA is " + gpa1 + ". You should apply to a state college.");
							}
						if (f > 27 && f <= 30) {
							alert("Your GPA is " + gpa1 + ". You should apply to a flagship state college.");
							}
						if (f > 30 && f <= 36) {
							alert("Your GPA is " + gpa1 + ".You should apply to a prestigious private university.");
							}
						if (f > 36 && f <= 1200) {
							alert("Your GPA is " + gpa1 + ". You should apply to a good community college.");
							}
						if (f > 1200 && f <= 1700) {
							alert("Your GPA is " + gpa1 + ". You should apply to a state college.");
							}
						if (f > 1700 && f <= 2100) {
							alert("Your GPA is " + gpa1 + ". You should apply to a flagship state college.");
							}
						if (f > 2100 && f <= 2400) {
							alert("Your GPA is " + gpa1 + ". You should apply to a prestigious private university.");
							}
						if (f > 2400) {
							alert("Please enter a proper score.");
							}



			}
*/
		}




function gpa2() {
		var a = document.getElementById('GPA6').value;
		var b = document.getElementById('GPA7').value;
		var c = document.getElementById('GPA8').value;
		var d = document.getElementById('GPA9').value;
		var e = document.getElementById('GPA10').value;
		var f = document.getElementById('GPA11').value;
	//	var g = document.getElementById('STD2').value;

	if (a.length <= 0) {
			alert("A number must be entered!");
			return;
		}
		if (isNaN(a) == true) {
			alert("Only numbers are accepted!");
			return;
		}
		if (b.length <= 0) {
			alert("A number must be entered!");
			return;
		}
		if (isNaN(b) == true) {
			alert("Only numbers are accepted!");
			return;
		}
		if (c.length <= 0) {
			alert("A number must be entered!");
			return;
		}
		if (isNaN(c) == true) {
			alert("Only numbers are accepted!");
			return;
		}
		if (d.length <= 0) {
			alert("A number must be entered!");
			return;
		}
		if (isNaN(d) == true) {
			alert("Only numbers are accepted!");
			return;
		}
		if (e.length <= 0) {
			alert("A number must be entered!");
			return;
		}
		if (isNaN(e) == true) {
			alert("Only numbers are accepted!");
			return;
			}
		if (f.length <= 0) {
			alert("A number must be entered!");
			return;
		}
		if (isNaN(f) == true) {
			alert("Only numbers are accepted!");
			return;
		}

			 var a = parseInt(a);
	       		b = parseInt(b);
	       		c = parseInt(c);
	       		d = parseInt(d);
	       		e = parseInt(e);
	       		f = parseInt(f);
	       	//	g = parseInt(g)

	        //calculate GPA

				var gpa1 =Math.round((( a*5 + b*4 + c*3 + d*2 + e*1)/(a + b + c + d + e + f))*100)/100;
			//	alert("Your GPA is " + gpa1 + ".");

				document.getElementById("score1").innerHTML = gpa1;


			var a = document.getElementById("score1");



	if (a.value <= 1 && a.value >= 0) {
		a.style.color = "red";
		}
	if (a.value <= 2 && a.value > 1) {
		a.style.color = "orange";
		}
	if (a.value <= 3 && a.value > 2) {
		a.style.color = "#33CC00";
		}
	if (a.value <= 4 && a.value > 3) {
		a.style.color = "green";
		}
	if (a.value <= 5 && a.value > 4) {
		a.style.color = "black";
		}
		/*
		else {

			if (isNaN(g) == true) {
				alert("Only numbers are accepted!");
				return;
			}
			else {
				var a = parseInt(a);
	       			b = parseInt(b);
	       			c = parseInt(c);
	       			d = parseInt(d);
	       			e = parseInt(e);
	       			f = parseInt(f);
	       	//		g = parseInt(g);

	       //calculate GPA
	      			var gpa1 =Math.round((( a*5 + b*4 + c*3 + d*2 + e*1)/(a + b + c + d + e + f))*100)/100;


						/*if (g <= 0) {
							alert("Please enter a proper score.");
							}
						if ( g > 0 && g <= 18) {
							alert("Your GPA is " + gpa1 + ". You should apply to a good community college.");
							}
						if (g > 18 && g <= 27) {
							alert("Your GPA is " + gpa1 + ". You should apply to a state college.");
							}
						if (g > 27 && g <= 30) {
							alert("Your GPA is " + gpa1 + ". You should apply to a flagship state college.");
							}
						if (g > 30 && g <= 36) {
							alert("Your GPA is " + gpa1 + ".You should apply to a prestigious private university.");
							}
						if (g > 36 && g <= 1200) {
							alert("Your GPA is " + gpa1 + ". You should apply to a good community college.");
							}
						if (g > 1200 && g <= 1700) {
							alert("Your GPA is " + gpa1 + ". You should apply to a state college.");
							}
						if (g > 1700 && g <= 2100) {
							alert("Your GPA is " + gpa1 + ". You should apply to a flagship state college.");
							}
						if (g > 2100 && g <= 2400) {
							alert("Your GPA is " + gpa1 + ". You should apply to a prestigious private university.");
							}
						if (g > 2400) {
							alert("Please enter a proper score.");
							}

			}

		}*/

}

function gpa3() {
		var a = document.getElementById('GPA12').value;
		var b = document.getElementById('GPA13').value;
		var c = document.getElementById('GPA14').value;
		var d = document.getElementById('GPA15').value;
		var e = document.getElementById('GPA16').value;
		var f = document.getElementById('GPA17').value;
		var g = document.getElementById('GPA18').value;
		var h = document.getElementById('GPA19').value;
		var i = document.getElementById('GPA20').value;
		var j = document.getElementById('GPA21').value;
		var k = document.getElementById('GPA22').value;
		var l = document.getElementById('GPA23').value;
		var m = document.getElementById('GPA24').value;
	//	var n = document.getElementById('STD3').value;



	if (a.length <= 0) {
			alert("A number must be entered!");
			return;
		}
		if (isNaN(a) == true) {
			alert("Only numbers are accepted!");
			return;
		}
		if (b.length <= 0) {
			alert("A number must be entered!");
			return;
		}
		if (isNaN(b) == true) {
			alert("Only numbers are accepted!");
			return;
		}
		if (c.length <= 0) {
			alert("A number must be entered!");
			return;
		}
		if (isNaN(c) == true) {
			alert("Only numbers are accepted!");
			return;
		}
		if (d.length <= 0) {
			alert("A number must be entered!");
			return;
		}
		if (isNaN(d) == true) {
			alert("Only numbers are accepted!");
			return;
		}
		if (e.length <= 0) {
			alert("A number must be entered!");
			return;
		}
		if (isNaN(e) == true) {
			alert("Only numbers are accepted!");
			return;
			}

		if (f.length <= 0) {
			alert("A number must be entered!");
			return;
		}
		if (isNaN(f) == true) {
			alert("Only numbers are accepted!");
			return;
		}
		if (g.length <= 0) {
			alert("A number must be entered!");
			return;
		}
		if (isNaN(g) == true) {
			alert("Only numbers are accepted!");
			return;
		}
		if (h.length <= 0) {
			alert("A number must be entered!");
			return;
		}
		if (isNaN(h) == true) {
			alert("Only numbers are accepted!");
			return;
		}
		if (i.length <= 0) {
			alert("A number must be entered!");
			return;
		}
		if (isNaN(i) == true) {
			alert("Only numbers are accepted!");
			return;
		}
		if (j.length <= 0) {
			alert("A number must be entered!");
			return;
		}
		if (isNaN(j) == true) {
			alert("Only numbers are accepted!");
			return;
			}
		if (k.length <= 0) {
			alert("A number must be entered!");
			return;
		}

		if (isNaN(k) == true) {
			alert("Only numbers are accepted!");
			return;
		}
		if (l.length <= 0) {
			alert("A number must be entered!");
			return;
		}

		if (isNaN(l) == true) {
			alert("Only numbers are accepted!");
			return;
		}
		if (m.length <= 0) {
			alert("A number must be entered!");
			return;
		}

		if (isNaN(m) == true) {
			alert("Only numbers are accepted!");
			return;
		}



			 var a = parseInt(a);
	       		b = parseInt(b);
	       		c = parseInt(c);
	       		d = parseInt(d);
	       		e = parseInt(e);
	       		f = parseInt(f);
	       		g = parseInt(g)
	       		h = parseInt(h);
	       		i = parseInt(i);
	       		j = parseInt(j);
	       		k = parseInt(k);
	       		l = parseInt(l);
	       		m = parseInt(m);
	       	//	n = parseInt(n)

	        //calculate GPA

				var gpa1 =Math.round((( a*4.3 + b*4 + c*3.7 + d*3.3 + e*3 + f*2.7 + g*2.3 + h*2 + i*1.7 + j*1.3 + k*1 + l*0.7)/(a + b + c + d + e + f + g + h +i + j + k + l + m))*100)/100;
			//	alert("Your GPA is " + gpa1 + ".");

				document.getElementById("score1").innerHTML = gpa1;


			var a = document.getElementById("score1");



	if (a.value <= 1 && a.value >= 0) {
		a.style.color = "red";
		}
	if (a.value <= 2 && a.value > 1) {
		a.style.color = "orange";
		}
	if (a.value <= 3 && a.value > 2) {
		a.style.color = "#33CC00";
		}
	if (a.value <= 4 && a.value > 3) {
		a.style.color = "green";
		}
	if (a.value <= 5 && a.value > 4) {
		a.style.color = "black";
		}


	/*
		else {

			if (isNaN(g) == true) {
				alert("Only numbers are accepted!");
				return;
			}
			else {
				var a = parseInt(a);
	       		b = parseInt(b);
	       		c = parseInt(c);
	       		d = parseInt(d);
	       		e = parseInt(e);
	       		f = parseInt(f);
	       		g = parseInt(g)
	       		h = parseInt(h);
	       		i = parseInt(i);
	       		j = parseInt(j);
	       		k = parseInt(k);
	       		l = parseInt(l);
	       		m = parseInt(m);
	       //	n = parseInt(n)

	       //calculate GPA
	      			var gpa1 =Math.round((( a*4.3 + b*4 + c*3.7 + d*3.3 + e*3 + f*2.7 + g*2.3 + h*2 + i*1.7 + j*1.3 + k*1 + l*0.7)/(a + b + c + d + e + f + g + h +i + j + k + l + m))*100)/100;
					/*	if (n <= 0) {
							alert("Please enter a proper score.");
							}
						if ( n > 0 && n <= 18) {
							alert("Your GPA is " + gpa1 + ". You should apply to a good community college.");
							}
						if (n > 18 && n <= 27) {
							alert("Your GPA is " + gpa1 + ". You should apply to a state college.");
							}
						if (n > 27 && n <= 30) {
							alert("Your GPA is " + gpa1 + ". You should apply to a flagship state college.");
							}
						if (n > 30 && n <= 36) {
							alert("Your GPA is " + gpa1 + ".You should apply to a prestigious private university.");
							}
						if (n > 36 && n <= 1200) {
							alert("Your GPA is " + gpa1 + ". You should apply to a good community college.");
							}
						if (n > 1200 && n <= 1700) {
							alert("Your GPA is " + gpa1 + ". You should apply to a state college.");
							}
						if (n > 1700 && n <= 2100) {
							alert("Your GPA is " + gpa1 + ". You should apply to a flagship state college.");
							}
						if (n > 2100 && n <= 2400) {
							alert("Your GPA is " + gpa1 + ". You should apply to a prestigious private university.");
							}
						if (n > 2400) {
							alert("Please enter a proper score.");
							}

						}

			}*/

		}



function resetform(a) {

		document.getElementById(a).reset();

	}
