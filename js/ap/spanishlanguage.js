function calculate() {
	var a = parseInt(document.getElementById('MC').value);
			b = parseInt(document.getElementById('MC3').value);
			c = parseInt(document.getElementById('PC').value);
			d = parseInt(document.getElementById('WI').value);
			e = parseInt(document.getElementById('WP').value);
			f = parseInt(document.getElementById('SI').value);
			g = parseInt(document.getElementById('SP').value);
			h = document.getElementById('curve1').checked;
			i = document.getElementById('curve2').checked;
	
	
		var score1 = Math.round(((30/34) * a + (45/41) * b)*100)/100;
				score2 = Math.round(((8/20) * c + (7/5) * d + (30/5) * e + 3 * (f + g) )*100)/100;
				score3 = Math.round((score1 + score2)*100)/100;
		var score4;
		var percent = Math.round((score3/150)*100);
	
	
	if (h == true) {
			if(score3 >= 0 && score3 <= 69) {
				 score4 = 1;
				}
			else if(score3 > 69 && score3 <= 83) {
				 score4 = 2;
				}
			else if(score3 > 83 && score3 <= 98) {
				 score4 = 3;
				}
			else if(score3 > 98 && score3 <= 115) {
				 score4 = 4;
				}
			else if(score3 > 115 && score3 <= 150) {
				 score4 = 5;
				}
		}
	if (i == true) {
		if (score3 >= 0 && score3 <= 68) {
			score4 = 1;
			}
		if (score3 > 68 && score3 <= 88) {
			score4 = 2;
			}
		if (score3 > 88 && score3 <= 111) {
			score4 = 3
			}
		if (score3 > 111 && score3 <= 123) {
			score4 = 4;
			}
		if (score3 > 123 && score3 <= 150) {
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
	