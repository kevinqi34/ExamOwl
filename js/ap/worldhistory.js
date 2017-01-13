


function calculate() {
	var a = parseInt(document.getElementById('MC').value);
			b = parseInt(document.getElementById('DBQ').value);
			c = parseInt(document.getElementById('FRQ1').value);
			d =parseInt(document.getElementById('FRQ2').value);
			e = document.getElementById('curve1').checked;
			f = document.getElementById('curve2').checked;

	var score1 = Math.round(((60/70) * a)*100)/100;
			score2 = Math.round(((60/27) *  (b + c + d))*100)/100;
			score3 = Math.round((score1 + score2)*100)/100;
	var score4;

		var percent = Math.round((score3/120)*100);
		if (e == true) {
			if(score3 >= 0 && score3 <= 33) {
				 score4 = 1;
				}
			else if(score3 > 33 && score3 <= 47) {
				 score4 = 2;
				}
			else if(score3 > 47 && score3 <= 63) {
				 score4 = 3;
				}
			else if(score3 > 63 && score3 <= 76) {
				 score4 = 4;
				}
			else if(score3 > 76 && score3 <= 120) {
				 score4 = 5;
				}
		}
	if (f == true) {
		if (score3 >= 0 && score3 <= 33) {
			score4 = 1;
			}
		if (score3 > 33 && score3 <= 48) {
			score4 = 2;
			}
		if (score3 > 48 && score3 <= 66) {
			score4 = 3
			}
		if (score3 > 66 && score3 <= 81) {
			score4 = 4;
			}
		if (score3 > 81 && score3 <= 120) {
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
		b = parseInt(document.getElementById('SRQ2012').value);
		c = parseInt(document.getElementById('DBQ2012').value);
		d = parseInt(document.getElementById('LE2012').value);
		e = document.getElementById('curve2012').checked;



	var score1 = Math.round(((a - 6) * 1.0612 + (b - 3) * 2.887)*100)/100;
			score2 = Math.round((c * 4.6427 + 3.25 * d)*100)/100;
			score3 = Math.round((score1 + score2)*100)/100;
	var score4;
	var percent = Math.round((score3/130)*100);



		if (e == true) {
			if(score3 >= 0 && score3 <=43) {
				 score4 = 1;
				}
			else if(score3 > 43 && score3 <= 62) {
				 score4 = 2;
				}
			else if(score3 > 62 && score3 <= 84) {
				 score4 = 3;
				}
			else if(score3 > 84 && score3 <= 100) {
				 score4 = 4;
				}
			else if(score3 > 100 && score3 <= 130) {
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



	$(document).ready(function () {

	calculate2();



	});
