

	
function calculate() {
	var a = parseInt(document.getElementById('MC').value);
			b = parseInt(document.getElementById('FRQ1').value);
			c = parseInt(document.getElementById('FRQ2').value);
			d =parseInt(document.getElementById('FRQ3').value);
			e = document.getElementById('curve1').checked;
			f = document.getElementById('curve2').checked;
	
	var score1 = Math.round(((67.5/100) * a)*100)/100;
			score2 = Math.round(((82.5/27)* (b + c + d))*100)/100;
			score3 = Math.round((score1 + score2)*100)/100;
	var score4;
		var percent = Math.round((score3/150)*100);
		
		if (e == true) {
			if(score3 >= 0 && score3 <= 52) {
				 score4 = 1;
				}
			else if(score3 > 52 && score3 <= 80) {
				 score4 = 2;
				}
			else if(score3 > 80 && score3 <= 97) {
				 score4 = 3;
				}
			else if(score3 > 97 && score3 <= 113) {
				 score4 = 4;
				}
			else if(score3 > 113 && score3 <= 150) {
				 score4 = 5;
				}
		}
	if (f == true) {
		if (score3 >= 0 && score3 <= 49) {
			score4 = 1;
			}
		if (score3 > 49 && score3 <= 75) {
			score4 = 2;
			}
		if (score3 > 75 && score3 <= 94) {
			score4 = 3
			}
		if (score3 > 94 && score3 <= 110) {
			score4 = 4;
			}
		if (score3 > 110 && score3 <= 150) {
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
	
	
	
	
	
	