

	
function calculate() {
	var a = parseInt(document.getElementById('MC').value);
			c = parseInt(document.getElementById('FRQ1').value);
			d =parseInt(document.getElementById('FRQ2').value);
			e = document.getElementById('curve1').checked;
			f = document.getElementById('curve2').checked;
	
	var score1 = Math.round(a*100)/100;
			score2 = Math.round(((25/7)*c + (25/8)*d)*100)/100;
			score3 = Math.round((score1 + score2)*100)/100;
	var score4;
		
		var percent = Math.round((score3/150)*100);
		if (e == true) {
			if(score3 >= 0 && score3 <= 64) {
				 score4 = 1;
				}
			else if(score3 > 64 && score3 <= 76) {
				 score4 = 2;
				}
			else if(score3 > 76 && score3 <= 92) {
				 score4 = 3;
				}
			else if(score3 > 92 && score3 <= 112) {
				 score4 = 4;
				}
			else if(score3 > 112 && score3 <= 150) {
				 score4 = 5;
				}
		}
	if (f == true) {
		if (score3 >= 0 && score3 <= 55) {
			score4 = 1;
			}
		if (score3 > 55 && score3 <= 72) {
			score4 = 2;
			}
		if (score3 > 72 && score3 <= 89) {
			score4 = 3
			}
		if (score3 > 89 && score3 <= 106) {
			score4 = 4;
			}
		if (score3 > 106 && score3 <= 150) {
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
	