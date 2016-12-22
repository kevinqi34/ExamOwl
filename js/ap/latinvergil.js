

	
function calculate() {
	var a = parseInt(document.getElementById('MC').value);
			b = parseInt(document.getElementById('Q1').value);
			c = parseInt(document.getElementById('Q2').value);
			d = parseInt(document.getElementById('Q3').value);
			e = parseInt(document.getElementById('Q4').value);
			f = parseInt(document.getElementById('Q5').value);
			g = document.getElementById('curve1').checked;
			h = document.getElementById('curve2').checked;
	
	var score1 = Math.round(((48/49) * a)*100)/100;
			score2 = Math.round(((11/9) * (b + c) + (25/6) * d + (14/6) * e + (11/6) * f)*100)/100;
			score3 = Math.round((score1 + score2)*100)/100;
	var score4;
		var percent = Math.round((score3/120)*100);
		
		if (g == true) {
			if(score3 >= 0 && score3 <= 42) {
				 score4 = 1;
				}
			else if(score3 > 42 && score3 <= 56) {
				 score4 = 2;
				}
			else if(score3 > 56 && score3 <= 72) {
				 score4 = 3;
				}
			else if(score3 > 72 && score3 <= 82) {
				 score4 = 4;
				}
			else if(score3 > 82 && score3 <= 120) {
				 score4 = 5;
				}
		}
	if (h== true) {
		if (score3 >= 0 && score3 <= 37) {
			score4 = 1;
			}
		if (score3 > 37 && score3 <= 53) {
			score4 = 2;
			}
		if (score3 > 53 && score3 <= 71) {
			score4 = 3
			}
		if (score3 > 71 && score3 <= 84) {
			score4 = 4;
			}
		if (score3 > 84 && score3 <= 120) {
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
		
		
		calculate();
		
		
		
		
	});
	