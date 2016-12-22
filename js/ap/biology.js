

	
function calculate() {
	var a = parseInt(document.getElementById('MC').value);
			b = parseInt(document.getElementById('FRQ1').value);
			c = parseInt(document.getElementById('FRQ2').value);
			d = parseInt(document.getElementById('FRQ3').value);
			e= parseInt(document.getElementById('FRQ4').value);
			f = document.getElementById('curve1').checked;
			g = document.getElementById('curve2').checked;
	
	var score1 = Math.round((0.9 * a)*100)/100;
			score2 = Math.round((1.5*(b + c + d + e))*100)/100;
			score3 = Math.round((score1 + score2)*100)/100;
	var score4;
		var percent = Math.round((score3/150)*100);
		
		if (f == true) {
			if(score3 >= 0 && score3 <= 43) {
				 score4 = 1;
				}
			else if(score3 > 43 && score3 <= 62) {
				 score4 = 2;
				}
			else if(score3 > 62 && score3 <= 77) {
				 score4 = 3;
				}
			else if(score3 > 77 && score3 <= 94) {
				 score4 = 4;
				}
			else if(score3 > 94 && score3 <= 150) {
				 score4 = 5;
				}
		}
	if (g == true) {
		if (score3 >= 0 && score3 <= 57) {
			score4 = 1;
			}
		if (score3 > 57 && score3 <= 68) {
			score4 = 2;
			}
		if (score3 > 68 && score3 <= 80) {
			score4 = 3
			}
		if (score3 > 80 && score3 <= 94) {
			score4 = 4;
			}
		if (score3 > 94 && score3 <= 150) {
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
		b = parseInt(document.getElementById('FRQ2012').value);
		c = document.getElementById('curve2012').checked;
		
		
	var score1 = Math.round((0.725 * a)*100)/100;
			score2 = Math.round((1.25*b)*100)/100;
			score3 = Math.round((score1 + score2)*100)/100;
	var score4;
	var percent = Math.round((score3/100.25)*100);


	if (c == true) {
			if(score3 >= 0 && score3 <= 32) {
				 score4 = 1;
				}
			else if(score3 > 32 && score3 <= 40) {
				 score4 = 2;
				}
			else if(score3 > 40 && score3 <= 49) {
				 score4 = 3;
				}
			else if(score3 > 49 && score3 <= 59) {
				 score4 = 4;
				}
			else if(score3 > 59 && score3 <= 100.25) {
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

























	
	













	
	