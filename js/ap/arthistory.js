


	
function calculate() {
	var a = parseInt(document.getElementById('MC').value);
			b = parseInt(document.getElementById('SRQ1').value);
			c = parseInt(document.getElementById('SRQ2').value);
			d =parseInt(document.getElementById('SRQ3').value);
			e = parseInt(document.getElementById('SRQ4').value);
			f = parseInt(document.getElementById('SRQ5').value);
			g = parseInt(document.getElementById('SRQ6').value);
			h =parseInt(document.getElementById('SRQ7').value);
			i = parseInt(document.getElementById('FRQ1').value);
			j = parseInt(document.getElementById('FRQ2').value);
			k = document.getElementById('curve1').checked;
			l = document.getElementById('curve2').checked;
	

	
	var score1 = Math.round(((80/115)* a)*100)/100;
			score2 = Math.round((2.5 * (b + c + d+ e + f+ g + h) + (25/9) * (i + j))*100)/100;
			score3 = Math.round((score1 + score2)*100)/100;
	var score4;
	
		var percent = Math.round((score3/200)*100);
		
		
		if (k == true) {
			if(score3 >= 0 && score3 <= 71) {
				 score4 = 1;
				}
			else if(score3 > 71 && score3 <= 89) {
				 score4 = 2;
				}
			else if(score3 > 89 && score3 <= 112) {
				 score4 = 3;
				}
			else if(score3 > 112 && score3 <= 141) {
				 score4 = 4;
				}
			else if(score3 > 141 && score3 <= 200) {
				 score4 = 5;
				}
		}
	if (l == true) {
		if (score3 >= 0 && score3 <= 62) {
			score4 = 1;
			}
		if (score3 > 62 && score3 <= 81) {
			score4 = 2;
			}
		if (score3 > 81 && score3 <= 109) {
			score4 = 3
			}
		if (score3 > 109 && score3 <= 139) {
			score4 = 4;
			}
		if (score3 > 139 && score3 <= 200) {
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
	
	