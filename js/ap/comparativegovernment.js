

	
function calculate() {
	var a = parseInt(document.getElementById('MC').value);
			b = parseInt(document.getElementById('FRQ1').value);
			c = parseInt(document.getElementById('FRQ2').value);
			d = parseInt(document.getElementById('FRQ3').value);
			e = parseInt(document.getElementById('FRQ4').value);
			f = parseInt(document.getElementById('FRQ5').value);
			g = parseInt(document.getElementById('CRQ1').value);
			h = parseInt(document.getElementById('CORQ1').value);
			i = parseInt(document.getElementById('CORQ2').value); 
			j = document.getElementById('curve1').checked;
			k = document.getElementById('curve2').checked;
	
	var score1 = Math.round(((60/55) * a)*100)/100;
			score2 = Math.round((b + c + d + e + f + 3 * g + (15/7) * (h + i))*100)/100;
			score3 = Math.round((score1 + score2)*100)/100;
	var score4;
		var percent = Math.round((score3/120)*100);
		
		if (j == true) {
			if(score3 >= 0 && score3 <= 42) {
				 score4 = 1;
				}
			else if(score3 > 42 && score3 <= 59) {
				 score4 = 2;
				}
			else if(score3 > 59 && score3 <= 71) {
				 score4 = 3;
				}
			else if(score3 > 71 && score3 <= 83) {
				 score4 = 4;
				}
			else if(score3 > 83 && score3 <= 120) {
				 score4 = 5;
				}
		}
	if (k == true) {
		if (score3 >= 0 && score3 <= 34) {
			score4 = 1;
			}
		if (score3 > 34 && score3 <= 51) {
			score4 = 2;
			}
		if (score3 > 51 && score3 <= 72) {
			score4 = 3
			}
		if (score3 > 72 && score3 <= 82) {
			score4 = 4;
			}
		if (score3 > 82 && score3 <= 120) {
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
	
	
$(document).ready(function(){


calculate();


});	
	
	