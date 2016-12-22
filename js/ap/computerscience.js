

	
function calculate() {
	
	
	var a = parseInt(document.getElementById('MC2').value);
			b = parseInt(document.getElementById('FRQ11').value);
			c = parseInt(document.getElementById('FRQ22').value);
			d = parseInt(document.getElementById('FRQ33').value);
			e = parseInt(document.getElementById('FRQ44').value);
			f = document.getElementById('curve1').checked;
			g = document.getElementById('curve2').checked;
	

		
		
	var score1 = Math.round((a) * 100)/100;
			score2 = Math.round(((10/9) * (b + c + d + e))*100)/100;
			score3 = Math.round((score1 + score2)*100)/100;
	var score4;
			var percent = Math.round((score3/80)*100);

		if (f == true) {
			if(score3 >= 0 && score3 <= 28) {
				 score4 = 1;
				}
			else if(score3 > 28 && score3 <= 36) {
				 score4 = 2;
				}
			else if(score3 > 36 && score3 <= 46) {
				 score4 = 3;
				}
			else if(score3 > 46 && score3 <= 61) {
				 score4 = 4;
				}
			else if(score3 > 61 && score3 <= 80) {
				 score4 = 5;
				}
		}
	if (g == true) {
		if (score3 >= 0 && score3 <= 35) {
			score4 = 1;
			}
		if (score3 > 35 && score3 <= 42) {
			score4 = 2;
			}
		if (score3 > 42 && score3 <= 51) {
			score4 = 3
			}
		if (score3 > 51 && score3 <= 64) {
			score4 = 4;
			}
		if (score3 > 64 && score3 <= 80) {
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
	