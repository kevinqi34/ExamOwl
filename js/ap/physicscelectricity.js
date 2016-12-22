

	
function calculate() {
	var a = parseInt(document.getElementById('MC').value);
			b = parseInt(document.getElementById('FRQ11').value);
			c = parseInt(document.getElementById('FRQ22').value);
			d =parseInt(document.getElementById('FRQ33').value);
			e = document.getElementById('curve1').checked;
			f = document.getElementById('curve2').checked;
	
	var score1 = Math.round(((45/35) * a)*100)/100;
			score2 = Math.round((b + c + d)*100)/100;
			score3 = Math.round((score1 + score2)*100)/100;
	var score4;
		var percent = Math.round((score3/90)*100);
		
		if (e == true) {
			if(score3 >= 0 && score3 <= 19) {
				 score4 = 1;
				}
			else if(score3 > 19 && score3 <= 31) {
				 score4 = 2;
				}
			else if(score3 > 31 && score3 <= 38) {
				 score4 = 3;
				}
			else if(score3 > 38 && score3 <= 52) {
				 score4 = 4;
				}
			else if(score3 > 52 && score3 <= 90) {
				 score4 = 5;
				}
		}
	if (f == true) {
		if (score3 >= 0 && score3 <= 19) {
			score4 = 1;
			}
		if (score3 > 19 && score3 <= 27) {
			score4 = 2;
			}
		if (score3 > 27 && score3 <= 33) {
			score4 = 3
			}
		if (score3 > 33 && score3 <= 47) {
			score4 = 4;
			}
		if (score3 > 47 && score3 <= 90) {
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
	
	
	