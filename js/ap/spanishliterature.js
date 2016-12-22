

	
function calculate() {
	var a = parseInt(document.getElementById('MC').value);
			b = parseInt(document.getElementById('QC1').value);
			c = parseInt(document.getElementById('QL1').value);
			d = parseInt(document.getElementById('QC2').value);
			e = parseInt(document.getElementById('QL2').value);
			f = parseInt(document.getElementById('QC3').value);
			g = parseInt(document.getElementById('QL3').value);
			h = document.getElementById('curve1').checked;
			i = document.getElementById('curve2').checked;
	
	var score1 = Math.round(((60/65) * a)*100)/100;
			score2 = Math.round(((21/9) * (b + d) + (9/5) * (c + e + g) + (10.5/5) * f)*100)/100;
			score3 = Math.round((score1 + score2)*100)/100;
	var score4;
		var percent = Math.round((score3/150)*100);
		
		if (h== true) {
			if(score3 >= 0 && score3 <= 76) {
				 score4 = 1;
				}
			else if(score3 > 76 && score3 <= 85) {
				 score4 = 2;
				}
			else if(score3 > 85 && score3 <= 100) {
				 score4 = 3;
				}
			else if(score3 > 100 && score3 <= 113) {
				 score4 = 4;
				}
			else if(score3 > 113 && score3 <= 150) {
				 score4 = 5;
				}
		}
	if (i == true) {
		if (score3 >= 0 && score3 <= 70) {
			score4 = 1;
			}
		if (score3 > 70 && score3 <= 80) {
			score4 = 2;
			}
		if (score3 > 80 && score3 <= 95) {
			score4 = 3
			}
		if (score3 > 95 && score3 <= 109) {
			score4 = 4;
			}
		if (score3 > 109 && score3 <= 150) {
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
	