


function calculate() {
	var a = parseInt(document.getElementById('MC').value);
			c = parseInt(document.getElementById('FRQ1').value);
			e = document.getElementById('curve1').checked;

	var score1 = Math.round((a)*100)/100;
			score2 = Math.round(((3/4) * c)*100)/100;
			score3 = Math.round((score1 + score2)*100)/100;
	var score4;
		var percent = Math.round((score3/150)*100);

		if (e == true) {
			if(score3 >= 0 && score3 <= 48) {
				 score4 = 1;
				}
			else if(score3 > 48 && score3 <= 61) {
				 score4 = 2;
				}
			else if(score3 > 61 && score3 <= 80) {
				 score4 = 3;
				}
			else if(score3 > 80 && score3 <= 94) {
				 score4 = 4;
				}
			else if(score3 > 94 && score3 <= 150) {
				 score4 = 5;
				}
		}


	document.getElementById("score1").innerHTML = score1;
	document.getElementById("score2").innerHTML = score2;
	document.getElementById("score3").innerHTML = score3 + "(" + percent + "%)";
	document.getElementById("score4").innerHTML = score4;


	var a = document.getElementById("score4");



	if (a.value == 1) {
		a.style.color = "red";
		}
	if (a.value == 2) {
		a.style.color = "orange";
		}
	if (a.value == 3) {
		a.style.color = "#33CC00";
		}
	if (a.value == 4) {
		a.style.color = "green";
		}
	if (a.value == 5) {
		a.style.color = "black";
		}


	choosecolors();
}




function calculate2() {


var a = parseInt(document.getElementById('MC2012').value);
		b = parseInt(document.getElementById('LFRQ').value);
		c = parseInt(document.getElementById('SFRQ').value);
		d = document.getElementById('curve2012').checked;


	var score1 = Math.round((a * (0.8333))*100)/100;
			score2 = Math.round(((50/46) * (b+c))*100)/100;
			score3 = Math.round((score1 + score2)*100)/100;
	var score4;
	var percent = Math.round((score3/100)*100);


	if (d == true) {
			if(score3 >= 0 && score3 <= 27) {
				 score4 = 1;
				}
			else if(score3 > 27 && score3 <= 42) {
				 score4 = 2;
				}
			else if(score3 > 42 && score3 <= 58) {
				 score4 = 3;
				}
			else if(score3 > 58 && score3 <= 72) {
				 score4 = 4;
				}
			else if(score3 > 72 && score3 <= 100) {
				 score4 = 5;
				}
		}


	document.getElementById("score1").innerHTML = score1;
	document.getElementById("score2").innerHTML = score2;
	document.getElementById("score3").innerHTML = score3 + "(" + percent + "%)";
	document.getElementById("score4").innerHTML = score4;


	var a = document.getElementById("score4");

	if (a.value == 1) {
		a.style.color = "red";
		}
	if (a.value == 2) {
		a.style.color = "orange";
		}
	if (a.value == 3) {
		a.style.color = "#33CC00";
		}
	if (a.value == 4) {
		a.style.color = "green";
		}
	if (a.value == 5) {
		a.style.color = "black";
		}


	choosecolors();









}
