

	
function calculate() {
	var a = parseInt(document.getElementById('MC').value);
			b = parseInt(document.getElementById('MC3').value);
			c = parseInt(document.getElementById('FRQ1').value);
			d =parseInt(document.getElementById('FRQ2').value);
			e = parseInt(document.getElementById('FRQ3').value);
			f =parseInt(document.getElementById('FRQ4').value);
			g = parseInt(document.getElementById('FRQ5').value);
			h =parseInt(document.getElementById('FRQ6').value);
			i = document.getElementById('curve1').checked;
			j = document.getElementById('curve2').checked;
	
	var score1 = Math.round((1.2* (a + b))*100)/100;
			score2 = c + d + e + f + g + h;
			score3 = Math.round((score1 + score2)*100)/100;
	var score4;
		var percent = Math.round((score3/108)*100);
		
		if (i == true) {
			if(score3 >= 0 && score3 <=28) {
				 score4 = 1;
				}
			else if(score3 > 28 && score3 <= 38) {
				 score4 = 2;
				}
			else if(score3 > 38 && score3 <= 51) {
				 score4 = 3;
				}
			else if(score3 > 51 && score3 <= 67) {
				 score4 = 4;
				}
			else if(score3 > 67 && score3 <= 108) {
				 score4 = 5;
				}
		}
	if (j == true) {
		if (score3 >= 0 && score3 <= 22) {
			score4 = 1;
			}
		if (score3 > 22 && score3 <= 34) {
			score4 = 2;
			}
		if (score3 > 34 && score3 <= 50) {
			score4 = 3
			}
		if (score3 > 50 && score3 <= 68) {
			score4 = 4;
			}
		if (score3 > 68 && score3 <= 108) {
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
	
	